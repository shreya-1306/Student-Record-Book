<html>
  <header>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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

 $newpwd=$_POST['newpwd'];
 $cpwd=$_POST['cpwd'];
 

  if(isset($_POST['newpwd'])) {
      $newpwd = $_POST["newpwd"];
      $_SESSION["newpwd"] = $_POST["newpwd"];
     
      }
	   if(isset($_POST['cpwd'])) {
      $cpwd = $_POST["cpwd"];
      $_SESSION["cpwd"] = $_POST["cpwd"];
     
      }

    //   echo "$_SESSION[username]";
      $hpw=md5($_POST['cpwd']);
	// $result = "insert into login_info (lusername,lpassword) values (,'$_POST[cpwd]')";
 // $result = "UPDATE admin_login SET Password='$_POST[cpwd]' WHERE Username='$_SESSION[username]'; ";

  $result = "UPDATE admin_login SET hashed_psw='$hpw' WHERE Username='$_SESSION[username]' ";
	if ($conn->query($result) === TRUE) {
        // echo "<script>window.location='../admin_index.php';alert('Password changed!!!!')</script>";
        echo "<script>
        swal({
          title: 'Success!',
          text: 'Password has been changed!',
          icon: 'success',
          }).then(function() {
          window.location = '../admin_index.php'});
    </script>";
    } 

 
	
	else
	{
		// echo "<script>window.location='../changepass_a.php';alert('Type Again!!')</script>";
        echo "<script>
        swal({
          title: 'Invalid!',
          text: 'Try Again!',
          icon: 'error',
          }).then(function() {
          window.location = '../changepass_a.php'});
    </script>";
    }

	$conn->close();

?>

			