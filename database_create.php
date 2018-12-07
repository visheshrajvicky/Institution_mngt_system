<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="#">
Enter Database Name :<input type="text" name="db"><br>
<input type="submit" name="sub">
</form>
<?php
if(isset($_POST['sub']))
{
	$database_name=$_POST['db'];
	$con=mysqli_connect('localhost','root','');
	echo $qry="CREATE DATABASE `$database_name`";
	$result=mysqli_query($con,$qry);
	if($result==true)
	{echo 'database craeted';
	}
	else
	{echo 'database not created';}
	mysqli_close($con);
}
?>
</body>
</html>