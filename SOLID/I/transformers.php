<?php

//тут мы реализуем все три метода этот класс умеет все
class SuperTransformer implements ISuperTransformer {
    public function toCar() {
        echo 'transform to car';
    }
    public function toPlane() {
        echo 'transform to plane';
    }
    public function toShip() {
        echo 'transform to ship';
    }
}

//теперь мы создаем машину трансформер но он умеет только трансформироваться в машину
//так как он реализует интерфейс ISuperTransformer мы обязаны реализовать все три метода
//чтобы реализовать три метода нам придется использовать тот что нужен а не нужные
//поставить в них заглушку в виде ошибок
//если мы создадим трансформер самолет и корабль там тоже будут заглушки
class CarTransformer implements ISuperTransformer {
    public function toCar() {
        echo 'transform to car';
    }
    public function toPlane() {
        throw new Exception('i cant transform to plane');
    }
    public function toShip() {
        throw new Exception('i cant transform to ship');
    }
}