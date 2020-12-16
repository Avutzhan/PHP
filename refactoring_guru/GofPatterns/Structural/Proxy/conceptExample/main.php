<?php

include_once("Classes/RealSubject.php");
include_once("Classes/Proxy.php");
include_once("client.php");

echo "Client: Executing the client code with a real subject:\n";
$realSubject = new RealSubject();
clientCode($realSubject);

echo "\n";

echo "Client: Executing the same client code with a proxy:\n";
$proxy = new Proxy($realSubject);
clientCode($proxy);
