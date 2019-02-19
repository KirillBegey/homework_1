<?php
require('src/functions.php');

//task 1
$name = 'Кирилл';
$age = '29';

echo '"Меня зовут: ' . $name . '"' . '<br>';
echo '"Мне ' . $age . ' лет"' . '<br>';
echo '" ' . '! ' . '| ' . '\\ ' . '\/ ' . '\' ' . '" ' . '\\' . '<br>';
echo '<hr>';

//task 2
const PIC = 80;
const PIC_FELT_TIP = 23;
const PIC_PENCIL = 40;
$answer = numberOfDrawings(PIC, PIC_FELT_TIP, PIC_PENCIL);

echo 'Всего рисунков: ' . PIC . '<br>';
echo 'Рисунков выполненных фломастерами:' . PIC_FELT_TIP . '<br>';
echo 'Рисунков выполненных карандашами: ' . PIC_PENCIL . '<br>';
echo 'Вопрос: Сколько рисунков выполненных красками?' . '<br>';
echo 'Ответ: ' . $answer . ' рисунков выполненных красками.' . '<br>';
echo '<hr>';

//task 3
work(20);

echo '<hr>';

//task 4
daysOfTheWeek(0);

echo '<hr>';

//task 5
$bmw = [
    "model" => "X5",
    "speed" => 120,
    "doors" => 5,
    "year" => "2015"
];
$toyota = [
    "model" => "Ist",
    "speed" => 100,
    "doors" => 5,
    "year" => "2003"
];
$opel = [
    "model" => "Astra",
    "speed" => 110,
    "doors" => 4,
    "year" => "2010"
];
$cars = arrayCars($bmw, $toyota, $opel);
echo 'CAR bmw<br>';
echo $cars[0][model] . ' ' . $cars[0][speed] . ' ' . $cars[0][doors] . ' ' . $cars[0][year] . '<br>';
echo '<br>';
echo 'CAR toyota<br>';
echo $cars[1][model] . ' ' . $cars[1][speed] . ' ' . $cars[1][doors] . ' ' . $cars[1][year] . '<br>';
echo '<br>';
echo 'CAR opel<br>';
echo $cars[2][model] . ' ' . $cars[2][speed] . ' ' . $cars[2][doors] . ' ' . $cars[2][year] . '<br>';
echo '<hr>';

//task 6
echo '<table width="500px"><tr>';
echo multiplicationTable(1, 10);
echo '</tr></<table>';
