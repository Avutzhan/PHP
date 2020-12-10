<?php

include_once("config.php");

$app = new ApplicationConfigurator();
$factory = $app->main();
$factory->paint();
