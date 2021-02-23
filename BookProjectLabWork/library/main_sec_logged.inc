<body>
	<div class="container"> <!-- Break Point -->
		<header class="jumbotron jumbotron-fluid clearfix">
			<div class="page_title">
				<h1 class="page_title_heading">GreatReads</h1>
			</div>
			<div class="sign_in_form">
				<form method="post" action="library/sign_out_proc.php" class="form-inline">
					<div class="form-group mx-sm-3 mb-2">
    					<?php 
							echo '<a href="profile_page.php">
							</h2>Hello: '.$_SESSION['name_user'].'</h4></a>';
						?>
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
  		<h3>Not a member?<br>Sign up for an account!</h3>
 	
				<form method="post" action="library/sign_up_proc.php" enctype="multipart/form-data" class="sign_up_form">
					<div class="form-group">
						<label>Your Name</label>
						<input type="text" class="form-control form-control-sm" name="name_user">
					</div>
					<div class="form-group">
						<label>Email address</label>
						<input type="email" name="email" class="form-control form-control-sm">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="pass_word" id="password" class="form-control form-control-sm">
					</div>
					<div class="form-group">
						<label>Verify Password</label>
						<input type="password" name="password_two" id="password_two" class="form-control form-control-sm">
					</div>
					<div class="form-group form-check">
		 				<div class="form-group">
							<label>Upload a profile pic</label>
							<input type="file" class="form-control-file" name="profile_pic">
						</div>
		 				<div class="form-group">
							<label>Quick Bio</label>
							<textarea class="form-control" name="bio" rows="2">Limit 250 Characters</textarea>
						</div>
 					</div>
  					<button type="submit" name="submit" class="btn btn-warning">Submit</button>
				</form>
			</div>
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
  </div>
</div>
<!-- End of Card Row Two -->
<div class="card">
  	<div class="card-body">
    	<h5 class="card-title">Search and Browse Books</h5>
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