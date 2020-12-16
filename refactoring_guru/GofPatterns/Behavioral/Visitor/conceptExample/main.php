<?php

include_once("Classes/ConcreteComponentA.php");
include_once("Classes/ConcreteComponentB.php");
include_once("Classes/ConcreteVisitor1.php");
include_once("Classes/ConcreteVisitor2.php");
include_once("client.php");

$components = [
    new ConcreteComponentA(),
    new ConcreteComponentB(),
];

echo "The client code works with all visitors via the base Visitor interface:\n";
$visitor1 = new ConcreteVisitor1();
clientCode($components, $visitor1);
echo "\n";

echo "It allows the same client code to work with different types of visitors:\n";
$visitor2 = new ConcreteVisitor2();
clientCode($components, $visitor2);