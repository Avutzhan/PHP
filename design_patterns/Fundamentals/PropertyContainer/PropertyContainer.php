<?php


namespace App\PropertyContainer;

//Создаем новый класс который нам поможет использовать паттерн контейнер свойств
class PropertyContainer implements PropertyContainerInterface
{
    private $propertyContainer = [];

    public static function getDescription()
    {
        //...
    }

    public function addProperty($propertyName, $value)
    {
        $this->propertyContainer[$propertyName] = $value;
    }

    function deleteProperty($propertyName)
    {
        unset($this->propertyContainer[$propertyName]);
    }

    function getProperty($propertyName)
    {
        return $this->propertyContainer[$propertyName] ? $this->propertyContainer[$propertyName] : null;
    }

    function setProperty($propertyName, $value)
    {
        if (!isset($this->propertyContainer[$propertyName])) {
            throw new \Exception("Property [{$propertyName}] not found");
        }

        $this->propertyContainer[$propertyName] = $value;
    }
}