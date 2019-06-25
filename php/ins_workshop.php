
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
  
    $sql = "select filename from workshop WHERE filename='$name'" ;
       
$sql1="select filename1 from workshop WHERE filename1='$file1'";
  
  
  $result=mysqli_query($conn,$sql);
$result1=mysqli_query($conn,$sql1);


if ($result->num_rows > 0)  
{ 
	echo "<script>window.location='../workshop.php';alert('Filename exists, incorrect filename')</script>";
   
} 
else if($result1->num_rows > 0)
{
	echo "<script>window.location='../workshop.php';alert('Image name exists, incorrect imagename')</script>";
}
else 
{ 
   
  $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );

     $stmt = $dbh->prepare("insert into workshop (rollno,namew,con_by,start_date,end_date,filename1,mime1,image,filename,mime,certi) values ($_POST[rollno], '$_POST[namew]',' $_POST[con_by]','$_POST[start_date]','$_POST[end_date]',?,?,?,?,?,?)") or die("Error");
	$stmt->bindParam(1,$file1);
	$stmt->bindParam(2,$type1);
	$stmt->bindParam(3,$data1);
	$stmt-> bindParam(4,$name);
	$stmt->bindParam(5,$type);
	$stmt->bindParam(6,$data);
	
	//$stmt->execute();

	$file =$_FILES["certi"];
$file2 =$_FILES["image"];
	

	move_uploaded_file($file["tmp_name"], "../uploads/workshop/".$file["name"]);
move_uploaded_file($file2["tmp_name"], "../uploads/opt_workshop/".$file2["name"]);
if($stmt->execute()){
	  echo "<script>window.location='../workshop.php';alert('A new entry added !!')</script>";
	}
	else
	{
		print_r($stmt->errorInfo());
		echo "<script>window.location='../workshop.php';alert('Some error try again')</script>";
	}
	   
	}
}

//




$dbh = null;
?>

					
