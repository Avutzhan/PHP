<?php

include_once("Classes/ConcreteDecoratorA.php");
include_once("Classes/ConcreteDecoratorB.php");
include_once("Classes/ConcreteComponent.php");
include_once("client.php");

$simple = new ConcreteComponent();
echo "Client: I've got a simple component:\n";
clientCode($simple);
echo "\n\n";

$decorator1 = new ConcreteDecoratorA($simple);
$decorator2 = new ConcreteDecoratorB($decorator1);
echo "Client: Now I've got a decorated component:\n";
clientCode($decorator2);