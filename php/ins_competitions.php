<?php

$dbh= new PDO("mysql:host=localhost;dbname=kjsce","root","");
echo "";
 $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "kjsce";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);



if(isset($_POST['btn'])){
	$file1 = $_FILES['image']['name'];
$type1= $_FILES['image']['type'];
	
    $data1=file_get_contents($_FILES['image']['tmp_name']);
	$name= $_FILES['certi']['name'];
	
	$type= $_FILES['certi']['type'];
	
    $data=file_get_contents($_FILES['certi']['tmp_name']);

  $sql = "select filename from competition WHERE filename='$name'" ;
  $sql1="select filename1 from competition WHERE filename1='$file1'";
  
  $result=mysqli_query($conn,$sql);
$result1=mysqli_query($conn,$sql1);


if ($result->num_rows > 0)  
{ 
	echo "<script>window.location='../competition.php';alert('Filename exists, incorrect filename')</script>";
   
} 
else if($result1->num_rows > 0)
{
	echo "<script>window.location='../competition.php';alert('Image name exists, incorrect imagename')</script>";
}
else 
{ 
    
  $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
	    
$stmt = $dbh->prepare("insert into competition (rollno,name_comp,cond_by,position,start_date,end_date,filename1,mime1,image,filename,mime,certi) values ($_POST[rollno], '$_POST[name_comp]',' $_POST[cond_by]',' $_POST[position]','$_POST[start_date]','$_POST[end_date]',?,?,?,?,?,?)");
	$stmt->bindParam(1,$file1);
	$stmt->bindParam(2,$type1);
	$stmt->bindParam(3,$data1);
	$stmt-> bindParam(4,$name);
	$stmt->bindParam(5,$type);
	$stmt->bindParam(6,$data);
//$stmt->execute();

	$file =$_FILES["certi"];
$file2 =$_FILES["image"];
	

	move_uploaded_file($file["tmp_name"], "../uploads/competition/".$file["name"]);
	move_uploaded_file($file2["tmp_name"], "../uploads/opt_competition/".$file2["name"]);
if($stmt->execute()){
	   echo "<script> window.location='../competition.php';alert('A new entry added !!')</script>";
}
	else
	{
		print_r($stmt->errorInfo());
		echo "<script>window.location='../competition.php';alert('Some error try again')</script>";
	}
	   
	}
}

 
$dbh = null;
?>

