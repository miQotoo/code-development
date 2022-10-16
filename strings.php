<?php

/* Задача 1.1. Дана строка «php». Сделайте из нее строку «PHP».
strtoupper - повышает регистр строки */
echo '1.1<br>';
$a = "PHP <br>";
$a = strtolower($a); 
echo $a; // выводит php

/* Задача 1.2. Дана строка «PHP». Сделайте из нее строку «php».
strtolower - понижает регистр строки */
echo '<br>1.2<br>';
$b = "php <br>";
$b = strtoupper($b); 
echo $b; // выводит PHP

/* Задача 1.3. Дана строка «london». Сделайте из нее строку «London».
ucfirst - повышает регистр первого символа в строке */
echo '<br>1.3<br>';
$c = "london <br>";
$c = ucfirst($c);
echo $c; // выводит London

/* Задача 1.4. Дана строка «London». Сделайте из нее строку «london».
lcfirst - понижает регистр первого символа в строке */
echo '<br>1.4<br>';
$d = "London <br>";
$d = lcfirst($d);
echo $d; // выводит london

/* Задача 1.5. Дана строка «london is the capital of great britain». Сделайте из нее строку
«London Is The Capital Of Great Britain». */
echo '<br>1.5<br>';
$e = "london is the capital of great britain <br>";
$e = ucwords($e);
echo $e; // выводит London Is The Capital Of Great Britain

/* Задача 1.6. Дана строка «LONDON». Сделайте из нее строку «London».*/
echo '<br>1.6<br>';
$f = "LONDON <br>";
$f = strtolower($f);
$f = ucfirst($f); 
echo $f; // выводит London

/* Задача 2.1. Дана переменная $password, в которой хранится пароль пользователя.
Если количество символов пароля больше 5-ти и меньше 10-ти, то выведите пользователю
сообщение о том, что пароль подходит, иначе сообщение о том, что нужно придумать
другой пароль. */
echo '<br>2.1<br>';
$password = 72312;
echo ((strlen($password) < 6) ? "пароль не подходит" : ((strlen($password) < 10) ? "пароль подходит" : "пароль не подходит"));
echo "<br>";

/* Задача 3.1. Дана строка «html css php». Вырежьте из нее и выведите на экран слово
«html', слово «css» и слово «php». */

echo '<br>3.1<br>';
$words = substr("html css php", -3); // выводит php
echo $words;
echo "<br>";
$wordss = substr("html css php", 4, -3); // выводит css
echo $wordss;
echo "<br>";
$wordsss = substr("html css php", 0, -7); // выводит html
echo $wordsss;
echo "<br>";

/* Задача 3.2. Дана строка. Вырежьте и выведите на экран последние 3 символа этой
строки.*/
echo '<br>3.2<br>';
$stroka = substr("aslfkaslasfoi", -3); // выводит foi
echo $stroka;
echo "<br>";

/* Задача 3.3. Дана строка. Проверьте, что она начинается на «http://». Если это так,
выведите «да', если не так - «нет».*/
echo '<br>3.3<br>';
$link = substr("http://vk.com", 0 , 7); 
if ($link == 'http://')
    {echo "да <br>";}
    else {echo "нет <br>";}

/* Задача 3.4. Дана строка. Проверьте, что она начинается на «http://» или на «https://».
Если это так, выведите «да', если не так - «нет».*/
echo '<br>3.4<br>';
$link = substr("https://gmail.com", 0, -9);
if ($link == 'http://')
    {echo "да <br>";}
    elseif ($link == 'https://')
        {echo "да <br>";}
        else {echo "нет <br>";}

/*Задача 3.5. Дана строка. Проверьте, что она заканчивается на «.png». Если это так,
выведите «да', если не так - «нет».*/
echo '<br>3.5<br>';
$kartinka = substr("cat.png", -4);
if ($kartinka == ".png") {echo "да <br>";}
else {echo "нет <br>";}

