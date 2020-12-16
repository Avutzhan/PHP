<?php

include_once("client.php");
include_once("Classes/MonkeyHandler.php");
include_once("Classes/SquirrelHandler.php");
include_once("Classes/DogHandler.php");

$monkey = new MonkeyHandler();
$squirrel = new SquirrelHandler();
$dog = new DogHandler();

$monkey->setNext($squirrel)->setNext($dog);

/**
 * Клиент должен иметь возможность отправлять запрос любому обработчику, а не
 * только первому в цепочке.
 */
echo "Chain: Monkey > Squirrel > Dog\n\n";
clientCode($monkey);
echo "\n";

echo "Subchain: Squirrel > Dog\n\n";
clientCode($squirrel);