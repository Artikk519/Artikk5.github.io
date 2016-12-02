<?php
//Подключение к БД
include "connBD.php"; 
//Получение данных из формы
if(isset($_POST['gr']))
{
$gr = $_POST['gr'];
}
else{
	echo "не введена группа";
}