<?php
//function task 2
function numberOfDrawings($a, $b, $c)
{
    $d = $a - $b - $c;
    return $d;
}

//function task 3
function work($age)
{
    if ($age >= 18 && $age <= 65) {
        echo 'Вам еще работать и работать';
    } elseif ($age > 65) {
        echo 'Вам пора на пенсию';
    } elseif ($age < 18 && $age > 0) {
        echo 'Вам ещё рано работать';
    } elseif ($age < 1) {
        echo 'Неизвестный возраст';
    }
}

//function task 4
function daysOfTheWeek($day)
{
    switch ($day) {
        case ($day >= 1 && $day <= 5):
            echo 'Это рабочий день';
            break;
        case ($day == 6 || $day == 7):
            echo 'Это выходной день';
            break;
        default:
            echo 'Неизвестный день';
            break;
    }
}

//function task 5
function arrayCars()
{
    $args = func_get_args();
    return $args;
}

//function task 6
function multiplicationTable($a, $b)
{
    for ($i = $a; $i <= $b; $i++) {
        echo '<td>';
            for ($j = $a; $j <= $b; $j++) {
                $c = $j * $i;
                if (($i % 2 == 0) && ($j % 2 == 0)) {
                    echo '(' . $c . ')' . '<br>';
                } elseif (($i % 2 != 0) && ($j % 2 != 0)) {
                    echo '[' . $c . ']' . '<br>';
                } else {
                    echo $c . '<br>';
                }
            }
        echo '</td>';
    }
}
