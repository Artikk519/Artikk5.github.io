<?php

$igd=$_GET['gid'];
$ngr=$_POST['gr'];

include "connBD.php";
if(isset($_POST['butn1'])&& $igd==0)
{
$query = "INSERT INTO gr  VALUES ('".$_POST['gr']."')";      
$result = mysql_query($query);
if ($result) {echo "Добавлено в базу данных.";}
}
if(isset($_POST['butn1'])&& $igd>0)
{  
	$q2 = "UPDATE gr SET id_gr='$ngr' WHERE id_gr='$igd'";
	$res=mysql_query($q2);
	if($res) {echo "БД обновлена";}
}

if(isset($_POST['delete'])&& $igd<>$ngr)
{
echo "Такой записи нет в БД. Её нельзя удалить.";
}
if(isset($_POST['delete'])&& $igd==$ngr)
{  
	$q2 = "DELETE  FROM gr WHERE id_gr='$igd'";
	$res=mysql_query($q2);
	if($res) {echo "Запись успешно удалена";}
}
?>
<a href="group.php">Вернуться к списку групп>></a>