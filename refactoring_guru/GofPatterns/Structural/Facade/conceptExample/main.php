<?php

include_once("client.php");
include_once("Classes/Subsystem1.php");
include_once("Classes/Subsystem2.php");
include_once("Classes/Facade.php");

$subsystem1 = new Subsystem1();
$subsystem2 = new Subsystem2();
$facade = new Facade($subsystem1, $subsystem2);
clientCode($facade);