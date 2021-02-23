<?php

 
 /* for trouble shooting 
 print_r($_POST);
 echo '<br><br>';
*/

extract($_POST);

if (isset($submit)) {
	
$email = strtolower($email);

	$name_user = addslashes(htmlspecialchars($name_user));

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	
		//echo 'Email Problems<br>';
		header('location: ../index_home_temp.html');
	} else {
		$email = addslashes(htmlspecialchars($email));
	}

	if ($pass_word != $password_two) {
		
		//echo 'Password Issue<br>';
		header('location: ../index_home_temp.html');
	
	} else {
		
		$pass_word = password_hash($pass_word, PASSWORD_DEFAULT);
	}
	
	if ($_FILES['profile_pic']['size'] == 0) {
		
		$image_path = "images/not_pictured.jpg";
	} else {
		
		$image_path = "images/".$_FILES['profile_pic']['name'];
	}
	
	$bio = addslashes(htmlspecialchars($bio));


	// This is a query to insert data
	require('../bin/connect.php');
	
	$sql = "INSERT INTO users (email, name_user, pass_word, image_path, bio) 
	VALUES ('$email', '$name_user', '$pass_word', '$image_path', '$bio')";
	$query = mysqli_query($connect, $sql);
	
	if (!$query) {
		//echo 'No Upload for you!<br>';
		header('location: ../index_home_temp.html');
		mysqli_close($connect);
		
	} else {
		
		//This is how to a move_uploaded_file statement
		move_uploaded_file($_FILES['profile_pic']['tmp_name'], "../images/".$_FILES['profile_pic']['name']);
	}
	

	mysqli_close($connect);
	
	//Set SESSION variables here
	
	header('location: ../index_home_temp.html');
	
} else { 

	//echo 'No Action - The End<br>';
	//Set SESSION variables here
	header('location: ../index_home_temp.html');
	
}
?>

