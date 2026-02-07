<?php

/*

Задача 2

Система HTML-элементов с PHP
Цель: Создать гибкую систему генерации HTML-элементов с поддержкой редактирования, форматирования и валидации типов данных.

Требования:

Базовый класс HtmlElement:

Общие свойства: id, class, name, value
Метод render() для генерации HTML (будет переопределяться в потомках)

Классы-элементы:

InputText: редактируемый текстовый input
InputNumber: редактируемый числовой input (наследуется от InputText)
SpanText: статический текстовый элемент (только вывод)
SpanNumber: статический числовой элемент (только вывод, наследуется от SpanText)
Link: ссылка (<a>)

Трейты:
NumberFormatTrait: для форматирования чисел (добавляет методы форматирования)
EditableTrait: добавляет свойства/методы для редактируемых элементов

Особенности:
Редактируемые элементы должны иметь атрибуты: name, value, placeholder, required
Нередактируемые элементы имеют только id, class и содержимое

Ссылка должна иметь атрибут href

*/

use Project\classes\InputNumber;
use Project\classes\InputText;
use Project\classes\Link;
use Project\classes\SpanNumber;
use Project\classes\SpanText;

require_once __DIR__ . '/autoloader.php';

// Способ 1 - Передача значений через конструктор

$inputName = new InputText('Введите текст', 'Value', 'Введите текст', true);
echo $inputName->render();
echo '<br>';

$inputNumber = new InputNumber('Введите число', 42, 'Введите число', false);
echo $inputNumber->render();
echo '<br>';

// Способ 2 - передача значений через методы

$spanText = new SpanText();
$spanText->setId('span-text');
$spanText->addClass('classname');
$spanText->setContent('Текст');
echo $spanText->render();
echo '<br>';

$spanNumber = new SpanNumber();
$spanNumber->setId('span-number');
$spanNumber->addClass('classname');
$spanNumber->setContent(34.2);
echo $spanNumber->render();
echo '<br>';

$link = new Link();
$link->setHref($_SERVER["REQUEST_URI"]);
echo $link->render();
echo '<br>';
