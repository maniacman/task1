Задачи для решения
Работа с регистром символов
Для решения задач данного блока вам понадобятся следующие функции: strtolower, strtoupper, ucfirst, lcfirst, ucwords.
1) Дана строка 'php'. Сделайте из нее строку 'PHP'.
$text = 'php';
$text = strtoupper($text);
echo $text;

2) Дана строка 'PHP'. Сделайте из нее строку 'php'.
$text = 'PHP';
$text = strtolower($text);
echo $text;

3) Дана строка 'london'. Сделайте из нее строку 'London'.
$text = 'london';
$text = ucfirst($text);
echo $text;

4) Дана строка 'London'. Сделайте из нее строку 'london'.
$text = 'London';
$text = lcfirst($text);
echo $text;

5) Дана строка 'london is the capital of great britain'. Сделайте из нее строку 'London Is The Capital Of Great Britain'.
$text = 'london is the capital of great britain';
$text = ucwords($text);
echo $text;

6) Дана строка 'LONDON'. Сделайте из нее строку 'London'.
$text = 'LONDON';
$text = ucfirst(strtolower($text));
echo $text;

Работа с strlen
Для решения задач данного блока вам понадобятся следующие функции: strlen.
7) Дана строка 'html css php'. Найдите количество символов в этой строке.
$text = 'html css php';
echo 'В этой строке ' . strlen($text) . ' симоволов';

8) Дана переменная $password, в которой хранится пароль пользователя. Если количество символов пароля больше 5-ти и 
меньше 10-ти, то выведите пользователю сообщение о том, что пароль подходит, иначе сообщение о том, что нужно придумать другой пароль.
$password = 'abracadabra';
if (strlen($password) > 5 && strlen($password) < 10) echo 'Пароль подходит!'; else echo 'Надо придумать другой пароль!';

Работа с substr
Для решения задач данного блока вам понадобятся следующие функции: substr.
9) Дана строка 'html css php'. Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'.
$text = 'html css php';
$pieces = explode(' ', $text);
foreach ($pieces as $elem) {
	echo $elem . '<br>';
}

10) Дана строка. Вырежите и выведите на экран последние 3 символа этой строки.
$text = 'One two three';
$result = substr($text, -3, 3);
echo $result;

11) Дана строка. Проверьте, что она начинается на 'http://'. Если это так, выведите 'да', если не так - 'нет'.
$url = 'http://apple.com';
if (substr($url, 0, 7) == 'http://') echo 'да'; else echo 'нет';

12) Дана строка. Проверьте, что она начинается на 'http://' или на 'https://'. Если это так, выведите 'да', если не так - 'нет'.
$url = 'http://apple.com';
if (substr($url, 0, 7) == 'http://' or substr($url, 0, 8) == 'https://') echo 'да'; else echo 'нет';

13) Дана строка. Проверьте, что она заканчивается на '.png'. Если это так, выведите 'да', если не так - 'нет'.
$filename = 'sun.png';
if (substr($filename, -4, 4) == '.png') echo 'да'; else echo 'нет';

14) Дана строка. Проверьте, что она заканчивается на '.png' или на '.jpg'. Если это так, выведите 'да', если не так - 'нет'.
$filename = 'sun.png';
if (substr($filename, -4, 4) == '.png' or substr($filename, -4, 4) == '.jpg') echo 'да'; else echo 'нет';

15) Дана строка. Если в этой строке более 5-ти символов - вырежите из нее первые 5 символов, добавьте троеточие в конец и выведите на экран. 
Если же в этой строке 5 и менее символов - просто выведите эту строку на экран.
$string = 'life is life lalalalala';
if (strlen($string) > 5) $piece = substr($string, 5) . '...';
echo $piece;

Работа с str_replace
Для решения задач данного блока вам понадобятся следующие функции: str_replace.
16) Дана строка '31.12.2013'. Замените все точки на дефисы.
$string = '31.12.2013';
$string = str_replace('.', '-', $string);
echo $string;

17) Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.
$str = 'I was made for loving you, baby! How much is the fish?';
$str = str_replace('a', '1', $str);
$str = str_replace('b', '2', $str);
$str = str_replace('c', '3', $str);
echo $str;

18) Дана строка с буквами и цифрами, например, '1a2b3c4b5d6e7f8g9h0'. Удалите из нее все цифры. 
То есть в нашем случае должна получится строка 'abcbdefgh'.
$str = '1a2b3c4b5d6e7f8g9h0';
$str = preg_replace('/[0-9]+/', '', $str);
echo $str;

Работа с strtr
Для решения задач данного блока вам понадобятся следующие функции: strtr.
19) Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3. 
Решите задачу двумя способами работы с функцией strtr (массив замен и две строки замен).
$str = 'I was made for loving you, baby! How mach is the fish?';
$trans = ['a' => 1, 'b' => 2, 'c' => 3];
echo strtr($str, $trans) . '<br>';
$text = strtr($str, 'a', '1');
$text = strtr($text, 'b', '2');
$text = strtr($text, 'c', '3');
echo $text;

