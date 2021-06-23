<?php	
require ('steamauth/steamauth.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {        ///Check it is coming from a form

	require ('config.php');
	include ('steamauth/userInfo.php');
	include ('functions.php');
	
	error_reporting(-1);
    ini_set('display_errors',1);
	
	if(isset($_POST['profile'])) {                             //////  PROFILIS
	
	$u_fname = $_POST["fname_edit"]; 
	$u_lname = $_POST["lname_edit"];
	$u_email = $_POST["email_edit"];
	$u_about = $_POST["about_edit"];
	$u_twitter = $_POST["twitter_edit"];
	$u_twitch = $_POST["twitch_edit"];
	$u_facebook = $_POST["facebook_edit"];
	
	//print output text
	$sql0 = "SELECT id FROM users WHERE steamid ='".$steamprofile['steamid']."'";
	$checkID = mysqli_fetch_assoc(mysqli_query($link,$sql0));
	
	if(empty($_POST["email_edit_check"])){	
	$sql_check = "UPDATE users_profile SET user_email_check='0' WHERE profile_id='".$checkID['id']."'";
	mysqli_query($link,$sql_check);
	}
	else{	
	$sql_check2 = "UPDATE users_profile SET user_email_check='1' WHERE profile_id='".$checkID['id']."'";
	mysqli_query($link,$sql_check2);
	}
	
	//$sql = "UPDATE users_profile SET (first_name, last_name, contact_email, roles, twitter_link, twitch_link, facebook_link) VALUES ('".$u_fname."', '".$u_lname."', '".$u_email."', '".$u_about."', '".$u_twitter."', '".$u_twitch."', '".$u_facebook."' WHERE profile_id='".$checkID['id']."')";
	$sql = "UPDATE users_profile SET first_name='".$u_fname."', last_name='".$u_lname."', contact_email='".$u_email."', roles='".$u_about."', twitter_link='".$u_twitter."', twitch_link='".$u_twitch."', facebook_link='".$u_facebook."' WHERE profile_id='".$checkID['id']."'";
	mysqli_query($link,$sql);
	
	Check_Profile($steamprofile['steamid']);
	}
	
	mysqli_close($link);
	
	header('Location: profile.php');
     exit();
}


?>