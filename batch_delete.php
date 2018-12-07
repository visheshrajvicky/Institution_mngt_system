
<?php
require'session.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php

$id=$_GET['id'];
$con = mysqli_connect('localhost','root','','project');


$qry = "DELETE FROM batch WHERE id='$id'";

mysqli_query($con,$qry);

mysqli_close($con);
header('location:batch_select.php');
?>

</body>
</html>