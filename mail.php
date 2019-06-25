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
require_once('PHPMailer-master/PHPMailerAutoload.php');

$mail = new PHPMailer();
  
  
  $mail->isSMTP();
    $mail->SMTPAuth = TRUE;
	    $mail->SMTPSecure = 'ssl';
		 $mail->Host = "smtp.gmail.com";
		$mail->Port = 465;
$mail->isHTML();

  $mail->Username = "priyankakalena@gmail.com";
  $mail->Password = "25480387";
  $email = $_POST['email'];
 $mail->setFrom("priyankakalena@gmail", 'Mailer');

$name = $_POST['name'];

$phone = $_POST['phone'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone\n Message: $message";
// $recipient = "shreya.varma@somaiya.edu";
// $subject = "Departmental Record Book Feedback";
// $mailheader = "From: $email \r\n";
// mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
// echo "Thank You!" . " -" . "<a href='feedback_a.php' style='text-decoration:none;color:#ff0099;'> Return Home</a>";

    $mail->Subject = "Departmental Record Book Feedback/Query";
	  $mail->Body = " From: $name<br> 
	                   Phone: $phone<br>
					  Email : $email<br>
					   Message: $message";
  //$mail->AddAddress($row["lusername"].'@somaiya.edu');
  $mail->AddAddress('shreya.varma@somaiya.edu');
 $mail->FromName = $_POST['name'];


  try{
        $mail->Send();
        echo "<script>window.location='feedback_s.php';alert('E-mail has been sent successfully !!Thank you for your feedback')</script>";
    } catch(Exception $e){
        //Something went bad
        echo "Mailer Error: - " . $mail->ErrorInfo;
    }
?>
