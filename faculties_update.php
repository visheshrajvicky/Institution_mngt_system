<?php
require'session.php';
require'header.php';
?>

<div class="container">
<div style="background-color:white; width:70%; height:850px; margin-left:250px; color:black;"><h1 style="text-align:center;">Update Detail</h1>

<?php
$id=$_GET['id'];
require'$con.php';

 $qry = "SELECT * FROM faculties WHERE id='$id'";

$result=mysqli_query($con,$qry);
$row=mysqli_fetch_array($result);
	$email = $row['email'];
	$name=$row['name'];
	$batch_name=$row['batch_name'];
	$mobile=$row['mobile'];
	$qualification=$row['qualification'];
	$exprience=$row['exprience'];
	$work_office=$row['work_office'];
    $photo=$row['photo'];
	$address=$row['address'];
mysqli_close($con);
?>
<form method="post" action="#" enctype="multipart/form-data">
<div style="margin-left:100px; font-size:25px;">Name : <input type="text" name="name" value="<?php echo $name;?>"><br><br></div>
<div style="margin-left:100px; font-size:25px;">batch_name : <input type="text" name="batch_name" value="<?php echo $batch_name;?>"><br><br></div>
<div style="margin-left:100px; font-size:25px;">email : <input type="text" name="email" value="<?php echo $email;?>"><br><br></div>
<div style="margin-left:100px; font-size:25px;">mobile : <input type="text" name="mobile" value="<?php echo $mobile;?>"><br><br></div>
<div style="margin-left:100px; font-size:25px;">qualification : <input type="text" name="qualification" value="<?php echo $qualification;?>"><br><br></div>
<div style="margin-left:100px; font-size:25px;">exprience : <input type="text" name="exprience" value="<?php echo $exprience;?>"><br><br></div>
<div style="margin-left:100px; font-size:25px;">work_office : <input type="text" name="work_office" value="<?php echo $work_office;?>"><br><br></div>
<div style="margin-left:100px; font-size:25px;">photo : <?php echo "<img src='IMAGE/".$row['photo']."' width='60' height='60'>";?><br><br></div>
<div style="margin-left:100px; font-size:25px;">address : <input type="text" name="address" value="<?php echo $address;?>"><br><br></div>
<div style="margin-left:100px; font-size:25px;">exprience : <input type="hidden" name="id" value="<?php echo $id;?>"><br><br></div>

<div style="margin-left:100px; font-size:25px;"><input type="submit" name="u"><br><br><br></div>
</form>

<?php
if(isset($_POST['u']))
{
	
	$id=$_POST['id'];
	
 $name=$_POST['name'];
	$batch_name=$_POST['batch_name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$qualification=$_POST['qualification'];
	$exprience=$_POST['exprience'];
	$work_office=$_POST['work_office'];
	$photo=$_POST['photo'];
	$address=$_POST['address'];
	$gender=$_POST['gender'];

	
	require'$con.php';

$sql = "UPDATE faculties SET name='$name', batch_name='$batch_name', mobile='$mobile',
 qualification='$qualification', exprience='$exprience', work_office='$work_office', photo='$photo', 
 address='$address', gender='$gender' WHERE id='$id'";

mysqli_query($con,$sql);
mysqli_close($con);	
header('location:faculties_select.php');
}

?>
</div>
</div><?php 
require'footer.php';?>
</body>
</html>