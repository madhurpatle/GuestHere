<?php
include("auth.php");?>
<body>



<p><a href="dashboard.php">Dashboard</a></p>

</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Find Hostel</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 
	<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDDIiadIW47jxHKYrVHOzpK10BRZlbf620"></script>
	<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDIiadIW47jxHKYrVHOzpK10BRZlbf620&callback=initMap" -->
    <!-- async defer></script> -->

	<link rel="stylesheet" type="text/css" href="/style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

	<meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
	#map {
        width:100%;
		height: 20vh;
		margin:10px auto;
      }
      /* Optional: Makes the sample page fill the window. */

    </style>

</head>
<body>
	<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light ">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
					  <span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
					  <a class="navbar-brand" href="#">HostelForYou</a>
					  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
						<li class="nav-item active">
						  <a class="nav-link text-success" href="#section1">Home</a>
						</li>
						
						<li class="nav-item">
								<a class="nav-link text-success" href="#section3">About Us</a>
						</li>
						<li class="nav-item">
								<a class="nav-link text-success" href="#section4">Contact</a>
                        </li>
                        <li class="nav-item">
						  <a class="nav-link text-success" href="#section2">Login Out<a href="logout.php">.</a>
						</li>
						
					  </ul>
					 
				
		</nav>
		
				<header id="section1">
					<h1 class="text-success">Welcome <?php echo $_SESSION['username']; ?></h1>
				    <p>Now You Can Choose Hostel For You From Your Comfort...</p>
					<form class="form-inline my-2 my-lg-0 justify-content-center">
						<input id="search" class="form-control mr-sm-2" type="search" placeholder="Search Hostels.." aria-label="Search">
						<button id="searchSubmit" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					  </form>
					  
				</header>
	<div id="map"></div>
    
			
	
	<section id="section2">
			
					<div class="text-success">
					  <h2 class="section2">Who Are You?</h2>
					</div>  
			<div class="row text-center">
				<div class="column">
					<h3>I'm Guest</h3>
					<form> 
						<input type=button 
						value="Guest"
						onClick="self.location='register.php'">
					</form>	 
					</div>
					<div class="column"> 
					  <h3>I'm Owner</h3>
					  <form> 
						<input type=button 
						value="Owner"
						onClick="self.location='register.php'">
					</form>
					</div>	 
				
					</div>		  
				 
	</section>
	<section class="section3"></section>

	<section id="section4">
			<?php include 'contact.php';?>
		  
			  <h3 class="section4">Contact Us</h3>
		  <form action="/action.php" method="POST">
			<div class="form-row">
			  <div class="form-group col-md-6">
				<label for="firstName">Firstname:</label>
				<input type="text" class="form-control error" id="firstName" placeholder="First name" name="firstName" required>
				<span class="error">* <?php echo $firstNameErr;?></span>
			  </div>
			  <div class="form-group col-md-6">
				  <label for="lastName">Lastname:</label>
				<input type="text" class="form-control" id="lastName" placeholder="Last name" name="lastName" required>
				<span class="error">* <?php echo $lastNameErr;?></span>
			  </div>
				<div class="form-group col-md-12">
				<label for="email">Email</label>
			  <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
			  <span class="error">* <?php echo $emailErr;?></span>
			  <label for="textArea">Question</label>
			  <textarea class="form-control" id="textArea" rows="3" placeholder="Ask Your Question Here..." name="textArea" required></textarea>
			  <span class="error">* <?php echo $textAreaErr;?></span>
			  
			  </div>
			</div>
			
			<input type="submit" value="Submit" class="btn btn-success">
		
		  </form>
	</section>
	
	<footer id ="main-footer">
		<p>Copyright &copy; 2019</p>
	</footer>
	
</div>
<script src= "map.js"></script>
</body>
</html>
