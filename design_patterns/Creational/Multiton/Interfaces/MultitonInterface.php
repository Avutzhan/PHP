<?php


namespace App\Multiton\Interfaces;


interface MultitonInterface
{
    public static function getInstance($instanceName); //:self
}