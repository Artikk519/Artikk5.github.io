<html>

<head> <title>Добавление студента</title>
<link rel="stylesheet" type="text/css" href="style2.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
include "connBD.php";
 $id=$_GET['id'];
 if ($id<>0){
$que=mysql_query("SELECT * FROM stud WHERE id_stud=$id");
$z = mysql_fetch_array ($que); 
 }
 
?>
<form  name="insert" method="post" action="">
   <table width="100%" cellspacing="0" cellpadding="4">
    <tr> 
     <td align="right" width="100">Имя</td>
     <td><input type="text" name="name" value="<?php echo $z['Name']; ?>"></td>
    </tr>
    <tr> 
     <td align="right">Фамилия</td>
     <td><input type="text" name="surname" value="<?php echo $z['Surname'];?>"></td>
    </tr>
	 <tr> 
     <td align="right">Отчество</td>
     <td><input type="text" name="second_name" value="<?php echo $z['Second_name'];?>" ></td>
	 <tr> 
     <td align="right">Группа</td>
     <td>
	 <?php 
	
	 $gr = mysql_query("SELECT * FROM gr");
if ($gr==true) {
	?>
     <select name="group">
	 <option><?php echo $z['id_gr'];?></option>
	 <?php
     while ($s = mysql_fetch_array($gr)) {
		 
          echo "<option>".$s['id_gr']."</option>";
		  
     }
  echo "</select>";
}
else {
    echo "Группы отсутствуют";
}
?> 
	 </td>
    </tr>
	</table>
	<br>
<p><input name="butn2"  type="submit" value="Сохранить" oncLick="document.forms.insert.action ='ins.php?id=<?php if($id>0){ echo $id;} else {echo 0;}?>'"/>
<input name="butn3"  type="submit" value="Удалить" oncLick="document.forms.insert.action ='dels.php?id=<?php if($id>0){ echo $id;} else {echo 0;}?>'" />
</form>
<a href="list_of_stud.php">Вернуться к списку студентов>></a>


</body>
</html>