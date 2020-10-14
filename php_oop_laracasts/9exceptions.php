<?php

//1 example

//можно сделать проверку чисел прям в скобках
//function add(float $one,float $two)
function add($one, $two)
{
    if ( ! is_float($one) || ! is_float($two)) {
        throw new InvalidArgumentException('Provide a float');
    }

    return $one * $two;
}

try {
    echo add(2.0, []);
} catch (InvalidArgumentException $e) {
    echo 'Oh well';
}

//2 example

class Video
{

}

class User
{
    public function download(Video $video)
    {
        if (! $this->subscribed()) {
            throw new Exception("You must be subscribed");
        }
    }

    public function subscribed()
    {
        return false;
    }
}

//try {
//    (new User)->download(new Video);
//} catch() {
//
//}

//3 exception

// 9 exception last example
class MaximumMembersReached extends Exception
{
    public static function fromTooManyMembers()
    {
        return new static('You may not add more than 3 members');
    }
}

class Member
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Team
{
    protected $members = [];

    public function add(Member $members)
    {
        if (count($this->members) === 3) {
            throw MaximumMembersReached::fromTooManyMembers();
        }

        $this->members[] = $members;
    }

    public function members()
    {
        return $this->members;
    }
}

class TeamMembersController
{
    public function store()
    {
        $team = new Team; //has a maximum of 3 members
        try {
            $team->add(new Member('Jane Doe'));
            $team->add(new Member('John Doe'));
            $team->add(new Member('Peter Doe'));
            $team->add(new Member('Kelly Doe'));

            var_dump($team->members());
        } catch (MaximumMembersReached $e) {
            var_dump($e->getMessage());
        }




    }
}

(new TeamMembersController())->store();

