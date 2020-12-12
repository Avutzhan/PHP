<?php

include_once("Classes/Builders/MysqlQueryBuilder.php");
include_once("Classes/Builders/PostgresQueryBuilder.php");
include_once("client.php");

echo "Testing MySQL query builder:\n";
clientCode(new MysqlQueryBuilder());

echo "\n\n";

echo "Testing PostgresSQL query builder:\n";
clientCode(new PostgresQueryBuilder());