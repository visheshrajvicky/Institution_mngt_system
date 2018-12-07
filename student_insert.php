	<?php
require'session.php';
require'header.php';
?>





<marquee style="background-color:pink; font-size:50px;">WELCOME IN FIDAATO INFOTECH</marquee>
<div class="container" style="background-color:lightblue;">
<div style="background-color:blue; width:70%; height:1150px; margin-left:250px; color:black;"><h1 style="text-align:center;">New Student</h1>
<form method="post" action="#" enctype="multipart/form-data">
<span style="margin-left:100px; font-size:25px;"><label >Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name"></label><br><br></span>
<span style="margin-left:100px; font-size:25px;"><label>batch_name : <input type="text" name="batch_name"></label><br><br></span>
<div style="margin-left:100px; font-size:25px;"><label>email : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email"></label><br><br></div>
<div style="margin-left:100px; font-size:25px;"><label>mobile : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mobile"></label><br><br></div>
<div style="margin-left:100px; font-size:25px;">qualification : <input type="text" name="qualification"><br><br></div>
 <span style="margin-left:100px; font-size:25px;">Subject : <select name="subject">
<?php 
require'$con.php';
	$qry="SELECT * FROM course";
	$result=mysqli_query($con,$qry);
	while($row=mysqli_fetch_array($result))
	{
		$id=$row['id'];
	echo '<option>';
	echo $row['course'];
	echo '</option>';
	echo '<br>';
	}
?>
</select><br><br></span>
<div style="margin-left:100px; font-size:25px;">Time: <select name="time">
<?php
require'$con.php';
	$qry="SELECT * FROM batch";
	$result=mysqli_query($con,$qry);
	while($row=mysqli_fetch_array($result))
	{
		$id=$row['id'];
	echo '<option>';
	echo $row['std_time'];
	echo '</option>';
	echo '<br>';
	}

?>
</select><br><br></span>
<div style="margin-left:100px; font-size:25px;">Institute: <input type="text" name="institute"><br><br></div>
<div style="margin-left:100px; font-size:25px;">photo : <input type="file" name="photo" accept="image/*"><br><br></div>
<div style="margin-left:100px; font-size:25px;">address : <input type="text" name="address"><br><br></div>
<span style="margin-left:100px; font-size:25px;">Male :<input type="radio" name="gender" value="Male"><br><br></span>
<span style="margin-left:100px; font-size:25px;">Female :<input type="radio" name="gender" value="Female"><br></span>
<div style="margin-left:100px; font-size:25px;">address : <input type="text" name="address"><br><br></div>
<div style="margin-left:100px; font-size:25px;">DOB :<input type="date" name="dob"><br></div>
<div style="margin-left:100px; font-size:25px;">Refer_by : <input type="text" name="refer_by"><br><br></div>
<button><input type="submit" name="sub" value="INSERT"></button>
</form>
<?php
if(isset($_POST['sub']))
{
	$batch_time=$_POST['time'];
	$name=$_POST['name'];
	$batch_name=$_POST['batch_name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$qualification=$_POST['qualification'];
	$subject=$_POST['subject'];
	$institute=$_POST['institute'];
	$photo=$_FILES['photo']['name'];
	$tmp=$_FILES['photo']['tmp_name'];
	$address=$_POST['address'];
	$refer_by=$_POST['refer_by'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$date=date('y-m-d');
	$time=date('h:i:s');
	$ip=getenv('REMOTE_ADDR');

 require'$con.php';
   $qry="SELECT * FROM batch";
$result=mysqli_query($con,$qry);
$row=mysqli_fetch_array($result);
if($row)
{
$byid=$row['id'];
}
	 
	$qry="INSERT INTO `project`.`student` ( `name`, `batch_name`, `email`, `mobile`,`gender`,
	  `qualification`, `subject`,`batch_time`, `institute`, `photo`, `address`, `dob`, `refer_by`, 
	   `date`, `time`, `ip`, `byid`) VALUES ( '$name', '$batch_name	', '$email', '$mobile','$gender',
	    '$qualification	', '$subject', '$batch_time','$institute', '$photo', '$address', '$dob', 
		'$refer_by', '$date', '$time', '$ip', '$byid')";

	mysqli_query($con,$qry);
	mysqli_close($con);
	header('location:student_select.php');
}
?>
</div>
</div>
<?php require'footer.php';?>

</body>
</html>