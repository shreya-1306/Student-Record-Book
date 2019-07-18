<!--
  

  id01 is student login 
id02 is admin login 
id03 is forgot password-student
id03 is forgot password-admin 

------------------------
4 pages for before login 

index.html
null_analysis.php
graphs/bef_login_graph.php
contact_before.html

-->
<?php
require_once "config.php";
$loginURL = $gClient -> createAuthUrl();    
?>
<!DOCTYPE html>

<html lang="">
<script> 
  
var modal = document.getElementById('id01'); 
window.onclick = function(event) { 
    if (event.target == modal) { 
        modal.style.display = "none"; 
    } 
} 

var modal2 = document.getElementById('id02'); 
window.onclick = function(event) { 
    if (event.target == modal2) { 
        modal2.style.display = "none"; 
    } 
} 

var modal3 = document.getElementById('id03'); 
window.onclick = function(event) { 
    if (event.target == modal3) { 
        modal3.style.display = "none"; 
    } 
} 

var modal4 = document.getElementById('id04'); 
window.onclick = function(event) { 
    if (event.target == modal4) { 
        modal4.style.display = "none"; 
    } 
} 
</script> 

<head>
<title>Record Book</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="layout/styles/login.css"> 
</head>
<body id="top">

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
          </h1>

          

      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.html">Home</a></li>
      
          <li><a class="drop" href="#">Analysis</a>
            <ul>
              <li><a href="null_analysis.php">Tabular</a></li>
          
              <li><a href="graphs/bef_login_graph.php">Graphical</a></li>
            </ul>
          </li>
          <li><a   onclick="document.getElementById('id02').style.display='block'" style="width:auto;" href="#">Admin</a></li>
          <li><a href="contact_before.html">Help</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>

  <section id="pageintro" class="hoc clear">
    <div> 
      <!-- ################################################################################################ -->
      <h2 style="font-size: 23px; margin-top:-90px" class="heading">Department of Computer Engineering</h2>
      <p style="font-size: 20px;">K. J.  Somaiya  College  Of  Engineering,  Vidyavihar  </p>
<br>	
  <footer><a class="btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Student Login</a></footer>
  <!-- <button onClick ="window.location = '''" type="submit">Sign in with Google </button>  -->
  <br>
  <a class="btn" onclick="window.location = '<?php echo $loginURL ?>'" style="width:auto;">Sign in with Google</a>
  
<br><br><br><br>
      <!-- <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>  -->
      <h2 style="font-size: 20px;" class="heading">Student Achievements</h2>
   <!--<div class="w3-content w3-section" style=" margin-left: 47px;margin-top: 30px;" >-->
  <img class="mySlides" src="slideshow/1.jpg" style=" margin-left: 35px;margin-top: 30px;" width="50" height="25" border="25">
  <img class="mySlides" src="slideshow/2.jpg" style=" margin-left: 35px;margin-top: 30px;" width="50" height="30" border="25">
  <img class="mySlides" src="slideshow/3.jpeg" style=" margin-left: 35px;margin-top: 30px;" width="50" height="30" border="25">
  <img class="mySlides" src="slideshow/4.jpg" style=" margin-left: 35px;margin-top: 30px;" width="50" height="30" border="25">
  <img class="mySlides" src="slideshow/5.jpeg" style=" margin-left: 35px;margin-top: 30px;" width="50" height="30" border="25">
  <img class="mySlides" src="slideshow/6.jpeg" style=" margin-left: 35px;margin-top: 30px;" width="50" height="30" border="25">
<!--</div> -->
   
  
<div id="id01" class="modal"> 
    
  <form class="modal-content animate" method="POST"  action="php/registered_user.php"> 
    <div class="imgcontainer"> 
	<h3 style="color:black;">STUDENT LOGIN</h3>
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span> 
        <img src="images/demo/avatar.png" alt="Avatar" class="avatar">
      
    </div> 
   


  
    <div class="container"> 
      <label style="color: black;"><b>Username</b></label> 
      <input type="text" name="uname"  placeholder="SVV id" required> 
  
      <label style="color: black;"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" style="color:black"  name="pword"  required> 
          
      <button type="submit">Login</button> 
     <!--  <input type="checkbox" checked="checked"> Remember me  -->
    
  
    <div class="container" style="background-color:#f1f1f1"> 

      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button> 
      
      <span class="psw"><a  onclick="document.getElementById('id03').style.display='block' ; document.getElementById('id01').style.display='none' " style="width:auto;">Forgot password?/New User?</a></span> 
    </div> 
	</div>
  </form> 
</div> 


<!-- ADMIN MODAL -->
<div id="id02" class="modal"> 
    
  <form class="modal-content animate" method="POST"  action="php/registered_admin.php"> 
    <div class="imgcontainer"> 
	<h3 style="color:black;">ADMIN LOGIN</h3><br>
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span> 
        <img src="images/demo/avatar.png" alt="Avatar" class="avatar">
      
    </div> 
   
  
    <div class="container"> 
      <label style="color: black;"><b>Username</b></label> 
      <input type="text" name="uname"  placeholder="SVV id" required> 
  
      <label style="color: black;"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" style="color:black"  name="pword"  required> 
          
      <button type="submit">Login</button> 
      
     <!--  <input type="checkbox" checked="checked"> Remember me  -->
    </div> 
  
    <div class="container" style="background-color:#f1f1f1"> 

      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button> 
      
      <span class="psw"><a onclick="document.getElementById('id04').style.display='block' ; document.getElementById('id02').style.display='none' " style="width:auto;">Forgot password?/New User?</a></span> 
    </div> 
  </form> 
</div> 


<!-- Forgot password - student Modal -->

<div id="id03" class="modal"> 
    
  <form class="modal-content animate" method="POST"  action="php/forgot_student.php"> 
    <div class="imgcontainer"> 
  <h3 style="color:black;">STUDENT LOGIN</h3>
 
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">×</span> 
        <img src="images/demo/avatar.png" alt="Avatar" class="avatar">
      
    </div> 
   
  
    <div class="container"> 
      <label style="color: black;"><b>Username</b></label> 
      <input type="text" name="svv"  placeholder="SVV id" required> 
  
      <button type="submit">Email Password</button> 
     <!--  <input type="checkbox" checked="checked"> Remember me  -->
    </div> 
  
    <div class="container" style="background-color:#f1f1f1"> 

      <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button> 
      
    </div> 
  </form> 
</div> 

<!-- Forgot password - admin Modal -->

<div id="id04" class="modal"> 
    
  <form class="modal-content animate" method="POST"  action="php/forgot_admin.php"> 
    <div class="imgcontainer"> 
	<h3 style="color:black;">ADMIN LOGIN</h3>
      <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">×</span> 
        <img src="images/demo/avatar.png" alt="Avatar" class="avatar">
      
    </div> 
   
  
    <div class="container"> 
      <label style="color: black;"><b>Username</b></label> 
      <input type="text" name="svv"  placeholder="SVV id" required> 
  
      <button type="submit">Email Password</button> 
     <!--  <input type="checkbox" checked="checked"> Remember me  -->
    </div> 
  
    <div class="container" style="background-color:#f1f1f1"> 

      <button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelbtn">Cancel</button> 
      
    </div> 
  </form> 
</div> 
 </div>




      <!-- ################################################################################################ -->
   
  </section>
  <!-- ################################################################################################ -->
</div>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script>


var myIndex = 0;
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
</script>
</body>
</html>