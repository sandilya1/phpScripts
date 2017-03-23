<?php 

require "connect.php";

$query_ch = "SELECT color,COUNT(*)as count FROM `voting` GROUP BY color;" ;
$result= mysqli_query($con,$query_ch);
$num_rows = mysqli_num_rows($result);

if($num_rows != null){
		while($row=mysqli_fetch_array($result)){	
		$r[] = $row;
		$check = $row['color'];
	}
	if($check == null){
		echo "No Data";
	}else{
		print(json_encode($r));
	}
}

mysqli_close($con);
?>