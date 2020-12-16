<?php

include_once("Classes/Context.php");
include_once("Classes/ConcreteStrategyA.php");
include_once("Classes/ConcreteStrategyB.php");

$context = new Context(new ConcreteStrategyA());
echo "Client: Strategy is set to normal sorting.\n";
$context->doSomeBusinessLogic();

echo "\n";

echo "Client: Strategy is set to reverse sorting.\n";
$context->setStrategy(new ConcreteStrategyB());
$context->doSomeBusinessLogic();