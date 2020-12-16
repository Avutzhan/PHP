<?php

include_once("Classes/CsvIterator.php");

$csv = new CsvIterator(__DIR__ . '/cats.csv');

foreach ($csv as $key => $row) {
    print_r($row);
}