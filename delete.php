<?php 
include ('dbconfig.php');

	$rowid = base64_decode($_GET['rowid']);


	$query ="DELETE  FROM registration WHERE id ='$rowid'";

	$result = mysqli_query($conn,$query);

	header("Location:data.php");


?>