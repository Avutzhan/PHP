<?php

include_once("Interfaces/StrategyInterface.php");

class ConcreteStrategyA implements Strategy
{
    public function doAlgorithm(array $data): array
    {
        sort($data);

        return $data;
    }
}