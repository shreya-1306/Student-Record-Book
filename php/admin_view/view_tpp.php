<!-- background image not seen -->
<?php
session_start();
require("../../functions.php");
 
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
              <li><a href="../../searchby/rollno.php">Roll No.</a></li>
              
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
             
              <li><a href="../../feedback_a.php">Contact Us</a></li>
              <li><a href="../../contact_after_admin.php">Help</a></li>
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

       
       <tr><th>&nbsp&nbspROLL&nbsp&nbspNO&nbsp&nbsp</th><th>&nbsp&nbspTITLE&nbsp&nbspOF&nbsp&nbspPAPER&nbsp&nbsp</th><th>&nbsp&nbspAUTHORS&nbsp&nbsp</th><th>&nbsp&nbspPRESENTED/PUBLISHED&nbsp&nbspAT&nbsp&nbsp</th><th>CERTIFICATE</th></span></tr>
        <?php

while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    
echo "<tr><td> <span style='color:#000000;'>  ". $line['rollno']."
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
echo "</td></tr>";
}

?>a
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
