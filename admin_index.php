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
  <script src="faq.js"></script>
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
            <a href="index.html">Departmental Record Book</a>
            <img   class ="logo1"  height="80" width="80" src="images/demo/logo1.png"> 
          </h1>       </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="admin_index.php">Home</a></li>
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
  
    

    <!--  FAQs START -->

    <fieldset>

    <div class="contact">
  

    <dl class="faq">
        <h3>INSTRUCTIONS: </h3>
  <dt>
    <button aria-expanded="false" aria-controls="faq1_desc">
      1.  How do I login for the first time?
    </button>
  </dt>
  <dd>
    <p id="faq1_desc" class="desc">
      Ans : Click on First Time User/Forgot password and enter your Somaiya ID to get your initial password on your mail-id.After logging in you can 
      change your password for your account.
  </dd>
  <dt>
    <button aria-expanded="false" aria-controls="faq2_desc">
      2. Can I view my progress or the activities done by me ?
    </button>
  </dt>
  <dd>
    <p id="faq2_desc" class="desc">
      Ans : Yes,you can view your progress on clicking on VIEW MY PROGRESS button which will show your uploaded activities and 
      details under various categories.You can also delete an entry in case you dont want the entry to be there.
    </p>
  </dd>
  <dt>
    <button aria-expanded="false" aria-controls="faq3_desc">
      3. How do I add an activity?
    </button>
  </dt>
  <dd>
    <p id="faq3_desc" class="desc">
     Ans : You can simply add an activity by clicking on ADD NEW ACTIVITY which will show various categories of activities
     you can upload.Just click on any category,add details accordingly and press submit.
     
    </p>
  </dd>
  <dt>
    <button aria-expanded="false" aria-controls="faq4_desc">
      4. Do I need a proof for the  activity I upload?
    </button>
  </dt>
  <dd>
    <p id="faq4_desc" class="desc">
    Ans : Yes definitely. You should upload some proof like a certificate or a Letter of Appreciation pertaining to the activity you upload.
    It should be in doc or pdf format.Additional image can also be uploaded(if any).
    </p>
  </dd>
  <dt>
    <button aria-expanded="false" aria-controls="faq5_desc">
      5. Is there any rule for the name of the files to be uploaded?
    </button>
  </dt>
  <dd>
    <p id="faq5_desc" class="desc">
     Ans : For uniquely attributing each file to a user,the name of the file needs to be [SerialNumber_YourRollnumber].
     More details regarding name of the files is provided in the add new activity bar while uploading the files.
     
    </p>
  </dd>
  <dt>
  <button aria-expanded="false" aria-controls="faq6_desc">
      6. What if I need to see my classmates uplaods?
    </button>
  </dt>
   <dd>
    <p id="faq6_desc" class="desc">
     Ans : There is a menu of the left side of the page with the title "View". It displays various entries done by different users.
    </p>
  </dd>
  <dt>
    <button aria-expanded="false" aria-controls="faq7_desc">
     7. Want to report a bug?
    </button>
  </dt>
  <dd>
    <p id="faq7_desc" class="desc">
     Ans :  Shreya Varma    : shreya.varma@somaiya.edu <br>
      Aromal Nair     : aromal.nair@somaiya.edu <br>
      Priyanka Kalena : priyanka.kalena@somaiya.edu <br>
      
      Feel free to email us for feedbacks :)
    </p>
  <p style="    font-size: 19px;
    margin-left: 681px;
    margin-top: 157px;">  Have any other queries? Ask us at : someid@somaiya.edu</p>
  </dd>

</dl>





</div>

<fieldset>
    <!--  FAQs END -->
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