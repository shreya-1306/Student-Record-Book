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
<!-- <script src="layout/scripts/frontend.js"></script> -->
<style>

.box{
	background-color:white;
  width: 65%;
  
  margin-top:-410px;
  margin-left:100px;
  padding: 10px;
   height:410px;
   position:fixed;

  
}

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
.accordion {
 
  color: white;
  cursor: pointer;
    padding: 5px;
    width: 89%;
    margin-left: 50px;
    height: 46px;
    margin-top: 15px;
    text-align: left;
    font-size: 15px;
    transition: 0.4s;
    border-radius: 7px;
    background-color: #150e0e63;
	
}

.accordion:hover {
  background-color: grey; 
}

.panel {
	margin-top:7px;
	margin-left:50px;
border-radius:7px;
	

	color:black;
	width:90%;
 height:80px;
  display: none;
  font-size: 14px;
  background-color: white;
  overflow: hidden;
}
.accordion:after {
  content: '\2B9F';
  color: white;
  font-weight: bold;
  float: right;
  margin-right: 10px;
}



</style>
</head>
<!-- <canvas id="projector">Your browser does not support the Canvas element. </canvas> -->
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
          </h1>        </div>
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
         
      
    </div>
    <div class="group excerpts">
   
      <article style="     margin-left: -139px;
      margin-top: -72px;

    width: 354px;
    height: 402px;
    background-color: #150e0e63;" class="one_third">
        <div class="hgroup">
         
          <br><br>

          <?php 
  if(isset($_SESSION['username'])){

  $usersData = getUsersData(getId($_SESSION['username']));
 
   

$image= $usersData['rollno']; 

$dir_path = "student_images/";



            echo "<figure><a><img src='$dir_path$image.png' ></a></figure>";
      
        }
    

?>
        <br>
        <div class="txtwrap">
		       <h4> Name: <?php if(isset($_SESSION['username'])){ $usersData = getUsersData(getId($_SESSION['username'])); echo $usersData['name']; } ?>
          </h4>
		  <br>
          <h4> Roll No: <?php if(isset($_SESSION['username'])){ $usersData = getUsersData(getId($_SESSION['username'])); echo $usersData['rollno']; } ?></h4>  
		  <br>
		  <h4>
          Semester:
          <?php 
             if(isset($_SESSION['username'])){ $usersData = getUsersData(getId($_SESSION['username'])); echo $usersData['sem'];} ?>
          </h4>
        </div>
      
      </article>
     
    </div>
	
  <!--<div class="group excerpts">
  -->
	<article style=" margin-left: 250px;
        margin-top: -425px;
    width: 81%;
    height: 453px;"class="one_third">
	<button class="accordion">1.  How do I set a password after logging in for the first time?</button>
<div class="panel">
  <p>  Click on 'OTHER' and 'CHANGE PASSWORD' after that. Enter the current password email-ed to you and set a new password 
  that has to be minimum 8 characters.</p>
</div>

<button class="accordion">2. Can I view my progress or the activities done by me ?</button>
<div class="panel">
  <p>You can view your progress on clicking the VIEW PROGRESS button which will show your uploaded activities and 
    details under various categories.</p>
</div>


<button class="accordion"> 3. How do I add an activity?</button>
<div class="panel">
  <p> You can simply add an activity by clicking on ADD ACTIVITY which will show various categories of activities
   you can add.Click on suitable category,add details in form accordingly and press submit.It is compulsory to add certificate and 
   and image of event can be optionally added.</p>
</div>
<button class="accordion"> 4. How do I delete an erroneous activity?</button>
<div class="panel">
  <p> Click on VIEW PROGRESS and go to the category in which you want to delete an entry. Click on the delete button
  in the row of activity.</p>
</div>


<button class="accordion"> 5. Do I need a proof for the activity I upload?</button>
<div class="panel">
  <p> Yes definitely. You need to upload some proof like a certificate or a Letter of Appreciation pertaining to the activity you add.
  It should be in image or pdf format.Additional image of event can also be uploaded(if any).</p>
</div>

<button class="accordion"> 6. Is there any rule for the name of the files to be uploaded?</button>
<div class="panel">
  <p> For uniquely attributing each file to a user,the name of the file needs to be 'SerialNumber_YourRollnumber'.
   More details regarding name of the files is provided in the notes in add activity section.If certificate files are wrongly named
  they might get misplaced and your entry will not be considered.</p>
</div>

<button class="accordion"> 7.Can I view other students' activities?</button>
<div class="panel">
  <p> Go to 'VIEW' option under 'OTHER'. It displays various entries done by all students.</p>
</div>


</article>

    <!-- ################################################################################################ -->
    <!-- / main body -->
    
  </main>
</div>
<!--<h2 style="font-size: 28px;margin-left: 492px;" class="heading">Student Achievements</h2>
   <div class="w3-content w3-section" style=" max-width: 481px;margin-left: 432px;margin-top: -1px;" >
  <img class="mySlides" src="slideshow/1.jpg" style="width:400%">
  <img class="mySlides" src="slideshow/2.jpg" style="width:400%">
  <img class="mySlides" src="slideshow/3.jpeg" style="width:400%">
  <img class="mySlides" src="slideshow/4.jpg" style="width:400%">
  <img class="mySlides" src="slideshow/5.jpeg" style="width:400%">
  <img class="mySlides" src="slideshow/6.jpeg" style="width:400%">
</div>-->
<center>
 <footer>
<h3 style="margin-top:5px;"> For any further queries Email us at admin@somaiya.edu</h3>
<a href="feedback_s.php" style="font-size: 20px;margin-top:-5px;">Click here for feedback / queries </a>
</footer>

</center>

</div>




<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>

<script>


/*var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
*/
var acc = document.getElementsByClassName("accordion");
var j;

for (j = 0; j < acc.length; j++) {
  acc[j].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script> 
</body>

</html>