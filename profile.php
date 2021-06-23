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

  <title>Landing Page</title>

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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

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
	
	Check_Profile($steamprofile['steamid']);
	Check_Badges($steamprofile['steamid']);
	
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
?>  
<!-- PROFILE INFO -->
<br>
<br>
<div class="container">
    <div class="row m-y-2">
        <div class="col-lg-8 push-lg-4">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                </li>
                 <li class="nav-item">
                    <a href="" data-target="#stats" data-toggle="tab" class="nav-link">Stats</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#messages" data-toggle="tab" class="nav-link">Activity</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Edit</a>
                </li>
            </ul>
			<br>
            <div class="tab-content p-b-3">
                <div class="tab-pane active" id="profile">
                    <h4 class="m-y-2">User profile</h4><br>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>About</h6>
                            <p style="-ms-word-break: break-all; word-break: break-all; word-break: break-word;">
                                <?=$profile['roles']?>
                            </p>
							<h6>Contacts</h6>
                            <p>
                                <?=$profile['contacts_shown']?>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h6>Current Team</h6>
                            <img src='img/no-image.png' width="50" height="50"/>
							  &nbsp;Player currently has no team
                            <hr>
                            <span class="tag tag-primary"><i class="fas fa-gamepad"></i> <?=$profile['games_all']?> Matches &nbsp;&nbsp;</span>
                            <span class="tag tag-success"><i class="fas fa-trophy"></i> <?=$profile['games_wins']?> Victories &nbsp;&nbsp;</span>
                            <span class="tag tag-danger"><i class="fa fa-eye"></i> <?=$profile['views']?> Views</span>
                        </div>
						<div class="col-md-12">
                            <h4 class="m-t-2"><span class="fa fa-clock-o ion-clock pull-xs-right"></span><br>Achievements</h4>
                            <table class="table table-hover table-striped">
                                <tbody>                                    
									<tr>
                                        <?php
											$player_has_badges = 0;
											$player_has_nobadges = "Player has no achievements";
											if ($profile['badge1'] != '0') { $player_has_badges = 1; ?> 
                                            <a style="cursor:default" href="#" title="ACER!" data-toggle="popover" data-placement="bottom" data-html="true" data-trigger="hover" data-content="<strong><?=$profile['badge1']?>x</strong><br>Killed 5 enemies when only alive"><img class="img-fluid rounded-circle mb-3" src="img/badges/01.png" alt="" width="50" height="50"></a>
										<?php }
											if ($profile['badge2'] != '0') { $player_has_badges = 1;?>
											<a style="cursor:default" href="#" title="ACER!" data-toggle="popover" data-placement="bottom" data-html="true" data-trigger="hover" data-content="<strong><?=$profile['badge2']?>x</strong><br>Killed 5 enemies when only alive"><img class="img-fluid rounded-circle mb-3" src="img/badges/02.png" alt="" width="50" height="50"></a>
										<?php }
											if ($profile['badge3'] != '0') { $player_has_badges = 1;?>
											<a style="cursor:default" href="#" title="ACER!" data-toggle="popover" data-placement="bottom" data-html="true" data-trigger="hover" data-content="<strong><?=$profile['badge3']?>x</strong><br>Killed 5 enemies when only alive"><img class="img-fluid rounded-circle mb-3" src="img/badges/03.png" alt="" width="50" height="50"></a>
										<?php  }
											if ($profile['badge4'] != '0') { $player_has_badges = 1;?>
											<a style="cursor:default" href="#" title="ACER!" data-toggle="popover" data-placement="bottom" data-html="true" data-trigger="hover" data-content="<strong><?=$profile['badge4']?>x</strong><br>Killed 5 enemies when only alive"><img class="img-fluid rounded-circle mb-3" src="img/badges/04.png" alt="" width="50" height="50"></a>
										<?php  }
											if ($profile['badge5'] != '0') { $player_has_badges = 1;?>
											<a style="cursor:default" href="#" title="ACER!" data-toggle="popover" data-placement="bottom" data-html="true" data-trigger="hover" data-content="<strong><?=$profile['badge5']?>x</strong><br>Killed 5 enemies when only alive"><img class="img-fluid rounded-circle mb-3" src="img/badges/05.png" alt="" width="50" height="50"></a>
										<?php  }
											if ($profile['badge6'] != '0') { $player_has_badges = 1;?>
											<a style="cursor:default" href="#" title="ACER!" data-toggle="popover" data-placement="bottom" data-html="true" data-trigger="hover" data-content="<strong><?=$profile['badge6']?>x</strong><br>Killed 5 enemies when only alive"><img class="img-fluid rounded-circle mb-3" src="img/badges/06.png" alt="" width="50" height="50"></a>
										<?php  }
											if ($profile['badge7'] != '0') { $player_has_badges = 1;?>
											<a style="cursor:default" href="#" title="ACER!" data-toggle="popover" data-placement="bottom" data-html="true" data-trigger="hover" data-content="<strong><?=$profile['badge7']?>x</strong><br>Killed 5 enemies when only alive"><img class="img-fluid rounded-circle mb-3" src="img/badges/07.png" alt="" width="50" height="50"></a>
										<?php  }
											if ($profile['badge8'] != '0') { $player_has_badges = 1;?>
											<a style="cursor:default" href="#" title="ACER!" data-toggle="popover" data-placement="bottom" data-html="true" data-trigger="hover" data-content="<strong><?=$profile['badge8']?>x</strong><br>Killed 5 enemies when only alive"><img class="img-fluid rounded-circle mb-3" src="img/badges/08.png" alt="" width="50" height="50"></a>
										<?php  }
											if ($profile['badge9'] != '0') { $player_has_badges = 1;?>
											<a style="cursor:default" href="#" title="ACER!" data-toggle="popover" data-placement="bottom" data-html="true" data-trigger="hover" data-content="<strong><?=$profile['badge9']?>x</strong><br>Killed 5 enemies when only alive"><img class="img-fluid rounded-circle mb-3" src="img/badges/09.png" alt="" width="50" height="50"></a>
										<?php  }
											if ($profile['badge10'] != '0') { $player_has_badges = 1;?>
											<a style="cursor:default" href="#" title="ACER!" data-toggle="popover" data-placement="bottom" data-html="true" data-trigger="hover" data-content="<strong><?=$profile['badge10']?>x</strong><br>Killed 5 enemies when only alive"><img class="img-fluid rounded-circle mb-3" src="img/badges/10.png" alt="" width="50" height="50"></a>
										<?php  }
											if ($profile['badge11'] != '0') { $player_has_badges = 1;?>
											<a style="cursor:default" href="#" title="ACER!" data-toggle="popover" data-placement="bottom" data-html="true" data-trigger="hover" data-content="<strong><?=$profile['badge11']?>x</strong><br>Killed 5 enemies when only alive"><img class="img-fluid rounded-circle mb-3" src="img/badges/11.png" alt="" width="50" height="50"></a>
										<?php  }
											if ($profile['badge12'] != '0') { $player_has_badges = 1;?>
											<a style="cursor:default" href="#" title="ACER!" data-toggle="popover" data-placement="bottom" data-html="true" data-trigger="hover" data-content="<strong><?=$profile['badge12']?>x</strong><br>Killed 5 enemies when only alive"><img class="img-fluid rounded-circle mb-3" src="img/badges/12.png" alt="" width="50" height="50"></a>
										<?php  }
											if ($profile['badge13'] != '0') { $player_has_badges = 1;?>
											<a style="cursor:default" href="#" title="ACER!" data-toggle="popover" data-placement="bottom" data-html="true" data-trigger="hover" data-content="<strong><?=$profile['badge13']?>x</strong><br>Killed 5 enemies when only alive"><img class="img-fluid rounded-circle mb-3" src="img/badges/13.png" alt="" width="50" height="50"></a>
										<?php } 
											if($player_has_badges == '0') 
											{ 
												echo $player_has_nobadges;
											} ?>                    
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/row-->
                </div>
                <div class="tab-pane" id="stats">
                    <h4 class="m-y-2">Recent activity &amp; Notifications</h4>
                    <div class="alert alert-info alert-dismissable">
                        <a class="panel-close close" data-dismiss="alert">×</a> This is an <strong>.alert</strong>. Use this to show important messages to the user.
                    </div>
                    <table class="table table-hover table-striped">
                        <tbody>                                    
                            <tr>
                                <td>
                                   <span class="pull-xs-right font-weight-bold">3 hrs ago</span> Here is your a link to the latest summary report from the..
                                </td>
                            </tr>
  <div class="row row d-flex justify-content-center text-center">                          
  <div class="card" style="width: 11rem; margin: 0.4rem;">
  <div class="card-body">
    <h5 class="card-title">MATCHES</h5>
    <p class="card-text"><?=$profile["games_all"]?></p>
  </div>
