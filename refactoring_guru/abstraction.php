<?php

class Airplane1 {
    private $speed;
    private $altitude;
    private $rollAngle;
    private $pitchAngle;
    private $yawAngle;

    public function fly() {
        echo "fly";
    }
}
//this is model of flight simulator
//in a flight simulator every detail is important

class Airplane2 {
    private $seats;

    public function reserveSeats() {
        echo "reserveSeats";
    }
}

//this is model of ticket selling platform here details not important so this is abstraction
//abstraction it is a model of an object or phenomenon
//the real world, in which minor details are omitted
//whether they do not play an essential role in this context.
//it is a set of significant characteristics