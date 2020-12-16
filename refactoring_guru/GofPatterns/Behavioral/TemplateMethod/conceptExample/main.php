<?php

include_once("Classes/ConcreteClass1.php");
include_once("Classes/ConcreteClass2.php");
include_once("client.php");

echo "Same client code can work with different subclasses:\n";
clientCode(new ConcreteClass1());
echo "\n";

echo "Same client code can work with different subclasses:\n";
clientCode(new ConcreteClass2());
