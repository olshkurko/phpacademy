<?php
$name = "Саша";
$age = 30;
echo "Меня зовут: $name" . '<br/>';
echo "Мне $age лет" . '<br/>';
if ($age >= 18 && $age <= 59) {
    echo "Вам еще работать и работать!" . '<br/>';
}
if ($age > 59) {
    echo "Вам пора на пенсию!" . '<br/>';
}
if ($age > 0 && $age < 18) {
    echo "Вам еще рано работать" . '<br/>';
}
if ($age < 0) { //непонятно как обозначить "не число"
    echo "Неизвестный возраст" . '<br/>';
//  Новая
//       задача 1
}
$day = 8;
switch ($day) {
    case 1 :
    case 2 :
    case 3 :
    case 4 :
    case 5 :
        echo "Это рабочий день" . '<br/>';
        break;
    case 6 :
    case 7 :
        echo "Это выходной день" . '<br/>';
        break;
    default :
        echo "Неизвестный день" . '<br/>';
        break;
}
//  Новая
//       задача 13
$s = 200;
$t = 1;
$speed = $s / $t;
$speed_2 = $s * 1000 / $t / 3600;
echo "скорость автомобиля $speed км/час" . '<br/>';
echo "скорость автомобиля $speed_2 м/сек" . '<br/>';
//  Новая
//       задача 14
$foo = 'bar';
$bar = 10;
$foo = $bar;
echo "$foo";
//  Новая
//       задача 15
$a = 5;
$b = 100;
$operator = '/';
if ($b == 0 and $operator == '/') {
    echo "на 0 делить низя" . '<br/>';
} else {
    if ($operator == '+') {
        $result = $a + $b;
    }
    if ($operator == '-') {
        $result = $a - $b;
    }
    if ($operator == '/') {
        $result = $a / $b;
    }
    if ($operator == '*') {
        $result = $a * $b;
    }
    if ($operator == '%') {
        $result = $a % $b;
    }
    echo $result . '<br/>';
}
//  Новая
//       задача 16
$a_1 = 9;
$b_1 = 7;
echo max($a_1, $b_1) . '<br/>';
//  Новая
//       задача 17
$d = 78;
$f = '78';
if ($d === $f) {
    echo "нормально все" . '<br/>';
} else {
    echo "ну такое" . '<br/>';
}
//  Новая
//       задача 18
$d_1 = 78;
$f_1 = '78';
if ($d_1 == $f_1) {
    echo "нормально все" . '<br/>';
} else {
    echo "ну такое" . '<br/>';
}
//  Новая
//       задача 19
$d_2 = 78;
$f_2 = '78';
var_dump($d_2 === $f_2);
//  Новая
//       задача 20
var_dump((bool)"20");
