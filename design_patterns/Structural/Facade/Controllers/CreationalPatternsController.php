<?php

namespace App\Http\Controllers;

use App\Facade\OrderSaveFacade;
use App\Facade\Subsystem\OrderSaveDates;
use App\Facade\Subsystem\OrderSaveProducts;
use App\Facade\Subsystem\OrderSaveUsers;
use App\Facade\Classes\Order;
use Barryvdh\Debugbar\Facade as Debugbar;
use Illuminate\Support\Facades\Request;

class CreationalPatternsController extends Controller
{
    //Типичный джуновский подход когда логика в контроллере называется толстый контроллер
    public function saveOrder(Request $request)
    {
        $order = new Order();

        if ($request->has('client')) {
            $order->client = $request->get('client');
        }

        if ($request->has('recipient')) {
            $order->recipient = $request->get('recipient');
        }

        if ($request->has('deliveryDt')) {
            $order->deliveryDt = $request->get('deliveryDt');
        }

        $order->save();
    }

    //Можно улучшить и выделить подсистему класс каждому действию в условиях
    //Так тоже не надо не передавай реквест из контроллера в другие места
    //Потому что реквест должен создаваться и умирать в контроллере
    //Так как возможно этот метод нужно будет использовать в командной строке
    //А там то не создаш реквест так как сам юзер уже его создает
    //А кастомно создавать реквест это извращение
    public function saveOrder2(Request $request)
    {
        $order = new Order();

        (new OrderSaveProducts($order, $request))->run();

        (new OrderSaveDates($order, $request))->run();

        (new OrderSaveUsers($order, $request))->run();

        $order->save();

    }

    //Тут уже более меннее но можно чутка усложнить и применить ДТО
    //это отдельный шаблон проектирования
    public function Facade()
    {
        $name = "Facade";

        $order = new Order();
        $data = request()->all();

        (new OrderSaveFacade())->save($order, $data);

        return view('welcome');
    }
}
