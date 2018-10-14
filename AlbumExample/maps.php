
<?php
	require('../php/login.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
	$email = $_POST['email'];
        $password = $_POST['password'];
 
        $query = "INSERT INTO `user` (username, password, email) VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($conn, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
    }
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
	<script src="../scripts/actions.js"></script>
</head>

<body>

	<header>
	
		<div class="navbar navbar-dark navbar-expand-lg bg-dark shadow-sm">
			<div class="container d-flex justify-content-between">
				<a href="../AlbumExample/index.php" class="navbar-brand align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>Picture Timeline</strong>
          </a>
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../AlbumExample/index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../AlbumExample/maps.php">Map</a>
      </li>
	 <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          My Profile
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item active" href="../AlbumExample/register.php">Register</a>
          <a class="dropdown-item" href="../AlbumExample/login.php">Login</a>
          <a class="dropdown-item d-none" href="../AlbumExample/logout.php">Logout</a>
        </div>
      </li>

    </ul>
  </div>
		
				
	
			
			</div>
		</div>
	</header>

	<main role="main">
		
	<div class="container">
      <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDr3xCyK48mrj_eVbVVNlP9XP6RAT43gFU&callback=initMap"
    async defer></script>
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