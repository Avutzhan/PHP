<?php

include_once("app.php");
include_once("ApplicationConfigurator.php");

// $app = new Application();
// $app->dumbUsageExample();

$app = new ApplicationConfigurator();
$app->configurationExample();