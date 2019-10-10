<!-- background image not seen -->
<?php
session_start();
require("../functions.php");
 
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
height:50px;
margin-top:15px;
  text-align: left;
  font-size: 20px;
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
 height:80px;
  display: none;
  font-size:17px;
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
            <img   class ="logo2"  height="80" width="80" src="../images/demo/logo2.png">   
            <a href="#">Departmental Record Book</a>            <img   class ="logo1"  height="80" width="80" src="../images/demo/logo1.png"> 
          </h1>       </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="../admin_index.php">Home</a></li>
          <li><a class="drop" href="#">Search By</a>
            <ul>
              <li><a href="rollno.php">Roll No</a></li>
                  <li><a href="#">Name</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">View</a>
              <ul>
                  <li><a href="../php/admin_view/view_workshop.php">Workshop</a></li>
                  <li><a href="../php/admin_view/view_courses.php">Course</a></li>
                  <li><a href="../php/admin_view/view_tpp.php">TPP</a></li>
                   <li><a href="../php/admin_view/view_competitions.php">Competition</a></li>
                  <li><a href="../php/admin_view/view_sports.php">Sports</a></li>
                  <li><a href="../php/admin_view/view_otheractivity.php">Other Activity</a></li>
                </ul>
                </li>
            <li><a class="drop" href="#">Analysis</a>
            <ul>
              <li><a href="../analysis.php">Tabular</a></li>
              <li><a href="../graphical.php">Graphical</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Other</a>
            <ul>
             
              
              <li><a href="../admin_index.php">Help</a></li>
              <li><a href="../changepass_a.php">Change Password</a></li>
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
  
    
<form action="name.php" method="POST">
<div class="fieldset1">
  <center>

  
   
<span style="font-size : 22px;">SEARCH BY NAME</span><br><br>
 <font color="white">Enter Name : </font><input  style="width: 700px;" type="text" name="name" required ><br>
 <div class="search_by_rollno">
  
<!-- <font color="white">Select Activity : &nbsp</font>
<input type="radio" name="activity_name" value="ws" required><font color="white" >Workshop</font>
<input type="radio" name="activity_name" value="course"><font color="white">Course</font>
<input type="radio" name="activity_name" value="comp"><font color="white">Competition</font>
</div>
<div class="search_by_rollno2">
<input type="radio" name="activity_name" value="sports"><font color="white">Sports</font>
<input type="radio" name="activity_name" value="tpp"><font color="white">TPP</font>
<input type="radio" name="activity_name" value="otherac"><font color="white">Other Activity</font>
</div> -->


<label for="position">Select Activity:</label>
	
    
	<select  style="width: 700px;" name="activity_name" required>
  <option value="ws" name="activity_name">Workshop</option>
  <option value="course" name="activity_name">Course</option>
  <option value="comp" name="activity_name">Competition</option>
  <option value="sports" name="activity_name">Sports</option>
  <option value="tpp" name="activity_name">TPP</option>
  <option value="otherac" name="activity_name">Other Activity</option>
</select>
  

  

<br><br><br>
  <center>
  <input style="margin-left: -19px;" type="submit" name="button" />
  </form>
  </center> 
  <br><br><br>

  <center>


<?php



