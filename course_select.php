<?php
require'session.php';
require'header.php';
?>

<div class="container">
<div class="table-responsive">
<table class="table table-bordered table-hover table-striped text-center bg-warning">

<tr>
<th><h5 style="text-align:center; font-size:20px;">Sno</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Course</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Remark</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Delete</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Edit</h5></th>
</tr>
<?php
require'$con.php';
	$qry="SELECT * FROM course ";
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
	echo $course=$row['course'];
	echo '</td>';
	echo '<td>';
	echo $remark=$row['remark'];
	echo '</td>';
	echo '<td>';
	echo "<a href='course_delete.php?id=$id'>
	<button class='btn btn-xs btn-danger'>Delete
	<span class='glyphicon glyphicon-trash'></span></a>";
	echo '</td>';
	echo '<td>';
	echo "<a href='course_update.php?id=$id'>
	<button class='btn btn-xs btn-success'>edit
	<span class='glyphicon glyphicon-pencil'></span></a>";
	echo '</td>';
	echo '</tr>';
	}
	mysqli_close($con);
	
?>
</table>
</div>
</div>
<?php require'footer.php';?>
</body>
</html>