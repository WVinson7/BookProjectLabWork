<?php

	$email = $_SESSION['email'];
	
	$local = 'localhost';
	$use = 'root';
	$passWord = 'password';
	$database = 'db_great_reads';
	
	$mysqli = new mysqli($local, $use, $passWord, $database);
	
	/* $query = "SELECT * FROM books JOIN users_to_books ON books.isbn = users_to_books.isbn JOIN users ON users.email = users_to_books.email WHERE users.email = '$email' ORDER BY books.isbn LIMIT 4"; */
	
	 
	$result = $mysqli->query("CALL getBooks('$email')");    
	
	// print_r($result);
	
	if ($result > 0){
		
		while($rows = $result->fetch_assoc()){
			
			//print_r($rows);
			
			echo '<div class="card" style="width: 10rem; float: left; margin-left: 15px;">';
			echo 'img src="'.$rows['book_image_path'].'"height="120" width="75" class="card-img-top" alt="..."';
			echo '<br>';
			echo '<div class="card-body">';
			echo '<h5 class="card-title">'.$rows['book_title'].'</h5>';
			echo '<p class="card-text">'.$rows['author'].'</p>';
			echo '</div></div>';
			
		}
		
		
	} else {
		
		echo 'No books to report';
		
	}
	
?>