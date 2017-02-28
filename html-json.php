<tt>запрос обрабатывается ...</tt>
<?php
/*Домашнее задание к лекции 2.1 «Установка и настройка веб-сервера»

Необходимо вывести таблицу из JSON-файла в виде HTML таблицы.

JSON-файл хранит данные телефонной книжки.

Пример JSON-файла:


[{
  "firstName": "Иван",
  "lastName": "Иванов",
  "address": "г.Москва, ул. Алиева,2",
  "phoneNumber": "812 123-1234"
}, {
  ...
}]
*/
$url = mb_convert_encoding ($url, "UTF-8");
$site = file_get_contents ("db.json");

$str = explode ("\"",$site);
$i = 0;
$y = count($str);
$z = 0;

while ($i<$y) {
  
  if (($i%2) == 1) {echo $str[$i];$z++;}
  $i++;
  if (($z%2) == 0) {echo "<br>";}
}


?>
 