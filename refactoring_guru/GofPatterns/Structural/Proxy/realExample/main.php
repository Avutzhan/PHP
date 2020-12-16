<?php

include_once("Classes/SimpleDownloader.php");
include_once("Classes/CachingDownloader.php");
include_once("client.php");

echo "Executing client code with real subject:\n";
$realSubject = new SimpleDownloader();
clientCode($realSubject);

echo "\n";

echo "Executing the same client code with a proxy:\n";
$proxy = new CachingDownloader($realSubject);
clientCode($proxy);
