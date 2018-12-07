
<?php
session_start();
if(isset($_SESSION['course']))
{
	
	course_insert();
}
if(isset($_SESSION['faculties']))
{
	
	faculties_insert();
}
else{header('location:select.php');}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>


<?php

function course_insert()
{
	
echo '<form method="post" action="#">';
echo 'Course :<input type="text" name="course"><br>';
echo 'Remark :<input type="text" name="remark"><br>';
common1();

if(isset($_POST['sub']))
{
	
	$course=$_POST['course'];
	$remark=$_POST['remark'];
	$table_name=$_POST['table_name'];
    common2();
   insert_course($table_name);
   


}
}

//#######faculties function start.........................................................................>>>>>>>>
function faculties_insert()
{
echo '<form method="post" action="#">';
echo 'Name:<input type="text" name="name"><br>';
echo 'Batch_name :<input type="text" name="batch_name"><br>';
echo 'Email :<input type="email" name="email"><br>';
echo 'Mobile :<input type="number" name="mobile"><br>';
echo 'Qualification :<input type="text" name="qualification"><br>';
echo 'Exprience :<input type="text" name="exprience"><br>';
echo 'Work_office :<input type="text" name="work_office"><br>';
echo 'Photo :<input type="file" name="photo" accept="image/*"><br>';
echo 'Address :<input type="text" name="address"><br>';
echo 'Male :<input type="radio" name="gender">';
echo 'Female :<input type="radio" name="gender"><br>';
echo 'DOB :<input type="date" name="dob"><br>';
common1();
if(isset($_POST['sub']))
{
$name=$_POST['name'];
$batch_name=$_POST['batch_name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$qualification=$_POST['qualification'];
$exprience=$_POST['exprience'];
$work_office=$_POST['work_office'];
$photo=$_POST['photo'];
$address=$_POST['address'];
//$gender=$_POST['gender'];
$dob=$_POST['dob'];
$table_name=$_POST['table_name'];
common2();

	insert_faculties($table_name);
}
	
}
?>
<!--common fun----------------------------------------------------->
<?php

function common1()
{
echo'Date :<input type="date" name="date"><br>';
echo 'Time :<input type="time" name="time"><br>';
echo 'IP :<input type="text" name="ip"><br>';
echo 'Byid :<input type="text" name="byid"><br>';
echo 'Table_namer :<input type="text" name="table_name"><br>';
echo '<input type="submit" name="sub">';
echo '</form>';
}
function common2()
{
	$date=$_POST['date'];
	$time=$_POST['time'];
	$ip=$_POST['ip'];
	$byid=$_POST['byid'];
	
	
	require'project_function.php';
	
}

?>
</body>
</html>