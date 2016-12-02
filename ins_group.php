<html>
<head> <title>Добавление/удаление группы</title>
<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<?php
$igd=$_GET['gid'];
?>
<form id="ins" name="insertg" method="post" action=""  >
   <table width="100%" cellspacing="0" cellpadding="4">
    <tr> 
     <td align="right" width="100">Номер группы</td>
     <td><input type="text" name="gr" value="<?php echo $igd;?>" ></td>
    </tr>
	</table>
	<br>
<?php

?>	
<p><input name="butn1" type="submit" value="Сохранить" oncLick="document.forms.ins.action ='insg.php?gid=<?php if($igd>0){ echo $igd;} else {echo 0;}?>'" value="Удалить" />
<input  name="delete" type="submit" oncLick="document.forms.ins.action ='insg.php?gid=<?php if($igd>0){ echo $igd;} else {echo 0;}?>'" value="Удалить" />
</form>


<a href="group.php">Вернуться к списку групп>></a>

</body>
</html>