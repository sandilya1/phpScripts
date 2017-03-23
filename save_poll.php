<?php 

require "connect.php" ;

$question = $_POST["question"];
$op1 = $_POST["op1"];
$op2 = $_POST["op2"];
$op3 = $_POST["op3"];
$op4 = $_POST["op4"];

//$question = "Where is next Vacay Spot";
//$op1 = "op1" ;
//$op2 = "op2" ;
//$op3 = "op3" ;
//$op4 = "op4" ;

$check = "select pId from poll_1 ;" ;

$result_s = mysqli_query($con,$check);

if(mysqli_num_rows($result_s) >0){
		$rows = mysqli_fetch_assoc($result_s);
		$id = $rows["pId"];
		$sql_query = "update poll_1 set question = '$question', option1 = '$op1', option2 = '$op2', option3 = '$op3', option4 = '$op4',publish = 'N' where pId = '$id' ;" ;
		$result_1 = mysqli_query($con,$sql_query);
		echo "saved";
}else{
	$sql_query = "insert into poll_1(question,option1,option2,option3,option4,publish) values ('$question','$op1','$op2','$op3','$op4','N') ;" ;
	$result_2 = mysqli_query($con,$sql_query);
	echo "saved";
}

mysqli_close($con);

?>
