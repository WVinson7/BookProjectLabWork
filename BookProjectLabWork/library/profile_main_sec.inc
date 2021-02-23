<body>
	<div class="container"> <!-- Break Point -->
		<header class="jumbotron jumbotron-fluid clearfix">
			<div class="page_title">
				<h1 class="page_title_heading">GreatReads</h1>
			</div>
			
			<div class="sign_in_form">
				<form method="post" action="library/sign_out_proc.php" class="form-inline">
					<div class="form-group mx-sm-3 mb-2">
    					<?php echo '<h4>Hello: '.$_SESSION['name_user'].'</h4>'; ?>
						&nbsp;&nbsp;
  						<button type="submit" class="btn btn-warning btn-sm">Sign Off</button>	
					</div>
				</form>
			</div>
			<!-- rest of header-->
		</header>
	<main><br>
<!-- Sign in row -->
<div class="row">
    <div class="col-8">
  		<h3>Upload a book:</h3>
 	
				<form method="post" action="library/upload_book_proc.php" id="add_book_form" enctype="multipart/form-data" class="sign_up_form">
					<div class="form-group">
						<label>Book Name</label>
						<input type="text" class="form-control form-control-sm" name="book_title">
					</div>
					<div class="form-group">
						<label>Book Author</label>
						<input type="text" name="author" class="form-control form-control-sm">	
					</div>
					<div class="form-group">
						<label>Book ISBN</label>
						<input type="number" name="isbn" class="form-control form-control-sm">	
					</div>
					<div class="form-group">
						<label>Genre</label><br>
						<select name="genre">
							<option value="Mystery">Mystery</option>
							<option value="Sci Fiction">Sci Fiction</option>
							<option value="Romance">Romance</option>
							<option value="Fantasy">Fantasy</option>
							<option value="Non Fiction">Non Fiction</option>
							<option value="Young Adult">Young Adult</option>
						</select>
					</div>
					
					<div class="form-group">
						<label><b>Book Status</b></label><br>
						I've read it: <input type="radio" name="book_status" value="yes"><br>
						Haven't read yet: <input type="radio" name="book_status" value="no">
					</div>
					
					<div class="form-group form-check">
		 				<div class="form-group">
							<label>Upload a Cover Photo</label>
							<input type="file" class="form-control-file" name="book_pic">
						</div>
		 				
 					</div>
  					<button type="submit" name="submit" class="btn btn-warning">Submit</button>
				</form>
				
				<br>
				<hr>
				<br>
				
			<h4>Enter in a Rating:</h4>
			
			<form method="post" action="library/upload_review.php" class="sign_up_form">
				<div class="form-group">
					<label>Book ISBN</label>
					<input type="number" name="isbn" class="form-control form-control-sm">	
				</div>
				<div class="form-group">						
					<p>Please rate this item:</p>
						<fieldset class="rating">     
							<input type="radio" name="stars" id="4_stars" value="4" >
							<label class="stars" for="4_stars">4 stars</label>
							<input type="radio" name="stars" id="3_stars" value="3" >
							<label class="stars" for="3_stars">3 stars</label>
							<input type="radio" name="stars" id="2_stars" value="2" >
							<label class="stars" for="2_stars">2 stars</label>
							<input type="radio" name="stars" id="1_stars" value="1" >
							<label class="stars" for="1_stars">1 star</label>
							<input type="radio" name="stars" id="0_stars" value="0" required>
							<label class="stars" for="0_stars">0 star</label>
							<span  class="label"> Rating: </span>
						</fieldset>	
					
					</div>
					<div class="form-group">
						<label>My Review</label>
						<textarea class="form-control" name="review" rows="2" placeholder="Limit 250 Characters"></textarea>
					</div>	
			
				<button type="submit" name="submit" class="btn btn-warning">Submit</button>	
			</form>
			</div><!-- This closes the left column-->
		
		<div class="col-4 home_page_books">
			<h4>Looking for a classic read, <br> Let us help you choose?</h4><br>
			<img src="images/Project.png" alt="Home Page Image">
		</div>
	</div>
	
<!-- Pulling Popular Reads -->
<div class="card popular_titles">
  <div class="card-body">
    <h5 class="card-title">Popular Titles This Month</h5>
    <br><br><br><br><br>
  </div>
</div>

<!-- Recent Reads -->
<div class="card popular_titles">
  <div class="card-body">
    <h5 class="card-title">Recent Reads</h5>
	<br>
	<?php 
		if (file_exists('library/recent_reads.php')){
		
			require_once('library/recent_reads.php');
			
		} else {
		
			echo 'Put in your most recent read!';
		}
	?>
  </div>
</div>
<!-- End of Card Row Two -->
<div class="card">
  	<div class="card-body">
    	<h5 class="card-title">Search and browse books</h5>
  	</div>
	<div class="input-group mb-3">
		<input type="text" class="form-control" placeholder="Title / Author / ISBN" name="search">
			<div class="input-group-append">
				<button class="btn btn-warning" type="submit" name="search">Search</button>
			</div>	
		<!-- Build function to pull catagories-->
	</div>
</div>
  
<!-- End of Card Row Two -->
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Random Quotes</h5>
  </div>
</div>

	
	</main>
</div>
