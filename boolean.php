1) Сделайте функцию, которая параметрами принимает 2 числа. Если эти числа равны - пусть функция вернет true, а если не равны - false.
<?php
function equal($a, $b) {
	return $a == $b;
}
$a = 5;
$b = 5;
echo equal($a, $b);
?>

2) Сделайте функцию, которая параметрами принимает 2 числа. Если их сумма больше 10 - пусть функция вернет true, а если нет - false.
<?php
function biggerTen($a, $b) {
	return $a + $b > 10;
}
$a = 5;
$b = 5;
echo biggerTen($a, $b);
?>

3) Сделайте функцию, которая параметром принимает число и проверяет - отрицательное оно или нет. Если отрицательное - пусть функция вернет true, а если нет - false.
<?php
function sign($a) {
	return $a < 0;
}
$a = 5;
echo sign($a);
?>