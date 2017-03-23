<?php 


$date_expire = '2014-08-06 00:00:00';    
$date = new DateTime($date_expire);
$now = new DateTime();

$Expiry = $date->diff($now)->format("%s");
echo $Expiry;

?>
