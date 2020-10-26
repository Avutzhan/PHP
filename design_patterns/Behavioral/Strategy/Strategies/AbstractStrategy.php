<?php


namespace App\Strategy\Strategies;


use App\Strategy\Interfaces\SalaryStrategyInterface;

abstract class AbstractStrategy implements SalaryStrategyInterface
{
    public function calc($period, $user)
    {
        return rand(500, 2000);

    }

    public function getName()
    {
        return class_basename(static::class);
    }

}