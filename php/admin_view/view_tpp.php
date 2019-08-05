<!-- background image not seen -->
<?php
session_start();
require("../../functions.php");
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
<link href="../../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<script type="text/javascript">
  $(document).ready(function() {
    $('#workshop').DataTable();
} );
</script>
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
            <img   class ="logo2"  height="80" width="80" src="../../images/demo/logo2.png">   
            <a href="#">Departmental Record Book</a>            <img   class ="logo1"  height="80" width="80" src="../../images/demo/logo1.png"> 
          </h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="../../admin_index.php">Home</a></li>
          <li><a class="drop" href="#">Search By</a>
            <ul>
              <li><a href="../../searchby/rollno.php">Roll No</a></li>
               <li><a href="../../searchby/name.php">Name</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">View</a>
              <ul>
                  <li><a href="view_workshop.php">Workshop</a></li>
                  <li><a href="view_courses.php">Course</a></li>
                  <li><a href="view_tpp.php">TPP</a></li>
                   <li><a href="view_competitions.php">Competition</a></li>
                  <li><a href="view_sports.php">Sports</a></li>
                  <li><a href="view_otheractivity.php">Other Activity</a></li>
                </ul>
                </li>
            <li><a class="drop" href="#">Analysis</a>
            <ul>
              <li><a href="../../analysis.php">Tabular</a></li>
              <li><a href="../../graphical.php">Graphical</a></li>
            </ul>
          </li>
         <li><a class="drop" href="#">Other</a>
            <ul>
             
             
              
             
              <li><a href="../../admin_index.php">Help</a></li>
              <li><a href="../../changepass_a.php">Change Password</a></li>
              <li><a href="../../logout.php">Logout</a></li>
            </ul>
          </li>
         
         
     
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>


  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
  
    

    <!--  TABLE START -->
    
<?php 
        $sql = "select * from tpp";
      
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

        $sql = "SELECT * from tpp order by rollno LIMIT $offset, $no_of_records_per_page";
        $result = mysqli_query($conn,$sql);

  ?>
    <center>
      <div class="fieldset1" style="margin-left: -2px;">
  <table style="margin-top:40px;  margin-left: 12px;" border="3" solid white>

       
       <tr><th>&nbsp&nbspROLL&nbsp&nbspNO&nbsp&nbsp</th><th>&nbsp&nbspNAME&nbsp&nbsp</th><th>&nbsp&nbspTITLE&nbsp&nbspOF&nbsp&nbspPAPER&nbsp&nbsp</th><th>&nbsp&nbspAUTHORS&nbsp&nbsp</th><th>&nbsp&nbspPRESENTED/PUBLISHED&nbsp&nbspAT&nbsp&nbsp</th><th>CERTIFICATE</th><th>DELETE</th></tr>
        <?php

while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    
echo "<tr><td> <span style='color:#000000;'>  ". $line['rollno']."
  </td><td>  <span style='color:#000000;'> ". $line['name']."
    </td><td>  <span style='color:#000000;'> ". $line['title']."
    </td><td>  <span style='color:#000000;'> ". $line['author']."
    </td><td>  <span style='color:#000000;'> ". $line['presented_at']." 
    </td><td>";
	
      $fn =$line['filename'];
      $files= scandir("../../uploads/tpp");
      for($a =2;$a <count($files);$a++){

        if($fn==$files[$a])
        {


        ?>

       

        <p>
           <a href="../../uploads/tpp/<?php echo $files[$a]?>" target="_blank" style='color:#000000;' ><?php echo $files[$a] ?> </a>&nbsp; &nbsp;&nbsp;<a href="../../uploads/tp?php echo $files[$a] ?>" download><i class="fa fa-download"></i></a>
        </p>

        <?php 
      }


      } 

 
echo "</td><td><a href='view_tpp.php?deltpp=$fn' onClick=\"return confirm('Are you sure you want to delete this ?');\" ><button type='submit' name='delete' class='del-btn'><i class='fa fa-trash'></i></button></a></td></tr>";

   } 
  
?>
 <br><br>
    <div class="pagination_admin">
<a href="?pageno=1"><font color="white" size="4"><- First</font></a>
        
    &nbsp&nbsp&nbsp&nbsp&nbsp;
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>"><font color="white" size="4">Prev</font></a>
       &nbsp&nbsp&nbsp&nbsp&nbsp;
       
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>"><font color="white" size="4">Next</font></a>
      &nbsp&nbsp&nbsp&nbsp&nbsp;
       <a href="?pageno=<?php echo $total_pages; ?>"><font color="white" size="4">Last -></font></a>
       </div>

    <?php }
    

else
{
  echo "<br><br><br><br><center><style='margin: 1500px 5px 15px 20px'><font size='5' color='white'> NO ENTRIES FOUND </font></style></center>";
}
$conn->close();

?>

</table>

    

 
       <br><br>



<button  style="margin-left: 147px;" class="btn" onclick="self.location.href = '../download/download6.php';">Click Here To Download XLS File</button>
</div>

  </center>


    <!--  TABLE END -->
    <!-- ################################################################################################ -->
    <!-- / main body -->
    
 
<center>
 <footer>
<h3 style="margin-top:5px;"> For any further queries Email us at admin@somaiya.edu</h3>
<a href="../../feedback_a.php" style="font-size: 20px;margin-top:-5px;">Click here for feedback / queries </a>
</footer>

</center>
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
