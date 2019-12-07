<html>
  <header>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

</header>
<body>
<?php
session_start();

$servername = "localhost";
$u = "root";
$p = "";

$dbname = "kjsce";

// Create connection
$conn = new mysqli($servername, $u, $p, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

	
	} 
	// echo "Successful Connection"."<br>";
	
 $username=$_POST['uname'];
 $password=$_POST['pword'];

$message="";
  if(isset($_POST['uname'])) {
      $username = $_POST["uname"];
      $_SESSION["username"] = $_POST["uname"];
     
      }
	   if(isset($_POST['pwd'])) {
      $password = $_POST["pword"];
      $_SESSION["pwd"] = $_POST["pwd"];
     
	  }<html>
  <header>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

</header>
<body>
<?php
session_start();

$servername = "localhost";
$u = "root";
$p = "";

$dbname = "kjsce";

// Create connection
$conn = new mysqli($servername, $u, $p, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

	
	} 
	// echo "Successful Connection"."<br>";
	
 $username=$_POST['uname'];
 $password=$_POST['pword'];

$message="";
  if(isset($_POST['uname'])) {
      $username = $_POST["uname"];
      $_SESSION["username"] = $_POST["uname"];
     
      }
	   if(isset($_POST['pwd'])) {
      $password = $_POST["pword"];
      $_SESSION["pwd"] = $_POST["pwd"];
     
	  }
	
	$hpsw=md5($password);
	
//	$result = mysqli_query($conn,"SELECT * FROM login_info WHERE lusername='$username' and lpassword = '$password'");
	$result = mysqli_query($conn,"SELECT * FROM login_info WHERE lusername='$username' and hashed_psw = '$hpsw'");
