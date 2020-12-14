<?php

include_once("Classes/ImageEditor.php");
include_once("Classes/Dot.php");
include_once("Classes/Circle.php");


$imageEditor = new ImageEditor();
$imageEditor->load();
echo $imageEditor->load()->draw();
echo "\n";
// var_dump($imageEditor->load()); //returns children 

$imageEditor->groupSelected([new Dot(1, 2), new Circle(1, 2, 5)]);

