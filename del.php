<?php
 
include "connBD.php";
$id = $_GET['id'];  
$query = "DELETE FROM stud  WHERE id_stud = $id";
$result = mysql_query($query); 
if($result)
{
	echo "Удаление прошло успешно ";  
}


echo "<a href=\"list_of_stud.php\">Вернуться к списку студентов>></a>";
?>