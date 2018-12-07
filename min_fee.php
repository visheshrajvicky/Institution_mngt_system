<?php
require'session.php';
require'header.php';
?>
<div class="table-responsive">
<table class="table table-bordered table-hover table-striped text-center bg-warning">

<tr>
<th><h5 style="text-align:center; font-size:20px;">Rollno</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Name</h5></th>

<th><h5 style="text-align:center; font-size:20px;">Remainning_fee</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Delete</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Edit</h5></th>
</tr>
<?php
require'$con.php';
    $qry="SELECT * FROM fee;";
	$result=mysqli_query($con,$qry);
	while($row=mysqli_fetch_array($result))
	{
		$remaining_fee=$row['remaining_fee'];
		if($remaining_fee<1)
		{

	 $id=$row['id'];
	 $name=$row['name'];
	 echo '<tr>';
	echo '<td>';
	echo $id;
	echo '</td>';
	echo '<td>';
	echo $name;
	echo '</td>';
	echo '<td>';
	echo $remaining_fee;
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
	}
		
	
	mysqli_close($con);
	
?>
</table>
</div>
<?php require'footer.php';?>
</body>
</html>