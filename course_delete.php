<?php
session_start();
if(!isset($_SESSION['login']))
{
	header('location:login.php');
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="get" action="#">
course : <input type="text" name="course"><br>
<input type="submit" value="DELETE" name="d">
</form>

<?php

$id=$_GET['id'];
$con = mysqli_connect('localhost','root','','project');


$qry = "DELETE FROM course WHERE id='$id'";

mysqli_query($con,$qry);

mysqli_close($con);
header('location:course_select.php');
?>

</body>
</html>