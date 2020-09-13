<?php 
include '../dbconfig.php';

echo "hhhh";

$empid =$_POST['empid'];
$name =$_POST['empname'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$gender =$_POST['gender'];
$des =$_POST['des'];

$query ="INSERT INTO employees(empid,name,email,phone,gender,designation) VALUES ('$empid','$name','$email','$phone','$gender','$des')"

$result =mysql_query($conn,$query);

if ($result == true) {
	
	echo "Added";
}else{
	echo "error";
}

?>