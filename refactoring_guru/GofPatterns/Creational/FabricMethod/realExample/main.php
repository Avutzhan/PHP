<?php

include_once("Classes/Posters/FacebookPoster.php");
include_once("Classes/Posters/LinkedInPoster.php");
include_once("Client.php");

echo "Testing ConcreteCreator1:\n";
clientCode(new FacebookPoster("john_smith", "******"));
echo "\n\n";

echo "Testing ConcreteCreator2:\n";
clientCode(new LinkedInPoster("john_smith@example.com", "******"));