<?php
require'session.php';
require'header.php';
?>
<div class="table-responsive">
<table class="table table-bordered table-hover table-striped text-center bg-warning">

<tr>
<th><h5 style="text-align:center; font-size:20px;">no.of student</h5></th>

<th><h5 style="text-align:center; font-size:20px;"> Total Remainning_fee</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Delete</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Edit</h5></th>
</tr>
<?php
$con=mysqli_connect('localhost','root','','project');
	$qry="SELECT * FROM fee";
	$result=mysqli_query($con,$qry);
	$result = mysqli_query($con,$qry);
	$i=0;
    while($row = mysqli_fetch_array($result))
	{
		$remaining_fee=$row['remaining_fee'];
		if($remaining_fee>=1)
		{
		$i++;	
		}
	$total = $total+ $row["remaining_fee"];	
	}
    echo $row["total"] ;

	$id=$row['id'];
	echo '<tr>';
	echo '<td>';
	echo $i;
	echo '</td>';
	echo '<td>';
	echo $total;
	echo '</td>';
	echo '<td>';
	echo "<a href='fee_delete.php?id=$id>
	<button class='btn btn-xs btn-danger'>Delete
	<span class='glyphicon glyphicon-trash'></span></a></button>";
	echo '</td>';
	echo '<td>';
	echo "<a href='student_update.php?id=$id'>
	<button class='btn btn-xs btn-success'>edit
	<span class='glyphicon glyphicon-pencil'></span></a>";
	echo '</td>';
	echo '</tr>';
	mysqli_close($con);
	
?>
</table>
</div>
</body>
</html>