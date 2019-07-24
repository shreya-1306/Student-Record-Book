<!-- background image not seen -->
<?php
session_start();
require("functions.php");
 
?>
<!DOCTYPE html>
<!--
Template Name: Basend
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html lang="">
<head>
<title>Record Book</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="faq.css"> 
<link rel="stylesheet" type="text/css" href="layout/styles/login.css"> 
<script src="https://cdn.anychart.com/releases/8.0.0/js/anychart-base.min.js"></script>
 <style>
footer{

   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   #A2B70D
   text-align: center;
   height:max-content;
}
</style>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" > 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
      <h1>
            <img   class ="logo2"  height="80" width="80" src="images/demo/logo2.png">   
            <a href="#">Departmental Record Book</a>            <img   class ="logo1"  height="80" width="80" src="images/demo/logo1.png"> 
          </h1>       </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="admin_index.php">Home</a></li>
          <li><a class="drop" href="#">Search By</a>
            <ul>
              <li><a href="searchby/rollno.php">Roll No</a></li>
			   <li><a href="searchby/name.php">Name</a></li>
              
            </ul>
          </li>
          <li><a class="drop" href="#">View</a>
              <ul>
                  <li><a href="php/admin_view/view_workshop.php">Workshop</a></li>
                  <li><a href="php/admin_view/view_courses.php">Course</a></li>
                  <li><a href="php/admin_view/view_tpp.php">TPP</a></li>
                   <li><a href="php/admin_view/view_competitions.php">Competition</a></li>
                  <li><a href="php/admin_view/view_sports.php">Sports</a></li>
                  <li><a href="php/admin_view/view_otheractivity.php">Other Activity</a></li>
                </ul>
                </li>
            <li><a class="drop" href="#">Analysis</a>
            <ul>
              <li><a href="analysis.php">Tabular</a></li>
              <li><a href="graphical.php">Graphical</a></li>
            </ul>
          </li>
         <li><a class="drop" href="#">Other</a>
            <ul>
             
             
              <li><a href="admin_index.php">Help</a></li>
              <li><a href="changepass_a.php">Change Password</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
         
         
     
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>

<div >
  <main class="hoc container clear"> 



    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
  <div class="search1">

  

<!-- <font color="white" align="center" style="margin-left:220px" size="75px" > Overall </font> -->
<center>
<h2 style=" margin-top: 20px; font-size: 30px; padding-bottom: 26px;" >Tabular Analysis</h2>

</center>
  

  

<table>
    <tr>
      <th style="color:white;">Categories      </th>
      <th style="color:white;">First Year</th>
      <th style="color:white;"> Second Year</th>
         
      <th style="color:white;">Third Year</th>
      <th style="color:white;">Fourth Year</th>
    </tr>
    
    <tr>
    
    
      <th style="color:white;">Workshops</th>
      <td>
         <?php 
  
    $ct=getcount(1,2,1);
    echo $ct; 

?>
</td>
       <td>
         <?php 
  
$ct=getcount(3,4,1);
echo $ct;

?>
</td>
<td>
         <?php 
  
$ct=getcount(5,6,1);
echo $ct;

?>
</td>
<td>
         <?php 

  $ct=getcount(7,8,1);
echo $ct;  

?>
</td>
    </tr>
    <tr>
      <th style="color:white;">Courses</th>
      <td>
         <?php 
 
$ct=getcount(1,2,2);
echo $ct;

?></td>
  <td>
         <?php 
  
$ct=getcount(3,4,2);
echo $ct;

?></td>
  <td>
         <?php 
 
$ct=getcount(5,6,2);
echo $ct;

?></td>
  <td>
         <?php 
 
$ct=getcount(7,8,2);
echo $ct;

?></td>

</tr>
    
    

  <tr>
      <th style="color:white;">TPP</th>
      
      <td>
         <?php 
  
$ct=getcount(1,2,3);
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(3,4,3);
echo $ct;

?></td>
  <td>
         <?php 
 
 $ct=getcount(5,6,3);
echo $ct;

?></td>
  <td>
         <?php 
  
$ct=getcount(7,8,3);
echo $ct;

?></td>





</tr>
  <tr>
      <th style="color:white;">Sports</th>
      <td>
         <?php 
  
 $ct=getcount(1,2,4);
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(3,4,4);
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(5,6,4);
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(7,8,4);
echo $ct;

?></td>

</tr>
  <tr>
      <th style="color:white;">Competitions</th>
      <td>
         <?php 
  
 $ct=getcount(1,2,5);
echo $ct;

?></td>
  <td>
         <?php 
 
 $ct=getcount(3,4,5);
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(5,6,5);
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(7,8,5);
echo $ct;

?></td>

</tr>


  <tr>
      <th style="color:white;">Other Activities</th>
            <td>
         <?php 
  
 $ct=getcount(1,2,6);
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(3,4,6);
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(5,6,6);
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(7,8,6);
echo $ct;

?></td>
</tr>
</table>

</center>
</div>
 </div>

   
  </main>
    </div>
  


    <!--  FAQs END -->
    <!-- ################################################################################################ -->
    <!-- / main body -->
    
 
</div>
<center>
 <footer>
<h3 style="margin-top:5px;"> For any further queries Email us at admin@somaiya.edu</h3>
<a href="feedback_a.php" style="font-size: 20px;margin-top:-5px;">Click here for feedback / queries </a>
</footer>

</center>
</div><!--  background image tag -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->


<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>