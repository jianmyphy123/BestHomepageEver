<?php
session_start();// Starting Session

if(!array_key_exists('login_user',$_SESSION) or empty($_SESSION['login_user'])) {
    
	header('Location: login.php'); // Redirecting To Home Page
}



?>