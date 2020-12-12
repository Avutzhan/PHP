<?php

include_once("Classes/SportEngine.php");
include_once("Classes/SedanEngine.php");

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