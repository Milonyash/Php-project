<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html>
<head>

<title>Данные</title>
<style>

   table {
    width: 300px; 
    margin: auto; 
    margin-top: 200px;
	 background:#D8BFD8;
   }
   caption {
 font-family: Arial;
 font-size: 150%;

}
  </style>
</head>
<body>
<form method="post"> 

<table  width="100%" cellspacing="0" cellpadding="4" >
 <caption>Введите данные</caption>


<form method="post" action="">
<form autocomplete="on">
<tr> 
   <td align="left">Ступень</td>
   <td> <select name="s">
        <option value="1">Бакалавр</option>
        <option value="2">Магистр</option>
    </select>
	</td>
</tr>
	<tr>
  <td align="rigth">Курс</td>
     <td align="left">  <input type="text" name="course" maxlength="30" size="20"></td>
    </tr>
<tr>
  <td align="rigth">Группа</td>
     <td align="left"><input type="text" name="group" maxlength="30" size="20"></td>
    </tr>
<tr>
  <td align="rigth">Подгруппа</td>
     <td align="left"><input type="text" name="group_part" maxlength="30" size="20"></td>
 </tr>
	 <tr>
	<td align="rigth">Дисциплина</td>
     <td align="left"><input type="text" name="subj" maxlength="30" size="20"></td>
  </tr>
<tr>
	<td align="right"> </td>
	<td><button type="submit"  style="width:90;height:30" >Ok</button></td>	
	</tr>
	<tr>
	<td colspan="2" align="center"> 
	<?php

 if($_SERVER["REQUEST_METHOD"] == "POST"){
 $course=$_POST["course"];
$group=$_POST["group"];
$group_part=$_POST["group_part"];
$subj= $_POST["subj"];

if(empty($course))
{echo "<font color='white'>Необходимо указать курс<br></font>";
}
if(empty($group))
{echo "<font color='white'>Необходимо указать группу<br></font>";
}
if(empty($group_part))
{echo "<font color='white'>Необходимо указать подгруппу<br></font>";
}
if(empty($subj))
{echo "<font color='white'>Необходимо указать дисциплину<br></font>";
}
else 
{
require("connect.php");
$sql = "select * from student where login='$login' and password='$pass'";
$result = mysqli_query($conn, $sql);

 header ('Location: first.php'); 
 }}?>
 </td>
 </tr>
	</table>

</form>
</body>
</html>
	