<?php

include_once("client.php");
include_once("Classes/Factory/ConcreteFactory1.php");
include_once("Classes/Factory/ConcreteFactory2.php");

echo "Client: Testing client code with the first factory type: \n";
clientCode(new ConcreteFactory1());

echo "\n";

echo "Client: Testing the same client code with the second factory type: \n";
clientCode(new ConcreteFactory2());
