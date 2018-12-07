<?php
require'session.php';
require'header.php';
?>

<div class="container">
<div style="background-color:white; width:70%; height:1200px; margin-left:250px; color:black;"><h1 style="text-align:center;">Update Detail</h1>

<?php
$id=$_GET['id'];
require'$con.php';

 $qry = "SELECT * FROM student WHERE id='$id'";

$result=mysqli_query($con,$qry);
$row=mysqli_fetch_array($result);
	
		$name=$row['name'];
		$batch_name=$row['batch_name'];
		$batch_time=$row['batch_time'];
		$email=$row['email'];
		$mobile=$row['mobile'];
		$qualification=$row['qualification'];
		$subject=$row['subject'];
		$institute=$row['institute'];
		$photo=$row['photo'];
		$address=$row['address'];
		$refer_by=$row['refer_by'];
		$gender=$row['gender'];
		$dob=$row['dob'];
mysqli_close($con);
?>
<form method="post" action="#" enctype="multipart/form-data">
<div style="margin-left:100px; font-size:25px;">Name : <input type="text" name="name" value="<?php echo $name;?>"><br><br></div>
<div style="margin-left:100px; font-size:25px;">batch_name : <input type="text" name="batch_name" value="<?php echo $batch_name;?>"><br><br></div>
<div style="margin-left:100px; font-size:25px;">email : <input type="text" name="email" value="<?php echo $email;?>"><br><br></div>
<div style="margin-left:100px; font-size:25px;">mobile : <input type="text" name="mobile" value="<?php echo $mobile;?>"><br><br></div>
<div style="margin-left:100px; font-size:25px;">qualification : <input type="text" name="qualification" value="<?php echo $qualification;?>"><br><br></div>
<div style="margin-left:100px; font-size:25px;">Subject : <input type="text" name="subject" value="<?php echo $subject;?>"><br><br></div>
<div style="margin-left:100px; font-size:25px;">batch_time : <input type="time" name="batch_time" value="<?php echo $batch_time;?>"><br><br></div>
<div style="margin-left:100px; font-size:25px;">institute : <input type="text" name="institute" value="<?php echo $institute;?>"><br><br></div>
<div style="margin-left:100px; font-size:25px;">photo : <input type="file" name="photo" accept="image/*" value="<?php echo "<img src='IMAGE/".$row['photo']."' width='60' height='60'>";?>"><br></div>
<div style="margin-left:100px; font-size:25px;">address : <input type="text" name="address" value="<?php echo $address;?>"><br><br></div>
<div style="margin-left:100px; font-size:25px;">refer_by : <input type="text" name="refer_by" value="male"><br><br></div>
<!--<span style="margin-left:100px; font-size:25px;">Male :<input type="radio" name="gender" value="female"><br><br></span>
<span style="margin-left:100px; font-spize:25px;">Female :<input type="radio" name="gender" value="<?php echo $gender;?>"><br></span>
-->
<div style="margin-left:100px; font-size:25px;">DOB : <input type="date" name="dob" value="<?php echo $dob;?>"><br><br></div>
<div style="margin-left:100px; font-size:25px;"> <input type="hidden" name="id" value="<?php echo $id;?>"><br><br></div>

<div style="margin-left:100px; font-size:25px;"><input type="submit" name="u"><br><br><br></div>
</form>

<?php
if(isset($_POST['u']))
{
	
	$id=$_POST['id'];
	
    $batch_time=$_POST['batch_time'];
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

	
	require'$con.php';

echo $sql = "UPDATE student SET name='$name', batch_name='$batch_name', email='$email', mobile='$mobile',
 qualification='$qualification', subject='$subject',batch_time='$batch_time', institute='$institute', photo='$photo', 
 address='$address', refer_by='$refer_by', dob='$dob' WHERE id='$id'";

mysqli_query($con,$sql);
mysqli_close($con);	
header('location:student_select.php');
}

?>
</div>
</div>
<?php require'footer.php';?>
</body>
</html>