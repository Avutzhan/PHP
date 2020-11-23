<?php
// You need to install Data Structures (DS) extension.
// More details here - http://php.net/manual/en/book.ds.php
use \Ds\Set;

//сначала составим список штатов массив преобразуется во множество
//используем множество для хранения
$statesNeeded = new Set(["mt", "wa", "or", "id", "nv", "ut", "ca", "az"]);

//Также понадобится список станций, из которого будет выбираться покры­тие.
//используем хэш для хранения так как нужны связи
//Ключи - названия станций, а значения - сокращенные обозначения штатов , входящих в зону охвата. Все значения множество
$stations = [];
$stations["kone"] = new Set(["id", "nv", "ut"]);
$stations["ktwo"] = new Set(["wa", "id", "mt"]);
$stations["kthree"] = new Set(["or", "nv", "ca"]);
$stations["kfour"] = new Set(["nv", "ut"]);
$stations["kfive"] = new Set(["ca", "az"]);

//Новое множество для итогового значения
$finalStations = new Set();

//пока
while (!$statesNeeded->isEmpty()) {
    //Учтите, что правильных решений может быть несколько. Вы перебираете
    //все станции и выбираете ту, которая обслуживает больше всего штатов, не
    //входящих в текущее покрытие.Будем называть ее bestStation
    $bestStation = null;

    //Множество statesCovered содержит все штаты , обслуживаемые этой стан­
    //цией, которь1е еще не входят в текущее покрытие.
    $statesCovered = new Set();

    //Цикл foreach перебирает все станции и находит среди них наилучшую.
    foreach (array_keys($stations) as $station) {
        //каждый штат
        $states = $stations[$station];

        //начальное множество в нем ищем штаты которые мы проходим циклом
        //множество штатов, н е входящих в покрыти е, которые покрываются текущей станuией!
        $covered = new Set($statesNeeded);

        //Тут мы используем пересечение множеств Под операцией пересечения множеств понимается поиск элементов, входящих в оба множества
        $covered = $covered->filter(function ($value) use ($states) {
            return $states->contains($value);
        });

        //Затем мы проверяем, покрывает ли эта станция больше штатов, чем текущая станция
        if ($covered->count() > $statesCovered->count()) {
            //Если условие выполняется, то станция сохраняется в bestStation
            $bestStation = $station;

            //обновляем
            $statesCovered = $covered;
        }
    }

    $statesNeeded = new Set($statesNeeded);

    //Те штаты , которые входят в зону покрытия станции, больше не нужны:
    $statesNeeded = $statesNeeded->filter(function ($value) use ($statesCovered) {
        return !$statesCovered->contains($value);
    });

    //после завершения цикла bestStation добавляется в итоговый список станций:
    $finalStations->add($bestStation);
}

print_r($finalStations); // ["kone", "ktwo", "kthree", "kfive"]