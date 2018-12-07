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

$id=$_GET['id'];
$con = mysqli_connect('localhost','root','','project');


$qry = "DELETE FROM faculties WHERE id='$id'";

mysqli_query($con,$qry);

mysqli_close($con);
header('location:faculties_select.php');
?>

</body>
</html>