if(isset($_POST['button'])) {
    $name=$_POST['name'];


$activity=$_POST['activity_name'];
if($activity == 'ws')
{    $nm=$name;
       $sql = "select * from workshop where INSTR(name,'$nm') >0";


$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0)
{  

       $result = mysqli_query($conn,$sql);

    ?>


    

    <table >

    WORKSHOPS ATTENDED: 

       <tr><th>ROLL NO</th><th>NAME</th><th>NAME OF WORKSHOP</th><th>CONDUCTED BY</th><th>START DATE</th><th>END DATE</th><th>CERTIFICATE</th><th>IMAGE</th></span></tr>

        <?php
  while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

    

      
  echo "<tr><td> <span style='color:#000000;'>  ". $line['rollno']."
   </td><td>  <span style='color:#000000;'> ". $line['name']."
      </td><td>  <span style='color:#000000;'> ". $line['namew']."
      </td><td>  <span style='color:#000000;'> ". $line['con_by']."
      </td><td>  <span style='color:#000000;'> ". $line['start_date']."
      </td><td>  <span style='color:#000000;'> ". $line['end_date']." 
      </td><td>";


      $fn =$line['filename'];
      $files= scandir("../uploads/workshop");
      for($a =2;$a <count($files);$a++){

        if($fn==$files[$a])
        {


        ?>

       

        <p>
          <a style='color:#000000;' href="../../uploads/workshop/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>
        </p>

        <?php 
      }


      }
      echo "</td><td>";


      $fn1 =$line['filename1'];
      $files1= scandir("../uploads/opt_workshop");
      for($a =2;$a <count($files1);$a++){
      
        if($fn1==$files1[$a])
        {
      
      
        ?>
      
       
      
        <p>
          <a style='color:#000000;' href="../uploads/opt_workshop/<?php echo $files1[$a] ?>"><?php echo $files1[$a] ?></a>
        </p>
      
        <?php 
      }
      
      
      }
      echo "</td></tr>";

     
         
     
}
?>
 <br><br>
 

    <?php }
    

else
{
  echo "<br><br><br><br><center><style='margin: 1500px 5px 15px 20px'><font size='5' color='white'> NO ENTRIES FOUND </font></style></center>";
}
$conn->close();
?>

</table>
<br>


<?php  
}

elseif ($activity == 'course') {
  # code...
  $nm=$name;
   $sql = "select * from course where INSTR(name,'$nm') >0";

$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0)
{  


    ?>

    <table>
    COURSES COMPLETED: 
       
        <tr><th>ROLL NO</th><th>NAME</th><th>COURSE NAME</th><th>INSTITUTE/WEBSITE</th><th>START DATE</th><th>END DATE</th><th>CERTIFICATE</th><th>IMAGE</th></span></tr>

  <?php


while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    

echo "<tr><td> <span style='color:#000000;'>  ". $line['rollno']."
 </td><td>  <span style='color:#000000;'> ". $line['name']."
    </td><td>  <span style='color:#000000;'> ". $line['name_c']."
    </td><td>  <span style='color:#000000;'> ". $line['insti']."
    </td><td>  <span style='color:#000000;'> ". $line['start_date']." 
    </td><td>  <span style='color:#000000;'> ". $line['end_date']." 
    </td><td> ";

     $fn =$line['filename'];
     $files= scandir("../uploads/courses");
      for($a =2;$a <count($files);$a++){

        if($fn==$files[$a])
        {


        ?>

        <p>
          <a style='color:#000000;' href="../uploads/courses/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>
        </p>

        <?php 
      }


      }



      echo "</td><td>";


      $fn1 =$line['filename1'];
      $files1= scandir("../uploads/opt_courses");
      for($a =2;$a <count($files1);$a++){
      
        if($fn1==$files1[$a])
        {
      
      
        ?>
      
       
      
        <p>
          <a style='color:#000000;' href="../uploads/opt_courses/<?php echo $files1[$a] ?>"><?php echo $files1[$a] ?></a>
        </p>
      
        <?php 
      }
      
      
      }
      echo "</td></tr>";
 

}

?>
 <br><br>
  
    <?php }
    
else
{
  echo "<br><br><br><br><center><style='margin: 1500px 5px 15px 20px'><font size='5'> NO ENTRIES FOUND </font></style></center>";
}
$conn->close();

?>

</table>

<br>

