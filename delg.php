<?php
include "connBD.php";
$igd = $_GET['gid'];  
$query = "DELETE FROM gr  WHERE id_gr = $igd";
$result = mysql_query($query); 
if($result)
{
	echo "Удаление группы прошло успешно ";  
}

?>
<a href="group.php">Вернуться к списку групп>></a>