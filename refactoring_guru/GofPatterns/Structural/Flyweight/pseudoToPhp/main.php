<?php

include_once("Classes/Tree.php");
include_once("Classes/TreeType.php");
include_once("Classes/Forest.php");

$type = new TreeType("apple", "green", "big");
$tree = new Tree(5, 5, $type);
$tree->draw("canvas");

$forest = new Forest();
$forest->plantTree(10, 10, "pineapple", "yellow", "small");
$forest->plantTree(10, 10, "pineapple2", "yellow", "small");
$forest->plantTree(10, 10, "pineapple3", "yellow", "small");
$forest->draw("canvas");
var_dump($forest);

