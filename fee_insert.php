
	<?php
require'session.php';
require'header.php';
?>




<marquee style="background-color:pink; font-size:50px;">WELCOME IN Infnite Institutes</marquee>
<div class="container" style="background-color:lightblue;">
<div style="background-color:blue; width:70%; height:650px; margin-left:250px; color:black;"><h1 style="text-align:center;">Submit Fee</h1>
<?php
$id=$_GET['id'];
require'$con.php';

 $qry = "SELECT * FROM student WHERE id='$id'";

$result=mysqli_query($con,$qry);
$row=mysqli_fetch_array($result);
	
		$name=$row['name'];
	mysqli_query($con,$qry);
	mysqli_close($con);
?>
<form method="post" action="#">
<span style="margin-left:100px; font-size:25px;"><label >Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name"
value="<?php echo $name ;?>" readonly></label><br><br></span>
<div style="margin-left:100px; font-size:25px;">tussion_fee : <input type="number" name="tussion_fee" value="5000" readonly><br><br></div>

<div style="margin-left:100px; font-size:25px;"><label>Pay_Option : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="pay_option">
<option>Cash</option>
<option >Paytm</option>
<option>Debit Card</option></select></label><br><br></div>
<div style="margin-left:100px; font-size:25px;">Installment : <input type="number" name="installment">Per/Month<br><br></div>
 <span style="margin-left:100px; font-size:25px;">Full Pay : <input type="number" name="full_pay"><br><br><br><br>
 
 <input type="hidden" name="id" value="<?php echo $id ;?>">

<button style="margin-left:200px;"><input type="submit" name="sub" value="INSERT"></button>
<button style="margin-left:200px;"><input type="reset" name="reset"></button>
</form>
<?php
if(isset($_POST['sub']))
{
	
	$byid=$_POST['id'];
	$tussion_fee=$_POST['tussion_fee'];
	$name=$_POST['name'];
	$pay_option=$_POST['pay_option'];

	$installment=$_POST['installment'];
	$full_pay=$_POST['full_pay'];
	if($installment)
	{
	$remaining_fee=$tussion_fee-$installment;
	}
	else
	{
		$remaining_fee=$tussion_fee-$full_pay;
	}
	$date=date('y-m-d');
	$time=date('h:i:s');
	$ip=getenv('REMOTE_ADDR');

	 $con = mysqli_connect('localhost','root','','project');
     $qry="INSERT INTO `project`.`fee` (`name`, `tussion_fee`, `pay_option`, 
	`installment`, `full_pay`,`remaining_fee`, `time`, `date`, `byid`) VALUES ('$name', '$tussion_fee', '$pay_option',
	'$installment', '$full_pay', '$remaining_fee','$time', '$date', '$byid')";

	mysqli_query($con,$qry);
	mysqli_close($con);
	header('location:fee_select.php');
}
?>
</div>
</div>

<?php require'footer.php';?>
</body>
</html>