<?php  
}
elseif ($activity == 'comp') {
  # code...
  $nm=$name;
   $sql = "select * from competition where INSTR(name,'$nm') >0";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0)
{  

    ?>

   
  <table >
  COMPETITIONS ATTENDED: 
       <tr><th>ROLL NO</th><th>NAME</th><th>NAME OF COMPETITION</th><th>CONDUCTED BY</th><th>RANK</th><th>LEVEL</th><th>START DATE</th><th>END DATE</th><th>CERTIFICATE</th><th>IMAGE</th></span></tr>

        <?php


while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
  
    
echo "<tr><td> <span style='color:#000000;'>  ". $line['rollno']."
 </td><td>  <span style='color:#000000;'> ". $line['name']."
    </td><td>  <span style='color:#000000;'> ". $line['name_comp']."
    </td><td>  <span style='color:#000000;'> ". $line['cond_by']."
    </td><td>  <span style='color:#000000;'> ". $line['position']."
    </td><td>  <span style='color:#000000;'> ". $line['level']."
    </td><td>  <span style='color:#000000;'> ". $line['start_date']." 
    </td><td>  <span style='color:#000000;'> ". $line['end_date']." 
     </td><td>";

     $fn =$line['filename'];
     $files= scandir("../uploads/competition");
      for($a =2;$a <count($files);$a++){

        if($fn==$files[$a])
        {


        ?>

        <p>
          <a style='color:#000000;' href="../uploads/competition/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>
        </p>

        <?php 
      }
      }

      echo "</td><td>";


      $fn1 =$line['filename1'];
      $files1= scandir("../uploads/opt_competition");
      for($a =2;$a <count($files1);$a++){
      
        if($fn1==$files1[$a])
        {
      
      
        ?>
      
       
      
        <p>
          <a style='color:#000000;' href="../uploads/opt_competition/<?php echo $files1[$a] ?>"><?php echo $files1[$a] ?></a>
        </p>
      
        <?php 
      }
      
      
      }
      echo "</td></tr>";
 
}

?>
 <br><br>
   
    <?php }
    
else
{
  echo "<br><br><br><br><center><style='margin: 1500px 5px 15px 20px'><font size='5' color='white'> NO ENTRIES FOUND </font></style></center>";

}
$conn->close();

?>

</table>

<br>
 <?php  

}
elseif ($activity == 'sports') {
  # code...
  $nm=$name;
   $sql = "select * from sports where INSTR(name,'$nm') >0";

$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0)
{  

    ?>

   <table >
   TOURNAMENTS ATTENDED: 
        <tr><th>ROLL NO</th><th>NAME</th><th>NAME OF TOURNAMENT</th><th>PLACE</th><th>RANK</th><th>START DATE</th><th>END DATE</th><th>CERTIFICATE</th><th>IMAGE</th></span></tr>

        <?php


while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    
echo  "<tr><td> <span style='color:#000000;'>  ". $line['rollno']."
</td><td> <span style='color:#000000;'>  ". $line['name']."
</td><td> <span style='color:#000000;'>  ". $line['tour_name']."
    </td><td>  <span style='color:#000000;'> ". $line['place']."
    </td><td>  <span style='color:#000000;'> ". $line['position']."
    </td><td>  <span style='color:#000000;'> ". $line['start_date']." 
    </td><td>  <span style='color:#000000;'> ". $line['end_date']." 
    </td><td>";


      $fn =$line['filename'];
      $files= scandir("../uploads/sports");
      for($a =2;$a <count($files);$a++){

        if($fn==$files[$a])
        {


        ?>

        <p>
          <a style='color:#000000;' href="../uploads/sports/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>
        </p>

        <?php 
      }
      }
      echo "</td><td>";


      $fn1 =$line['filename1'];
      $files1= scandir("../uploads/opt_sports");
      for($a =2;$a <count($files1);$a++){
      
        if($fn1==$files1[$a])
        {
      
      
        ?>
      
       
      
        <p>
          <a style='color:#000000;' href="../uploads/opt_sports/<?php echo $files1[$a] ?>"><?php echo $files1[$a] ?></a>
        </p>
      
        <?php 
      }
      
      
      }
      echo "</td></tr>";
}

?>
 <br><br>

    <?php }
    
    else
{
  echo "<br><br><br><br><center><style='margin: 1500px 5px 15px 20px'><font size='5' color='white'> NO ENTRIES FOUND </font></style></center>";
}
$conn->close();

