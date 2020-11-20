<?php
//сам граф который будем проверять алгоритмом Дейкстры
$graph = [];
$graph["start"] = [];
$graph["start"]["a"] = 6;
$graph["start"]["b"] = 2;

$graph["a"] = [];
$graph["a"]["fin"] = 1;

$graph["b"] = [];
$graph["b"]["a"] = 3;
$graph["b"]["fin"] = 5;

$graph["fin"] = [];

//хэш таблица стоимости
//пока мы не проверили следующего соседа на массу
//неизвестный результат будет бесконечность в худшем случае
# the costs table
$infinity = PHP_INT_MAX;
$costs = [];
$costs["a"] = 6;
$costs["b"] = 2;
$costs["fin"] = $infinity; //пока не проверили

//хэш таблица родителских узлов
//то что еще не проверено будет null
# the parents table
$parents = [];
$parents["a"] = "start";
$parents["b"] = "start";
$parents["fin"] = null; //у конечного узла нет соседей

//массив для отслеживания всех уже обработанных узлов
//один узел не должен обрабатываться многократно
$processed = [];

//конец подготовки теперь реальный движ

// общий аглоритм действий
// 1 пока оста.тся не обработанные узлы
// 2 взять узел ближайший к началу
// 3 обновить стоимости для его соседей
// 4 если стоимости каких либо соседей были обновлены обновить и родителей
// 4 поместить узел как обработанный
// 5 все повтояем заново с 1 пункта

//Найти узел с наименьшей стоимостью среди необработанных
function findLowestCodeNode(array $costs) {
    //бесконечность
    $lowestCost = PHP_INT_MAX;
    //дефолтное значение для самого дешевого узла который мы вернем в конце
    $lowestCostNode = null;
    //обработанные узлы
    global $processed;
    # Go through each node.
    foreach ($costs as $node => $cost) {
        # If it's the lowest cost so far and hasn't been processed yet...
        //array_key_exists проверка на наличие в массиве
        if ($cost < $lowestCost && !array_key_exists($node, $processed)) {
            # ... set it as the new lowest-cost node.
            $lowestCost = $cost;
            $lowestCostNode = $node;
        }
    }

    return $lowestCostNode;
}

# Find the lowest-cost node that you haven't processed yet.
$node = findLowestCodeNode($costs);

# If you've processed all the nodes, this while loop is done.
while ($node) {
    $cost = $costs[$node];// значения цен
    # Go through all the neighbors of this node.
    $neighbors = $graph[$node];// значения соседей
    // array_keys возвращает значения ключей массива
    foreach (array_keys($neighbors) as $n) {
        $newCost = $cost + $neighbors[$n];
        # If it's cheaper to get to this neighbor by going through this node...
        if ($costs[$n] > $newCost) {
            # ... update the cost for this node.
            $costs[$n] = $newCost;
            # This node becomes the new parent for this neighbor.
            $parents[$n] = $node;
        }
    }
    # Mark the node as processed.
    $processed[$node] = true;
    # Find the next node to process, and loop.
    $node = findLowestCodeNode($costs);
}

print("Cost from the start to each node:");
var_dump($costs);