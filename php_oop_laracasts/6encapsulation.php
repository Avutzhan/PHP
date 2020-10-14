<?php

//example 1
// Encapsulation allows a class to provide
// signals to the outside world that certain
// internals are private and shouldn't be accessed.
// So at it's core, encapsulation is about communication.

namespace App;

class Person
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    // public function job()
    // {

    // }

    // public function favouriteTeam()
    // {

    // }

    private function thingsThatKeepUpAtNight()
    {
        return 'this shit is working';
    }
}

//

// $method = new \ReflectionMethod(Person::class, 'thingsThatKeepUpAtNight');
// $method->setAccessible(true);
// $person = new Person('bob');
// var_dump($method->invoke($person));

$person = new Person('bob');
$person->name = null;
var_dump($person->name);

//example 2

class TennisMatch
{
    protected $playerOne;
    public function score()
    {

    }
    public function playerOne()
    {
        return $this->playerOne;
    }
    protected function hasWinner()
    {

    }
    protected function hasAdvantage()
    {

    }
    protected function inDeuce()
    {

    }

}