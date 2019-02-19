<?php
//function task 2
function numberOfDrawings($pictures, $markers, $pencils)
{
    $paints = $pictures - $markers - $pencils;
    return $paints;
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
    } else {
        echo 'Неизвестный возраст';
    }
}

//function task 4
function daysOfTheWeek($day)
{
    switch ($day) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo 'Это рабочий день';
            break;
        case 6:
        case 7:
            echo 'Это выходной день';
            break;
        default:
            echo 'Неизвестный день';
            break;
    }
}

//function task 5
function arrayCars($array1, $array2, $array3)
{
    $cars = [];
    $cars['bmw'] = $array1;
    $cars['toyota'] = $array2;
    $cars['opel'] = $array3;

    foreach ($cars as $key => $value) {
        echo "CAR $key <br> {$value['model']} {$value['speed']} {$value['doors']} {$value['year']} <br>";
    }
}

//function task 6
function multiplicationTable($rows, $cols)
{
    for ($tr = 1; $tr <= $rows; $tr++) {
        echo "<tr>";
            for ($td = 1; $td <= $cols; $td++) {
                echo "<td>";
                $result = $td * $tr;
                if (($tr % 2 == 0) && ($td % 2 == 0)) {
                    echo "( $result )";
                } elseif (($tr % 2 != 0) && ($td % 2 != 0)) {
                    echo "[ $result ]";
                } else {
                    echo $result;
                }
                echo "</td>";
            }
        echo "</tr>";
    }
}
