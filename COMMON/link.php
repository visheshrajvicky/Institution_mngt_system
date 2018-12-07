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
<li><a href="#">Creat New Faculties</a></li>
<li><a href="#">Veiw Faculties</a></li>
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
