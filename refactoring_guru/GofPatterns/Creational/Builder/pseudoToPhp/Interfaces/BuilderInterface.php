<?php

interface Builder
{
    public function reset();
    public function setSeats($seats);
    public function setEngine($engine);
    public function setTripComputer($tripComputer);
    public function setGPS($gps);

}