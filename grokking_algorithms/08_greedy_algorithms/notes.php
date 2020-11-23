Жадные алгоритмы

Вы узнаете, как браться за невозможные задачи, не
имеющие быстрого алгоритмического решения (NР-пол­
ные задачи).

Вы научитесь узнавать такие задачи и не терять время
на поиски быстрого алгоритма (которого все равно
нет).

Вы познакомитесь с приближенными алгоритмами, ко­
торые могут использоваться для быстрого нахождения
приближенного решения NР-полных задач.

Вы узнаете о жадной стратегии очень простой стратегии решения задач.

0(2^n) так обозначается два в степени n
О(n^2) а тут n в степени 2

Задача составления расписания

Допустим, имеется учебный класс, в котором нужно
провести как можно больше уроков. Вы получаете
список уроков.

стр 183

Провести в классе все уроки не получится, потому что некоторые из них
перекрываются по времени.

Требуется провести в классе как можно больше уроков. Как отобрать уроки,
чтобы полученный набор оказался самым большим из возможных?

Вроде бы сложная задача, верно? На самом деле алгоритм оказывается на
удивление простым. Вот как он работает:

1 Выбрать урок, завершающийся раньше всех. Это первый урок, который
будет проведен в классе.

2 Затем выбирается урок, начинающийся после завершения первого уро­
ка. И снова следует выбрать урок, который завершается раньше всех
остальных. Он становится вторым уроком в расписании.

Продолжайте действовать по тому же принципу - и вы получите ответ!
Давайте попробуем. Рисование заканчивается раньше всех уроков (в 10:00),
поэтому мы выбираем именно его.

Теперь нужно найти следующий урок , который начинается после
10:00 и завершается раньше остальных.

И так, эти три урока должны проводиться в классе.

Я очень часто слышу, что этот алгоритм подозрительно прост. Он слишком
очевиден, а значит, должен быть неправильным. Но в этом и заключается
красота жадных алгоритмов: они просты! Жадный алгоритм прост: на каж­
дом шаге он выбирает оптимальный вариант. В нашем примере при выборе
урока выбирается тот урок, который завершается раньше других. В техни­
ческой терминологии: на каждом шаге выбирается локально-оптимальное
решение, а в итоге вы получаете глобально-оптимальное решение. Хотите
верьте, хотите нет, но этот простой алгоритм успешно находит оптимальное
решение задачи составления расписания!

Конечно, жадные алгоритмы работают не всегда. Но они так просто реали­
зуются! Рассмотрим другой пример.

Задача о рюкзаке

Представьте, что вы жадный воришка. Вы забрались
в магазин с рюкзаком, и перед вами множество товаров,
которые вы можете украсть. Однако емкость рюкзака
не бесконечна: он выдержит не более
35 фунтов. Требуется подобрать набор то­
варов максимальной стоимости,
которые можно сложить в рюкзак. Какой алгоритм вы
будете использовать?

И снова жадная стратегия выглядит очень просто:

1 Выбрать самый дорогой предмет, который поместится в рюкзаке.
2 Выбрать следующий по стоимости предмет, который поместится в рюк­
заке ... И так далее.

Бот только на этот раз она не работает! Предположим, есть три предмета.

Б рюкзаке поместятся товары общим весом не более  -35 фунтов .
Самый дорогой товар ­магнитофон, вы выбираете его. Теперь ни для чего другого
места уже не осталось.

Бы набрали товаров на $3000. Погодите-ка! Если бы вместо магнитофона
вы выбрали ноутбук и гитару, то стоимость добычи составила бы $3500!

Очевидно , жадная стратегия не дает оптимального решения. Впрочем, ре­
зультат не так уж далек от оптимума. В следующей главе я расскажу, как вы­
числить правильное решение. Но вор, забравшийся в магазин , вряд ли станет
стремиться к идеалу. «достаточно хорошего~ решения должно хватить.
Второй пример приводит нас к следующему выводу : иногда идеальное
-
враг хорошего. В некоторых случаях достаточно алгоритма, способного
решить задачу достаточно хорошо. И в таких областях жадные алгоритмы
работают просто отлично, потому что они просто реализуются, а получен­
ное решение обычно близко к оптимуму.

