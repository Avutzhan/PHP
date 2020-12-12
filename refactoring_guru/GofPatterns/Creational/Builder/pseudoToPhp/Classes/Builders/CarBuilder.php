<?php

include_once("Interfaces/BuilderInterface.php");
include_once("Classes/Car.php");

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