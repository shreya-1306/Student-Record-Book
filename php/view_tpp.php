<!-- background image not seen -->
<?php
session_start();
require("../functions.php");
 

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
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<!-- <link rel="stylesheet" type="text/css" href="../analysisdesign.css">  -->

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
<div class="bgded overlay"   > 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
      <h1>
            <img   class ="logo2"  height="80" width="80" src="../images/demo/logo2.png">   
            <a href="#">Departmental Record Book</a>            <img   class ="logo1"  height="80" width="80" src="../images/demo/logo1.png"> 
          </h1> 
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="../home.php">Home</a></li>
          <li><a class="drop" href="#">Add Activity</a>
            <ul>
              <li><a href="../workshop.php">Workshop</a></li>
              <li><a href="../course.php">Course</a></li>
              <li><a href="../tpp.php">TPP</a></li>
              <li><a href="../competition.php">Competition</a></li>
              <li><a href="../sports.php">Sports</a></li>
              <li><a href="../other_activity.php">Other Activity</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">View Progress</a>
            <ul>
              <li><a href="../viewprogress/my_workshop.php">Workshop</a></li>
              <li><a href="../viewprogress/my_course.php">Course</a></li>
              <li><a href="../viewprogress/my_tpp.php">TPP</a></li>
              <li><a href="../viewprogress/my_competition.php">Competition</a></li>
              <li><a href="../viewprogress/my_sports.php">Sports</a></li>
              <li><a href="../viewprogress/my_other.php">Other Activity</a></li>
            </ul>
          </li>
            <li><a class="drop" href="#">Analysis</a>
            <ul>
              <li><a href="../student_analysis.php">Tabular</a></li>
              <li><a href="../student_graphical.php">Graphical</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Other</a>
            <ul>
              <li><a class="drop" href="#">View</a>
              <ul>
                  <li><a href="view_workshop.php">Workshop</a></li>
                  <li><a href="view_course.php">Course</a></li>
                  <li><a href="view_tpp.php">TPP</a></li>
                   <li><a href="view_competition.php">Competition</a></li>
                  <li><a href="view_sports.php">Sports</a></li>
                  <li><a href="view_otheractivity.php">Other Activity</a></li>
                </ul>
                </li>
              <!-- <li><a href="../feedback_s.php">Contact Us</a></li>
              <li><a href="../contact_after.php">Help</a></li> -->
              <li><a href="../changepass.php">Change Password</a></li>
              <li><a href="../logout.php">Logout</a></li>
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

<?php


$sql = "select rollno,title,author,presented_at from tpp";
      
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0)
{  
  if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 10;
        $offset = ($pageno-1) * $no_of_records_per_page;
		$total_pages_sql = "SELECT COUNT(*) FROM tpp";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT rollno,name,title,author,presented_at from tpp order by rollno LIMIT $offset, $no_of_records_per_page";
        $result = mysqli_query($conn,$sql);

  ?>

  <center>
  <div class="fieldset1" style="margin-left: 10px;">
<span style="color: white;     font-size: 24px;">TPP</span><br><br>
</div>
  <table style=" width: 192%;" >

        <tr><th>&nbsp&nbspROLL&nbsp&nbspNO&nbsp&nbsp</th><th>&nbsp&nbspNAME&nbsp&nbsp</th><th>&nbsp&nbspTITLE&nbsp&nbsp</th><th>&nbsp&nbspAUTHOR&nbsp&nbsp</th><th>&nbsp&nbspPRESENTED&nbsp&nbspAT&nbsp&nbsp</th></span></tr>
        <?php

while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    
echo "<tr><td> <span style='color:#000000;'>  ". $line['rollno']."
</td><td>  <span style='color:#000000;'> ". $line['name']."
    </td><td>  <span style='color:#000000;'> ". $line['title']."
    </td><td>  <span style='color:#000000;'> ". $line['author']."
    </td><td>  <span style='color:#000000;'> ". $line['presented_at']." 
    </td><tr>";


}

?>
 <br><br>
      
 <a href="?pageno=1"><font color="white" size="4"><- First</font></a>
        
    &nbsp&nbsp&nbsp&nbsp&nbsp;
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>"><font color="white" size="4">Prev</font></a>
       &nbsp&nbsp&nbsp&nbsp&nbsp;
       
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>"><font color="white" size="4">Next</font></a>
      &nbsp&nbsp&nbsp&nbsp&nbsp;
       <a href="?pageno=<?php echo $total_pages; ?>"><font color="white" size="4">Last -></font></a>
       <br >    <br >    <br >

		<?php	}
		

else
{
  echo "<br><br><br><br><center><style='margin: 1500px 5px 15px 20px'><font size='5' color='white'> NO ENTRIES FOUND </font></style></center>";
}
$conn->close();

?>

</table>

    
 <br><br>


    

<!-- TABLE ENDS -->
      
    </div>

   
  </main>
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <center>
 <footer>
<h3 style="margin-top:5px;"> For any further queries Email us at admin@somaiya.edu</h3>
<a href="../feedback_s.php" style="font-size: 20px;margin-top:-5px;">Click here for feedback / queries </a>
</footer>

</center>
    

    

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