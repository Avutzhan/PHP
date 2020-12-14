<?php

include_once("Classes/Implementation/ConcreteImplementationA.php");
include_once("Classes/Implementation/ConcreteImplementationB.php");
include_once("Classes/Abstraction/Abstraction.php");
include_once("Classes/Abstraction/ExtendedAbstraction.php");
include_once("client.php");

$implementation = new ConcreteImplementationA();
$abstraction = new Abstraction($implementation);
clientCode($abstraction);

echo "\n";

$implementation = new ConcreteImplementationB();
$abstraction = new ExtendedAbstraction($implementation);
clientCode($abstraction);