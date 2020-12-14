<?php

include_once("Classes/Leaf.php");
include_once("Classes/Composite.php");
include_once("client.php");
include_once("client2.php");

$simple = new Leaf();
echo "Client: I've got a simple component:\n";
clientCode($simple);
echo "\n\n";

$tree = new Composite();
$branch1 = new Composite();
$branch1->add(new Leaf());
$branch1->add(new Leaf());
$branch2 = new Composite();
$branch2->add(new Leaf());
$tree->add($branch1);
$tree->add($branch2);
echo "Client: Now I've got a composite tree:\n";
clientCode($tree);
echo "\n\n";

echo "Client: I don't need to check the components classes even when managing the tree:\n";
clientCode2($tree, $simple);