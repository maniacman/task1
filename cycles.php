Задачи для решения
Пирамидки
1) С помощью цикла for сформируйте строку '123456789' и запишите ее в переменную $str.
<?php
$str = '';
for ($i = 1; $i <= 9; $i++) {
	$str .= $i;
}
echo $str;
?>

2) С помощью цикла for сформируйте строку '987654321' и запишите ее в переменную $str.
<?php
$str = '';
for ($i = 9; $i > 0; $i--) {
	$str .= $i;
}
echo $str;
?>

3) С помощью цикла for сформируйте строку '-1-2-3-4-5-6-7-8-9-' и запишите ее в переменную $str.
<?php
$str = '-';
for ($i = 1; $i <= 9; $i++) {
	$str .= $i . '-';
}
echo $str;
?>

4) Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20 рядов, а не 5:
x
xx
xxx
xxxx
xxxxx
<?php
for ($i = 1; $i <= 20; $i++) {
	echo str_repeat('x', $i) . '<br>';
}
?>

5) С помощью двух вложенных циклов нарисуйте следующую пирамидку:
1
22
333
4444
55555
666666
7777777
88888888
999999999
// одним циклом
<?php
for ($i = 1; $i <= 9; $i++) {
	echo str_repeat($i, $i) . '<br>';
}
?>
// двумя циклами
<?php
for ($i = 1; $i <= 9; $i++) {
	for ($j = 1; $j <= $i; $j++) {
		echo $i;
	}
	echo '<br>';
}
?>

6) Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for:
xx
xxxx
xxxxxx
xxxxxxxx
xxxxxxxxxx
<?php
for ($i = 2; $i <= 10; $i += 2) {
	echo str_repeat('x', $i) . '<br>';
}
?>