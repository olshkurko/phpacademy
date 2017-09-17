<?php
//Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.</p>
$massive = ['html', 'css', 'php', 'js', 'jq'];
foreach ($massive as $value) {
    echo $value . '<br>';
}