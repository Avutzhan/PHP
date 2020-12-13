<?php

class Database
{
    private $instance;
    public $sql;

    public function getInstance()
    {
        if ($this->instance == null) {
            $this->instance = new Database();
        }

        return $this->instance;
    }

    public function query($sql)
    {
        $this->sql = $sql;
    }
}