<?php
require('src/functions.php');

//task 1
$name = 'Кирилл';
$age = '29';

echo 'Меня зовут: $name<br>';
echo 'Мне $age лет<br>';
echo '" ! | \\ \/ \' " \\<br>';
echo '<hr>';

//task 2
const PICTURES = 80;
const MARKERS = 23;
const PENCILS = 40;
$answer = numberOfDrawings(PICTURES, MARKERS, PENCILS);

echo 'Всего рисунков: ' . PICTURES . '<br>';
echo 'Рисунков выполненных фломастерами:' . MARKERS . '<br>';
echo 'Рисунков выполненных карандашами: ' . PENCILS . '<br>';
echo 'Вопрос: Сколько рисунков выполненных красками?' . '<br>';
echo 'Ответ: ' . $answer . ' рисунков выполненных красками.' . '<br>';
echo '<hr>';

//task 3
work(rand(0, 20));

echo '<hr>';

//task 4
daysOfTheWeek(rand(0, 8));

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
echo '<hr>';

//task 6
echo '<table width="500px">';
echo multiplicationTable(10, 10);
echo '</<table>';
