<?php

class Car
{
    public $seats;
    public $engine;
    public $tripComputer;
    public $gps;
}

class Manual
{
    public $seats;
    public $engine;
    public $tripComputer;
    public $gps;
}

class SportEngine
{

}

class SedanEngine
{

}

interface Builder
{
    public function reset();
    public function setSeats($seats);
    public function setEngine($engine);
    public function setTripComputer($tripComputer);
    public function setGPS($gps);

}

class CarBuilder implements Builder
{
    private $car;

    public function reset()
    {
        $this->car = new Car();
    }

    public function setSeats($seats)
    {
        $this->car->seats = $seats;
    }

    public function setEngine($engine)
    {
        $this->car->engine = $engine;
    }

    public function setTripComputer($tripComputer)
    {
        $this->car->tripComputer = $tripComputer;
    }

    public function setGPS($gps)
    {
        $this->car->gps = $gps;
    }

    public function getResult()
    {
        return $this->car;
    }

}

class CarManualBuilder implements Builder
{
    private $manual;

    public function reset()
    {
        $this->manual = new Manual();
    }

    public function setSeats($seats)
    {
        $this->manual->seats = $seats;
    }

    public function setEngine($engine)
    {
        $this->manual->engine = $engine;
    }

    public function setTripComputer($tripComputer)
    {
        $this->manual->tripComputer = $tripComputer;
    }

    public function setGPS($gps)
    {
        $this->manual->gps = $gps;
    }

    public function getResult()
    {
        return $this->manual;
    }

}

class Director
{
    public function constructSportsCar(Builder $builder)
    {
        $builder->reset();
        $builder->setSeats(2);
        $builder->setEngine(new SportEngine());
        $builder->setTripComputer(true);
        $builder->setGPS(true);
    }

    public function constructSedan(Builder $builder)
    {
        $builder->reset();
        $builder->setSeats(5);
        $builder->setEngine(new SedanEngine());
        $builder->setTripComputer(true);
        $builder->setGPS(true);
    }
}

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

$app = new Application();
$app->makeCar();
$app->makeSUV();
var_dump($app->car);
var_dump($app->manual);
