<?php

include_once("Interfaces/GraphicInterface.php");

class CompoundGraphic implements Graphic
{
  public $children = [];

  public function add($child)
  {
    if (is_array($child)) {
      foreach($child as $item) {
        array_push($this->children, $item);
      }
    } else {
      array_push($this->children, $child);
    }
  }

  public function remove($child)
  {
    if (is_array($child)) {
      foreach($child as $item) {
        if (($key = array_search($item, $this->children)) !== false) {
          unset($this->children[$key]);
        }
        
      }
    } else {
      if (($key = array_search($child, $this->children)) !== false) {
        unset($this->children[$key]);
    }
    }
    
  }

  public function move($x, $y)
  {
    foreach($this->children as $child) {
      $child->move($x, $y);
    }

  }

  public function draw()
  {
    $arr = "";
    
    foreach($this->children as $child) {
      $x = $child->x;
      $y = $child->y;
      if (property_exists($child, "radius")) {
        $r = $child->radius;
      } else {
        $r = 0;
      }
   
      $arr .= " X = {$x} Y = {$y} and R = {$r}, \n";
    }

    return $arr;
  }
}