<html>
  <header>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

</header>
<body>


<html>
  <header>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</header>


</header>
</html>
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
	  $hpw=md5($_POST["pword"]);
	
	$result = mysqli_query($conn,"SELECT * FROM admin_login WHERE Username='$username' and hashed_psw= '$hpw'");
	
	$count  = mysqli_num_rows($result);

	if($count>0) {
		// $message = "Hey ".$_SESSION["username"];
		echo "<script>window.location='../admin_index.php'</script>";
		
		// echo $message;
		
	}
	else
	{
		// echo "<script>window.location='../index.php';alert('Invalid User Name or Password !!')</script>";
		echo "<script>
				swal({
					title: 'Invalid!',
					text: 'Incorrect Username or Password!',
					icon: 'error',
				  }).then(function() {
					window.location = '../index.php'});
		</script>";
	}

?>
</BODY>
</html>

			