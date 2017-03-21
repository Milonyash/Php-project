<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html>
<head>

<title>Welcome</title>
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
 <caption>Создание аттестационной ведомости</caption>
    <tr> 
     <td align="right" width="100">Login</td>
     <td><input type="text" name="login" maxlength="70" size="20"></td>
    </tr>
    <tr> 
     <td align="right">Password</td>
     <td><input type="text" name="pass" maxlength="70" size="20"></td>
    </tr>
	<tr>
	<td align="right"> </td>
	<td><button type="submit"  style="width:90;height:30" >Ok</button></td>	
	</tr>
	<tr>
	<td colspan="2" align="center"> <?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){
$login=$_POST["login"];
$pass=$_POST["pass"];

if(empty($login)||empty($pass))
{echo "<font color='white'>Please,enter login and password</font>";
}
else 
{
require("connect.php");
$sql = "select * from users where login='$login' and password='$pass'";
$result = mysqli_query($conn, $sql);
$r = mysqli_fetch_assoc($result); 
if(empty($r))
echo"<font color='white'>User not found</font>";
else{
$isAdmin=$r["isAdmin"];
 header ('Location: first.php'); 
}

mysqli_close($conn);
}
}
?>
</td>
</tr>
</table>

      

</form>
</body>
</html>