Работа с substr_replace
Для решения задач данного блока вам понадобятся следующие функции: substr_replace.
20) Дана строка $str. Вырежите из нее подстроку с 3-го символа (отсчет с нуля), 5 штук и вместо нее вставьте '!!!'.
$str = 'I was made for loving you, baby! How mach is the fish?';
echo substr_replace($str, '!!!', 2, 5);

Работа с strpos, strrpos
Для решения задач данного блока вам понадобятся следующие функции: strpos, strrpos.
21) Дана строка 'abc abc abc'. Определите позицию первой буквы 'b'.
$str = 'abc abc abc';
echo strpos($str, 'b');

22) Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.
$str = 'abc abc abc';
echo strrpos($str, 'b', );

23) Дана строка 'abc abc abc'. Определите позицию первой найденной буквы 'b', 
если начать поиск не с начала строки, а с позиции 3.
$str = 'abc abc abc';
echo strpos($str, 'b', 3);

24) Дана строка 'aaa aaa aaa aaa aaa'. Определите позицию второго пробела.
$str = 'aaa aaa aaa aaa aaa';
$first = strpos($str, ' ');
echo strpos($str, ' ', $first + 1);

25) Проверьте, что в строке есть две точки подряд. Если это так - выведите 'есть', если не так - 'нет'.
$str = 'aaa aaa aaa aaa aaa';
if (strpos($str, '..') !== false) echo 'да'; else echo 'нет';

26) Проверьте, что строка начинается на 'http://'. Если это так - выведите 'да', если не так - 'нет'.
$url = 'http://apple.com';
if (strpos($url, 'http://') === 0) echo 'да'; else echo 'нет';

Работа с explode, implode
Для решения задач данного блока вам понадобятся следующие функции: explode, implode.
27) Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.
$str = 'html css php';
$arr = explode(' ', $str);
var_dump($arr);

28) Дан массив с элементами 'html', 'css', 'php'. С помощью функции implode создайте строку из этих элементов, 
разделенных запятыми.
$arr = ['html', 'css', 'php'];
echo implode(',', $arr);

29) В переменной $date лежит дата в формате '2013-12-31'. Преобразуйте эту дату в формат '31.12.2013'.
$date = '2013-12-31';
$arr = explode('-', $date);
echo $arr[2] . '.' . $arr[1] . '.' . $arr[0];

Работа с str_split
Для решения задач данного блока вам понадобятся следующие функции: str_split.
30) Дана строка '1234567890'. Разбейте ее на массив с элементами '12', '34', '56', '78', '90'.
$str = '1234567890';
$arr = str_split($str, 2);
var_dump($arr);

31) Дана строка '1234567890'. Разбейте ее на массив с элементами 
'1', '2', '3', '4', '5', '6', '7', '8', '9', '0'.
$str = '1234567890';
$arr = str_split($str);
var_dump($arr);

32) Дана строка '1234567890'. Сделайте из нее строку '12-34-56-78-90' не используя цикл.
$str = '1234567890';
$str2 = implode('-', str_split($str, 2));
echo $str2;

Работа с trim, ltrim, rtrim
Для решения задач данного блока вам понадобятся следующие функции: trim, ltrim, rtrim.
33) Дана строка. Очистите ее от концевых пробелов.
$str = ' lorem ';
$str = trim($str);
echo $str;

34) Дана строка '/php/'. Сделайте из нее строку 'php', удалив концевые слеши.
$str = '/php/';
$str = trim($str, '/');
echo $str;

35) Дана строка 'слова слова слова.'. В конце этой строки может быть точка, а может и не быть. Сделайте так, 
чтобы в конце этой строки гарантировано стояла точка. То есть: если этой точки нет - ее надо добавить, 
а если есть - ничего не делать. Задачу решите через rtrim без всяких ифов.
$str = 'слова слова слова.';
$str = rtrim($str, '.') . '.';
echo $str;


Работа с strrev
Для решения задач данного блока вам понадобятся следующие функции: strrev.
36) Дана строка '12345'. Сделайте из нее строку '54321'.
$str = '12345';
$str = strrev($str);
echo $str;

37) Проверьте, является ли слово палиндромом (одинаково читается во всех направлениях, примеры таких слов: 
madam, otto, kayak, nun, level).
$str1 = 'kavabanga';
$str2 = 'level';
if ($str1 == strrev($str1)) echo $str1 . ' является палиндромом' . '<br>'; else echo $str1 . ' не является палиндромом' . '<br>';
if ($str2 == strrev($str2)) echo $str2 . ' является палиндромом' . '<br>'; else echo $str2 . ' не является палиндромом' . '<br>';

Работа с str_shuffle
Для решения задач данного блока вам понадобятся следующие функции: str_shuffle.
38) Дана строка. Перемешайте символы этой строки в случайном порядке.
$str = 'abcdef';
echo str_shuffle($str);

