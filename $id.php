<?php $con=mysqli_connect('localhost','root','','intern0611');
$qry="SELECT * FROM student";
$result=mysqli_query($con,$qry);
$row=mysqli_fetch_array($result);
if($row)
{
$byid=$row['id'];
}
?>