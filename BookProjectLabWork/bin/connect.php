<?php

$user_name = "root";
$password = "password";
$db = "db_great_reads";

$connect = mysqli_connect('localhost', $user_name, $password, $db);

if (!$connect) {
		// echo 'No Connect';
} else {	
		// echo 'Yay! Connected!';
}

?>