</div>
<br>
<div class="card" style="width: 11rem; margin: 0.4rem;">
  <div class="card-body">
    <h5 class="card-title">WIN RATE</h5>
    <p class="card-text"><?=$profile["games_all"]?>%</p>
  </div>
</div>
<br>
<div class="card" style="width: 11rem; margin: 0.4rem;">
  <div class="card-body">
    <h5 class="card-title">K/D RATIO</h5>
    <p class="card-text"><?=$profile["games_all"]?></p>
  </div>
</div>
<br>
<div class="card" style="width: 11rem; margin: 0.4rem;">
  <div class="card-body">
    <h5 class="card-title">HEADSHOTS</h5>
    <p class="card-text"><?=$profile["games_all"]?>%</p>
  </div>
</div>
</div>

                            
                            
                            
                        </tbody> 
                    </table>
                </div>
                <div class="tab-pane" id="messages">
                    <h4 class="m-y-2">Recent activity &amp; Notifications</h4>
                    <div class="alert alert-info alert-dismissable">
                        <a class="panel-close close" data-dismiss="alert">×</a> This is an <strong>.alert</strong>. Use this to show important messages to the user.
                    </div>
                    <table class="table table-hover table-striped">
                        <tbody>                                    
                            <tr>
                                <td>
                                   <span class="pull-xs-right font-weight-bold">3 hrs ago</span> Here is your a link to the latest summary report from the..
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="pull-xs-right font-weight-bold">Yesterday</span> There has been a request on your account since that was..
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="pull-xs-right font-weight-bold">9/10</span> Porttitor vitae ultrices quis, dapibus id dolor. Morbi venenatis lacinia rhoncus. 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="pull-xs-right font-weight-bold">9/4</span> Vestibulum tincidunt ullamcorper eros eget luctus. 
                                </td>
                            </tr>
                        </tbody> 
                    </table>
                </div>
                <div class="tab-pane" id="edit">
                    <h4 class="m-y-2">Edit Profile</h4>
                    <form role="form" method="POST" action="process.php">
						<br>						
						<br>
						<h5>Personal Information</h5>
						<br>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">First name</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="<?=$profile['first_name']?>" name="fname_edit">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="<?=$profile['last_name']?>" name="lname_edit">
                            </div>
                        </div>
						<br>						
						<hr>
						<h5>Public Information</h5>
						<br>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="email" value="<?=$profile['contacts']?>" placeholder="example@gmail.com" name="email_edit" maxlength="50">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" class="form-check-input" value="1" name="email_edit_check" <?php if ($profile['user_email_check'] == '1') echo "checked='checked'"; ?>>Display on profile</label>
                            </div>
						</div>
						<div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">About</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="<?=$profile['roles']?>" placeholder="Information about you" name="about_edit" maxlength='250'>
								
                            </div>
                        </div>		
						<br>
						<hr>
						<h5>Social Information</h5>
						<br>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Twitter</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="<?=$profile['twitter']?>" placeholder="Link to your profile" name="twitter_edit">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Twitch</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="url" value="<?=$profile['twitch']?>" placeholder="Link to your channel" name="twitch_edit">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Facebook</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="<?=$profile['facebook']?>" placeholder="Link to your profile" name="facebook_edit">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Cancel">
                                <input type="submit" name="profile" class="btn btn-primary" value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 pull-lg-8 text-xs-center">
           
			
			                        <div class="col-md-12">
									 <center><img src="<?=$steamprofile['avatarfull']?>" class="m-x-auto img-fluid img-circle rounded" alt="avatar">
                            <h4 class="m-t-2"><span class="pull-xs-right"><strong><?=$steamprofile['personaname']?></strong></span></h4></center>
                            <table class="table table-hover table-striped">
                                <tbody>                                    
                                    <tr>
                                        <td>
											<a class="text-reset text-decoration-none" href="<?=$profile['steam']?>" target="_blank">
                                            <center><i class="fab fa-steam"></i> <strong>STEAM</strong> profile</center>
                                        </td>
                                    </tr>
                                    <tr <?php if (empty($profile['twitter'])) echo "style='visibility:collapse'"; ?>>
                                        <td>
											<a class="text-reset text-decoration-none" href="<?=$profile['twitter']?>" target="_blank">
                                            <center><i class="fab fa-twitter"></i> <strong>TWITTER</strong> profile</center>
                                        </td>

                                    </tr>
                                    <tr <?php if (empty($profile['twitch'])) echo "style='visibility:collapse'"; ?>>
                                        <td>
											<a class="text-reset text-decoration-none" href="<?=$profile['twitch']?>" target="_blank">
                                            <center><i class="fab fa-twitch"></i> <strong>TWITCH</strong> channel</center>
                                        </td>
                                    </tr>
                                    <tr <?php if (empty($profile['facebook'])) echo "style='visibility:collapse'"; ?>>
                                        <td>
											<a class="text-reset text-decoration-none" href="<?=$profile['facebook']?>" target="_blank">
                                            <center><i class="fab fa-facebook-square"></i> <strong>FACEBOOK</strong> profile</center>
                                        </td>

                                    </tr>
									<?php
									if(!empty($profile['tag']))
									{
										?>
										<tr>
											<td>
												<center><i class="<?=$profile['user_tag']?>"></i> <strong><?=$profile['tag']?></strong> account</center>
											</td>
										</tr>
										<?php
									}
									?>
								</tbody>
								<tbody>
                                    <tr>
                                        <td>
                                            <center><i class="fas fa-user-clock"></i> <strong><?=$profile['join_date']?></strong></center>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/row-->
                </div>
			
        </div>
    </div>
