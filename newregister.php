<?php 
include ('dbconfig.php');

$name =$_POST['name'];
$email =$_POST['email'];
$dob =date('Y-m-d',strtotime($_POST['dob']));
$course =$_POST['course'];
$address =$_POST['address'];
$photo =$_FILES['photo'];
$path = "images/profile/";
$fileName = basename($_FILES["photo"]["name"]);
$targetFilePath = $path . $fileName;

move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFilePath);

$query ="INSERT INTO registration(name,email,dob,photo,course,address) VALUES ('$name','$email','$dob','$fileName','$course','$address')";

$result =mysqli_query($conn,$query);

if ($result == true) {
	
	echo "Added";

}else{

	echo "error";
}

?>