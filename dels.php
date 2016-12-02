<?php

$id=$_GET['id'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$second_name = $_POST['second_name'];
$group =$_POST['group'];
include "connBD.php";
if($id<>0)
{
$que=mysql_query("SELECT * FROM stud WHERE id_stud=$id");
$z = mysql_fetch_array ($que); 
}
 
 if($name !== $z['Name'] || $group !== $z['id_gr'] || $second_name !== $z['Second_name'] || $surname !== $z['Surname'])
	 {
		 $id=0; 			 
 }
 
if(isset($_POST['butn3'])&& $id==0) 
{
echo $id;
echo "Такой записи нет в БД. Её нельзя удалить.";
}
if(isset($_POST['butn3'])&& $id>0)
{  
	$q2 = "DELETE  FROM stud WHERE id_stud='$id'";
	$res=mysql_query($q2);
	if($res) {echo "Запись успешно удалена";}
}
?>
<a href="list_of_stud.php">Вернуться к списку студентов>></a>