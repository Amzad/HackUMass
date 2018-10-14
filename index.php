<?php
require_once('/php/login.php')
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="#">

	<title>Picture Timeline</title>

	<!-- Bootstrap core CSS -->
	<link href="bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="album.css" rel="stylesheet">
	<script src="/scripts/actions.js"></script>
</head>

<body>
	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>

	<header>
	
		<div class="navbar navbar-dark navbar-expand-lg bg-dark shadow-sm">
			<div class="container d-flex justify-content-between">
				<a href="/index.php" class="navbar-brand align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>Picture Timeline</strong>
          </a>
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/map.php">Map</a>
      </li>
	 <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          My Profile
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/register.php">Register</a>
          <a class="dropdown-item" href="/login.php">Login</a>
          <a class="dropdown-item d-none" href="/logout.php">Logout</a>
        </div>
      </li>

    </ul>
  </div>
		
				
	
			
			</div>
		</div>
	</header>

	<main role="main">

		<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
			<div class="container position-absolute" style="top: 30px; z-index: 99; left: 0; right: 0; margin-left: auto; margin-right: auto">

				<input type="text" class="form-control" id="searchKeyword" aria-describedby="searchEmail" placeholder="Enter destination" onKeyDown="if (event.keyCode == 13) show(this.value)">

			</div>
			
			<div class="container position-absolute" style="top: 55px; z-index: 99; left: 0; right: 0; margin-left: auto; margin-right: auto">	
				<div class="alert alert-warning alert-dismissible fade" id="success-alert" style="top: 20px" role="alert">
					<button type="button" class="close" data-dismiss="alert">x</button>
    			<strong>Error: </strong>
    			No results found!
				</div>
			</div>
					<div id="carouselInner" class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="/pictures/1.jpg?auto=yes" alt="First slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="/pictures/2.jpg?auto=yes" alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="/pictures/3.jpg?auto=yes" alt="Third slide">
				</div>
			</div>
		</div>

		<div id="searchResults" class="album py-5 bg-light d-none">
			<div class="container">

				<div class="row" id="placeholder2">

					<!-- End Cells -->
				</div>
			</div>
		</div>

	</main>

	<footer class="text-muted">
		<div class="container">
			<p class="float-right">
				<a href="#">Back to top</a>
			</p>
			<p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
			<p>New to Bootstrap? <a href="#">Visit the homepage</a> or read our <a href="#">getting started guide</a>.</p>
		</div>
	</footer>

	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script>
		window.jQuery || document.write( '<script src="../scripts/jquery-slim.min.js"><\/script>' )
	</script>
	<script src="../scripts/popper.min.js"></script>
	<script src="../scripts/bootstrap.min.js"></script>
	<script src="../scripts/holder.min.js"></script>
</body>
</html>