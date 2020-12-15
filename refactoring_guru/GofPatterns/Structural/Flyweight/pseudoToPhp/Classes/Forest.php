<?php

include_once("Classes/TreeFactory.php");
include_once("Classes/Tree.php");
include_once("Classes/TreeType.php");

class Forest
{
  public $trees = [];
  
  public function plantTree($x, $y, $name, $color, $texture)
  {
    $type = new TreeType("apple", "green", "big");
    $fatory = new TreeFactory(new Tree(2, 4, $type));
    $type = $fatory->getTreeType($name, $color, $texture);
    $tree = new Tree($x, $y, $type);
    $this->trees[] = $tree;
  }

  public function draw($canvas)
  {
    foreach ($this->trees as $tree) {
      $tree->draw($canvas);
    }
  }
}