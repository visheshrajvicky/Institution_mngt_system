<?php
require'session.php';
require'header.php';
?>
<div class="table-responsive">
<table class="table table-bordered table-hover table-striped text-center bg-warning">

<tr>
<th><h5 style="text-align:center; font-size:20px;">Total Batch</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Start_batch</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Duration</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Standard_time</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Time_day</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Subject</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Alt_faculty</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Per_faculty</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Delete</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Edit</h5></th>
</tr>
<?php
require'$con.php';
	$qry="SELECT * FROM batch";
	$result=mysqli_query($con,$qry);
	$i=1;
	while($row=mysqli_fetch_array($result))
	{
		$id=$row["id"];
	echo '<tr>';
	echo '<td>';
	echo $i++;
	echo '</td>';
	echo '<td>';
	echo $start_date=$row['start_date'];
	echo '</td>';
	echo '<td>';
	echo $duration=$row['duration'];
	echo '</td>';
	echo '<td>';
	echo $std_time=$row['std_time'];
	echo '</td>';
	echo '<td>';
	echo $day_time=$row['day_time'];
	echo '</td>';
	echo '<td>';
	echo $subject=$row['subject'];
	echo '</td>';
	echo '<td>';
	echo $alt_faculties=$row['alt_faculties'];
	echo '</td>';
	echo '<td>';
	echo $per_faculties=$row['per_faculties'];
	echo '</td>';
	echo '<td>';
	echo "<a href='batch_delete.php?id=$id'>
	<button class='btn btn-xs btn-success'>Delete
	<span class='glyphicon glyphicon-trash'></span></a>";
	echo '</td>';
	echo '<td>';
	echo "<a href='batch_update.php?id=$id'>
	<button class='btn btn-xs btn-danger'>edit
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