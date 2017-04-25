<?php
session_start();
require_once('settings.php');

if(array_key_exists('login_user',$_SESSION) && isset($_SESSION['login_user'])) {

    $mysqli = new mysqli($server, $db_user_name, $db_password, $database); 

    if ($mysqli->connect_error) {
        die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }
    $userid = $_SESSION['user_id'];
    $results = $mysqli->query("delete from users where id='$userid'");

    if($results) {
        echo "<script>window.location='logout.php'</script>";
    }
}
?>