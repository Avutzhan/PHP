<?php


namespace App\Strategy\Interfaces;


interface SalaryStrategyInterface
{
    public function calc($period, $user);

    public function getName();
}