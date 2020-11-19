<?php
//простая проверка если последняя буква м то это продавец
//можно сделать сложную проверку
function personIsSeller(string $name): bool {
    return $name[-1] == "m";
}

//реализуем граф c использованием двусвязного списка
//а в свою очередь двусвязный списко мы реалтзуем в виде массива
$graph = [];
$graph["you"] = ["alice", "bob", "claire"];
$graph["bob"] = ["anuj", "peggy"];
$graph["alice"] = ["peggy"];
$graph["claire"] = ["thom", "jonny"];
$graph["anuj"] = [];
$graph["peggy"] = [];
$graph["thom"] = [];
$graph["jonny"] = [];

//реализуем очередь
//Класс SplQueue предоставляет основные функциональные возможности очереди, реализованные с использованием двусвязного списка.
function enqueue(\SplQueue $queue, array $persons) {
    foreach ($persons as $person) {
        //SplQueue::enqueue — Добавляет элемент в очередь
        //получается что мы берем реализацию очереди
        //берем человека и пихаем его в очередь
        $queue->enqueue($person);
    }
}

//и сама логика поиска в ширину
//получается мы передаем граф функции поиска
//you вернет всех твоих соседей и так далее
function search(string $name): bool {
    // это наш граф
    global $graph;
    // это новая очередь
    $searchQueue = new \SplQueue();
    // создаем очередь  из соседей графа
    // $graph["you"] = ["alice", "bob", "claire"];
    enqueue($searchQueue, $graph[$name]);
    # This array is how you keep track of which people you've searched before.
    // а этот массив поможет контролировать повторяющиеся имена
    // он нужен потому что в двусвязном списке может образоваться бесконечный цикл
    $searched = [];

    //пока массив не пустой выполняем цикл
    while (!$searchQueue->isEmpty()) {
        //SplQueue::dequeue — Удаляет элемент из очереди
        $person = $searchQueue->dequeue();
        # Only search this person if you haven't already searched them.
        //начинаем посик только если мы раньше не искали этого человека
        //если нет этого человека в массиве searched выполняем кот
        if (!isset($searched[$person])) {
            //выполняем проверку на продавца она должна вернуть true false
            if (personIsSeller($person)) {
                printf("%s is a mango seller", $person);
                return true;
            } else {
                //если он не продавец то пихаем его обратно в очередь
                enqueue($searchQueue, $graph[$person]);
                # Marks this person as searched
                //и пихаем его в массив searched это означает человек уже проверен
                $searched[$person] = true;
            }
        }
    }
    return false;
}

search("you");