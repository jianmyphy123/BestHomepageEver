<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
	header("Location: index_alex.php"); // Redirecting To Home Page
}
?>