<?php
require'session.php';
require'header.php';
?>
<div class="table-responsive">
<table class="table table-bordered table-hover table-striped text-center bg-warning">

<tr>
<th><h5 style="text-align:center; font-size:20px;">Sno</h5></th>
<th><h5 style="text-align:center; font-size:20px;">batch_id</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Subject</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Duration</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Time</h5></th>
<th><h5 style="text-align:center; font-size:20px;">Apear_student</h5></th>
</tr>
<?php

require'$con.php';
	$qry="SELECT * FROM batch WHERE subject='java'";
	$result=mysqli_query($con,$qry);
	$i=1;
	while($row=mysqli_fetch_array($result))
	{
		
	echo '<tr>';
	echo '<td>';
	echo $i++;
	echo '</td>';
	echo '<td>';
	echo $id=$row['id'];
	echo '</td>';
	echo '<td>';
	echo $subject=$row['subject'];
	echo '</td>';
	echo '<td>';
	echo $duration=$row['duration'];
	echo '</td>';
	echo '<td>';
	echo $std_time=$row['std_time'];
	echo '</td>';
	
	
	
	echo '<td>';
	echo "<a href='java_select.php?id=$id'>
	<button class='btn btn-xs btn_default'>student
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