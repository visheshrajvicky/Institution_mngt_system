<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="#">
<div style="margin-left:100px; font-size:25px;">Discount : <input type="number" name="discount"><br><br></div>
<div style="margin-left:100px; font-size:25px;">Fee_status : <input type="number" name="fee_status"><br><br></div>
<div style="margin-left:100px; font-size:25px;">Remark : <input type="number" name="remark"><br><br></div>
<input type="submit" name="sub" value="SUBMIT">
</form>

<?php
if(isset($_POST['sub']))
{
	$discount=$_POST['discount'];
$fee_status=$_POST['fee_status'];	
$remark=$_POST['remark'];
$con=mysqli_connect('localhost','root','','project');
	$qry="SELECT * FROM student";
	$result=mysqli_query($con,$qry);

	while($row=mysqli_fetch_array($result))
	{
		$student_id=$row['id'];
	}
	
	$qry="SELECT * FROM batch";
	$result=mysqli_query($con,$qry);

	while($row=mysqli_fetch_array($result))
	{
		$batch_id=$row['id'];
	}
	
	$date=date('y-m-d');
	$time=date('h:i:s');
	$ip=getenv('REMOTE_ADDR');

   $con=mysqli_connect('localhost','root','','project');
	 require('$id.php');
	 
     $qry="INSERT INTO `project`.`student_batch` ( `student_id`, `batch_id`, `discount`, `fee_status`,
	  `remark`,`date`, `time`, `ip`, `byid`) VALUES ( '$student_id', '$batch_id	', 
	  '$discount', '$fee_status','$remark','$date', '$time', '$ip', '$byid')";

	mysqli_query($con,$qry);
	mysqli_close($con);
}
?>		
</body>
</html>