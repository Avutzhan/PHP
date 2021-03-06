<?php

//SOLID
//D - Dependency inversion principle DIP
//Зависимости внутри системы строятся на основе абстракций
//Модули верхних уровней не должны зависеть от модулей нижних уровней
//оба типа модулей должны зависеть от абстракций
//абстракции не должны зависеть от деталей
//детали должны зависеть от абстракций

//короче
//зависимости должны строиться относительно абстракций а не деталей детали это класс


//если бы реализовали getFood прям тут то мы бы нарушали Single Responsibility
//эта система плоха тем что тут есть зависимость от конкретного класса Wife
//Если понадобятся модификации то придется менять класс Wife опять же нарушает принципы солид
//а Wife используется и в других местах будут ошибки и там

//тут класс не делает выбор каким классом пользоваться
class lowRankingMale {
    public function eat() {
        $wife = new Wife();
        $food = $wife->getFood();
    }
}

//тут уже хоть какой то выбор делает класс в конструкторе берем либой wife class либо ее дочерний класс
//этот код гораздо гипче для изменений
//но мы все равно привязаны к Wife  мы можем пользоваться экземплярами этого класса либо потомками
//все таки какая никакая зависимость у нас все равно остается
//тут мы зависим от деталей то есть от обькта
//иньекция зависимойстей dependency injection
class averageRankingMan {
    private $wife;

    public function __construct(Wife $wife)
    {
        $this->wife = $wife;
    }

    public function eat() {
        $food = $this->wife->getFood();
    }
}

//после того как мы создали интерфейс мы теперь можем сюда в конструктор спокойно передавать
//как обьект класса Wife и его потомки так и обьект класса Restaurant и его потомки
//сдесь уже мы не зависим от конкретнго класса
//мы сдесь зависим от абстракции
//интерфейс классы которые его имплементят это абстракция
class highRankingMale {
    private $foodProvider;

    public function __construct(IFoodProvider $foodProvider)
    {
        $this->foodProvider = $foodProvider;
    }

    public function eat()
    {
        $food = $this->foodProvider->getFood();
    }
}
//что такое абстракция
//ее можно получить разными методами
//Абстрагирование – это способ выделить набор значимых характеристик объекта, исключая из рассмотрения не значимые.
//Абстракция – это набор всех значимых характеристик.