39) Создайте строку из 6-ти случайных маленьких латинских букв так, чтобы буквы не повторялись. 
Нужно сделать так, чтобы в нашей строке могла быть любая латинская буква, а не ограниченный набор.
$str = 'abcdefghijklmnopqrstuvwxyz';
$str = str_shuffle($str);
$str = substr($str,13,6);
echo $str;

Работа с number_format
Для решения задач данного блока вам понадобятся следующие функции: number_format.
40) Дана строка '12345678'. Сделайте из нее строку '12 345 678'.
$str = '12345678';
$str = number_format($str, 0, '', ' ');
echo $str;


Работа с str_repeat
Для решения задач данного блока вам понадобятся следующие функции: str_repeat.
41) Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5. 
Решите задачу с помощью одного цикла и функции str_repeat.
x
xx
xxx
xxxx
xxxxx

for ($i = 1; $i <= 9; $i++) echo str_repeat('x', $i) . '<br>';


42) Нарисуйте пирамиду, как показано на рисунке. Решите задачу с помощью одного цикла и функции str_repeat.

1
22
333
4444
55555
666666
7777777
88888888
999999999

for ($i = 1; $i <= 9; $i++) echo str_repeat("$i", $i) . '<br>';

Работа с strip_tags и htmlspecialchars
Для решения задач данного блока вам понадобятся следующие функции: htmlspecialchars, strip_tags.
43) Дана строка 'html, <b>php</b>, js'. Удалите теги из этой строки.
$str = 'html, <b>php</b>, js';
$str = strip_tags($str);
echo $str;

44) Дана строка $str. Удалите все теги из этой строки, кроме тегов <b> и <i>.
$str = '<span>html</span>, <b>php</b>, <i>js</i>';
$str = strip_tags($str, '<b><i>');
echo $str;

45) Дана строка 'html, <b>php</b>, js'. Выведите ее на экран 'как есть': то есть браузер не должен преобразовать <b> в жирный.
	$str = 'html, <b>php</b>, js';
	echo htmlspecialchars($str);

Работа с chr и ord
Для решения задач данного блока вам понадобятся следующие функции: chr, ord.
46) Узнайте код символов 'a', 'b', 'c', пробела.
echo "Код символа 'a' " . ord('a') . '<br>';
echo "Код символа 'b' " . ord('b') . '<br>';
echo "Код символа 'c' " . ord('c') . '<br>';
echo "Код символа ' ' " . ord(' ') . '<br>';


Изучите таблицу ASCII. Определите границы, в которых располагаются буквы английского алфавита.
47) Выведите на экран символ с кодом 33.
echo chr(33);

48) Запишите в переменную $str случайный символ - большую букву латинского алфавита. 
Подсказка: с помощью таблицы ASCII определите какие целые числа соответствуют большим буквам латинского алфавита.
echo chr(mt_rand(65, 90));

49) Запишите в переменную $str случайную строку $len длиной, состоящую из маленьких букв 
латинского алфавита. Подсказка: воспользуйтесь циклом for или while.
$len = 13;
for ($i = 0; $i <= $len; $i++) {
	$str .= chr(mt_rand(97, 122));
}
echo $str;


50) Дана буква английского алфавита. Узнайте, она маленькая или большая.
$letter = 'z';
if (ord($letter) >= 65 && ord($letter) <= 90) echo 'буква \'' . $letter . '\' большая'; else echo 'буква \'' . $letter . '\' маленькая';

Работа с strchr, strrchr
Для решения задач данного блока вам понадобятся следующие функции: strchr, strrchr.
51) Дана строка 'ab-cd-ef'. С помощью функции strchr выведите на экран строку '-cd-ef'.
$str = 'ab-cd-ef';
echo strchr($str, '-');

52) Дана строка 'ab-cd-ef'. С помощью функции strrchr выведите на экран строку '-ef'. Показать решение. Показать решение.
$str = 'ab-cd-ef';
echo strrchr($str, '-');

Работа с strstr
Для решения задач данного блока вам понадобятся следующие функции: strstr.
53) Дана строка 'ab--cd--ef'. С помощью функции strstr выведите на экран строку '--cd--ef'.
$str = 'ab--cd--ef';
echo strchr($str, '--');


Задачи
54) Преобразуйте строку 'var_test_text' в 'varTestText'. Скрипт, конечно же, должен работать с любыми аналогичными строками.
$str = 'var_test_text';
$arr = explode('_', $str);
foreach ($arr as $elem) {
	$result .= ucfirst($elem);
}
$result = lcfirst($result);
echo $result;

55) Дан массив с числами. Выведите на экран все числа, в которых есть цифра 3.
$arr = [300, 547, 347, 159, 475, 208, 763, 814, 333];
foreach ($arr as $elem) {
	if (strrpos($elem, '3') !== false) echo $elem . '<br>';
}