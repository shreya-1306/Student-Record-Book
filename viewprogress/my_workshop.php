<!-- background image not seen -->
<?php
session_start();
require("../functions.php");
 


if(isset($_SESSION['username'])){

    $usersData = getUsersData(getId($_SESSION['username']));

  

$rn=$usersData['rollno']; 
}

if (isset($_GET['deloa'])) {
    $filename=$_GET['deloa'];
    $sql="delete from other where filename='$filename'";
    if (mysqli_query($conn, $sql)) {
      // echo "Record deleted successfully";
  } else {
      echo "Error deleting record: " . mysqli_error($conn);
  }
  }
  
  
  
    if (isset($_GET['delcomp'])) {
    $filename=$_GET['delcomp'];
    $sql="delete from competition where filename='$filename'";
    if (mysqli_query($conn, $sql)) {
      // echo "Record deleted successfully";
  } else {
      echo "Error deleting record: " . mysqli_error($conn);
  }
  }
  
  
  
   if (isset($_GET['delsports'])) {
    $filename=$_GET['delsports'];
    $sql="delete from sports where filename='$filename'";
    if (mysqli_query($conn, $sql)) {
      // echo "Record deleted successfully";
  } else {
      echo "Error deleting record: " . mysqli_error($conn);
  }
  
  }
  
   if (isset($_GET['deltpp'])) {
    $filename=$_GET['deltpp'];
    $sql="delete from tpp where filename='$filename'";
    if (mysqli_query($conn, $sql)) {
      // echo "Record deleted successfully";
  } else {
      echo "Error deleting record: " . mysqli_error($conn);
  }
  
  }
  
  
  
   if (isset($_GET['delcourse'])) {
    $filename=$_GET['delcourse'];
    $sql="delete from course where filename='$filename'";
    if (mysqli_query($conn, $sql)) {
      // echo "Record deleted successfully";
  } else {
      echo "Error deleting record: " . mysqli_error($conn);
  }
  
  
  }
  
  
   if (isset($_GET['delws'])) {
   // echo "Hi";
    $filename=$_GET['delws'];
    $sql="delete from workshop where filename='$filename'";
    echo "$filename";
    if (mysqli_query($conn, $sql)) {
      // echo "Record deleted successfully";
  } else {
      echo "Error deleting record: " . mysqli_error($conn);
  }
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
              <li><a href="my_workshop.php">Workshop</a></li>
              <li><a href="my_course.php">Course</a></li>
              <li><a href="my_tpp.php">TPP</a></li>
              <li><a href="my_competition.php">Competition</a></li>
              <li><a href="my_sports.php">Sports</a></li>
              <li><a href="my_other.php">Other Activity</a></li>
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
                  <li><a href="../php/view_workshop.php">Workshop</a></li>
                  <li><a href="../php/view_course.php">Course</a></li>
                  <li><a href="../php/view_tpp.php">TPP</a></li>
                   <li><a href="../php/view_competition.php">Competition</a></li>
                  <li><a href="../php/view_sports.php">Sports</a></li>
                  <li><a href="../php/view_otheractivity.php">Other Activity</a></li>
                </ul>
                </li>
              <li><a href="../feedback_s.php">Contact Us</a></li>
              <li><a href="../contact_after.php">Help</a></li>
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
<h1>Workshops attended</h1>
<?PHP

$sql = "select * from workshop where rollno=$rn";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0)
{  

?>


      <div class="scrollable">
        <table>
          <thead>
            <tr>
            <th>ROLL NO</th>
            <th>NAME</th>
            <th>CONDUCTED BY</th>
            <th>START DATE</th>
            <th>END DATE</th>
            <th>CERTIFICATE</th>
            <th>OPTIONAL IMAGE</th>
            <th>DELETE</th>
            </tr>
          </thead>
          <tbody>
              
<?php
  while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

  

      
  echo "<tr><td > <span style='color:#000000;'>  ". $line['rollno']."
      </td><td>  <span style='color:#000000;'> ". $line['namew']."
      </td><td>  <span style='color:#000000;'> ". $line['con_by']."
      </td><td>  <span style='color:#000000;'> ". $line['start_date']."
      </td><td>  <span style='color:#000000;'> ". $line['end_date']." 
      </td><td> ";
  

      $fn =$line['filename'];
      $files= scandir("../uploads/workshop");
      for($a =2;$a <count($files);$a++){

        if($fn==$files[$a])
        {


        ?>

       

        <p>
          <a style='color:#000000;' href="../uploads/workshop/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>
        </p>

        <?php 
      }


      }
	  echo "</td><td>";
	   $fn1 =$line['filename1'];
      $files= scandir("../uploads/opt_workshop");
      for($a =2;$a <count($files);$a++){

        if($fn1==$files[$a])
        {


        ?>

       

        <p>
          <a style='color:#000000;' href="../uploads/opt_workshop/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>
        </p>

        <?php 
      }


      }
echo "</td><td><a href='my_workshop.php?delws=$fn' onClick=\"return confirm('Are you sure you want to delete this ?');\" ><button type='submit' name='delete' class='del-btn'><i class='fa fa-trash'></i></button></a></td></tr>";
}
}
  
  else
  {
    echo "<center><font size='3' color='white'> NO ENTRIES FOUND </font></center>";
  }
?>

         
          </tbody>
        </table>
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