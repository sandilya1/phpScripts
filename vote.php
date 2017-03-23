<?php 

require "connect.php";

$user_name = $_POST["user_name"];
$vote_c = $_POST["vote_c"];

//$user_name = "siva";
//$vote_c = "black";

$check = "select user_name,timestamp from voting where user_name = '$user_name' ;" ;
$result = mysqli_query($con,$check);

if(mysqli_num_rows($result)>0){
	$row = mysqli_fetch_assoc($result);
	$name = $row["user_name"];
	$date_expire = $row["timestamp"]; 
	$date = new DateTime($date_expire);
	$now = new DateTime();
	$Expiry = $date->diff($now)->format("%d");
	if($Expiry < 5){
		echo "Failed" ;
	}else{
		$sql_query = "update voting set color = '$vote_c' , timestamp = Now() where user_name = '$user_name'; ";
		$result = mysqli_query($con,$sql_query);
		echo "Success";
	}
}else{
	$sql_query = "insert into voting values('$user_name','$vote_c',Now());";
	$result_1 = mysqli_query($con,$sql_query);
	echo "Success" ;
	
}

mysqli_close($con);
?>