<?php 
include ('dbconfig.php');

$name =$_POST['name'];
$email =$_POST['email'];
$dob =date('Y-m-d',strtotime($_POST['dob']));
$course =$_POST['course'];
$address =$_POST['address'];
$photo =$_FILES['photo'];

$rowid =$_POST['rowid'];

$path = "images/profile/";
$fileName = basename($_FILES["photo"]["name"]);
$targetFilePath = $path . $fileName;
move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFilePath);

$sql ="SELECT * FROM registration WHERE id=$rowid";

$resultset =mysqli_query($conn,$sql);
$row =mysqli_fetch_assoc($resultset);

$image =$row['photo'];

if ($fileName == $image) {

	$img = $fileName;

}else{

	$img = $image;
}

$query ="UPDATE registration SET name='$name',email='$email',dob='$dob',photo='$img',course='$course',address ='$address' WHERE id=$rowid";

$result =mysqli_query($conn,$query);

if ($result == true) {
	
	echo "Updated";

}else{
	
	echo "error";
}

?>