<?php
//before
class Cat1 {
    public $energy;

    public function eat(Sausage1 $s)
    {
        return $this->energy += $s->getNutrition();
    }


}

class Sausage1 {
    public function getNutrition()
    {
        return 100;
    }
}

$cat = new Cat1();
$sausage = new Sausage1();
echo $cat->energy;
$cat->eat($sausage);
echo $cat->energy;

//after
interface Food {
    public function getNutrition();
}

class Cat {
    public $energy;

    public function eat(Food $s)
    {
        return $this->energy += $s->getNutrition();
    }


}

class Sausage implements Food {
    public function getNutrition()
    {
        return 100;
    }
}

class Bread implements Food {
    public function getNutrition()
    {
        return 200;
    }
}

$cat = new Cat();
$sausage = new Sausage();
$bread = new Bread();
echo $cat->energy;
$cat->eat($sausage);
$cat->eat($bread);
echo $cat->energy;

