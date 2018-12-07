

<?php
function insert_course($table_name)
{
 $course=$_POST['course'];
	$remark=$_POST['remark'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$ip=$_POST['ip'];
	$byid=$_POST['byid'];
 $con=mysqli_connect('localhost','root','','project');
	$qry="INSERT INTO $table_name (course, remark, date, time, ip, byid)
	VALUES ('$course', '$remark', '$date', '$time', '$ip', '$byid')";
	mysqli_query($con,$qry);
	mysqli_close($con);
	session_destroy();
}
function insert_faculties($table_name)
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
$date=$_POST['date'];
	$time=$_POST['time'];
	$ip=$_POST['ip'];
	$byid=$_POST['byid'];
	$con=mysqli_connect('localhost','root','','project');
	 echo $qry="INSERT INTO $table_name (name, batch_name, email, mobile, qualification, exprience, work_office, photo, address, dob, date, time, ip, byid)
	 VALUES ( '$name', '$batch_name', '$email', '$mobile', '$qualification	', '$exprience', '$work_office	', '$photo', '$address', '$dob', '$date', '$time', '$ip'$byid')";
	mysqli_query($con,$qry);
	mysqli_close($con);
	session_destroy();
}
function common3()
{
$byid=$row['id'];
    $date=date('y-m-d');
	$time=date('h:i:s');
	$ip=getenv('REMOTE_ADDR');
}

function connect()
{
$con=mysqli_connect('localhost','root','','project');
}
?>