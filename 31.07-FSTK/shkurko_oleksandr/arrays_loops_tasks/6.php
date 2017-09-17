<?php
//Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а
//русские — в массив $ru.
//$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
//$en = array('green', 'red','blue');
//$ru = array('зеленый', 'красный', 'голубой');</p>
$arr = array('green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой');
$en = [];
$ru = [];
foreach ($arr as $eng => $rus) {
    array_push($en, $eng);
    array_push($ru, $rus);
}
print_r($en);
print_r($ru);