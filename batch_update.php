<?php
require'session.php';
require'header.php';
?>
<div class="container">
<div style="background-color:white; width:70%; height:850px; margin-left:250px; color:black;"><h1 style="text-align:center;">Update Detail</h1>

<?php
$id=$_GET['id'];
require'$con.php';
 $qry = "SELECT * FROM batch WHERE id='$id'";

$result=mysqli_query($con,$qry);
$row=mysqli_fetch_array($result);
	$start_date = $row['start_date'];
	$duration=$row['duration'];
	$std_time=$row['std_time'];
	$subject=$row['subject'];
	$alt_faculties=$row['alt_faculties'];
	$per_faculties=$row['per_faculties'];
	$day_time=$row['day_time'];
mysqli_close($con);
?>
<form method="post" action="#" enctype="multipart/form-data">
<div style="margin-left:100px; font-size:25px;">Start_date : <input type="text" name="start_date" value="<?php echo $start_date;?>"><br><br></div>
<div style="margin-left:100px; font-size:25px;">Duration : <input type="text" name="duration" value="<?php echo $duration;?>"><br><br></div>
<div style="margin-left:100px; font-size:25px;">Standard_time : <input type="text" name="std_time" value="<?php echo $std_time;?>"><br><br></div>
<div style="margin-left:100px; font-size:25px;">Day_time : <input type="text" name="day_time" value="<?php echo $day_time;?>"><br><br></div>
<div style="margin-left:100px; font-size:25px;">Subject : <input type="text" name="subject" value="<?php echo $subject;?>"><br><br></div>
<div style="margin-left:100px; font-size:25px;">Alt_faculties : <input type="text" name="alt_faculties" value="<?php echo $alt_faculties;?>"><br><br></div>
<div style="margin-left:100px; font-size:25px;">Per_faculties : <input type="text" name="per_faculties" value="<?php echo $per_faculties;?>"><br><br></div>
<div style="margin-left:100px; font-size:25px;"> <input type="hidden" name="id" value="<?php echo $id;?>"><br><br></div>

<div style="margin-left:100px; font-size:25px;"><input type="submit" name="u"><br><br><br></div>
</form>

<?php
if(isset($_POST['u']))
{
	
	$id=$_POST['id'];
	
 $start_date=$_POST['start_date'];
	$duration=$_POST['duration'];
	$std_time=$_POST['std_time'];
	$subject=$_POST['subject'];
	$alt_faculties=$_POST['alt_faculties'];
	$per_faculties=$_POST['per_faculties'];
	$day_time=$_POST['day_time'];

	
	require'$con.php';
 $sql = "UPDATE batch SET start_date='$start_date', duration='$duration', std_time='$std_time',
 subject='$subject', alt_faculties='$alt_faculties', per_faculties='$per_faculties', day_time='$day_time' WHERE id='$id'";

mysqli_query($con,$sql);
mysqli_close($con);	
header('location:batch_select.php');
}

?>
</div>
</div>
<?php require'footer.php';?>
</body>
</html>