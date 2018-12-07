
	<?php
require'session.php';
require'header.php';
?>


<marquee style="background-color:pink; font-size:50px;">WELCOME IN FIDAATO INFOTECH</marquee>
<div class="container" style="background-color:lightblue;">
<div style="background-color:blue; width:70%; height:1150px; margin-left:250px; color:black;"><h1 style="text-align:center;">New Student</h1>

<form method="post" action="#" enctype="multipart/form-data">
<div style="margin-left:100px; font-size:25px;">Start_date : <input type="date" name="start_date"><br><br></div>
<div style="margin-left:100px; font-size:25px;">Duration : <input type="text" name="duration"><br><br></div>
<div style="margin-left:100px; font-size:25px;">Standard_time : <input type="time" name="std_time"><br><br></div>
<div style="margin-left:100px; font-size:25px;">Day : <input type="text" name="day"><br><br></div>
<div style="margin-left:100px; font-size:25px;">Timing : <input type="time" name="time"><br><br></div>
 <span style="margin-left:100px; font-size:25px;">Alt_Faculties : <select name="alt_faculties">
<option>aadil sir</option>
<option>ankit sir </option>
<option>piyush sir</option>
<option>ramu sir</option></select><br><br></span>
<span style="margin-left:100px; font-size:25px;">Per_Faculties : <select name="per_faculties">
<option>aadil sir</option>
<option>ankit sir </option>
<option>piyush sir</option>
<option>ramu sir</option></select><br><br></span>
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
?></span></select>
<button><input type="submit" name="sub" value="INSERT"></button>
</form>
<?php
if(isset($_POST['sub']))
{
	$start_date=$_POST['start_date'];
	$duration=$_POST['duration'];
	$std_time=$_POST['std_time'];
	$day=$_POST['day'];
	$time=$_POST['time'];
	$subject=$_POST['subject'];
	$alt_faculties=$_POST['alt_faculties'];
	$per_faculties=$_POST['per_faculties'];
	$day_time="(yes-$day".$time.")";
	$date=date('y-m-d');
	$time=date('h:i:s');
	$ip=getenv('REMOTE_ADDR');

   require'$con.php';
	 require('$id.php');
	 
     $qry="INSERT INTO `project`.`batch` ( `start_date`, `duration`, `std_time`, `day_time`,
	  `subject`, `alt_faculties`, `per_faculties`,`date`, `time`, `ip`, `byid`) VALUES ( '$start_date', '$duration	', 
	  '$std_time', '$day_time','$subject', '$alt_faculties', '$per_faculties','$date', '$time', '$ip', '$byid')";

	mysqli_query($con,$qry);
	mysqli_close($con);
	header('location:batch_select.php');
}
?>
</div>
</div>

<?php require'footer.php';?>
</body>
</html>