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
  
  // 

 $newpwd=$_POST['newpwd'];
 $cpwd=$_POST['cpwd'];
 $old_pwd = $_POST['old_pwd'];

  if(isset($_POST['newpwd'])) {
      $newpwd = $_POST["newpwd"];
      $_SESSION["newpwd"] = $_POST["newpwd"];
     
      }
	   if(isset($_POST['cpwd'])) {
      $cpwd = $_POST["cpwd"];
      $_SESSION["cpwd"] = $_POST["cpwd"];
     
      }

	// $result = "insert into login_info (lusername,lpassword) values (,'$_POST[cpwd]')";
  //$result = "UPDATE login_info SET lpassword='$_POST[cpwd]' WHERE lusername='$_SESSION[username]'; ";
$hpw=md5($_POST['cpwd']);
  $result = "UPDATE login_info SET hashed_psw='$hpw' WHERE lusername='$_SESSION[username]'; ";

	if ($conn->query($result) === TRUE) {
    // echo "<script>window.location='../home.php'; 
    echo "<script>
    swal({
      title: 'Success!',
      text: 'Password has been changed!',
      icon: 'success',
      }).then(function() {
      window.location = '../home.php'});
</script>";
} 

 
	
	else
	{
		// echo "<script>window.location='../changepass.php';alert('Type Again!!')</script>";
    echo "<script>
    swal({
      title: 'Invalid!',
      text: 'Try Again!',
      icon: 'error',
      }).then(function() {
      window.location = '../changepass.php'});
</script>";
  }
  

	$conn->close();

?>

</BODY>
</html>

			