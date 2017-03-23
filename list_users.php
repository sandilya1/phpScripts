<?php 

require "connect.php";

$sql_query = "select * from users_info;" ;
$result = mysqli_query($con,$sql_query);
$num_rows = mysqli_num_rows($result);
$check = null;
$i = 1;

while($row = mysqli_fetch_array($result)){
	$r[]=$row;
	$check[] = array($i => $row['user_name']);
	//$check = $row['user_name'];
	$i = $i+1;
}

if($check == null){
		//echo "Null";
		//print(json_encode($r));
}else{
	print(json_encode($check));
}
	
mysqli_close($con);

?>