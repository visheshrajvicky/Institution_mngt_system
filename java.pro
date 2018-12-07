<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="CSS/css/bootstrap.min.css">
<script src="CSS/js/jquery.min.js"></script>
<script src="CSS/js/bootstrap.min.js"></script>
<style>
.a
{
	background-color:lightblue;}
.b
{
	text-align:left;
	margin-left:-90px;
	color:white;
}
.c
{
	
	margin-left:400px;
}


	
</style>
</head>

<body class="bg-primary">
<div style="background-color:blue; width:100%; height:400px;">
<nav class="navbar a">
<div class="container-fluid">

<ul class="nav navbar-nav c">
<li class="active"><a href="#">Home</a></li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Course<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><?php echo '<a href="course_insert.php">';?>Creat New Course</a></li>
<li><?php echo '<a href="course_select.php">';?>Veiw Course</a></li>
</ul>
</li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Faculties<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><?php echo '<a href="faculties_insert.php">';?>Creat New Faculties</a></li>
<li><?php echo '<a href="faculties_select.php">';?>Veiw Faculties</a></li>
</ul>
</li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Batch<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="#">Choose Another Batch</a></li>
<li><a href="#">Veiw Exist Batch</a></li>
</ul>
</li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Enquiry<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="#">Visit student</a></li>
<li><a href="#">Regestered Student</a></li>
<li><a href="#">New student</a></li>
</ul>
</li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Student<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="#">Regestered Student</a></li>
<li><a href="#">New Student</a></li>
</ul>
</li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Student Detail<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="#">Regestered Student</a></li>
<li><a href="#">Add New Student Detail</a></li>
</ul>
</li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Fee_collection<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="#">Available Option</a></li>
<li><a href="#">Pay Another Method</a></li>
</ul>
</li>
</ul>
</div>
</nav>
<!--menu navBar-->
<div class="col-md-12">
  <div class="col-md-5" style="margin-left:150px; margin-top:-60px;"><img src="IMAGE/fidaato.png" width="200" height="200">
 <h1 class="b col-md-12" style="margin-left:0px;">Fidaato Infotech Pvt. Lmt</h1></div></div>
 <div class="col-md-6" style="margin-left:950px; margin-top:-120px;"><img src="IMAGE/fidaato1.jpg" width="200" height="200"></div>

</div>
</div><!--header-->
<?php
$id=$_GET['id'];
$con = mysqli_connect('localhost','root','','project');

$qry = "SELECT * FROM course WHERE id='$id'";

$result=mysqli_query($con,$qry);
$row=mysqli_fetch_array($result);

	$course=$row['course'];
	$remark=$row['remark'];
	
	

mysqli_close($con);
?>
<form method="post" action="#">
<div style="margin-left:100px; font-size:25px; color:black;">NAME : <input type="text" name="course" value="<?php echo $course;?>"><br></div>

<div style="margin-left:100px; font-size:25px; color:black; ">course  : <input type="text" name="remark" value="<?php echo $remark;?>"><br></div>
<input type="hidden" name="id" value="<?php echo $id;?>"><br>

<div style="margin-left:100px; font-size:25px; color:black;"><input type="submit" value="Update" name="u"></div>
</form>
<?php
if(isset($_POST['u']))
{
	$course = $_POST['course'];
	$remark = $_POST['remark'];
	$id=$_POST['id'];
	
	$con = mysqli_connect('localhost','root','','project');

$qry = "UPDATE course SET remark='$remark',course='$course' WHERE id='$id' ";

mysqli_query($con,$qry);
mysqli_close($con);	
header('location:course_select.php');
}

?>
</body>
</html>