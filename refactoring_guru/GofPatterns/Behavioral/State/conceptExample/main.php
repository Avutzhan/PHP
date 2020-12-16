<?php

include_once("Classes/Context.php");
include_once("Classes/ConcreteStateA.php");

$context = new Context(new ConcreteStateA());
$context->request1();
$context->request2();