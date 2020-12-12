<?php

include_once("Classes/Builders/CarBuilder.php");
include_once("Classes/Builders/CarManualBuilder.php");
include_once("Classes/Director.php");

class Application
{
    public $car;
    public $manual;

    public function makeCar()
    {
        $director = new Director();

        $builder = new CarBuilder();
        $director->constructSportsCar($builder);
        $this->car = $builder->getResult();

        $builder = new CarManualBuilder();
        $director->constructSportsCar($builder);

        $this->manual = $builder->getResult();
    }

    public function makeSUV()
    {
        $director = new Director();

        $builder = new CarBuilder();
        $director->constructSedan($builder);
        $this->car = $builder->getResult();

        $builder = new CarManualBuilder();
        $director->constructSedan($builder);

        $this->manual = $builder->getResult();
    }
}