
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style2.css">
<title>Список групп</title>
</head>
  <head>
  <p align="right"><a href="list_of_stud.php"> Студенты</a>::Группы</p> 
  </head>
  <body> 
<a href="ins_group.php">Добавить группу</a>
<?php
include "connBD.php"; 
$ath = mysql_query("SELECT * FROM gr");
if($ath)
{
  echo "<table border=0 cellspacing=5 cellpadding=4>";
  echo "<tr><td><b>Группа</b></td>";
    while($gr = mysql_fetch_array($ath))
		 {
			 $gr_id=$gr['id_gr'];
    echo "<tr><td>" .$gr_id. "&nbsp";?> </td><td bordercolor=\"#3399FF\"><a href="ins_group.php?gid=<?php echo $gr_id;?>">Изм</a>
	 &nbsp <a href="delg.php?gid=<?php echo $gr_id;?>">Удал.</a></td></tr> 
	 <?php
  }
  mysql_close();
  echo "</table>";
}
?>

</body>
</html>
