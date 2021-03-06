<?php
//Pseudo code for examples
//SOLID
//O - принцип открытости закрытости
//Open / closed principle
// Классы должны быть открыты для расширения
// И закрыты для изменения
//Приложение следует проектировать таким образом чтобы для изменения
//поведения класса нам не потребовалось менять код самого класса
//Сейчас по умолчанию логирование идет в файл
//Например стоит такая задача логгирование именно в классе
// продукт нужно сделать в базу данных а не в файл
//В данной реализации на придется заходить в класс логгер
//менять там метод сохранения в файл на базу данных
//он ен приемлем так как на приходится менять сам класс логгер
//по данному принципу мы не можем менять этот класс
//так как его могут использовать другие классы и если
//мы меняем тут то везде меняется
//а нам нужно только в продукте менять но не в других классах
//Теперь мы можем передать в продукт либо класс файл логгер либо дб логгер
//Таким образом если нам понадобится еще както то метод логирования
//мы не лезем в сами классы а создаем отдельный класс который имплементирует интерфейс
//и уже его передаем продукту
// без принципа ОСП код не гибкий и приходилось бы менять сам класс
//если бы мы поменяли класс возникли бы ошибки в других кусках кода

$logger = new DBLogger();
$product = new Product($logger);
$product->setPrice(10);