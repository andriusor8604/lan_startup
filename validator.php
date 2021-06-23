<?php	

	 ///require_once ('config.php');
	/// sukuria duombazej playerio informacija, jei pakeicia nicka, atnaujina.
	
	
	function Check_Badges_Profiles($player_steamid) {
	    
	    ///error_reporting(-1);
        ///ini_set('display_errors',1);
        
        require ('config.php');
        
	    $sql = "SELECT id FROM users WHERE steamid ='".$player_steamid."'";
		$checkID = mysqli_fetch_assoc(mysqli_query($link,$sql));
		
		$sql2 = "SELECT * FROM users_badges WHERE user_id ='".$checkID['id']."'";
        $checkBADGES = mysqli_fetch_array(mysqli_query($link,$sql2));
        $_SESSION['s_badge1'] = $checkBADGES[2];
		$_SESSION['s_badge2'] = $checkBADGES[3];
		$_SESSION['s_badge3'] = $checkBADGES[4];
		$_SESSION['s_badge4'] = $checkBADGES[5];
		$_SESSION['s_badge5'] = $checkBADGES[6];
		$_SESSION['s_badge6'] = $checkBADGES[7];
		$_SESSION['s_badge7'] = $checkBADGES[8];
		$_SESSION['s_badge8'] = $checkBADGES[9];
		$_SESSION['s_badge9'] = $checkBADGES[10];
		$_SESSION['s_badge10'] = $checkBADGES[11];
		$_SESSION['s_badge11'] = $checkBADGES[12];
		$_SESSION['s_badge12'] = $checkBADGES[13];
		$_SESSION['s_badge13'] = $checkBADGES[14];   
		
		mysqli_close($link);
	}		
	
	function Check_Profile_Profiles($player_steamid) {
	    
	    require ('config.php');
	    
		
		///error_reporting(-1);
        ///ini_set('display_errors',1);
		
	    $sql = "SELECT id FROM users WHERE steamid ='".$player_steamid."'";  /// ID GAUNA
		$checkID = mysqli_fetch_assoc(mysqli_query($link,$sql));
		
		$sql2 = "SELECT * FROM users_profile WHERE profile_id ='".$checkID['id']."'"; /// USERS_PROFILE LENTELE
        $checkPROFILE = mysqli_fetch_array(mysqli_query($link,$sql2));
		$_SESSION['s_steam'] = $checkPROFILE[2];
		$_SESSION['s_steam_image'] = $checkPROFILE[3];
		$_SESSION['s_twitter'] = $checkPROFILE[4];
		$_SESSION['s_twitch'] = $checkPROFILE[5];
		$_SESSION['s_facebook'] = $checkPROFILE[6];
		$_SESSION['s_roles'] = $checkPROFILE[7];
		$_SESSION['s_views'] = $checkPROFILE[8];
		$_SESSION['s_contacts'] = $checkPROFILE[9];
		$_SESSION['s_first_name'] = $checkPROFILE[10];
		$_SESSION['s_last_name'] = $checkPROFILE[11];
		$_SESSION['s_user_email_check'] = $checkPROFILE[12];
		
		$sql3 = "SELECT * FROM users WHERE steamid ='".$player_steamid."'"; /// USERS LENTELE
        $checkPROFILE_data = mysqli_fetch_assoc(mysqli_query($link,$sql3));
		
		$_SESSION["s_join_date"] = $checkPROFILE_data['join_date'];
		$_SESSION["s_name"] = $checkPROFILE_data['name'];
		$_SESSION["s_id"] = $checkPROFILE_data['id'];
		$_SESSION["s_user_tag"] = $checkPROFILE_data['user_tag'];
		
		$sql4 = "SELECT * FROM users_games WHERE player_id ='".$checkID['id']."'"; /// USERS_GAMES LENTELE
        $checkGAMES = mysqli_fetch_array(mysqli_query($link,$sql4));
		$_SESSION['s_games_all'] = $checkGAMES[2];
		$_SESSION['s_games_wins'] = $checkGAMES[3];
		$_SESSION['s_games_loses'] = $checkGAMES[4];
		$_SESSION['s_games_kills'] = $checkGAMES[5];
		$_SESSION['s_games_deaths'] = $checkGAMES[6];
		$_SESSION['s_games_assists'] = $checkGAMES[7];
		
		if(empty($_SESSION['s_contacts']))
		{
			$_SESSION['s_contacts_shown'] = "No Information given";
		} else if($_SESSION['s_user_email_check']==0)
		{
			$_SESSION['s_contacts_shown'] = "Information is private";
		} 
		else $_SESSION['s_contacts_shown'] = $_SESSION['contacts'];

		if(empty($_SESSION['s_roles']))
		{
			$_SESSION['s_roles'] = "No Information given";
		}
		
		if($_SESSION["s_user_tag"] == "0")
		{
			$_SESSION["s_user_tag"] = "";
			$_SESSION["s_tag"] = "";
		}
		if($_SESSION["s_user_tag"] == "1")
		{
			$_SESSION["s_user_tag"] = "fa fa-check-circle";
			$_SESSION["s_tag"] = "Verified";
		}
		if($_SESSION["s_user_tag"] == "2")
		{
			$_SESSION["s_user_tag"] = "fas fa-user-cog";
			$_SESSION["s_tag"] = "Moderator";
		}
		if($_SESSION["s_user_tag"] == "3")
		{
			$_SESSION["s_user_tag"] = "fas fa-tools";
			$_SESSION["s_tag"] = "Administrator";
		}
		
		
		mysqli_close($link);
	}
	
		function Website_Stats() {
	    
	    require ('config.php');
		
		$sql9 = "SELECT COUNT(*) FROM users;";
		$result = mysqli_fetch_array(mysqli_query($link,$sql9));
		$_SESSION['total_users'] = $result[0];
		
		$sql9 = "SELECT SUM(views) FROM users_profile;";
		$result = mysqli_fetch_array(mysqli_query($link,$sql9));
		$_SESSION['total_views'] = $result[0];
		
		$sql9 = "SELECT SUM(games_all) FROM users_games;";
		$result = mysqli_fetch_array(mysqli_query($link,$sql9));
		$_SESSION['total_games'] = $result[0];
		
		$sql9 = "SELECT COUNT(*) FROM users_bans;";
		$result = mysqli_fetch_array(mysqli_query($link,$sql9));
		$_SESSION['total_bans'] = $result[0];;
		
		$sql9 = "SELECT COUNT(*) FROM users WHERE user_tag=2 OR user_tag=3;";
		$result = mysqli_fetch_array(mysqli_query($link,$sql9));
		$_SESSION['total_staff'] = $result[0];
		
		$sql9 = "SELECT COUNT(*) FROM users WHERE user_tag=1";
		$result = mysqli_fetch_array(mysqli_query($link,$sql9));
		$_SESSION['total_verified'] = $result[0];
		

		mysqli_close($link);
	}
	
	//////////////////////////////////////////////////////////////////////// VISI IS SESSION I NORMALU
		
?>