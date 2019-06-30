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

	$name= $_FILES['paper']['name'];
	
	$type= $_FILES['paper']['type'];
	
    $data=file_get_contents($_FILES['paper']['tmp_name']);



   $sql = "select filename from tpp WHERE filename='$name'" ;
  
  
  $result=mysqli_query($conn,$sql);



if ($result->num_rows > 0)  
{ 
	// echo "<script>window.location='../tpp.php';alert('Filename exists, incorrect filename')</script>";
   
	echo "<script>
	swal({
	  title: 'Error',
	  text: 'Certificate exists, incorrect filename!',
	  icon: 'warning',
	  }).then(function() {
	  window.location = '../tpp.php'});
</script>";
} 
else 
{ 
    
$stmt = $dbh->prepare("insert into tpp (rollno,title,author,presented_at,filename,mime,paper) values ($_POST[rollno], '$_POST[title]',' $_POST[author]',' $_POST[presented_at]',?,?,?)");
	$stmt-> bindParam(1,$name);
	$stmt->bindParam(2,$type);
	$stmt->bindParam(3,$data);
	$stmt->execute();

	$file =$_FILES["paper"];

	

	move_uploaded_file($file["tmp_name"], "../uploads/tpp/".$file["name"]);


	//    echo "<script>window.location='../tpp.php';alert('A new entry added !!')</script>";
	echo "<script>
	swal({
	  title: 'Success!',
	  text: 'A new entry has been added!',
	  icon: 'success',
	  }).then(function() {
	  window.location = '../tpp.php'});
</script>";
} 

	}

    
	



$dbh = null;
?>
</body>
</html>