/*Задача 3.6. Дана строка. Проверьте, что она заканчивается на «.png» или на «.jpg».
Если это так, выведите «да', если не так - «нет».*/
echo '<br>3.6<br>';
$kartinka = substr("cat.png", -4);
if ($kartinka == '.png')
    {echo "да <br>";}
    elseif ($kartinka == '.jpg')
        {echo "да <br>";}
        else {echo "нет <br>";}

/* Задача 3.7. Дана строка. Если в этой строке более 5-ти символов - вырежьте из нее
первые 5 символов, добавьте троеточие в конец и выведите на экран. Если же в этой
строке 5 и менее символов - просто выведите эту строку на экран.*/
echo '<br>3.7<br>';
$a = '123456';
$b = strlen($a);
if ( $b > 5)  {
    echo substr($a, 5) . '...';
} else {
    echo $a;
}
echo '<br>';    

/*Задача 4.1. Дана строка «31.12.2022». Замените все точки на дефисы.*/
echo '<br>4.1<br>';
 $date = str_replace (".", "-", "31.12.2022" . "<br>");
 echo $date;

/* Задача 4.2. Дана строка «She looked again at the calendar». Замените в ней все буквы
«a» на цифру 1, буквы «e» - на 2, а буквы «n» - на 3 */
echo '<br>4.2<br>';
$string = "She looked again at the calendar <br>";
$numbers = array("1", "2", "3");
$letters = array("a", "e", "n");
$newstring = str_replace($letters, $numbers, $string);
echo $newstring;

/*Задача 4.3. Дана строка с буквами и цифрами, например, «1a2b3c4b5d6e7f8g9h0».
Удалите из нее все цифры. То есть в нашем случае должна получится строка «abcbdefgh».*/
echo '<br>4.3<br>';
$string = "1a2b3c4d5e6f7g8h9i0 <br>";
$numbers = array("1","2","3","4","5","6","7","8","9","0");
$nothing = array("");
$newstring = str_replace($numbers, $nothing, $string);
echo $newstring;

//5.1. Дана строка «She looked again at the calendar». Замените в ней все буквы «a» на цифру 1, буквы «e» - на 2, а буквы «n» - на 3.
echo '<br>5.1<br>';
$string = "She looked again at the calendar <br>";
$numbers = array("1", "2", "3");
$letters = array("a", "e", "n");
$newstring = str_replace($letters, $numbers, $string);
echo $newstring;

/* Задача 6.1. Дана строка «the password cannot be empty». Вырежите из нее подстроку
с 3-го символа (отсчет с нуля), 5 штук и вместо нее вставьте «!!!». substr_replace - в выбранном диапазоне заменяет символы на заданные*/
echo '<br>6.1<br>';
$var = 'the password cannot be empty';
echo substr_replace($var, '!!!', 3, 5);
echo "<br>";

/* Задача 7.1. Дана строка «abc abc abc». Определите позицию первой буквы «b». strpos - показывает позицию ПЕРВОГО вхождения символа в строке*/
echo '<br>7.1<br>';
$string = 'abc abc abc';
$find = 'b';
$pos = strpos($string, $find);
echo $pos, "<br>";

/* Задача 7.2. Дана строка «abc abc abc». Определите позицию последней буквы «b». strrpos - показывает позицию ПОСЛЕДНЕГО вхождения символа в строке*/
echo '<br>7.2<br>';
$string = 'abc abc abc';
echo (strrpos($string, 'b'));
echo '<br>';

/* Задача 7.3. Дана строка «abc abc abc». Определите позицию первой найденной
буквы b, если начать поиск не с начала строки, а с позиции 3*/
echo '<br>7.3<br>';
$string = 'abc abc abc';
echo(strrpos($string, 'b', 3));
echo '<br>'; 

