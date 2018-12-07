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

<body>
<div style="background-color:blue; width:100%; height:400px;">
<nav class="navbar a">

<div class="container-fluid">
<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>


<ul class="nav navbar-nav c">
<li class="active"><?php echo '<a href="header_profile.php">';?>Home</a></li>
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
<li><?php echo '<a href="batch_insert.php">';?>Choose Another Batch</a></li>
<li><?php echo '<a href="batch_select.php">';?>Veiw Exist Batch</a></li>
</ul>
</li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Enquiry<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="#">Visit student</a></li>
<li><a href="#">Regestered Student</a></li>
<li><a href="#">New student</a></li>
</ul>
</li>

<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">student
    <span class="caret"></span>
    <ul class="dropdown-menu">
     <li><?php echo '<a href="student_insert.php">';?>New Student</a></li>
     <li><?php echo '<a href="student_select.php">';?>Regestered Student</a></li>
    </ul>
  </li>


<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Student_batch<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><?php echo '<a href="java.php">';?>JAVA</a></li>
<li><a href="#">C/C++</a></li>
<li><a href="#">.NET</a></li>
<li><a href="#">PHP</a></li>
<li><a href="#">SEO</a></li>
<li><a href="#">PYTHON</a></li>
</ul>
</li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Fee_collection<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><?php echo '<a href="fee_select.php">';?>fee_status</a></li>
<li><?php echo '<a href="fee_detail.php">';?>fee_detail</a></li>
</ul>
</li>
<li style="margin-left:150px;"><?php echo '<a href="login.php">';?><h3>Logout</h3></a></li>
</ul>
</div>
</nav>
<!--menu navBar-->
<div class="col-md-12">
  <div class="col-md-5" style="margin-left:150px; margin-top:-70px;"><img src="IMAGE/infinite1.png" width="200" height="200">
 <h1 class="b col-md-12" style="margin-left:0px;">Infinite Institute Pvt. Lmt</h1></div></div>

</div>
</div><!--header-->
