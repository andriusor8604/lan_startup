<?php
    require ('steamauth/steamauth.php');
	# You would uncomment the line beneath to make it refresh the data every time the page is loaded
	// unset($_SESSION['steam_uptodate']);
	
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Landing Page - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/landing-page.min.css" rel="stylesheet">


<!-- 

		.rounded-circle {
		border-radius: 0%!important;
		}

-->
<style> 
        .dropdown-toggle::after { 
            vertical-align: middle; 
        } 
		.navbar-nav.navbar-center {
		margin-left: auto;
		margin-right: auto;
		left: 0;
		right: 0;
		}
		.testimonials .testimonial-item img {
		box-shadow: 0 0 0 0 #adb5bd;
		}
		.col-lg-4 {
		max-width: 25%;
		}
		.testimonials {
        padding-top: 0rem;
		}
		
    </style> 
	

</head>

<body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();   
});
</script>
<?php
if(!isset($_SESSION['steamid'])) {

     header('Location: index.php');
     exit();
?>
  
    <?php
}  else {
    include ('steamauth/userInfo.php');
	require ('functions.php');
	
	
    ?>
	 <!-- Navigation -->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
       <a class="navbar-brand" href="#"><img src="img/newlogo.png" width="180" height="40" alt=""></a>
	    <div class="topnav-right">
		<div class="dropdown">
  <button class="btn btn-dark dropdown-toggle shadow-none" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <img src="<?=$steamprofile['avatarmedium']?>" width="30" height="30" class="rounded-circle" alt="">
	<span class="align-middle font-weight-bolder">&nbsp;&nbsp;<?=$steamprofile['personaname']?></span>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="profile.php">My Profile</a>
	<a class="dropdown-item" href="#">My Team</a>
	<div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Leaderboards</a>
	<a class="dropdown-item" href="search.php">Search</a>
	<div class="dropdown-divider"></div>
	<a class="dropdown-item" href="?logout">Sign Out</a>
  </div>
</div>
	    </div>
    </div>
  </nav>
  <!-- 2 NAVIGATION -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav navbar-center">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#">Partners</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#">Affiliate</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#">Contacts</a>
      </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Participation
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
          <a class="dropdown-item" href="#">Team</a>
          <a class="dropdown-item" href="#">Volunteer</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Policies
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Content</a>
          <a class="dropdown-item" href="#">Cookies</a>
          <a class="dropdown-item" href="#">Legality</a>
        </div>
      </li>
    </ul>
  </div>
  </div>
</nav>
  
	<?php
}    
require('config.php');
error_reporting(-1);
ini_set('display_errors',1);

$sql = "SELECT * FROM users_games ORDER BY games_all DESC";
$result = $link->query($sql);
?>  


  <!-- Testimonials -->
  <section class="testimonials text-center bg-light">
	  <div class="mw-100">
	  <h4 class="m-t-2"><span class="fa fa-clock-o ion-clock pull-xs-right"></span><br> Players by most matches played</h4><br>
                            <table class="table table-hover table-responsive-sm">
							<thead class="thead-light">
							<tr>
							<th scope="col"> </th>
							<th scope="col"> </th>
							<th scope="col"> </th>
							<th scope="col">ID</th>
							<th scope="col">Username</th>
							<th scope="col">Overall Games</th>
							<th scope="col">Wins</th>
							<th scope="col"></th>
							<th scope="col"></th>
							<th scope="col"></th>
							<th scope="col"></th>
							<th scope="col"></th>
							<th scope="col"> </th>
							<th scope="col"> </th>
							<th scope="col"> </th>
							<th scope="col"> </th>
							<th scope="col"> </th>
							<th scope="col"> </th>
							<th scope="col"> </th>
							<th scope="col"> </th>
							</tr>
							</thead>
                                <tbody>   
								<?php
								$sarasas = 1;
								
								if ($result->num_rows > 0) {
								// output data of each row
								while($row = $result->fetch_assoc()) {
								
								$zaidejo_id = $row['player_id'];
								
								$sql70 = "SELECT name FROM users WHERE id='".$zaidejo_id."'";
								$nickas = mysqli_fetch_assoc(mysqli_query($link,$sql70));
								
								?>
								
                                    <tr>
										<td></td>
										<td></td>
										<td></td>
										<td><?=$sarasas?></td>
										<td><?=$nickas['name']?></td>
										<td><?=$row['games_all']?></td>
										<td><?=$row['games_wins']?></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
    								<?php
									$sarasas++;
									}
								}
								?>
                                </tbody>
                            </table>
                        </div>
	  
  </section>

  <!-- Call to Action -->
  <section class="call-to-action text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h2 class="mb-4">Ready to get started? Sign up now!</h2>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form>
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
              </div>
              <div class="col-12 col-md-3">
                <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">About</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Contact</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2019. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>