/*Задача 7.4. Дана строка «aaa aaa aaa aaa aaa». Определите позицию второго пробела.*/
echo '<br>7.4<br>';
$string = 'aaa aaa aaa aaa aaa';
echo(strpos($string, ' ', 6));
echo '<br>';

/* Задача 7.5. Проверьте, что в строке есть две точки подряд. Если это так - выведите
«есть', если не так - «нет».*/
echo '<br>7.5<br>';
$mystring = 'vk..com';
$findme   = '..';
$pos = strpos($mystring, $findme);
if ($pos === false) {
    echo "нет" . "<br>";
} else {
    echo "есть" . "<br>";}

/* Задача 7.6. Проверьте, что строка начинается на «http://». Если это так - выведите
«да', если не так - «нет».*/
echo '<br>7.6<br>';
$mystring = 'http://vk.com';
$findme   = 'http://';
$pos = strpos($mystring, $findme);
if ($pos === false) {
    echo "нет" . "<br>";
} else {
    echo "да" . "<br>";}

/*Задача 8.1. Дана строка. Очистите ее от концевых пробелов.trim — Удаляет пробелы (или другие символы) из начала и конца строки*/
echo '<br>8.1<br>';
$text=  2323823 ;
$trimmed = trim($text);
print_r($trimmed);
echo "<br>";

/* Задача 8.2. Дана строка «/php/». Сделайте из нее строку «php', удалив концевые
слеши.*/
echo '<br>8.2<br>';
$text=  '/php' ;
$trimmed = trim($text, '/');
print_r($trimmed);
echo "<br>";

/* Задача 8.3. Дана строка «слова слова слова.». В конце этой строки может быть
точка, а может и не быть. Сделайте так, чтобы в конце этой строки гарантировано стояла
точка. То есть: если этой точки нет - ее надо добавить, а если есть - ничего не делать.
Задачу решите через rtrim без всяких ифов. rtrim — Удаляет пробелы (или другие символы) из конца строки*/
echo '<br>8.3<br>';
$str = 'слова слова слова.';
echo rtrim($str, '.') . '.' . "<br>";

/* Задача 9.1. Дана строка «12345». Сделайте из нее строку «54321».strrev — Переворачивает строку задом наперёд*/
echo '<br>9.1<br>';
echo strrev("12345");
echo '<br>';

/*Задача 9.2. Проверьте, является ли слово палиндромом (одинаково читается во всех
направлениях, примеры таких слов: madam, otto, kayak, nun, level).strrev — Переворачивает строку задом наперёд*/
echo '<br>9.2<br>';
$slovo1 = 'madam';
$slovo2 = 'madam';
strrev("slovo1");
if ($slovo1 == $slovo2) {echo  'является';}
else {echo 'не является';}
echo '<br>';

/*Задача 10.1. Дана строка «the password cannot be empty». Перемешайте символы
этой строки в случайном порядке. str_shuffle — Переставляет символы в строке случайным образом*/
echo '<br>10.1<br>';
$string = 'the password cannot be empty';
$shuffled = str_shuffle($string);
print_r($shuffled);
echo '<br>';

/* Задача 11.1. Дана строка «12345678». Сделайте из нее строку «12 345 678». number_format — Форматирует число с разделением групп*/
echo '<br>11.1<br>';
$str = '12345678';
$newStr = number_format($str, 0, ' ', ' ');
echo $newStr;
echo '<br>';

/* Задача 12.1. Дана строка «html, <b>php</b>, js». Удалите теги из этой строки. strip_tags — Удаляет теги HTML и PHP из строки*/
echo '<br>12.1<br>';
$text = "html, <b>php</b>, js";
echo strip_tags($text);
echo "<br>";

