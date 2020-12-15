<?php

include_once("Classes/TreeType.php");

class TreeFactory
{
  public $treeTypes = [];

  public function __construct($treeTypes)
  {
    $this->treeTypes[] = $treeTypes;
  }

  public function getTreeType($name, $color, $texture)
  {
    $type = null;
  
    foreach ($this->treeTypes as $item) {
      if ($item->type->name == $name) {
          $type = $item;
          break;
      }
    }

    if ($type == null) {
      $type = new TreeType($name, $color, $texture);
      $this->treeTypes[] = $type;
    }

    return $type;
  }
}