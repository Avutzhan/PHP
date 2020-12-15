<?php

include_once("client.php");
include_once("Classes/YouTubeDownloader.php");

$facade = new YouTubeDownloader("APIKEY-XXXXXXXXX");
clientCode($facade);