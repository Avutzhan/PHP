<?php


namespace App\ObjectPool;


use App\ObjectPool\Traits\SingletonTrait;

class ObjectPool
{
    use SingletonTrait;

    private $clones = [];

    private $prototypes = [];

    public function addObject($obj)
    {
        $key = $this->getObjKey($obj);
        $this->prototypes[$key] = $obj;

        return $this;

    }

    public function getObjKey($obj)
    {
        if (is_object($obj)) {
            $key = get_class($obj);
        } elseif (is_string($obj)) {
            $key = $obj;
        } else {
            throw new \Exception('????');
        }

        return $key;
    }

    public function getObject($className)
    {
        $key = $this->getObjKey($className);

        if (isset($this->clones[$key])) {
            return false;
        }

        if (empty($this->prototypes[$key])) {
            return null;
        }

        $this->clones[$key] = clone $this->prototypes[$key];

        return $this->clones[$key];
    }

    public function release(&$obj)
    {
        $key = $this->getObjKey($obj);
        unset($this->clones[$key]);
        $obj = null;
    }
}