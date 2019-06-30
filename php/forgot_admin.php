<html>
  <header>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

</header>
<body>

<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kjsce";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


mysqli_select_db($conn,"kjsce") or die("Connection Failed");
$email=$_REQUEST["svv"];



$n=6; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 
$randpass=getName($n);  
//echo $randpass; 
$hrp=md5($randpass);



$sql = "UPDATE admin_login SET hashed_psw='$hrp' where Username='$email'";

if (mysqli_query($conn, $sql)) {
    // echo "Record updated successfully";
} else {
    // echo "Error updating record: " . mysqli_error($conn);
}



require_once('../PHPMailer-master/PHPMailerAutoload.php');

$mail = new PHPMailer();
  
  
  $mail->isSMTP();
    $mail->SMTPAuth = TRUE;
	    $mail->SMTPSecure = 'ssl';
		 $mail->Host = "smtp.gmail.com";
		$mail->Port = 465;
$mail->isHTML();

  $mail->Username = "priyankakalena@gmail.com";
  $mail->Password = "25480387";
 $mail->setFrom('priyankakalena@gmail.com', 'Mailer');
  
    $mail->Subject = "Password Recovery";
	  $mail->Body = "<i>This is your password : </i>".$randpass;
  //$mail->AddAddress($row["lusername"].'@somaiya.edu');
  $mail->AddAddress($email.'@somaiya.edu');
 $mail->FromName = "Admin";

  try{
        $mail->Send();
        echo "<script>
        swal({
          title: 'Success!',
          text: 'Check inbox to get password',
          icon: 'success',
          }).then(function() {
          window.location = '../index.html'});
    </script>";
    } catch(Exception $e){
        //Something went bad
      //  echo "Mailer Error: - " . $mail->ErrorInfo;
      echo "<script>
        swal({
          title: 'ERROR!',
          text: 'Try Again!',
          icon: 'error',
          }).then(function() {
          window.location = '../index.html'});
    </script>";
    }
 

   
?>
</BODY>
</html>