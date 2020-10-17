<?php

//если класс жены реализовывает этот интерфейс
//значит у нее обязан быть класс getFood
class Wife implements IFoodProvider {
    public function getFood() {
        return $food;
    }
}