<?php
session_start();

require_once('settings.php');

session_destroy();

if(isset($_COOKIE[$cookie_name]))
{
	// remove 'site_auth' cookie
	setcookie ($cookie_name, '', time() - $cookie_time);
}

header("Location: index.php");

?>