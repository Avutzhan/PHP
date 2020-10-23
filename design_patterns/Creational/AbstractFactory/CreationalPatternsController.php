<?php

namespace App\Http\Controllers;

use App\AbstractFactory\GuiKitFactory;
use Barryvdh\Debugbar\Facade as Debugbar;
use Illuminate\Http\Request;

class CreationalPatternsController extends Controller
{
    private $guiKit;

    public function __construct()
    {
        //switch classes here
        $this->guiKit = (new GuiKitFactory())->getFactory('bootstrap');
//        $this->guiKit = (new GuiKitFactory())->getFactory('semanticui');
    }

    public function AbstractFactory()
    {
        $name = 'Abstract Factory';

        $result[] = $this->guiKit->buildButton()->draw();
        $result[] = $this->guiKit->buildCheckBox()->draw();

        Debugbar::info($result);

        return view('welcome');
    }
}
