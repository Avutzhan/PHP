<?php

include_once("app.php");

$app = new Application();
$app->makeCar();
$app->makeSUV();
var_dump($app->car);
var_dump($app->manual);