Упражнение 1

Вы работаете в фирме по производству мебели и поставляете мебель
по всей стране. Коробки с мебелью размещаются в грузовике. Все
коробки имеют разный размер, и вы стараетесь наиболее эффективно
использовать доступное пространство. Как выбрать коробки для того,
чтобы загрузка имела максимальную эффективность? Предложите
жадную стратегию. Будет ли полученное решение оптимальным?
Ответ: Жадная стратегия заключается в том, чтобы выбрать самую
большую коробку, помещающуюся в оставшемся пространстве, и по­
вторять это до тех пор, пока еще можно выбрать хотя бы одну коробку.
Нет, такое решение оптимальным не будет

упражнение 2

Вы едете в Европу, и у вас есть 7 дней
на знакомство с достопримечательностями. Вы присваиваете каждой достопримечательности
стоимость в баллах (насколько вы хотите ее увидеть) и оцениваете
продолжительность поездки. Как обеспечить максимальную стоимость
(увидеть все самое важное) во время поездки? Предложите жадную
стратегию. Будет ли полученное решение оптимальным?
Ответ: Выбирайте достопримечательность с наибольшей стоимостью
в баллах, которую вы успеете посетить в оставшееся время. Остано­
витесь, когда таких достопримечательностей не останется. Нет, такое
решение оптимальным не будет.

Рассмотрим еще один пример, в котором без жадных алгоритмов практи­
чески не обойтись.

Задача о покрытии множества

Вы открываете собственную авторскую програм­
му на радио и хотите, чтобы вас слушали во всех
50 штатах. Нужно решить, на каких радиостанци­
ях должна транслироваться ваша передача. Каждая
станция стоит денег, поэтому количество станций не­
обходимо свести к минимуму. Имеется список станций .

стр 188

Каждая станция покрывает определенный набор штатов, эти наборы пере­
крываются.

Как найти минимальный набор станций, который бы покрывал все
50 штатов? Вроде бы простая задача, верно? Оказывается , она чрезвычайно слож­
на. Вот как это делается:

1 Составить список всех возможных подмножеств станций
так называемое степен.н.ое множество. В нем содержатся 2^n возможных подмножеств

2 Из этого списка выбирается множество с наименьшим набором станций,
покрывающих все 50 штатов.

Проблема в том , что вычисление всех возможных подмножеств станций
займет слишком много времени.
Для п станций оно потребует времени 0(2^n)
Если станций немного, скажем от 5 до 10, -это допустимо.
Но подумайте, что произойдет во всех рассмотренных примерах при большом
количестве элементов. Предположим, вы можете вычислять по
10 подмножеств в секунду.

Не существует алгоритма, который будет вычислять подмножества с при­
емле.мой скоростыо! Что же делать?

кол-во    необходимое
станций   время
5           3.2с
10          102.4с
32          13.6года
100         4х10^21 года

Приближенные алгоритмы

На помощь приходят жадные алгоритмы! Вот как выглядит жадный алго­
ритм, который выдает результат, достаточно близкий к оптимуму:

1 Выбрать станцию, покрывающую наибольшее количество штатов, еще
не входящих в покрытие. Если станция будет покрывать некоторые
штаты , уже входящие в покрытие, это нормально.

2 Повторять, пока остаются штаты, не входящие в покрытие.

Этот алгоритм является приближеняым. Когда вычисление точного реше­
ния занимает слишком много времени, применяется приближенный алго­
ритм. Эффективность приближенного алгоритма оценивается по:

быстроте

близости полученного решения к оптимальному.

Жадные алгоритмы хороши не только тем, что они обычно легко формули­
руются, но и тем, что простота обычно оборачивается быстротой выполне­
ния. В данном случае жадный алгоритм выполняется за время О(n^2) , где n
- количество радиостанций.
А теперь посмотрим, как эта задача выглядит в программном коде.

