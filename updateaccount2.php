<?php
session_start();

require_once('settings.php');


if(array_key_exists('login_user',$_SESSION) && isset($_SESSION['login_user']) && isset($_POST['account_type'])) {

    $account_type = $_POST['account_type'];
    $userid = $_SESSION['user_id'];
    
    $mysqli = new mysqli($server, $db_user_name, $db_password, $database); 

    if ($mysqli->connect_error) {
        $ret =  array(
                    "title" => "err",
                    "data" => 'Internal Server Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error
                );
        echo json_encode($ret);
        return;
    }
    
    $results = $mysqli->query("update users set account_type='$account_type' where id='$userid'");

            
    if($results){
        
        $_SESSION['account_type'] = $account_type;

        $ret =  array(
                    "title" => "ok",
                    "data" => "Update Successful."
                    
                );
        echo json_encode($ret);
        return;

    } else{
        $ret =  array(
                    "title" => "err",
                    "data" => 'Internal Server Error : ('. $mysqli->errno .') '. $mysqli->error
                );
        echo json_encode($ret);
        return;
    }
    
}
else {
    $ret =  array(
                "title" => "err",
                "data" => 'Internal Server Error'
            );
    echo json_encode($ret);
    return;
}


?>