/*Задача 12.2. Дана строка «<div><span>the <a>password</a></span> cannot
<b><i>be</i></b> <strong>empty</strong></div>». Удалите все теги из этой строки, кроме
тегов <b> и <i>. strip_tags — Удаляет теги HTML и PHP из строки*/
echo '<br>12.2<br>';
$text = "<div><span>the <a>password</a></span> cannot <b><i>be</i></b> <strong>empty</strong></div>";
echo strip_tags($text, '<b><i>');
echo "<br>";

/* Задача 12.3. Дана строка «html, <b>php</b>, js». Выведите ее на экран «как есть': то
есть браузер не должен преобразовать <b> в жирный. htmlspecialchars — Преобразует специальные символы в HTML-сущности*/
echo '<br>12.3<br>';
$text = "html, <b>php</b>, js";
echo htmlspecialchars($text);
echo "<br>";

/*Задача 13.1. Узнайте код символов «a', «b', «c', пробела.  ord — Конвертирует первый байт строки в число от 0 до 255*/
echo '<br>13.1<br>';
$text1 = "a";
$text2 = "b";
$text3 = "c";
$text4 = " ";
echo(ord($text1));
echo "<br>";
echo(ord($text2));
echo "<br>";
echo(ord($text3));
echo "<br>";
echo(ord($text4));
echo "<br>";

/*Задача 13.2. Изучите таблицу ASCII. Определите границы, в которых
располагаются буквы английского алфавита.*/
echo '<br>13.2<br>';
echo '97-122 (строчные)' . '<br>';
echo '65-90 (заглавные)' . '<br>';
//97-122 (строчные)
//65-90 (заглавные)
// echo(chr(97));
// echo "<br>";
// echo(chr(122));
// echo "<br>";
// echo(chr(65));
// echo "<br>";
// echo(chr(90 ));
// echo "<br>";

/*Задача 13.3. Выведите на экран символ с кодом 33*/
echo '<br>13.3<br>';
echo(chr(33));
echo "<br>";

/* Задача 13.4. Запишите в переменную $str случайный символ - большую букву
латинского алфавита. Подсказка: с помощью таблицы ASCII определите какие целые
числа соответствуют большим буквам латинского алфавита. chr — Генерирует односимвольную строку по заданному числу*/
echo '<br>13.4<br>';
$minlength=65;
$maxlength=90;
$letter=rand($minlength,$maxlength);
echo chr($letter);
echo "<br>";

/*Задача 13.6. Дана буква английского алфавита «f». Узнайте, она маленькая или
большая. Выведите букву и результат на экран.*/
echo '<br>13.6<br>';
$a = 'f';
if ( (ord($a) >= 65) && (ord($a) <= 90)) {
 echo $a, ' ','буква большая'; } else {
 echo $a, ' ','буква маленькая'; }

/* Задача 14.1. Дана строка «ab-cd-ef». С помощью функции strchr выведите на экран
строку «-cd-ef».strchr - находит первое вхождение подстроки*/
echo '<br>14.1<br>';
$str = "ab-cd-ef";
echo strchr($str,'-') . "<br>";

/*Задача 14.2. Дана строка «ab-cd-ef». С помощью функции strrchr выведите на экран
строку «-ef». Показать решение. strrchr — Находит последнее вхождение символа в строке*/
echo '<br>14.2<br>';
$text = "ab-cd-ef";
echo strrchr($text, "-") . "<br>";

/*Задача 15.1. Дана строка «ab--cd--ef». С помощью функции strstr выведите на экран
строку «--cd--ef».*/
echo '<br>15.1<br>';
$text = "ab--cd--ef";
echo strstr($text, "--") . "<br>";

/*Дополнительная задача:
1 Преобразуйте строку «var_test_text» в «varTestText». Скрипт, конечно же, должен
работать с любыми аналогичными строками.*/
echo '<br>дополнительное задание<br>';
$str = "var_test_text";
$str = str_replace ("_", " ", "$str" . "<br>");
$str = ucwords($str);
$str = str_replace (" ", "", "$str" . "<br>");
$str = lcfirst($str);
echo $str;
?>