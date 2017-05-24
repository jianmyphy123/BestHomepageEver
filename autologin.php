<?php
require_once('settings.php');

if(isSet($cookie_name))
{
	// Check if the cookie exists
	if(isSet($_COOKIE[$cookie_name]))
	{
		parse_str($_COOKIE[$cookie_name]);

		if (empty($username) || empty($password)) {
			header("location: login.php");
		}
		else
		{
			// Establishing Connection with Server by passing server_name, user_id and password as a parameter
			$mysqli = new mysqli($server, $db_user_name, $db_password, $database); 
			
			$results = $mysqli->query("select * from users where password='$password' AND username='$username'");
			

			$rows = $results->num_rows; 
			$row = $results->fetch_object();
			
			if ($rows == 1) {
				$_SESSION['login_user']=$username; // Initializing Session
				$_SESSION['fname'] = $row->fname;
				$_SESSION['lname'] = $row->lname;
				$_SESSION['user_id'] = $row->id;
				$_SESSION['fontStyle'] = $row->fontstyle;
				$_SESSION['tab'] = $row->tab;
				$_SESSION['ti'] = $row->ti;
				$_SESSION['BG'] = $row->bg;
				$_SESSION['BG_LETTER'] = $row->bg_letter;
				$_SESSION['account_type'] = $row->account_type;
			}
			$results->free();
			$mysqli->close(); // Closing Connection
		}


	}
}
?>