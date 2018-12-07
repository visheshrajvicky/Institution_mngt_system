<?php
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<form  method="post" action="#">
Table_name :<input type="text" name="table_name"><br>
Operation :<input type="text" name="operation"><br>
<input type="submit" name="sub1">
</form>
<?php
if(isset($_POST['sub1']))
{
$table_name=$_POST['table_name'];
$operation=$_POST['operation'];
if($table_name=="course" AND $operation=="insert")
{
	$_SESSION['course']=$table_name;
	header('location:course.php');
	
}
if($table_name=="faculties" AND $operation=="insert")
{
	$_SESSION['faculties']=$table_name;
	header('location:course.php');
	
}
else{echo '<h1> sorry You are choose invalid option</h1>';}
}
?>
</body>
</html>