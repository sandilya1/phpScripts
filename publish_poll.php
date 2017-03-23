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

$backup_del = "delete from voting_backup;";
$backup_res = mysqli_query($con,$backup_del);

$vote_backup = "insert into voting_backup(user_name,color,timestamp) SELECT user_name,color,timestamp from voting ;" ;
$vote_res = mysqli_query($con,$vote_backup);

$delete_votes = "delete from voting;" ;
$delete_res = mysqli_query($con,$delete_votes);

$check = "select pId from poll_1 ;" ;
$result_s = mysqli_query($con,$check);

if(mysqli_num_rows($result_s) >0){
		$rows = mysqli_fetch_assoc($result_s);
		$id = $rows["pId"];
		$sql_query = "update poll_1 set question = '$question', option1 = '$op1', option2 = '$op2', option3 = '$op3', option4 = '$op4',publish = 'Y' where pId = '$id' ;" ;
		$result_1 = mysqli_query($con,$sql_query);
		echo "published";
}else{
	$sql_query = "insert into poll_1(question,option1,option2,option3,option4,publish) values ('$question','$op1','$op2','$op3','$op4','Y') ;" ;
	$result_2 = mysqli_query($con,$sql_query);
	echo "published";
}

mysqli_close($con);

?>