</div>

  <!-- Testimonials -->
  <section class="testimonials text-center bg-light">
	  <div class="mw-100">
	  <h4 class="m-t-2"><span class="fa fa-clock-o ion-clock pull-xs-right"></span><br> Recent matches</h4><br>
                            <table class="table table-hover table-responsive-sm">
							<thead class="thead-light">
							<tr>
							<th scope="col"> </th>
							<th scope="col"> </th>
							<th scope="col"> </th>
							<th scope="col">Date</th>
							<th scope="col">Mode</th>
							<th scope="col">Result</th>
							<th scope="col">Score</th>
							<th scope="col">Kills</th>
							<th scope="col">Assists</th>
							<th scope="col">Deaths</th>
							<th scope="col">K/D</th>
							<th scope="col">Headshots</th>
							<th scope="col"> </th>
							<th scope="col"> </th>
							<th scope="col"> </th>
							<th scope="col"> </th>
							<th scope="col"> </th>
							<th scope="col"> </th>
							<th scope="col"> </th>
							<th scope="col"> </th>
							<th scope="col" style="text-align: right;">Map</th>
							<th scope="col"></th>
							<th scope="col"></th>
							</tr>
							</thead>
                                <tbody>                                    
                                    <tr>
										<td></td>
										<td></td>
										<td></td>
										<td>05 Mar - 22:51</td>
										<td>5v5</td>
										<td>WIN</td>
										<td>14 / 16</td>
										<td>41</td>
										<td>3</td>
										<td>21</td>
										<td>1.95</td>
										<td>14</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td align="right">de_dust2</td>
										<td style="padding: .25rem;" align="left"><img src='img/dust2.jpg' width="80" height="40"/></td>
										<td><i class="fas fa-chevron-right"></td>
									</tr>
    								<tr>
										<td></td>
										<td></td>
										<td></td>
										<td>05 Mar - 22:51</td>
										<td>5v5</td>
										<td>WIN</td>
										<td>14 / 16</td>
										<td>41</td>
										<td>3</td>
										<td>21</td>
										<td>1.95</td>
										<td>14</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td align="right">de_dust2</td>
										<td style="padding: .25rem;" align="left"><img src='img/dust2.jpg' width="80" height="40"/></td>
										<td><i class="fas fa-chevron-right"></td>
									</tr>
    								<tr>	
										<td></td>
										<td></td>
										<td></td>
										<td>05 Mar - 22:51</td>
										<td>5v5</td>
										<td>WIN</td>
										<td>14 / 16</td>
										<td>41</td>
										<td>3</td>
										<td>21</td>
										<td>1.95</td>
										<td>14</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td align="right">de_dust2</td>
										<td style="padding: .25rem;" align="left"><img src='img/dust2.jpg' width="80" height="40"/></td>
										<td><i class="fas fa-chevron-right"></td>
									</tr>
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