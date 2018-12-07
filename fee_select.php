<?php
require'session.php';
require'header.php';
?>
<div class="table-responsive">
<table class="table table-bordered table-hover table-striped text-center bg-warning">

<tr>
<th><h5 style="text-align:center; font-size:20px;">Sno</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Name</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Batch_name</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Email</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Mobile</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Qualification</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Subject</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Institute</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Photo</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Address</h5></th>
<th><h5 style="text-align:center; font-size:20px;">DOB</h5></th>
<th><h5 style="text-align:center; font-size:20px;">refer_by</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Gender</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Fee_Status</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Fee_Update</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Delete</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Edit</h5></th>
</tr>
<?php
$con=mysqli_connect('localhost','root','','project');
	$qry="SELECT * FROM fee";
	$result=mysqli_query($con,$qry);
	$i=1;
	while($row=mysqli_fetch_array($result))
	{
		$byid=$row['id'];
	}
	?>
<?php
require'$con.php';
	$qry="SELECT * FROM student";
	$result=mysqli_query($con,$qry);
	$i=1;
	while($row=mysqli_fetch_array($result))
	{
	$id=$row['id'];
	echo '<tr>';
	echo '<td>';
	echo $i++;
	echo '</td>';
	echo '<td>';
	echo $name=$row['name'];
	echo '</td>';
	echo '<td>';
	echo $batch_name=$row['batch_name'];
	echo '</td>';
	echo '<td>';
	echo $email=$row['email'];
	echo '</td>';
	echo '<td>';
	echo $mobile=$row['mobile'];
	echo '</td>';
	echo '<td>';
	echo $qualification=$row['qualification'];
	echo '</td>';
	echo '<td>';
	echo $subject=$row['subject'];
	echo '</td>';
	echo '<td>';
	echo $institute=$row['institute'];
	echo '</td>';
	echo '<td>';
	echo "<img src='IMAGE/".$row['photo']."' width='60' height='60'>";
	echo '</td>';
	echo '<td>';
	echo $address=$row['address'];
	echo '</td>';
	echo '<td>';
	echo $dob=$row['dob'];
	echo '</td>';
	echo '<td>';
	echo $refer_by=$row['refer_by'];
	echo '</td>';
	echo '<td>';
	echo $gender=$row['gender'];
	echo '</td>';
	echo '<td>';
	echo "<a href='fee_insert.php?id=$id'>
	<button class='btn btn-xs btn-warning'>fee_insert
	<span class='glyphicon glyphicon-trash'></span></a>";
	echo '</td>';
	echo '<td>';
	echo "<a href='fee_update.php?id=$id'>
	<button class='btn btn-xs btn-default'>fee_update
	<span class='glyphicon glyphicon-trash'></span></a>";
	echo '</td>';
	echo '<td>';
	echo "<a href='fee_delete.php?id=$id>
	<button class='btn btn-xs btn-danger'>Delete
	<span class='glyphicon glyphicon-trash'></span></a>";
	echo '</td>';
	echo '<td>';
	echo "<a href='student_update.php?id=$id'>
	<button class='btn btn-xs btn-success'>edit
	<span class='glyphicon glyphicon-pencil'></span></a>";
	echo '</td>';
	echo '</tr>';
	}
	mysqli_close($con);
	
?>
</table>
</div>
<?php require'footer.php';?>
</body>
</html>