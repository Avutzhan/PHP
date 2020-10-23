<?php


namespace App\AbstractFactory;


use App\AbstractFactory\Factories\BootstrapFactory;
use App\AbstractFactory\Factories\SemanticUiFactory;

class GuiKitFactory
{

    public function getFactory($type) //: GuiFactoryInterface
    {
        switch ($type) {
            case 'bootstrap':
                $factory = new BootstrapFactory();
                break;
            case 'semanticui':
                $factory = new SemanticUiFactory();
                break;
            default:
                throw new \Exception('неизвестный тип фабрики [{$type]');
        }

        return $factory;
    }


}