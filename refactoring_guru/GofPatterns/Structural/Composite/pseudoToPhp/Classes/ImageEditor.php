<?php

include_once("Classes/CompoundGraphic.php");
include_once("Classes/Dot.php");
include_once("Classes/Circle.php");

class ImageEditor
{
  public $all;

  public function load()
  {
    $this->all = new CompoundGraphic();
    $this->all->add(new Dot(1, 2));
    $this->all->add(new Circle(5, 3, 10));
    // $this->all->remove(new Dot(1, 2));
    return $this->all;
  }

  public function groupSelected($components)
  {
    $group = new CompoundGraphic();
    $group->add($components);
    $this->all->remove($components);
    $this->all->add($group->children);
    echo $this->all->draw();
  }
}