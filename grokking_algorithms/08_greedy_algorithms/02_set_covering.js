"use strict";
// нужно найти минимальный набор всех станций котрые покрывали бы все штаты
// You pass an array in, and it gets converted to a set.
//сначала составим список штатов массив преобразуется во множество
let statesNeeded = new Set(["mt", "wa", "or", "id", "nv", "ut", "ca", "az"]);

//Также понадобится список станций, из которого будет выбираться покры­тие.
const stations = {};
stations["kone"] = new Set(["id", "nv", "ut"]);
stations["ktwo"] = new Set(["wa", "id", "mt"]);
stations["kthree"] = new Set(["or", "nv", "ca"]);
stations["kfour"] = new Set(["nv", "ut"]);
stations["kfive"] = new Set(["ca", "az"]);

//Новое множество для итогового значения
const finalStations = new Set();

//пока statesNeeded есть выполняем
while (statesNeeded.size) {
    //Учтите, что правильных решений может быть несколько. Вы перебираете
    //все станции и выбираете ту, которая обслуживает больше всего штатов, не
    //входящих в текущее покрытие.Будем называть ее bestStation
    let bestStation = null;
    //  Множество
    // states_covered содержит все штаты , обслуживаемые этой стан­
    // цией, которь1е еще не входят в текущее покрытие.
    let statesCovered = new Set();

    //Цикл for перебирает все
    // станции и находит среди них наилучшую.
    for (let station in stations) {
        //каждая станция и ее значения
        const states = stations[station];
        console.log('states');
        console.log(states);

        //Тут мы используем пересечение множеств Под операцией пересечения множеств понимается поиск элементов, входящих в оба множества
        const covered = new Set([...statesNeeded].filter(x => states.has(x)));

        //Затем мы проверяем, покрывает ли эта станция больше штатов, чем текущая станция
        if (covered.size > statesCovered.size) {
            //Если условие выполняется, то станция сохраняется в bestStation
            bestStation = station;

            statesCovered = covered;
        }

    }
    //Те штаты , которые входят в зону покрытия станции, больше не нужны:
    statesNeeded = new Set([...statesNeeded].filter(x => !statesCovered.has(x)));
    finalStations.add(bestStation);
}

console.log(finalStations); // Set { 'kone', 'ktwo', 'kthree', 'kfive' }