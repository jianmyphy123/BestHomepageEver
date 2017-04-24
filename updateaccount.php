<?php
session_start();

require_once('settings.php');


if(array_key_exists('login_user',$_SESSION) && isset($_SESSION['login_user']) && isset($_POST['updateaccount'])) {
    
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $username = $_POST['username'];
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
    
    if($_SESSION['login_user'] != $username) {
        $results = $mysqli->query("select * from users where username='$username'");

        $rows = $results->num_rows;
        $row = $results->fetch_object();
        
        if ($rows == 0) {

            $results = $mysqli->query("update users set username='$username', fname='$fname', lname='$lname' where id='$userid'");
            
            if($results){
                
                $_SESSION['fname'] = $fname;
                $_SESSION['lname'] = $lname;
                $_SESSION['login_user']=$username; // Initializing Session

                $ret =  array(
                            "title" => "ok",
                            "data" => "Your account updated successfully."
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

            
        } else {
            $ret =  array(
                        "title" => "err",
                        "data" => "The email address exists already. Please try again."
                    );
            echo json_encode($ret);
            return;
        }
    }
    else {
        $results = $mysqli->query("update users set fname='$fname', lname='$lname' where id='$userid'");

            
        if($results){
            
            $_SESSION['fname'] = $fname;
            $_SESSION['lname'] = $lname;

            $ret =  array(
                        "title" => "ok",
                        "data" => "Your account updated successfully."
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