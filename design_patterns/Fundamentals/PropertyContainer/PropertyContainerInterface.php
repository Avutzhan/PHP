<?php


namespace App\PropertyContainer;

//создаем контракт интерфейс благодяря чему мы будем четко понимать с какмими методами идет работа и примерно как и что будем делать
interface PropertyContainerInterface
{
    function addProperty($propertyName, $value);

    function deleteProperty($propertyName);

    function getProperty($propertyName);

    function setProperty($propertyName, $value);

}