Мост — это структурный паттерн проектирования, который
разделяет один или несколько классов на две отдельные
иерархии — абстракцию и реализацию, позволяя изменять
их независимо друг от друга.

плюсы

Позволяет строить платформо-независимые программы.

Скрывает лишние или опасные детали реализации от кли-
ентского кода.

Реализует принцип открытости/закрытости.

минусы

Усложняет код программы из-за введения дополнительных
классов.

Отношения с другими паттернами

Мост проектируют загодя, чтобы развивать большие части
приложения отдельно друг от друга. Адаптер применяется
постфактум, чтобы заставить несовместимые классы рабо-
тать вместе.

Мост, Стратегия и Состояние (а также слегка и Адаптер)
имеют схожие структуры классов — все они построены на
принципе «композиции», то есть делегирования работы дру-
гим объектам. Тем не менее, они отличаются тем, что решают
разные проблемы. Помните, что паттерны — это не только
рецепт построения кода определённым образом, но и опи-
сание проблем, которые привели к данному решению.

Абстрактная фабрика может работать совместно с Мостом.
Это особенно полезно, если у вас есть абстракции, кото-
рые могут работать только с некоторыми из реализаций. В
этом случае фабрика будет определять типы создаваемых
абстракций и реализаций.

Паттерн Строитель может быть построен в виде Моста:
директор будет играть роль абстракции, а строители —
реализации.