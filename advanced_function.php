Задачи для решения
Значения по умолчанию
1) Сделайте функцию cut, которая первым параметром будет принимать строку, а вторым параметром - сколько первых символов оставить в этой строке. 
Второй параметр должен быть необязательным и по умолчанию принимать значение 10.
<?php 
function cutString($string, $num = 10)
{
	return substr($string, 0, $num);
}

echo cutString('You spin me right round');
?>

Работа с рекурсией
2) Дан массив с числами. Выведите последовательно его элементы используя рекурсию и не используя цикл.
<?php 
$arr = [3, 1, -8, 0, 12,38];
function echoArray($arr)
{
	static $a;
	$a++;
	if ($a <= count($arr))
	{
		echo $arr[$a - 1] . '<br>';
		echoArray($arr);
	}
}
echoArray($arr);
?>

3) Дано число. Сложите его цифры. Если сумма получилась более 9-ти, опять сложите его цифры. И так, пока сумма не станет однозначным числом (9 и менее). 
<?php
function lowNum($num)
{
	$arr = str_split($num);
	$result = array_sum($arr);
	if ($result > 9) 
	{
		$result = lowNum($result);
	}
	return $result;
}
$num = 999444;
echo lowNum($num);
?>
