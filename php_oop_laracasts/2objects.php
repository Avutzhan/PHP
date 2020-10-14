<?php
// If a class is the blueprint, then an object is an instance (or implementation)
// of that blueprint. In this lesson, you'll learn how to create multiple instances
// of a class, how to define and set internal state, and how to declare static
// constructors that better reflect how you might speak in real life.

class Team
{
    protected $name;

    protected $members = [];

    public function __construct($name, $members = [])
    {
        $this->name = $name;
        $this->members = $members;
    }

    // public static function start($name, $members = [])
    // //you must duplicate every variable that you write in __construct
    // so we change parameter adding to destructor operator every param unpacked to method
    // {
    //   return new static($name, $members);
    // }

    public static function start(...$param)
    {
        var_dump($param);
        var_dump('end');
        return new static(...$param);
    }

    public function name()
    {
        return $this->name;
    }

    public function members()
    {
        return $this->members;
    }

    public function add($name)
    {
        $this->members[] = $name;
    }

    public function cancel()
    {

    }

    public function manager()
    {

    }
}

class Member
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function lastViewed()
    {

    }
}

$acme = Team::start('Acme', [
    new Member('Jon Doe'),
    new Member('Jane Doe'),
]);
// $acme = Team::start('Acme', [
//   'john doe',
//   'jane doe',
// ]);
// $acme = Team::build,create,start('Acme', [
//   'john doe',
//   'jane doe',
// ]);
// $acme = new Team('Acme', [
//   'john doe',
//   'jane doe',
// ]);
//$acme->add('Arman Doe');
// $acme->add('Jon Doe');
// $acme->add('Jane Doe');

//$laracasts = new Team('foo');

var_dump($acme->members());