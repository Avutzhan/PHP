<?php

include_once("Client.php");
include_once("Classes/ConcreteCreator/ConcreteCreator1.php");
include_once("Classes/ConcreteCreator/ConcreteCreator2.php");

echo "App: Launched with the ConcreteCreator1.\n";
clientCode(new ConcreteCreator1());
echo "\n\n";

echo "App: Launched with the ConcreteCreator2.\n";
clientCode(new ConcreteCreator2());