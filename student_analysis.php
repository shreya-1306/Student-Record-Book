<!-- background image not seen -->
<?php
session_start();
require("functions.php");
 

  if(isset($_SESSION['username'])){

  $usersData = getUsersData(getId($_SESSION['username']));
 
   

}
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
<link rel="stylesheet" type="text/css" href="analysisdesign.css"> 


</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay"   > 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="#">Departmental Record Book</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="home.php">Home</a></li>
          <li><a class="drop" href="#">Add Activity</a>
            <ul>
              <li><a href="workshop.php">Workshop</a></li>
              <li><a href="course.php">Course</a></li>
              <li><a href="tpp.php">TPP</a></li>
              <li><a href="competition.php">Competition</a></li>
              <li><a href="sports.php">Sports</a></li>
              <li><a href="other_activity.php">Other Activity</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">View Progress</a>
            <ul>
              <li><a href="viewprogress/my_workshop.php">Workshop</a></li>
              <li><a href="viewprogress/my_course.php">Course</a></li>
              <li><a href="viewprogress/my_tpp.php">TPP</a></li>
              <li><a href="viewprogress/my_competition.php">Competition</a></li>
              <li><a href="viewprogress/my_sports.php">Sports</a></li>
              <li><a href="viewprogress/my_other.php">Other Activity</a></li>
            </ul>
          </li>
            <li><a class="drop" href="#">Analysis</a>
            <ul>
              <li><a href="student_analysis.php">Tabular</a></li>
              <li><a href="student_graphical.php">Graphical</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Other</a>
            <ul>
              <li><a class="drop" href="#">View</a>
              <ul>
                  <li><a href="php/view_workshop.php">Workshop</a></li>
                  <li><a href="php/view_course.php">Course</a></li>
                  <li><a href="php/view_tpp.php">TPP</a></li>
                   <li><a href="php/view_competition.php">Competition</a></li>
                  <li><a href="php/view_sports.php">Sports</a></li>
                  <li><a href="php/view_otheractivity.php">Other Activity</a></li>
                </ul>
                </li>
              <li><a href="feedback_s.php">Contact Us</a></li>
              <li><a href="contact_after.php">Help</a></li>
              <li><a href="changepass.php">Change Password</a></li>
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
     

<!--       TABLE STARTS -->
<div class="search1">

  

<!-- <font color="white" align="center" style="margin-left:220px" size="75px" > Overall </font> -->
<center>
<h2 style=" margin-top: -111px; font-size: 30px; padding-bottom: 26px;" >Tabular Analysis</h2>

</center>
  

  
  <table style="margin-top:20px" border="4" solid white>
    <tr>
      <th> <span style='color:#AFA;'>Categories      </th>
      <th>First Year</th>
      <th> Second Year</th>
         
      <th>Third Year</th>
      <th>Fourth Year</th>
    </tr>
    
    <tr>
    
    
      <th>Workshops</th>
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
      <th>Courses</th>
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
      <th>TPP</th>
      
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
      <th>Sports</th>
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
      <th>Competitions</th>
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
      <th>Other Activities</th>
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


<!-- TABLE ENDS -->
      
    </div>

   
  </main>
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    

</div>

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