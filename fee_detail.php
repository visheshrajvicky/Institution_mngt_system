<?php

require'session.php';
require'header.php';
?>
<div class="container bg-info">
  <div style="background-color:orange;"><div style="color:white; font-size:50px; text-align:center;"><?php echo '<a href="all_student_fee.php">';?>
  Show all student fee</a></div></div>
  
   <div style="background-color:white;"><div style="color:white; font-size:50px; text-align:center;"><?php echo '<a href="maximum_fee.php">';?>
  Show Max<img src="IMAGE/chkra.png" width="50" height="50">imum fee</a></div></div>
  
  <div style="background-color:green;"><div style="color:white; font-size:50px; text-align:center;"><?php echo '<a href="min_fee.php">';?>
  Show Minimum fee</a></div></div>
  
  <div style="background-color:pink;"><div style="color:white; font-size:50px; text-align:center;"><?php echo '<a href="desc_fee.php">';?>
  Show fee Max. To Min.</a></div></div>
  
  <div style="background-color:lightblue;"><div style="color:white; font-size:50px; text-align:center;"><?php echo '<a href="total_remaining_fee.php">';?>
  Show total remaining fee</a></div></div>
</div>