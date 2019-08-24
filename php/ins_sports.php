<html>
  <header>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

</header>
<body>

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
	if(empty($_FILES['image']['name']))
	{
	$file1 ="Null";
	$data1 = "Null";
	$type1 = "Null";
	}
	else{
	$file1 = $_FILES['image']['name'];
	$type1= $_FILES['image']['type'];
	$data1=file_get_contents($_FILES['image']['tmp_name']);
	}
	$name= $_FILES['certi']['name'];
	
	$type= $_FILES['certi']['type'];
	
    $data=file_get_contents($_FILES['certi']['tmp_name']);


   $sql = "select filename from sports WHERE filename='$name'" ;
  
//    $sql1="select filename1 from sports WHERE filename1='$file1'";
  
  $result=mysqli_query($conn,$sql);
// $result1=mysqli_query($conn,$sql1);


if ($result->num_rows > 0)  
{ 
	// echo "<script>window.location='../sports.php';alert('Filename exists, incorrect filename')</script>";
   
	echo "<script>
	swal({
	  title: 'Error',
	  text: 'Certificate exists, incorrect filename!',
	  icon: 'warning',
	  }).then(function() {
	  window.location = '../sports.php'});
</script>";

	// echo "<script>window.location='../sports.php';alert('Image name exists, incorrect imagename')</script>";
// 	echo "<script>
// 	swal({
// 	  title: 'Error',
// 	  text: 'Image exists, incorrect imagename',
// 	  icon: 'warning',
// 	  }).then(function() {
// 	  window.location = '../sports.php'});
// </script>";
}
else 
{ 
     $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
 
	$stmt = $dbh->prepare("insert into sports (rollno,name,tour_name,place,position,start_date,end_date,filename1,mime1,image,filename,mime,certi) values ($_POST[rollno], '$_POST[name]','$_POST[tour_name]',' $_POST[place]',' $_POST[position]','$_POST[start_date]','$_POST[end_date]',?,?,?,?,?,?)");
	$stmt->bindParam(1,$file1);
	$stmt->bindParam(2,$type1);
	$stmt->bindParam(3,$data1);
	$stmt-> bindParam(4,$name);
	$stmt->bindParam(5,$type);
	$stmt->bindParam(6,$data);
//$stmt->execute();

	$file =$_FILES["certi"];
$file2 =$_FILES["image"];
	

	move_uploaded_file($file["tmp_name"], "../uploads/sports/".$file["name"]);
	move_uploaded_file($file2["tmp_name"], "../uploads/opt_sports/".$file2["name"]);

if($stmt->execute()){
		   //    echo "<script>  window.location='../sports.php';alert('A new entry added !!')</script>";
		   echo "<script>
		   swal({
			 title: 'Success!',
			 text: 'A new entry has been added!',
			 icon: 'success',
			 }).then(function() {
			 window.location = '../sports.php'});
	   </script>";
	}
	else
	{
	//	print_r($stmt->errorInfo());
		//echo "<script>window.location='../sports.php';alert('Some error try again')</script>";
		echo "<script>
	swal({
	  title: 'Error',
	  text: 'Try Again!',
	  icon: 'error',
	  }).then(function() {
	  window.location = '../sports.php'});
</script>";
	}
	   
	}
}





$dbh = null;
?>
</body>
</html>


					



					

					
