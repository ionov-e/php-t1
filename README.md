# Задачки Vetmanager

## Инструкция для разворачивания

1. Через терминал зайти в пустую папку, куда планируется разместить проект
2. `git clone https://github.com/ionov-e/php-t1.git .` или `git clone git@github.com:ionov-e/php-t1.git .`
3. `composer install`. Если composer на системе не установлен - добиваемся исполнения этой команды другим способом
4. `docker compose up -d`


## Ссылки на выполненные задачки

1. "Пазлы", "Рекурсия, Замыкание, работа с ссылками": http://localhost:55000/puzzles.php
2. "Автозагрузка классов"-1: http://localhost:55000/autoload1/index.php
3. "Автозагрузка классов"-2: http://localhost:55000/autoload2/index.php
4. "Исключения"-1 `exception`: http://localhost:55000/exceptions1.php

   "Исключения"-1 `passed`: http://localhost:55000/exceptions1.php?haha=1

   _Исключение бросается или нет в зависимости от наличия какого-либо GET-содержимого_
5. "Исключения"-2: http://localhost:55000/exceptions2.php
6. "Абстрактные классы": http://localhost:55000/abstracts.php
7. "Интерфейс": http://localhost:55000/interfaces.php
8. "toString": http://localhost:55000/magic-to-string.php
9. "Construct": http://localhost:55000/magic-construct.php
10. "Traits": http://localhost:55000/traits.php
11. "SPL1": http://localhost:55000/spl1.php
12. "Monolog": http://localhost:55000/monolog.php
13. "JS": http://localhost:55000/js.html
14. "Currency Converter / Packagist library" http://localhost:55000/currency-converter.php
    - https://packagist.org/packages/ioncurly/cbr-converter
    - https://github.com/ionov-e/cbr-converter

## Бонус:
- http://localhost:55000/work-schedule-report.html
   
   Крошечная страничка для заполнения отчетов рабочих дней (4 и 8 часов только) используя Javascript и Bootstrap 5