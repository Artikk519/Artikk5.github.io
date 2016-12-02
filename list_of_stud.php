<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head
<meta http-equiv="Content-Type" content="no-cache" charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style2.css">
<title>Список студентов</title>
</head>
  <head>
  
  <p align="right" href="#"><b>Студенты::</b><a href="group.php">Группы</a></p> 
  </head>
  <body> 
<a href="ins_stud.php">Добавить студента</a>
<?php

include "connBD.php"; 
$ath = mysql_query("SELECT * FROM stud");
if($ath)
{                  
  echo "<table border=0 cellspacing=5 cellpadding=4>";
  echo "<tr><td><b>ФИО</b></td><td>Группа</td>";
    while($fio = mysql_fetch_array($ath))
		 {
		$id=$fio['id_stud'];		
    echo "<tr><td>".$fio['Name']."&nbsp" .$fio['Second_name']."&nbsp".$fio['Surname'].	"</td><td>".  
    $fio['id_gr']."&nbsp;</td><td bordercolor=\"#3399FF\">"                                                                                                                              
	?>
	<a href="ins_stud.php?id=<?php echo $id;?>"> Изм</a> &nbsp <a href="del.php?id=<?php echo $id;?>">Удал.</a></td></tr>
<?php	
  }
   echo "</table>";
}

?>

</body>
</html>


