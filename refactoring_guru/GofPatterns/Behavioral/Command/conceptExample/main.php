<?php

include_once("Classes/Invoker.php");
include_once("Classes/Receiver.php");
include_once("Classes/SimpleCommand.php");
include_once("Classes/ComplexCommand.php");

$invoker = new Invoker();
$invoker->setOnStart(new SimpleCommand("Say Hi!"));
$receiver = new Receiver();
$invoker->setOnFinish(new ComplexCommand($receiver, "Send email", "Save report"));

$invoker->doSomethingImportant();