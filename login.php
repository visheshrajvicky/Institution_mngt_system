<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="CSS/css/bootstrap.min.css">
<script src="CSS/js/jquery.min.js"></script>
<script src="CSS/js/bootstrap.min.js"></script>
<script>
function validate()
{
var x=document.getElementById("email").value;
	
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
	{
		alert("Email must be filled out ");
		return false;
	}
}
</script>
</head>

<body class="bg-primary">
<div class="bg-default" style="color:red; font-size:40px; margin-left:350px; margin-top:67px;">Welcome in Login Page</div>
<div style="background-color:white; height:300px; width:500px; margin-left:350px; margin-top:100px;">
<form method="post" action="#" onSubmit="return validate()">
<div style="color:black; font-size:30px; text-align:center; "><input type="email" name="email" placeholder="Email" required id="email"></div><br>
<div style="color:black; font-size:30px; text-align:center; "><input type="password" name="password" placeholder="Password" required></div><br>
<div style="color:black; font-size:30px; text-align:center; "><input type="submit" name="sub" value="LOGIN"></div><br>
</form>
</div>
 <?php
     if (isset($_POST['submit']))
	{	   
	echo "data has been submitted";
	   
   }
   ?>
<?php

if(isset($_POST['sub']))
{
$email=$_POST['email'];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
if($email=='')
{die('you are enter the empty email');}
if(filter_var($email, FILTER_VALIDATE_EMAIL)==true)
{
$password=$_POST['password'];
$con=mysqli_connect('localhost','root','','intern0611');
$qry="SELECT * FROM student WHERE email='$email' AND password='$password'";
$result=mysqli_query($con,$qry);
$row=mysqli_fetch_array($result);
}
if($row)
{
	$_SESSION['login']=$email;
echo $email=$row['email'];
$byid=$row['id'];
$email=$row['email'];
$name=$row['name'];
$gender=$row['gender'];
$date=date('y-m-d');
$time=date('h:i:s');
$ip=getenv('REMOTE_ADDR');
 echo $qry1="INSERT INTO `intern0611`.`login` (`email`, `name`, `gender`, `byid`, `ip`, `date`, `time`)
 VALUES ('$email', '$name', '$gender', '$byid', '$ip', '$date', '$time')";
mysqli_query($con,$qry1);
header('location:header_profile.php');
}
else
{
echo 'Invalid login please try again';
}
mysqli_close($con);

}

?>
</body>
</html>