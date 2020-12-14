<?php

include_once("Classes/EmailNotification.php");
include_once("Classes/SlackApi.php");
include_once("Classes/SlackNotification.php");
include_once("client.php");

echo "Client code is designed correctly and works with email notifications:\n";
$notification = new EmailNotification("developers@example.com");
clientCode($notification);
echo "\n\n";

echo "The same client code can work with other classes via adapter:\n";
$slackApi = new SlackApi("example.com", "XXXXXXXX");
$notification = new SlackNotification($slackApi, "Example.com Developers");
clientCode($notification);