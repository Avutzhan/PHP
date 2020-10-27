<?php


namespace App\Multiton;


class SimpleMultitonNext extends SimpleMultiton
{
    protected static $instances = [];

    public $test2;
}