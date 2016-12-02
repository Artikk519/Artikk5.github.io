<?php
$id=$_GET['id'];
include "connBD.php"; 
//Подключение к БД
if ($id<>0){
$que=mysql_query("SELECT * FROM stud WHERE id_stud=$id");
$z = mysql_fetch_array ($que); 
}
//Получение данных из формы
if(isset($_POST['name']))
{
$name = $_POST['name'];
}
else{
	echo "не введено имя";
}
if(isset($_POST['surname']))
{
$surname = $_POST['surname'];
}
else{
	echo "Не введена фамилия";
}
if(isset($_POST['second_name']))
{
$second_name = $_POST['second_name'];
}
else 
{
	echo "не введено отчество";
}
if(isset($_POST['group']))
{
$group =$_POST['group'];
}
else {
	"не введена группа";
}
if(isset($_POST['butn2']) && $id>0)
{
	$q2 = "UPDATE stud SET Name='$name', Surname='$surname', Second_name='$second_name',id_gr='$group' WHERE id_stud='$id'";
	$res=mysql_query($q2);
	if($res) {echo "БД обновлена";}
}
if(isset($_POST['butn2'])&& $id==0)
{
//Запрос в БД на внесение очередного студента
$query = "INSERT INTO stud (Name,Surname,Second_name,id_gr) VALUES ('".$name."','".$surname."','".$second_name."','".$group."')";      
$result = mysql_query($query);
if ($result) {echo "Добавлено в базу данных.";}
}


?>
 <a href="list_of_stud.php">Вернуться к списку студентов>></a>