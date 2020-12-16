<?php

include_once("Classes/Subject.php");
include_once("Classes/ConcreteObserverA.php");
include_once("Classes/ConcreteObserverB.php");

$subject = new Subject();

$o1 = new ConcreteObserverA();
$subject->attach($o1);

$o2 = new ConcreteObserverB();
$subject->attach($o2);

$subject->someBusinessLogic();
$subject->someBusinessLogic();

$subject->detach($o2);

$subject->someBusinessLogic();