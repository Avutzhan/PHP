<?php

//SOLID
//I - Interface segregation principle
//принцип разделения интерфейсов

//Клиенты не должны зависеть от методов которые они не используют
//много специализированных интерфейсов это лучше чем один универсальный
//большие обьемные интерфейсы нужно разбивать на мелкие так чтобы клиенты маленьких интерфейсов
//знали только о тех методах которые необходимы им в работе
//и чтобы при изменении метода интерфейса не должны меняться клиенты который этот метод используют

interface ICarTransformer {
    public function toCar();
}

interface IPlaneTransformer {
    public function toPlane();
}

interface IShipTransformer {
    public function toShip();
}