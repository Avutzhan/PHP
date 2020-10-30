<?php


namespace App\Facade\Subsystem;

use Barryvdh\Debugbar\Facade as Debugbar;

abstract class SaveOrderAbstract
{
    protected $order;

    protected $data;

    public function __construct($order, $data)
    {
        $this->order = $order;

        $this->data = $data;
    }

    public function run()
    {
        Debugbar::info(static::class);
    }
}