?>

</table>

<br>
 
<?php  

}
elseif ($activity == 'tpp') {
	$nm=$name;
  # code...
   $sql = "select * from tpp where INSTR(name,'$nm') >0";

$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0)
{  

    ?>
  <table >
  TPP :

       
        <tr><th>ROLL NO</th><th>NAME</th><th>TITLE</th><th>AUTHOR</th><th>PRESENTED AT</th><th>CERTIFICATE</th></span></tr>
        <?php

while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    
echo "<tr><td> <span style='color:#000000;'>  ". $line['rollno']."
    </td><td>  <span style='color:#000000;'> ". $line['name']."
    </td><td>  <span style='color:#000000;'> ". $line['title']."
    </td><td>  <span style='color:#000000;'> ". $line['author']."
    </td><td>  <span style='color:#000000;'> ". $line['presented_at']." 
    </td><td>";
  
      $fn =$line['filename'];
      $files= scandir("../uploads/tpp");
      for($a =2;$a <count($files);$a++){

        if($fn==$files[$a])
        {


        ?>

       

        <p>
          <a style='color:#000000;' href="../uploads/tpp/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>
        </p>

        <?php 
      }


      }
echo "</td></tr>";
}

?>
 <br><br>
   

    <?php }
    

else
{
  echo "<br><br><br><br><center><style='margin: 1500px 5px 15px 20px'><font size='5' color='white'> NO ENTRIES FOUND </font></style></center>";
}
$conn->close();

?>

</table>



<br>
 
  

<?php  
}
elseif ($activity == 'otherac') {
	$nm=$name;
  # code...
   $sql = "select * from other where INSTR(name,'$nm') >0";

$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0)
{  

    ?>
 <table >
 OTHER ACTIVITIES
         <tr><th>ROLL NO</th><th>NAME</th><th>NAME OF ACTIVITY</th><th>CONDUCTED BY</th><th>START DATE</th><th>END DATE</th><th>CERTIFICATE</th><th>IMAGE</th></span></tr>


  <?php
while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    
echo "<tr><td> <span style='color:#000000;'>  ". $line['rollno']."
 </td><td>  <span style='color:#000000;'> ". $line['name']."
    </td><td>  <span style='color:#000000;'> ". $line['name_act']."
    </td><td>  <span style='color:#000000;'> ". $line['cond_by']."
    </td><td>  <span style='color:#000000;'> ". $line['start_date']." 
    </td><td>  <span style='color:#000000;'> ". $line['end_date']." 
    </td><td>";



      $fn =$line['filename'];
      $files= scandir("../uploads/other_activity");
      for($a =2;$a <count($files);$a++){

        if($fn==$files[$a])
        {


        ?>
        <p>
          <a style='color:#000000;' href="../uploads/other_activity/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>
        </p>

        <?php 
      }
      }
      echo "</td><td>";


      $fn1 =$line['filename1'];
      $files1= scandir("../uploads/opt_other_activity");
      for($a =2;$a <count($files1);$a++){
      
        if($fn1==$files1[$a])
        {
      
      
        ?>
      
       
      
        <p>
          <a style='color:#000000;' href="../uploads/opt_other_activity/<?php echo $files1[$a] ?>"><?php echo $files1[$a] ?></a>
        </p>
      
        <?php 
      }
      
      
      }
      echo "</td></tr>";

}

?>
 <br><br>
  
    <?php 
        
    }

else
{
  echo "<br><br><br><br><center><style='margin: 1500px 5px 15px 20px'><font size='5'> NO ENTRIES FOUND </font></style></center>";
}
$conn->close();

?>

</table>
<br>

<?php  
}
}
?>
</center></div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    
  </main>
</div>
<center>
 <footer>
<h3 style="margin-top:5px;"> For any further queries Email us at admin@somaiya.edu</h3>
<a href="../feedback_a.php" style="font-size: 20px;margin-top:-5px;">Click here for feedback / queries </a>
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
