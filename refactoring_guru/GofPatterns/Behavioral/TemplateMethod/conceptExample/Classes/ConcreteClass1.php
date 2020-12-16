<?php

include_once("Classes/AbstractClass.php");

class ConcreteClass1 extends AbstractClass
{
    protected function requiredOperations1(): void
    {
        echo "ConcreteClass1 says: Implemented Operation1\n";
    }

    protected function requiredOperation2(): void
    {
        echo "ConcreteClass1 says: Implemented Operation2\n";
    }
}
