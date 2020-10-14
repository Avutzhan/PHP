<?php
//value objects and mutability
// A value object is an object whose equality
// is determined by its data (or value) rather than any particular
// identity. To illustrate this, imagine three five dollar
// bills resting on a table. Does one bill have a unique
// identity compared to the other two? From our perspective, no.
// Five dollars is five dollars regardless of which bill you choose.
// However, compare this with two human beings who have the same
// first and last name. Are they identical, or does each person have a
// unique identity? Of course in this case, the latter is the correct answer.

class Age
{
    private $age;

    public function __construct($age)
    {
        if ($age < 0 || $age > 120) {
            throw new InvalidArgumentException('thats make no sence');
        }

        $this->age = $age;
    }

    public function increment()
    {
        //$this->age += 1; это mutable object он меняет свойство обьекта
        // а вот эта версия возвращает новый обьект immutable
        return new self($this->age + 1);
    }

    public function getAge()
    {
        return $this->age;
    }
}

function register($name, Age $age)
{

}

$age = new Age(35);
//$age->increment(); а это если mutable
$age = $age->increment(); //это если immutable

var_dump($age->getAge());
// $age = new Age(50);
// //$age->age = 500;
// //если в классе свойсво обьекта не защищено
// протектед то любой может его изменить на неверные данные
// которые вызовут ошибку в коде так как при создании обьекта
// контсруктор сразу валидирует свойства а если они не
// защищены из вне ктото может поменять их и смысл валидации
// в конструкторе исчезнет лучше приватить их чтобы никто не менял
// register('john doe', $age);

//second example
//function register(FirstName $first, LastName $last, Age $age, EmailAddress $email, Password $password)
//{
//
//}

//third example

class Coordinates
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}
//function pin($x, $y) instead this putted object
function pin(Coordinates $coordinates)
{
    $coordinates->x;
}

//function distance($x1, $y1, $x2, $y2) instead this putted object
function distance(Coordinates $begin, Coordinates $end)
{

}

//forth example

