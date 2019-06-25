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
//$query=mysqli_query($conn,"select * from login_info where lusername='$email'");



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
/*
$query=mysqli_query($conn,"select lpassword,AES_DECRYPT(lpassword,311971511034) AS ENC  from login_info where lusername='$email'");
$row=mysqli_fetch_array($query);
*/
$sql = "UPDATE login_info SET hashed_psw='$hrp' where lusername='$email'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
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
         echo "<script>window.location='../index.html';alert('Check inbox to get password')</script>";
    } catch(Exception $e){
        //Something went bad
        echo "Mailer Error: - " . $mail->ErrorInfo;
    }
 

   
?>
