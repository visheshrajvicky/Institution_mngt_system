<?php
require'session.php';
require'header.php';
?>

<marquee style="background-color:pink; font-size:50px;">WELCOME IN INFINITE INSTITUTE</marquee>
<div class="container text-center" style="background-color:lightblue;">
<form method="post" action="#">';
<div style="font-size:30px; text-align:center;">Course : <input type="text" name="course" ></div><br><br><br>
<div style="font-size:30px; text-align:center;">Remark: <input type="text" name="remark"><br></div>
<div style="font-size:40px; text-align:center;"><input type="submit" name="sub"></div>
</form>
<?php

if(isset($_POST['sub']))
{
	$course=$_POST['course'];
	$remark=$_POST['remark'];
	 $date=date('y-m-d');
	$time=date('h:i:s');
	$ip=getenv('REMOTE_ADDR');
	require'$id.php';
   require'$con.php';
	echo $qry="INSERT INTO course (course, remark, date, time, ip, byid)
	VALUES ('$course', '$remark', '$date', '$time', '$ip', '$byid')";
	mysqli_query($con,$qry);
	mysqli_close($con);
	header('location:course_select.php');
}
?>
</div>
<?php require'footer.php';?>
</body>
</html>