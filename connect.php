<?php 
$db_name = "logindetails" ;
$mysql_user = "root_user";
$mysql_pass = "user" ;
$server_name = "localhost";

$con = mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);
if(!$con){
//	echo "Connection Error".mysqli_connect_error() ;
}else{
//	echo "Connection is established";
}

?>
