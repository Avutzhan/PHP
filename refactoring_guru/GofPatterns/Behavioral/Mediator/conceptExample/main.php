<?php

include_once("Classes/Component1.php");
include_once("Classes/Component2.php");
include_once("Classes/ConcreteMediator.php");

$c1 = new Component1();
$c2 = new Component2();
$mediator = new ConcreteMediator($c1, $c2);

echo "Client triggers operation A.\n";
$c1->doA();

echo "\n";
echo "Client triggers operation D.\n";
$c2->doD();