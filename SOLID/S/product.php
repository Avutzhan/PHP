<?php

//Solid - S - Single responsibility principle
//Принцип единой обязанности ( ответственности )
//На данном этапе тут не используется setPrice
//так как в классе есть две функции (обязанности) одна меняет свойства класса другая это логика логирования
//То есть мы можем захотеть поменять способ сохранения в бд или же логику логирования в обоих случаях придется лесть в этот класс и менять его

//Чтобы подогнать этот класс под этот принцип нужно разделить обязанности класса
class Product {

    public function setPrice() {
        try {
            //save price in db
        } catch (DBException $e) {
             $this->logError($e->getMessage());
        }
    }

     public function logError($error) {
         //save error message
     }

}