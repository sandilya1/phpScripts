<?php 

require "connect.php";

$user_id = 1;
$user_name = "siva";
$user_pass = "siva" ;

$sql_query = "insert into users_info values($user_id,'$user_name','$user_pass');" ;

if(mysqli_query($con,$sql_query)){
	echo "Data is inserted successfully";
}else{
	echo "Not Inserted".mysqli_error($con) ;
}



?>