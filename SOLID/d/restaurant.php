<?php

//тут то же самое есть интерфейс обязан реализовать его методы
class Restaurant implements IFoodProvider {
    public function getFood()
    {
        return $food;
    }
}