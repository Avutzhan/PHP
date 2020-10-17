<?php
//Pseudo code for examples
//Solid - S - Single responsibility principle
//Дмитрий Афанасьев ютуб канал
// https://www.youtube.com/watch?v=EaF1fHQIe0Y&list=PLoonZ8wII66jOXzIvQCtKosCstjGPL0lg&index=1

$logger = new Logger();
$product = new Product($logger);
$product->setPrice(10);