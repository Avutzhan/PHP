<?php

class Airport
{
    public function accept(FlyingTransport $vehicle)
    {
        echo $vehicle->fly('form new York', 'to California', 10);
    }
}

interface FlyingTransport {
    public function fly($origin, $destination, $passengers);
}

class Helicopter implements FlyingTransport
{
    public function fly($origin, $destination, $passengers) {
        echo "this is Helicopter going {$origin} {$destination} with {$passengers} \n";
    }
}

class Airplane implements FlyingTransport
{
    public function fly($origin, $destination, $passengers) {
        echo "this is Airplane going {$origin} {$destination} with {$passengers} \n";
    }
}

class Gryphon implements FlyingTransport
{
    public function fly($origin, $destination, $passengers) {
        echo "this is Gryphon going {$origin} {$destination} with {$passengers} \n";
    }
}

$airport = new Airport();

$heli = new Helicopter();
$airplane = new Airplane();
$gryphon = new Gryphon();

$airport->accept($heli);
$airport->accept($airplane);
$airport->accept($gryphon);

//contracts is object interaction with each other
//for example airport must receive some object with flyingTransport interface
//but the airport doesn't care what kind of transport heli or airplane or gryphon
//the main thing is that they have an flyingTransport
//and we can change methods in transports but airport still can interact with transport