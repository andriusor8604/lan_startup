<?php	

	 ///require_once ('config.php');
	/// sukuria duombazej playerio informacija, jei pakeicia nicka, atnaujina.
	
	
	function Check_new_old($player_name, $player_steamid, $player_image) {
		///error_reporting(-1);
        ///ini_set('display_errors',1);
        
        require ('config.php');
	    
		$checkSteamID = mysqli_query($link, "SELECT id FROM users WHERE steamid ='".$player_steamid."'");
		$real_ID = mysqli_fetch_assoc($checkSteamID);
		if(mysqli_num_rows($checkSteamID))
		{ 
	
		$sql = "UPDATE users SET name='".$player_name."' WHERE steamid='".$player_steamid."'";
		mysqli_query($link,$sql);
		
		$sql41 = "UPDATE users_profile SET steam_image='".$player_image."' WHERE profile_id='".$real_ID['id']."'";
		mysqli_query($link,$sql41);
		
		}  
			else 
			{	
			$sql2 = "INSERT INTO users (name, steamid, join_date) VALUES ('".$player_name."', '".$player_steamid."', CURDATE())";
			mysqli_query($link,$sql2);
			
			$sql3 = "SELECT id FROM users WHERE steamid ='".$player_steamid."'";
			$checkID = mysqli_fetch_assoc(mysqli_query($link,$sql3));
			
			$sql4 = "INSERT INTO users_games (player_id) VALUES ('".$checkID['id']."')";
			mysqli_query($link,$sql4);
			
			$sql5 = "INSERT INTO users_profile (profile_id, steam_link, steam_image) VALUES ('".$checkID['id']."', 'http://steamcommunity.com/profiles/".$player_steamid."/', '".$player_image."')";
			mysqli_query($link,$sql5);
			
			$sql6 = "INSERT INTO users_badges (user_id) VALUES ('".$checkID['id']."')";
			mysqli_query($link,$sql6);
			
			mysqli_close($link);
			}
	}
	
	function Check_Badges($player_steamid) {
	    
	    ///error_reporting(-1);
        ///ini_set('display_errors',1);
        
        require ('config.php');
        
	    $sql = "SELECT id FROM users WHERE steamid ='".$player_steamid."'";
		$checkID = mysqli_fetch_assoc(mysqli_query($link,$sql));
		
		$sql2 = "SELECT * FROM users_badges WHERE user_id ='".$checkID['id']."'";
        $checkBADGES = mysqli_fetch_array(mysqli_query($link,$sql2));
        $_SESSION['badge1'] = $checkBADGES[2];
		$_SESSION['badge2'] = $checkBADGES[3];
		$_SESSION['badge3'] = $checkBADGES[4];
		$_SESSION['badge4'] = $checkBADGES[5];
		$_SESSION['badge5'] = $checkBADGES[6];
		$_SESSION['badge6'] = $checkBADGES[7];
		$_SESSION['badge7'] = $checkBADGES[8];
		$_SESSION['badge8'] = $checkBADGES[9];
		$_SESSION['badge9'] = $checkBADGES[10];
		$_SESSION['badge10'] = $checkBADGES[11];
		$_SESSION['badge11'] = $checkBADGES[12];
		$_SESSION['badge12'] = $checkBADGES[13];
		$_SESSION['badge13'] = $checkBADGES[14];   
		
		mysqli_close($link);
	}
		$profile['badge1'] = $_SESSION['badge1'];
		$profile['badge2'] = $_SESSION['badge2'];
		$profile['badge3'] = $_SESSION['badge3'];
		$profile['badge4'] = $_SESSION['badge4'];
		$profile['badge5'] = $_SESSION['badge5'];
		$profile['badge6'] = $_SESSION['badge6'];
		$profile['badge7'] = $_SESSION['badge7'];
		$profile['badge8'] = $_SESSION['badge8'];
		$profile['badge9'] = $_SESSION['badge9'];
		$profile['badge10'] = $_SESSION['badge10'];
		$profile['badge11'] = $_SESSION['badge11'];
		$profile['badge12'] = $_SESSION['badge12'];
		$profile['badge13'] = $_SESSION['badge13'];
		
	
	function Check_Profile($player_steamid) {
	    
	    require ('config.php');
	    
		
		///error_reporting(-1);
        ///ini_set('display_errors',1);
		
	    $sql = "SELECT id FROM users WHERE steamid ='".$player_steamid."'";  /// ID GAUNA
		$checkID = mysqli_fetch_assoc(mysqli_query($link,$sql));
		
		$sql2 = "SELECT * FROM users_profile WHERE profile_id ='".$checkID['id']."'"; /// USERS_PROFILE LENTELE
        $checkPROFILE = mysqli_fetch_array(mysqli_query($link,$sql2));
		$_SESSION['steam'] = $checkPROFILE[2];
		$_SESSION['steam_image'] = $checkPROFILE[3];
		$_SESSION['twitter'] = $checkPROFILE[4];
		$_SESSION['twitch'] = $checkPROFILE[5];
		$_SESSION['facebook'] = $checkPROFILE[6];
		$_SESSION['roles'] = $checkPROFILE[7];
		$_SESSION['views'] = $checkPROFILE[8];
		$_SESSION['contacts'] = $checkPROFILE[9];
		$_SESSION['first_name'] = $checkPROFILE[10];
		$_SESSION['last_name'] = $checkPROFILE[11];
		$_SESSION['user_email_check'] = $checkPROFILE[12];
		
		$sql3 = "SELECT * FROM users WHERE steamid ='".$player_steamid."'"; /// USERS LENTELE
        $checkPROFILE_data = mysqli_fetch_assoc(mysqli_query($link,$sql3));
		
		$_SESSION["join_date"] = $checkPROFILE_data['join_date'];
		$_SESSION["name"] = $checkPROFILE_data['name'];
		$_SESSION["id"] = $checkPROFILE_data['id'];
		$_SESSION["user_tag"] = $checkPROFILE_data['user_tag'];
		
		$sql4 = "SELECT * FROM users_games WHERE player_id ='".$checkID['id']."'"; /// USERS_GAMES LENTELE
        $checkGAMES = mysqli_fetch_array(mysqli_query($link,$sql4));
		$_SESSION['games_all'] = $checkGAMES[2];
		$_SESSION['games_wins'] = $checkGAMES[3];
		$_SESSION['games_loses'] = $checkGAMES[4];
		$_SESSION['games_kills'] = $checkGAMES[5];
		$_SESSION['games_deaths'] = $checkGAMES[6];
		$_SESSION['games_assists'] = $checkGAMES[7];
		
			mysqli_close($link);
	}
	//////////////////////////////////////////////////////////////////////// VISI IS SESSION I NORMALU
		$profile['steam'] = $_SESSION["steam"];
		$profile['steam_image'] = $_SESSION["steam_image"];
		$profile['twitter'] = $_SESSION['twitter'];
		$profile['twitch'] = $_SESSION['twitch'];
		$profile['facebook'] = $_SESSION['facebook'];
		$profile['roles'] = $_SESSION['roles'];
		$profile['views'] = $_SESSION['views'];
		$profile['contacts'] = $_SESSION['contacts'];
		$profile['first_name'] = $_SESSION['first_name'];
		$profile['last_name'] = $_SESSION['last_name'];
		$profile['user_email_check'] = $_SESSION['user_email_check'];
		
		if(empty($profile['contacts']))
		{
			$profile['contacts_shown'] = "No Information given";
		} else if($profile['user_email_check']==0)
		{
			$profile['contacts_shown'] = "Information is private";
		} 
		else $profile['contacts_shown'] = $profile['contacts'];
		
		if(empty($profile['roles']))
		{
			$profile['roles'] = "No Information given";
		}
		
		///
		$profile['join_date'] = $_SESSION['join_date'];
		$profile['name'] = $_SESSION['name'];
		$profile['id'] = $_SESSION['id'];
		$profile['user_tag'] = $_SESSION["user_tag"];
		
		if($profile["user_tag"] == "0")
		{
			$profile["user_tag"] = "";
			$profile["tag"] = "";
		}
		if($profile["user_tag"] == "1")
		{
			$profile["user_tag"] = "fa fa-check-circle";
			$profile["tag"] = "Verified";
		}
		if($profile["user_tag"] == "2")
		{
			$profile["user_tag"] = "fas fa-user-cog";
			$profile["tag"] = "Moderator";
		}
		if($profile["user_tag"] == "3")
		{
			$profile["user_tag"] = "fas fa-tools";
			$profile["tag"] = "Administrator";
		}
		
		
		///
		$profile['games_all'] = $_SESSION['games_all'];
		$profile['games_wins'] = $_SESSION['games_wins'];
		$profile['games_loses'] = $_SESSION['games_loses'];
		$profile['games_kills'] = $_SESSION['games_kills'];
		$profile['games_deaths'] = $_SESSION['games_deaths'];
		$profile['games_assists'] = $_SESSION['games_assists'];
		///
		

?>