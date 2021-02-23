<?php

	if(isset($_POST['submit'])) {
		
		session_start();

	/*
		print('<pre>');
		print_r($_POST);
		print('</pre>');
		
		echo '<br>'.$_SESSION['email'];
	*/
	
		$lo = "localhost";
		$un = "root";
		$passW = "password";
		$dataB = "db_great_reads";
		
		try {
		
			$mySqli = new mysqli($lo, $un, $passW, $dataB)
			
			if($mySqli == True){
				
				// echo 'You Connected!';
				
			} else {
				
				throw new Exception('Cannot connect');
				
			}
		catch (Exception $e){
			
			echo '<script> 
						alert("Whoops something went wrong");
						window.location="..profile_page.php";
				  </script>';
		}

		extract($_POST);
		$email = $_SESSION['email'];
		$review = addslashes(htmlspecialchars($review));
		
		// echo '<br><br>'.$review;
		
		$query = "INSERT INTO reviews (email, isbn, rating, review) VALUES ('$email', '$isbn', '$stars', $review)";
		
		if (!$mySqli->error){
			
			try{
				
				if ($result = $mysquli->query($query)){
					
					//print_r($result);
					echo '<script>
						 alert("Review was added. Thank You!");
						 window.location="../profile_page.php";
						 </script>';
					
				} else {
					
					throw new Exception ($mySqli->error);    
					
				}
				
			} catch (Exception e) {
				
				//echo 'Not Good: '.$e;
				echo '<script>
					  alert("Whoops, something went wrong...");
					  window.location="../profile_page.php";
					  </script>';
			}
			
		} else {
			
			//echo 'Nope';
			echo '<script>
				  alert("Whoops, something went wrong...");
				  window.location="../profile_page.php";
				  </script>';
		}
 		
	} else {
		
		header('location: ../index.php');
		
	}

?>