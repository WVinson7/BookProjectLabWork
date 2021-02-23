<?php

/* 
Error checking
print('<pre>');
print_r($_POST);
print('</pre>');
*/

if (!isset($_POST) AND is_numeric($_POST['isbn'])) {

	//echo 'Doesn't work';
	header('location: ../profile_page.php');
	
} else {
	
	extract($_POST);
	
	$my_connect = new mysqli('localhost', 'root', 'Dundee0210!', 'db_great_reads');
	
	if ($my_connect -> connect_errno != 0) {
		
		//echo 'Whoops...didn\'t connect: ' .$my_connect -> connect_error;
		header('location: ../profile_page.php');
		exit;
		
	} else {
		
		//echo 'We are connected ';
		
		$book_pic = "bookpics/".$_FILES['book_pic']['name'];
		
		//Check to see if book exists already
		
$query = "INSERT INTO books (isbn, book_title, author, genre, book_status, book_image_path) 
VALUES ('$isbn', '$book_title', '$author', '$genre', '$book_status', '$book_pic')";
		
		if ($my_connect->query($query) != TRUE ) {

			//echo 'No Query For you';
			
		} else {
			
			//echo 'Yeah...record recorded';
			move_uploaded_file($_FILES['book_pic']['tmp_name'], "../bookpics/".$_FILES['book_pic']['name']);
		}
$my_connect->close;		
header('location: ../profile_page.php');

	
	// We need a table to manage these items
	$SESSION['email'], 'isbn', 'rating', 'review'
	
	CREATE TABLE books (
		isbn int(9) NOT NULL,
		book_title varchar(100) NOT NULL,
		author varchar(100) NOT NULL,
		genre varchar(20) NOT NULL,
		book_status varchar(3) NOT NULL, 
		book_image_path varchar(100) NOT NULL,
		
		PRIMARY KEY (isbn)
		) 
	
	CREATE TABLE reviews ( 
		review_id INT(13) AUTO_INCREMENT NOT NULL, 
		email VARCHAR(50) NOT NULL, 
		isbn int(9) NOT NULL, 
		rating int(1) NOT NULL, 
		review VARCHAR(250), 
		
		PRIMARY KEY (review_id), 
		FOREIGN KEY (email) REFERENCES users(email), 
		FOREIGN KEY (isbn) REFERENCES books(isbn) 
		)
	}
}
?>