<?php 

$db_name = "phpclass";
$db_user = "root";
$db_pass = "";
$db_host = "localhost";


// create Connection

$connect = new mysqli($db_host, $db_user, $db_pass, $db_name);

// check connection_aborted

if($connect->connect_error){
	echo "connection error";
}else{
	echo "";
}



?>