<?php
require'session.php';
require'header.php';
?>




<marquee style="background-color:pink; font-size:50px;">WELCOME IN FIDAATO INFOTECH</marquee>
<div class="container bg-warning">
<div style="background-color:blue; width:70%; height:1000px; margin-left:250px; color:black;"><h1 style="text-align:center;">Creat Detail</h1>

<form method="post" action="#" enctype="multipart/form-data">
<div style="margin-left:100px; font-size:25px;">Name : <input type="text" name="name"><br><br></div>
<div style="margin-left:100px; font-size:25px;">batch_name : <input type="text" name="batch_name"><br><br></div>
<div style="margin-left:100px; font-size:25px;">email : <input type="text" name="email"><br><br></div>
<div style="margin-left:100px; font-size:25px;">mobile : <input type="text" name="mobile"><br><br></div>
<div style="margin-left:100px; font-size:25px;">qualification : <input type="text" name="qualification"><br><br></div>
<div style="margin-left:100px; font-size:25px;">exprience : <input type="text" name="exprience"><br><br></div>
<div style="margin-left:100px; font-size:25px;">work_office : <input type="text" name="work_office"><br><br></div>
<div style="margin-left:100px; font-size:25px;">photo : <input type="file" name="photo" accept="image/*"><br><br></div>
<div style="margin-left:100px; font-size:25px;">address : <input type="text" name="address"><br><br></div>
<span style="margin-left:100px; font-size:25px;">Male :<input type="radio" name="gender" value="male"><br><br></span>
<span style="margin-left:100px; font-size:25px;">Female :<input type="radio" name="gender" value="female"><br></span>
<div style="margin-left:100px; font-size:25px;">DOB :<input type="date" name="dob"><br></div>
<input type="submit" name="sub" value="INSERT">
</form>
<?php
if(isset($_POST['sub']))
{
	$name=$_POST['name'];
	$batch_name=$_POST['batch_name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$qualification=$_POST['qualification'];
	$exprience=$_POST['exprience'];
	$work_office=$_POST['work_office'];
	$photo=$_FILES['photo']['name'];
	$tmp=$_FILES['photo']['tmp_name'];
	$address=$_POST['address'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	 $date=date('y-m-d');
	$time=date('h:i:s');
	$ip=getenv('REMOTE_ADDR');

  require('$con.php');
	 require('$id.php');
	 
	 echo $qry="INSERT INTO `project`.`faculties` ( `name`, `batch_name`, `email`, `mobile`, 
	 `qualification`, `exprience`, `work_office`, `photo`, `address`, `dob`,`gender`, `date`, `time`, `ip`,
	  `byid`) VALUES ('$name', '$batch_name', '$email', '$mobile', '$qualification	', '$exprience', '$work_office	',
	   '$photo', '$address', '$dob','$gender', '$date', '$time', '$ip', '$byid')";	
	mysqli_query($con,$qry);
	mysqli_close($con);
	header('location:faculties_select.php');
}
?>
</div>
</div>

<?php require('footer.php');?>
</body>
</html>