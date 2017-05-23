<?php
session_start();

require_once('settings.php');


if(array_key_exists('login_user',$_SESSION) && isset($_SESSION['login_user'])) {

    
    $userid = $_SESSION['user_id'];
    
    $mysqli = new mysqli($server, $db_user_name, $db_password, $database); 

    init($mysqli);


    
    if(!empty($_POST['standard_title_0']) && !empty($_POST['standard_url_0'])) 
        saveOneRow($_POST['standard_title_0'], $_POST['standard_url_0'], 'standard', 0, $mysqli);
    
    if(!empty($_POST['standard_title_1']) && !empty($_POST['standard_url_1'])) 
        saveOneRow($_POST['standard_title_1'], $_POST['standard_url_1'], 'standard', 1, $mysqli);
    

    if($_SESSION['account_type'] == 'pro') {
        if(array_key_exists('pro_title_0',$_POST) && array_key_exists('pro_url_0',$_POST) && !empty($_POST['pro_title_0']) && !empty($_POST['pro_url_0']))
            saveOneRow($_POST['pro_title_0'], $_POST['pro_url_0'], 'pro', 0, $mysqli);
        if(array_key_exists('pro_title_1',$_POST) && array_key_exists('pro_url_1',$_POST) && !empty($_POST['pro_title_1']) && !empty($_POST['pro_url_1']))
            saveOneRow($_POST['pro_title_1'], $_POST['pro_url_1'], 'pro', 1, $mysqli);
        if(array_key_exists('pro_title_2',$_POST) && array_key_exists('pro_url_2',$_POST) && !empty($_POST['pro_title_2']) && !empty($_POST['pro_url_2']))
            saveOneRow($_POST['pro_title_2'], $_POST['pro_url_2'], 'pro', 2, $mysqli);
        if(array_key_exists('pro_title_3',$_POST) && array_key_exists('pro_url_3',$_POST) && !empty($_POST['pro_title_3']) && !empty($_POST['pro_url_3']))
            saveOneRow($_POST['pro_title_3'], $_POST['pro_url_3'], 'pro', 3, $mysqli);
        if(array_key_exists('pro_title_4',$_POST) && array_key_exists('pro_url_4',$_POST) && !empty($_POST['pro_title_4']) && !empty($_POST['pro_url_4']))
            saveOneRow($_POST['pro_title_4'], $_POST['pro_url_4'], 'pro', 4, $mysqli);
        if(array_key_exists('pro_title_5',$_POST) && array_key_exists('pro_url_5',$_POST) && !empty($_POST['pro_title_5']) && !empty($_POST['pro_url_5']))
            saveOneRow($_POST['pro_title_5'], $_POST['pro_url_5'], 'pro', 5, $mysqli);
        if(array_key_exists('pro_title_6',$_POST) && array_key_exists('pro_url_6',$_POST) && !empty($_POST['pro_title_6']) && !empty($_POST['pro_url_6']))
            saveOneRow($_POST['pro_title_6'], $_POST['pro_url_6'], 'pro', 6, $mysqli);
        if(array_key_exists('pro_title_7',$_POST) && array_key_exists('pro_url_7',$_POST) && !empty($_POST['pro_title_7']) && !empty($_POST['pro_url_7']))
            saveOneRow($_POST['pro_title_7'], $_POST['pro_url_7'], 'pro', 7, $mysqli);
        if(array_key_exists('pro_title_8',$_POST) && array_key_exists('pro_url_8',$_POST) && !empty($_POST['pro_title_8']) && !empty($_POST['pro_url_8']))
            saveOneRow($_POST['pro_title_8'], $_POST['pro_url_8'], 'pro', 8, $mysqli);
        if(array_key_exists('pro_title_9',$_POST) && array_key_exists('pro_url_9',$_POST) && !empty($_POST['pro_title_9']) && !empty($_POST['pro_url_9']))
            saveOneRow($_POST['pro_title_9'], $_POST['pro_url_9'], 'pro', 9, $mysqli);
    }

    echo "<script>window.location='index-custom4.php'</script>";
    
}

function init($mysqli) {
    $userid = $_SESSION['user_id'];

    $mysqli->query("delete from user_links where user_id='$userid'");
    
}


function saveOneRow($title, $url, $account_type, $url_order, $mysqli) {
    $userid = $_SESSION['user_id'];
    
    $mysqli->query("insert user_links set user_id = '$userid', title='$title', url='$url', account_type='$account_type', url_order='$url_order'");
}


?>