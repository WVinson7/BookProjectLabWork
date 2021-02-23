<?php

//print_r($_POST);


extract($_POST);

$email = strtolower($email);
$pass_word = trim($pass_word);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	
	echo "<script> alert('I\'m sorry... Something went terribly wrong...');";
	echo "window.location='../index.php';";
	echo "</script>";
	
} else {
	
require('../bin/connect.php');

$query = "SELECT * FROM users WHERE email = '$email'";
$sql = mysqli_query($connect, $query);

if (!$sql) {
	
	echo "<script> alert('I\'m sorry... Something went terribly wrong...');";
	echo "window.location='../index.php';";
	echo "</script>";

	
} else {
	
	if (!mysqli_num_rows($sql) === 1) {
	
		echo "<script> alert('I\'m sorry... Something went terribly wrong...');";
		echo "window.location='../index.php';";
		echo "</script>";
		
	} else {
		
		while ($row = mysqli_fetch_assoc($sql)) {
			
			// echo '<br>'.$row['pass_word'].'<br>';
			
			if (!password_verify($pass_word, $row['pass_word'])) {
			
				session_start();
				$_SESSION['user_type'] = 'guest';
				
				echo "<script> alert('I\'m sorry... 4Something went terribly wrong...');";
				echo "window.location='../index.php';";
				echo "</script>";
			
			} else {

				session_start();				
				$_SESSION['user_type'] = 'general';
				$_SESSION['name_user'] = $row['name_user'];
				$_SESSION['email'] = $row['email'];

				echo "<script> alert('Sign In Successful');";
				echo "window.location='../profile_page.php';";
				echo "</script>";
			}
			
		}
		
	}

}






	

}








?>