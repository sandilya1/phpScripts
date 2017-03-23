<?php 

require "connect.php";

$user_name = $_POST["user_name"];
$user_pass = $_POST["user_pass"];


$sql_query = "select user_name from users_info where user_name = '$user_name' and user_pass = '$user_pass' ;";

$result = mysqli_query($con,$sql_query);

if(mysqli_num_rows($result)>0){
	$row = mysqli_fetch_assoc($result);
	$name = $row["user_name"];
	if($name == "admin"){
		echo "admin" ;
	}else{
		echo "success" ;
	}
	
}else{
	echo "failed";
}

mysqli_close($con);
?>