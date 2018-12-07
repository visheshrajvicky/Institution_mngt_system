
<?php 
require'session.php';
require'header.php';
?>

</style>
<div class="container">
<div class="col-md-3">
    <h1 class="text-danger" style="text-align:center;"><b>Infinite Institute</b></h1>
    <h3 style="text-align:center;"><?php echo '<a href="header_profile.php">';?><b style="color:black;">Home</b></a></h3>
    <h3 class="dropdown" style="text-align:center;"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b style="color:black;">Course</b><span class="caret"></span></a>
      <ul class="dropdown-menu">
      <li><?php echo '<a href="course_insert.php">';?><h4 style="color:red;">Creat New Course</h4></a></li>
      <li><?php echo '<a href="course_select.php">';?><h4 style="color:red;">Veiw Course</h4></a></li>
      </ul>
    </h3>
    <h3 class="dropup" style="text-align:center;"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b style="color:black;">Faculties</b><span class="caret"></span></a>
<ul class="dropdown-menu">
<li><?php echo '<a href="faculties_insert.php">';?><h4 style="color:red;">Creat New Faculties</h4></a></li>
<li><?php echo '<a href="faculties_select.php">';?><h4 style="color:red;">Veiw Faculties</h4></a></li>
</ul>
</h3>
    <h3 class="dropup" style="text-align:center;"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b style="color:black;">Batch</b><span class="caret"></span></a>
<ul class="dropdown-menu">
<li><?php echo '<a href="batch_insert.php">';?><h4 style="color:red;">Choose Another Batch</h4></a></li>
<li><?php echo '<a href="batch_select.php">';?><h4 style="color:red;">Veiw Exist Batch</h4></a></li>
</ul>
</h3>
    <h3 class="dropup" style="text-align:center;"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b style="color:black;">Enquiry</b><span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="#"><h4 style="color:red;">Visit student</h4></a></li>
<li><a href="#"><h4 style="color:red;">Regestered Student</h4></a></li>
<li><a href="#"><h4 style="color:red;">New student</h4></a></li>
</ul>
</h3>
    <h3 class="dropup" style="text-align:center;"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b style="color:black;">student</b>
    <span class="caret"></span>
    <ul class="dropdown-menu">
     <li><?php echo '<a href="student_insert.php">';?><h4 style="color:red;">New Student</h4></a></li>
     <li><?php echo '<a href="student_select.php">';?><h4 style="color:red;">Regestered Student</h4></a></li>
    </ul>
    </h3>
    <h3 class="dropup" style="text-align:center;"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b style="color:black;">Student_batch</b><span class="caret"></span></a>
<ul class="dropdown-menu">
<li><?php echo '<a href="java.php">';?><h4 style="color:red;">JAVA</h4></a></li>
<li><a href="#"><h4 style="color:red;">C/C++</h4></a></li>
<li><a href="#"><h4 style="color:red;">.NET</h4></a></li>
<li><a href="#"><h4 style="color:red;">PHP</h4></a></li>
<li><a href="#"><h4 style="color:red;">SEO</h4></a></li>
<li><a href="#"><h4 style="color:red;">PYTHON</h4></a></li>
</ul>
</h3>
<h3 class="dropup" style="text-align:center;"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b style="color:black;">Fee_collection</b><span class="caret"></span></a>
<ul class="dropdown-menu">
<li><?php echo '<a href="fee_select.php">';?><h4 style="color:red;">fee_status</h4></a></li>
<li><?php echo '<a href="fee_detail.php">';?><h4 style="color:red;">fee_detail</h4></a></li>
</ul>
</h3>
</div>
   <div class="col-md-9"><h1 class="text-center text-danger">Welcome to Infinite Insititute</h1>
       <div class="col-md-5">
       <img src="IMAGE/a.png" width="200" height="200">
       </div>
           <div class="col-md-7"><h5 style="font-style:italic;"><b>Infinite Insititute Pvt Ltd is one 
           of the premier I.T. solution providers in India.</b></h5>
           <li>These are one of the best institute in bhopal for technical education</li>
           <li>There are many batche's from morning to evening </li>
           <li>They provide many type of facility such as Training,Internship so on.</li>
           <li>All the faculties in this institute more than 10 year,s exprience.</li><br><br><br>
           </div>
       <p>At Infinite Insititute innovation is a way of life, and technology is but an extension of the human intellect. Infinite Insititute is a leading Website development and Training provider company
        of India catering to your entire set of corporate requirements, from concept creation to domain
         hosting. As the leading search engine marketing firm in India, we have the potential to add 
         a whole new dimension to your sales paradigm.
With professional who are experts in their fields and are abreast with the latest
 in technology, we deal into all the major aspects of corporate information technology...
 from customized software to Web Development, search engine optimization to search engine marketing...</p>
  </div>



</div>
<div class="col-md-12">
 <div class="col-md-6">
 <div class="glyphicon glyphicon-cloud-download"></div>
 </div>
 <?php require'footer.php';?>
</div>

</body>
</html>