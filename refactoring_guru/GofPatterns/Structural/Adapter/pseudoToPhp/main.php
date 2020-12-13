<?php

include_once("Classes/RoundHole.php");
include_once("Classes/SquarePegAdapter.php");
include_once("Classes/Pegs/RoundPeg.php");
include_once("Classes/Pegs/SquarePeg.php");


$hole = new RoundHole(5);
$rpeg = new RoundPeg(5);
echo $hole->fits($rpeg); //1 true
echo "\n";

$small_sqpeg = new SquarePeg(5);
$large_sqpeg = new SquarePeg(10);
// echo $hole->fits($small_sqpeg); //must return data type error

$small_sqpeg_adapter = new SquarePegAdapter($small_sqpeg);
$large_sqpeg_adapter = new SquarePegAdapter($large_sqpeg);

echo $hole->fits($small_sqpeg_adapter); //1 true
echo "\n";
echo $hole->fits($large_sqpeg_adapter); //0 nothing false