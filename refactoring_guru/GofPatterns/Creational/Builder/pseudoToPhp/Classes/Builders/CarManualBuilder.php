<?php

include_once("Interfaces/BuilderInterface.php");
include_once("Classes/Manual.php");

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