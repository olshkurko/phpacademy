<p>Дано число $n = 1000. Делите его на 2 столько раз, пока результат деления не станет
меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для
этого (итерации — это количество проходов цикла), и запишите его в переменную $num.</p>
<?php
$num = 0;
for($n = 1000; $n >= 50; $n /= 2){
    $num++;
}
echo "Получается ${n}, итераций - ${num}";