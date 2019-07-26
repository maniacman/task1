Задачи для решения
1) Сделайте функцию isNumberInRange, которая параметром принимает число и проверяет, что оно больше нуля и меньше 10. 
Если это так - пусть функция возвращает true, если не так - false.
<?php
function isNumberInRange($num) {
	return $num >0 && $num < 10;
}
$num = 5;
echo isNumberInRange($num);
?>

2) Дан массив с числами. Запишите в новый массив только те числа, которые больше нуля и меньше 10-ти. Для этого используйте 
вспомогательную функцию isNumberInRange из предыдущей задачи.
<?php
$arr = [-1, 3, 11, 1, 14, 24, 0, -50];
$result = false;
foreach ($arr as $a) {
	if (isNumberInRange($a)) {
		$result[] = $a;
	}
}
print_r($result);

function isNumberInRange($num) {
	return $num >0 && $num < 10;
}
?>

3) Сделайте функцию getDigitsSum (digit - это цифра), которая параметром принимает целое число и возвращает сумму его цифр.

<?php 
$num = 34512;
function getDigitsSum($num) {
	if (is_int($num)) {
		$arr = str_split($num);
		return $result = array_sum($arr);   
	}
	echo 'Введите целое число';
}
echo getDigitsSum($num);
?>

4) Найдите все года от 1 до 2019, сумма цифр которых равна 13. Для этого используйте вспомогательную функцию getDigitsSum из предыдущей задачи.
<?php 
for ($i = 1; $i <= 2019; $i++) {
	$sum = getDigitsSum($i);
	if ($sum == 13) {
		echo $i . '<br>';
	}
}
function getDigitsSum($num) {	
	$arr = str_split($num);
	return $result = array_sum($arr);
}
?>

5) Сделайте функцию isEven() (even - это четный), которая параметром принимает целое число и проверяет: четное оно или нет. 
Если четное - пусть функция возвращает true, если нечетное - false.
<?php 
$num = 8;
function isEven($num) {
	if ($num % 2 == 0) {
		return true;
	} else {
		return false;
	}
}
echo isEven($num);
?>

6) Дан массив с целыми числами. Создайте из него новый массив, где останутся лежать только четные из этих чисел. 
Для этого используйте вспомогательную функцию isEven из предыдущей задачи.
<?php
$arr = [-1, 3, 11, 1, 14, 24, 0, -50];
$result = false;
foreach ($arr as $a) {
	if (isEven($a)) {
		$result[] = $a;
	}
}
print_r($result);
function isEven($num) {
	if ($num % 2 == 0) {
		return true;
	} else {
		return false;
	}
}
?>

7) Сделайте функцию getDivisors, которая параметром принимает число и возвращает массив его делителей (чисел, на которое делится 
данное число).
<?php
$num = 30;
function getDivisors($num) {
	for ($i = 1; $i <= $num; $i++) {
		if ($num % $i == 0) {
			$arr[] = $i;
		}
	}
	return ($arr);
}
$result = getDivisors($num);
print_r($result);
?>

8) Сделайте функцию getCommonDivisors, которая параметром принимает 2 числа, а возвращает массив их общих делителей. 
Для этого используйте вспомогательную функцию getDivisors из предыдущей задачи.
<?php
$num1 = 36;
$num2 = 48;

function getCommonDivisors($num1, $num2) {
	$arr1 = getDivisors($num1);
	$arr2 = getDivisors($num2);
	return $result = array_intersect($arr1, $arr2);
}

function getDivisors($num) {
	for ($i = 1; $i <= $num; $i++) {
		if ($num % $i == 0) {
			$arr[] = $i;
		}
	}
	return ($arr);
}

$result = getCommonDivisors($num1, $num2);
print_r($result);
?>
