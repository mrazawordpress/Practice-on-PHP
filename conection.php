<?php
$db_name="practice.php";
$db_user="root";
$db_pass="";
$db_host="localhost";

// Creat Connection
$connect= new mysqli($db_host,$db_user,$db_pass,$db_name);
// check Connection
if($connect->connect_error){
	die('Db not connected');
}else{
	echo "";
}

?>