<?php
require'session.php';
require'header.php';
?>

<marquee style="background-color:pink; font-size:50px;">WELCOME IN FIDAATO INFOTECH</marquee>
<div class="container" style="background-color:lightblue;">
<div style="background-color:blue; width:70%; height:650px; margin-left:250px; color:black;"><h1 style="text-align:center;">Update Fee</h1>
<?php
$id=$_GET['id'];
require'$con.php';

 $qry = "SELECT * FROM fee WHERE id='$id'";

$result=mysqli_query($con,$qry);
$row=mysqli_fetch_array($result);
	
	$name=$row['name'];
	$tussion_fee=$row['tussion_fee'];
	$pay_option=$row['pay_option'];
	$paying_veriety=$row['paying_veriety'];
	$installment=$row['installment'];
	$full_pay=$row['full_pay'];
	mysqli_query($con,$qry);
	mysqli_close($con);

?>
<form method="post" action="#">
<span style="margin-left:100px; font-size:25px;"><label >Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;<input type="text" name="name"
value="<?php echo $name ;?>" readonly></label><br><br></span>
<span style="margin-left:100px; font-size:25px;"><label>Tussion_fee: <input type="number" value="
<?php echo $tussion_fee ;?>" name="tussion_fee" readonly></label><br><br></span>
<div style="margin-left:100px; font-size:25px;"><label>Pay_Option : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $pay_option ;?>"><select name="pay_option">
<option>Cash</option>
<option >Paytm</option>
<option>Debit Card</option></select></label><br><br></div>
<div style="margin-left:100px; font-size:25px;"><label>Paying_Veriety :;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"
value="<?php echo $paying_veriety ;?>"><select name="paying_veriety">
<option>Installment</option>
<option >Full Pay</option></select></label><br><br></div>
<div style="margin-left:100px; font-size:25px;">Installment : <input type="number" name="installment" value="$installment">Per/Month<br><br></div>
 <span style="margin-left:100px; font-size:25px;">Full Pay : <input type="number" name="full_pay" value="$full_pay"><br><br><br><br>
 <input type="hidden" name="id" value="<?php echo $id ;?>">

<button style="margin-left:200px;"><input type="submit" name="sub" value="UPDATE"></button>
<button style="margin-left:200px;"><input type="reset" name="reset"></button>
</form>
<?php
if(isset($_POST['sub']))
{
	$byid=$_POST['id'];
	$tussion_fee=$_POST['tussion_fee'];
	$name=$_POST['name'];
	$pay_option=$_POST['pay_option'];
	$paying_veriety=$_POST['paying_veriety'];
	$installment=$_POST['installment'];
	$full_pay=$_POST['full_pay'];
	$date=date('y-m-d');
	$time=date('h:i:s');
	$ip=getenv('REMOTE_ADDR');

	 require'$con.php';
	echo $qry = "UPDATE FEE SET name='$name', tussion_fee='$tussion_fee', pay_option='$pay_option',
 paying_veriety='$paying_veriety', installment='$installment', full_pay='$full_pay' WHERE id='$id'";

	mysqli_query($con,$qry);
	mysqli_close($con);
	//header('location:student_select.php');
}
?>
</div>
</div>

<?php require'footer.php';?>
</body>
</html>