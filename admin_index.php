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
 
  color: whites;
  cursor: pointer;
  padding: 5px;
  width: 90%;
margin-left:50px;
height: 42px;
margin-top:15px;
  text-align: left;
  font-size: 16px;
  transition: 0.4s;
border-radius:7px;
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
  height: 86px;
    display: none;
    font-size: 13px;
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
   <div class="group excerpts">
   
      <article style="    margin-left: -139px;
    margin-top: 1px;
    width: 321px;
    height: 256px;
    background-color: #150e0e63;
" class="one_third">
        <div class="hgroup">
         
          
        <br>
        <div class="txtwrap">
		       <h4> Name: <?php 
  if(isset($_SESSION['username'])){

 	$usersData = getFacultyData(getFacultyID($_SESSION['username']));
 
   

echo $usersData['Name']; 
} ?>
          </h4>
		  <br>
          <h4> Id No: <?php if(isset($_SESSION['username'])){

 	$usersData = getFacultyData(getFacultyID($_SESSION['username']));
 
   

echo $usersData['ID']; 
}?></h4>  
		  <br>
		  <h4>
          Type:
          <?php 
             if(isset($_SESSION['username'])){

 	$usersData = getFacultyData(getFacultyID($_SESSION['username']));
 
   

			 echo $usersData['Type']; } ?>
          </h4>
        </div>
      
      </article>
     
    </div>
	
  <!--<div class="group excerpts">
  -->
	<article style="    margin-left: 250px;
    margin-top: -278px;
    width: 81%;
    height: 453px;" class="one_third">
	<button class="accordion">1.As an admin what privileges do I get?</button>
<div class="panel">
  <p>As the admin of the website you can delete entries
made by students incase of  lack of proof,
 search the activities done by a particular student 
by their name or roll number, view all the activities done by 
the students of KJSCE in a particular time frame etc.</p>
</div>

<button class="accordion">2. How can I remove any entry?</button>
<div class="panel">
  <p>You can remove an entry from the table by pressing the delete option in the same 
  row.</p>
</div>


<button class="accordion"> How do I search for a student's details by their roll number 
or name?</button>
<div class="panel">
  <p> 
You can search by roll number or name by going to search by option and clicking
on name or roll number.Then just type in the roll number and the activity you want
to search and  click submit.The result will be displayed below.

</p>
</div>


<button class="accordion"> 4. How do I search  for activities done by the students in a particular time frame?
</button>
<div class="panel">
  <p> You can do so by clicking View and then the activity you want to search .Then you can provide 
the start date and the end date for the time frame desired and press submit.This will display 
the activities performed in that time frame.

</p>
</div>

<button class="accordion"> 5.What kind of analysis is obtained from the data?</button>
<div class="panel">
  <p>The Tabular analysis shows the number of students 
 of a particular year doing a particular activity in the form of a compact 
table.The Graphical analysis shows the same analysis in a graphical form;showing the
number of students of particular year per activity.</p>
</div>

<button class="accordion">   6. What else can I do using my account?</button>
<div class="panel">
  <p>  You can change your password to whatever you desire,provide 
feedback to us directly using the link provided on the footer of the 
website or mail us at  admin @somaiya.edu.</p>
</div>


</article>

    <!-- ################################################################################################ -->
    <!-- / main body -->
    
  </main>
</div>

<center>
 <footer>
<h3 style="margin-top:5px;"> For any further queries Email us at admin@somaiya.edu</h3>
<a href="feedback_a.php" style="font-size: 20px;margin-top:-5px;">Click here for feedback / queries </a>
</footer>

</center>

</div>


<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script>
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