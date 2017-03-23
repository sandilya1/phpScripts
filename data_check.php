<?php

//check every 10 secs

require "connect.php";

$sql_query = "select * from poll_1 ;";

$result = mysqli_query($con,$sql_query);
$num_rows = mysqli_num_rows($result);
$check = null;

while($row = mysqli_fetch_array($result)){
	$r[] = $row;
	$check = $row['question'];
}

if($check == null){
		//echo "Null";
		//print(json_encode($r));
}else{
		print(json_encode($r));
}
	
mysqli_close($con);

?>