Подготовительный код
В этом примере для простоты будет использоваться небольшое подмноже­
ство штатов и станций.
Сначала составьте список штатов:

page 190

В этой реализации я использовал множество . Эта структура данных похо­
жа на список, но каждый элемент может встречаться в множестве не более
одного раза. Множества не содержат дубликатов. Предположим, имеется
следующий список:

Этот список преобразуется в множество:

Также понадобится список станций, из которого будет выбираться покры­
тие. Я решил воспользоваться хешем:

Ключи - названия станций, а значения - сокращенные обозначения шта­
тов , входящих в зону охвата. Все значения являют­
ся множествами. Как вы вскоре увидите, хранение данных во множествах
упрощает работу.

Наконец, нам понадобится структура данных для хранения итогового на­
бора станций:

Вычисление ответа

Теперь необходимо вычислить набор используемых станций . Взгляните на
диаграмму и попробуйте предсказать, какие станции следует использовать.

Учтите, что правильных решений может быть несколько. Вы перебираете
все станции и выбираете ту, которая обслуживает больше всего штатов, не
входящих в текущее покрытие. Будем называть ее
best_station:

Множество  states_covered содержит все штаты , обслуживаемые этой стан­
цией, которь1е еще не входят в текущее покрытие. Цикл for перебирает все
станции и находит среди них наилучшую. Рассмотрим тело цикла for:

Множества
Допустим, имеется множество с названиями фруктов.

Также имеется множество с названиями овощей.

С двумя множествами можно выполнить ряд интересных операций.

1 Объединение множеств означает слияние элементов обоих множеств.
2 Под операцией пересечения множеств понимается поиск элементов,
входящих в оба множества (в данном случае только помидор).
3 Под разностью множеств понимается исключение из одного множества
элементов, присутствующих в другом множестве.

Еще раз напомню основные моменты:
множества похожи на списки, но множества не содержат дубликатов;

с множествами можно выполнять различные интересные операции
вычислять их объединение, пересечение и разность.

Вернемся к коду

Продолжим рассматривать исходный пример.

П ересечен и е множеств:

Множество covered содержит штаты, присутствующие как в states_needed,
так и в states_for _station. Таким образом, covered - множество штатов, н е
входящих в покрыти е, которые покрываются текущей станuией! Затем мы
проверяем, покрывает ли эта станция больше штатов, чем текущая станция
best_station:

Если условие выполняется, то станция сохраняется в best_station
Наконец, после завершения цикла best_station добавляется в итоговый список
станций:

Также необходимо обновить содержимое states_needed. Те штаты , которые
входят в зону покрытия станции, больше не нужны:

Цикл продолжается, пока множество states_needed не станет пустым. Пол ­
ный код цикла for выглядит так:

Остается вывести содержимое final_stations:

Этот результат совпадает с вашими ожиданиями? Вместо станций 1, 2, 3
и 5 можно  было выбрать станции  2, 3, 4  и 5. Сравним время выпол нения
жадного алгоритма со временем точного алгоритма.


кол-во    необходимое O(n!)     жадный O(n^2)
станций   время                 алгоритм
5           3.2с                2.5c
10          102.4с              10c
32          13.6года            102.4c
100         4х10^21 года        16.67мин

Упражнения

Для каждого из приведенных ниже алгоритмов укажите, является этот
алгоритм жадным или нет.

Быстрая сортировка. нет

Поиск в ширину. да

Алгоритм Дейкстры. да

NР-полные задачи
Для решения задачи о покрытии множества необходимо вычислить каждое
возможное подмножество.

Вероятно, вы вспомнили задачу о коммивояжере из главы 1 В этой задаче
коммивояжер должен был посетить пять разных городов.

Коммивояжер пытается найти кратчайший путь, который включит все пять
городов. Чтобы найти кратчайший путь, сначала необходимо вычислить
все возможные пути.

стр 197

Сколько маршрутов необходимо вычислить для пяти городов?

Задача о коммивояжере шаг за шагом




















