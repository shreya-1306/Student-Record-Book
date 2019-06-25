<?php



 $conn = mysqli_connect('localhost','root','','kjsce');


 function checkfilename($certi){
   echo '<script language="javascript">';
  echo 'alert(message successfully sent)';  //not showing an alert box.
  echo '</script>';
 }




 
 function getyearwisedata($id)
 {
	  global $conn;
    $array = array();
	/*FO WORKSHOP ID=1*/
	if($id==1)
	   {$q1 = mysqli_query($conn,"select count(*)   from workshop where rollno IN(select rollno from student WHERE sem=1 OR sem=2)");
	     $array[]=$q1->fetch_assoc();
	     
	   
	     

	   $q2 = mysqli_query($conn,"select count(*)   from workshop where rollno IN(select rollno from student WHERE sem=3 OR sem=4)");
	     $array[]=$q2->fetch_assoc();
	   $q3 = mysqli_query($conn,"select count(*)   from workshop where rollno IN(select rollno from student WHERE sem=6 OR sem=5)");
	     $array[]=$q3->fetch_assoc();
		 $q4 = mysqli_query($conn,"select count(*)  from workshop where rollno IN(select rollno from student WHERE sem=7 OR sem=8)");
	     $array[]=$q4->fetch_assoc();
	   } 
	   return $array;
 }
 
function getcount($osem,$esem,$no)
{
	 global $conn;
    $array = array();
	if($no==1)
	
	$q1 = mysqli_query($conn,"select count(*) as total  from workshop where rollno IN(select rollno from student WHERE sem='".$osem."' OR sem='".$esem."')");
	else
		if($no==2)
	$q1 = mysqli_query($conn,"select count(*) as total  from course where rollno IN(select rollno from student WHERE sem='".$osem."' OR sem='".$esem."')");
	else
		if($no==3)
	$q1 = mysqli_query($conn,"select count(*) as total  from tpp where rollno IN(select rollno from student WHERE sem='".$osem."' OR sem='".$esem."')");
	else
		if($no==4)
	$q1 = mysqli_query($conn,"select count(*) as total  from sports where rollno IN(select rollno from student WHERE sem='".$osem."' OR sem='".$esem."')");
	else
		if($no==5)
	$q1 = mysqli_query($conn,"select count(*) as total  from competition where rollno IN(select rollno from student WHERE sem='".$osem."' OR sem='".$esem."')");
	else
		if($no==6)
	$q1 = mysqli_query($conn,"select count(*) as total  from other where rollno IN(select rollno from student WHERE sem='".$osem."' OR sem='".$esem."')");
	
		
		
		
	
		
		
		$data=$q1->fetch_assoc();

	return $data['total'];
}

function getUsersData($idno){
    global $conn;
    $array = array();
	$q = mysqli_query($conn,"select * from student where rollno='".$idno."'");

    
	while($r=mysqli_fetch_assoc($q))
	{
		
		$array['rollno']= $r['rollno'];
		$array['name']= $r['name'];
		$array['sem']= $r['sem'];
		


	}
	return $array;

}

function getFacultyData($idno){
    global $conn;
    $array = array();
	$q = mysqli_query($conn,"select * from faculty_info where ID='".$idno."'");

    
	while($r=mysqli_fetch_assoc($q))
	{
		$array['ID']= $r['ID'];
		$array['Type']= $r['Type'];
		$array['Name']= $r['Name'];
		

	}
	return $array;

}
function getFacultyID($username)
{   global $conn;
	$q = mysqli_query($conn,"select ID from faculty_info where username='".$username."'");
	while($r =mysqli_fetch_assoc($q))
	{
		return $r['ID'];
	}
}
function getID($username)
{   global $conn;
	$q = mysqli_query($conn,"select rollno from student where username='".$username."'");
	while($r =mysqli_fetch_assoc($q))
	{
		return $r['rollno'];
	}
}

?>
