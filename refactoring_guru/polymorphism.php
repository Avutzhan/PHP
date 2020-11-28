<?php
//polymorphism is one method but different realizations
abstract class Animal {
    abstract public function makeSound();
}

class Cat extends Animal {
    public function makeSound()
    {
        echo "meow da \n";
    }
}

class Dog extends Animal {
    public function makeSound()
    {
        echo "wof da";
    }
}

$bag = [new Cat(), new Dog()];

foreach($bag as $animals) {
    $animals->makeSound();
}