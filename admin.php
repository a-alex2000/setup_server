<a href = "list.php?id=1">list.php?id=1</a>
<form enctype="multipart/form-data" action="admin.php" method="POST">
    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <!-- Название элемента input определяет имя в массиве $_FILES -->
    <table border=1>
    <tr><td>Отправить этот файл: </td><td><input name="userfile" type="file" /></td></tr>
    <tr><td>Send File</td><td><input type="submit" value="Send File" /></td></tr>
    </table>
    
</form>
<?php

// Каталог, в который мы будем принимать файл:
$uploaddir = './';
$uploadfile = $uploaddir.basename($_FILES['userfile']['name']);

// Копируем файл из каталога для временного хранения файлов:
if (isset($_FILES['userfile']['tmp_name'])) if (copy($_FILES['userfile']['tmp_name'], $uploadfile))
{
echo "<h3>Файл успешно загружен на сервер</h3>";
}
else { echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>"; exit; }
echo "отладочная иформация"."</br>";
echo $_FILES['userfile']['name']."</br>";
echo $_FILES['userfile']['size']."</br>";
echo $_FILES['userfile']['type']."</br>";
echo $_FILES['userfile']['tmp_name']."</br>";
echo $_FILES['userfile']['error']."</br>";


/*
Домашнее задание к лекции 2.2 «Обработка форм»

Генератор тестов на PHP и JSON:

Создать файл admin.php с формой через которую на сервер можно загрузить JSON файл c тестом.
Создать файл list.php со списком загруженных тестов.
Создать файл test.php, который:
Принимает в качестве GET-параметра номер теста, и отображает форму теста.
Если форма отправлена, проверяет и показывает результат.
*/


?>