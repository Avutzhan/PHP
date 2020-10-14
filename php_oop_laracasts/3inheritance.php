<?php

// Inheritance allows one class to inherit the
// traits and behavior of another class.
// This should instantly make sense, in the
// same way that a child inherits characteristics
// from their parents. In this lesson, we'll review
// several examples of inheritance in action.

// first example
class CoffeMaker
{
    public function brew()
    {
        var_dump('Brewing the coffe');
    }
}

class SpecialtyCoffeMaker extends CoffeMaker
{
    public function brewLatte()
    {
        var_dump('Brewing a latte');
    }
}

// (new CoffeMaker())->brew();
(new SpecialtyCoffeMaker())->brew();
(new SpecialtyCoffeMaker())->brewLatte();

// second example
class Collection
{
    //protected array $items; 7.4 php feature

    protected $items; //7.2 php

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function sum($key)
    {
        return array_sum(array_map(function ($item) use ($key) {
            return $item->$key;
        }, $this->items));
        // 7.2 php

        //return array_sum(array_map(fn($item) => $item->$key, $this->items); 7.4 php

        //return array_sum(array_column($this->items, $key); 7.4 php
    }


}

class VideosCollection extends Collection
{
    public function length()
    {
        return $this->sum('length');
    }
}

class Video
{
    public $title;
    public $length;

    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
}

$videos = new VideosCollection([
    new Video('Some Video', 100),
    new Video('Some Video 2', 200),
    new Video('Some Video 3', 300),
]);

//var_dump($collection);

//echo $videos->sum('length');
echo $videos->length();

//thirds example
class AchievementType
{
    public function name()
    {
        // class_basename(); laravel helper
        // AchievementType

    }

    public function difficulty()
    {
        return 'intermediate';
    }

    public function icon()
    {

    }
}

class FirstThouthandsPoints extends AchievementType
{
    public function qualifier($user)
    {

    }

    public function name()
    {
        // class_basename(); laravel helper
        // AchievementType
        // we overwrite the parent
        return 'Welcome Aboard';
    }
}
