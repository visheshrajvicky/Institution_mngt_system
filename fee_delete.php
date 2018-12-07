
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
<?php

$id1=$_GET['id'];
$con = mysqli_connect('localhost','root','','project');


$sql = "DELETE FROM student,fee WHERE id='$id1'";

$row=mysqli_query($con,$sql);
$row=mysqli_query($con,$qry);
mysqli_close($con);
header('location:fee_select.php');
?>

</body>
</html>