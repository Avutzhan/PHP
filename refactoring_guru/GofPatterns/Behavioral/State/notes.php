Также известен как: State

Состояние — это поведенческий паттерн проектирования,
который позволяет объектам менять поведение в
зависимости от своего состояния. Извне создаётся
впечатление, что изменился класс объекта.

плюсы

Избавляет от множества больших условных операторов
машины состояний

Концентрирует в одном месте код, связанный с определён-
ным состоянием.

Упрощает код контекста.

минусы

Может неоправданно усложнить код, если состояний мало и
они редко меняются.

Отношения с другими паттернами

Мост, Стратегия и Состояние (а также слегка и Адаптер)
имеют схожие структуры классов — все они построены на
принципе «композиции», то есть делегирования работы дру-
гим объектам. Тем не менее, они отличаются тем, что решают
разные проблемы. Помните, что паттерны — это не только
рецепт построения кода определённым образом, но и опи-
сание проблем, которые привели к данному решению.

Состояние можно рассматривать как надстройку над Страте-
гией. Оба паттерна используют композицию, чтобы менять
поведение основного объекта, делегируя работу вложенным
объектам-помощникам. Однако в Стратегии эти объекты не
знают друг о друге и никак не связаны. В Состоянии сами
конкретные состояния могут переключать контекст.



