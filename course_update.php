<?php
require'session.php';
require'header.php';
?>
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
	
	require'$con.php';

$qry = "UPDATE course SET remark='$remark',course='$course' WHERE id='$id' ";

mysqli_query($con,$qry);
mysqli_close($con);	
header('location:course_select.php');
}

?>
<?php require'footer.php';?>
</body>
</html>