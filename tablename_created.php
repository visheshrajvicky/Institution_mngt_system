<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="#">
Enter Database Name :<input type="text" name="tn"><br>
<input type="submit" name="sub">
</form>
<?php
if(isset($_POST['sub']))
{
	$table_name=$_POST['tn'];
	$con=mysqli_connect('localhost','root','','project');
	echo $sql = "CREATE TABLE $table_name (id INT(50) NOT NULL AUTO_INCREMENT, name VARCHAR(30),email VARCHAR(30)
	, mobile VARCHAR(30), institute VARCHAR(30), sem_class VARCHAR(30), subject VARCHAR(30), photo VARCHAR(30)
	, address VARCHAR(90), gender VARCHAR(30), dob VARCHAR(30), facebook_id VARCHAR(30), refer_by VARCHAR(30)
	, PRIMARY KEY (id))";

	$result=mysqli_query($con,$sql);
	if($result==true)
	{echo $table_name.' craeted';
	}
	else
	{echo $table_name.' not created';}
	mysqli_close($con);
}
?>
</body>
</html>