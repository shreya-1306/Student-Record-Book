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
        <h1><a href="#">Departmental Record Book</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="home.php">Home</a></li>
          <li><a class="drop" href="#">Search By</a>
            <ul>
              <li><a href="searchby/rollno.php">Roll No.</a></li>
              
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
             
              <li><a href="feedback_a.php">Contact Us</a></li>
              <li><a href="contact_after_admin.php">Help</a></li>
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
      <h6 class="heading">PERSONAL DETAILS</h6>
      
    </div>
    <div class="group excerpts">
   
      <article style="margin-left: 342px;" class="one_third">
        <div class="hgroup">
          <h6 class="heading">  <?php if(isset($_SESSION['username'])){ $usersData = getFacultyData(getFacultyID($_SESSION['username']));echo $usersData['Name']; }
?>
          </h6>
          <!-- <em>General Manager</em></div> -->

        
        <div class="txtwrap">
          <p> ID NO: <?php 
  if(isset($_SESSION['username'])){ $usersData = getFacultyData(getFacultyID($_SESSION['username'])); echo $usersData['ID'];}
?>
</p>  <p>
Type
<?php if(isset($_SESSION['username'])){ $usersData = getFacultyData(getFacultyID($_SESSION['username'])); echo $usersData['Type']; }
?>

          </p>
        </div>
      
      </article>
     
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    
  </main>
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