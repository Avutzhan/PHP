<?php
//Abstract class
// An abstract class provides a template
// - or base - for any subclasses. In this lesson,
// we'll work through an example that
// demonstrates how, why, and when you
// might reach for an abstract class.

abstract class AchievementType
{
    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();

        //FirstThouthandsPoints => First Thouthands Points

        return trim(preg_replace('/[A-Z]/' , ' $0' , $class ));
    }
    public function icon()
    {
        return strtolower(str_replace(' ', '-', $this->name())) . '.png';
    }

    abstract public function qualifier();
}

class FirstThouthandsPoints extends AchievementType
{
    public function qualifier()
    {

    }
}

class FirstBestAnswer extends AchievementType
{
    public function qualifier()
    {

    }
}

class RichTop50 extends AchievementType
{
    public function qualifier()
    {
        return 'success';
    }
}

// $achievement = new AchievementType();
// //never instantiate abstract class instantiate child class

// echo $achievement->icon();

$achievement = new RichTop50();
echo $achievement->qualifier();