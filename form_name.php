<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

</head>
<body>
<?php
//Вывод массива с данными полученными от формы ниже
echo '<pre>';
var_dump($_REQUEST);
echo '</pre>';


// Инициализируем массив парами, ключ:значение, где значения берем из данных полей формы
$arUserInfo = array("name"=>$_REQUEST['user_name'],
    "patronymic"=>$_REQUEST['user_second_name'],
    "surname"=>$_REQUEST['user_last_name'],
    "city"=>$_REQUEST['city'],
    "street"=>$_REQUEST['street'],
    "house_number"=>$_REQUEST['house_number'],
    "room_number"=>$_REQUEST['room_number'],
    );
/*
 Парсим ассоциативный массив с данными из формы в json строку, с включенным переносом
 строк и без кодирования эскейп последовательностей
*/
$strUserInfo = json_encode($arUserInfo, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
?>

	<form action="" method="POST">
		<strong>Ваше имя<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_name" id="user_name" value=""><br>

		<strong>Ваше отчество<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_second_name" id="user_second_name" value=""><br>

		<strong>Ваша фамилия<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_last_name" id="user_last_name" value=""><br>

		<strong>Ваш адрес (город)<span class="mf-req">*</span></strong><br>
		<input type="text" name="city" id="city" value=""><br>

        <strong>Ваш адрес (улица)<span class="mf-req">*</span></strong><br>
        <input type="text" name="street" id="street" value=""><br>

        <strong>Ваш адрес (дом)<span class="mf-req">*</span></strong><br>
        <input type="text" name="house_number" id="house_number" value=""><br>

        <strong>Ваш адрес (квартира)<span class="mf-req">*</span></strong><br>
        <input type="text" name="room_number" id="room_number" value=""><br>

		<input type="submit" name="submit" id="submit" value="Отправить">
	</form>
<div id="result">
    <!-- Выводим json строку в элемент div -->
    <br>
	<?=$strUserInfo?>
</div>
</body>
</html>