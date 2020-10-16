<?php

//используемый в коде класс
class Bird {
    public function fly() {
        $flySpeed = 10;
        return $flySpeed;
    }
}

//дочерний классс от бирд
//не изменяет поведение не дополняет
//не нарушает принцип Лисков

class Duck extends Bird {
    public function fly() {
        $flySpeed = 8;
        return $flySpeed;
    }

    public function swim() {
        $swimSpeed = 2;
        return $swimSpeed;
    }
}

//дочерний классс от бирд
//изменяет поведение
//нарушает принцип Лисков

class Penguen extends Bird {
    public function fly()
    {
        return 'i cant fly'; //не типичное поведение
    }

    public function swim() {
        $swimSpeed = 4;
        return $swimSpeed;
    }
}

//Все понятно с проблемой теперь решение
//1 можно вернуть 0
//2 написать тест который проверяет возвращаемый типа данных
//3 паттерн проектирования стратегия сложно
//4 создать интерфейсы с разными способностями и наследовать тот что нужен
//5 или аббревиатура SOLID буква I решает проблему возмоно решение 4 похоже на 5