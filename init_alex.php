<?php
require_once('settings.php');
session_start();
function files($path,&$files = array()){
    $dir = opendir($path."/.");
    while($item = readdir($dir))
        if(is_file($sub = $path."/".$item))
            $files[] = $item;else
            if($item != "." and $item != "..")
                files($sub,$files); 
    return($files);
}
$FONT = array(
	array('name'=>'Carvski (default)', 'value'=>'Open Sans'),
	array('name'=>'Worldly', 'value'=>'Verdana'),
	array('name'=>'Focused', 'value'=>'Arial'),
	array('name'=>'Petite', 'value'=>'Trebuchet MS'),
	array('name'=>'Cursive', 'value'=>'Comic Sans MS'),	
	array('name'=>'Classic', 'value'=>'Times New Roman'),	
	array('name'=>'Tahoma', 'value'=>'Tahoma'),
	array('name'=>'Georgia', 'value'=>'Georgia')
	
);
if(isset($_GET['fontStyle'])){
	$fontStyle = $_GET['fontStyle'];
} else {$fontStyle='';}
if(isset($_GET['tab'])){
	$tab = $_GET['tab'];
} else {$tab='';}
if(isset($_GET['ti'])){
	$ti = $_GET['ti'];
} else {$ti='text';}
 
if($fontStyle=='undefined')$fontStyle='';
if($tab=='undefined')$tab='';
if($ti=='undefined')$tab='text';



if(array_key_exists('login_user',$_SESSION) && !empty($_SESSION['login_user'])) { 
	$mysqli = new mysqli($server, $db_user_name, $db_password, $database); 

	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	
	$user_id = $_SESSION['user_id'];
	
	if(isset($_GET['num'])){
		
		$NUM=$_GET['num'];
		$LETTER=$_GET['letter'];
		
		$update_result = $mysqli->query("update users set fontstyle='".$fontStyle.
		"',tab='".$tab."',ti='".$ti."',bg='".$NUM."',bg_letter='".$LETTER.
		"' where id='".$user_id."'");
		
		if($update_result) {
			$_SESSION['fontStyle'] = $fontStyle;
			$_SESSION['tab'] = $tab;
			$_SESSION['ti'] = $ti;
			$_SESSION['BG'] = $NUM;
			$_SESSION['BG_LETTER'] = $LETTER;
			
			$url = 'index_alex.php?done-'.$NUM.''.$LETTER.'-'.$fontStyle.'-'.$tab.'-'.$ti.'';
			echo "<script>window.location = '$url'</script>";
			exit;
		}
		else{
			die('Error : ('. $mysqli->errno .') '. $mysqli->error);
		}
	}
	if(isset($_GET['clear'])){ 
		$update_result = $mysqli->query("update users set fontstyle=null,tab=null,ti=null,bg=null,bg_letter=null where id='".$user_id."'");
		
		if($update_result) {
			unset($_SESSION['fontStyle']);
			unset($_SESSION['tab']);
			unset($_SESSION['ti']);
			unset($_SESSION['BG']);
			unset($_SESSION['BG_LETTER']);
			
			echo "<script>window.location = 'index_alex.php'</script>";
			exit;
		}
		else{
			die('Error : ('. $mysqli->errno .') '. $mysqli->error);
		}
	
	}
	if(isset($_GET['clearbg'])){
	
		$NUMBERS=array('a','b');
		shuffle($NUMBERS);

		$bg = str_pad(rand(1,16), 2, '0', STR_PAD_LEFT);
		$bg_letter = $NUMBERS[0];
	
		$update_result = $mysqli->query("update users set bg='$bg',bg_letter='$bg_letter' where id='".$user_id."'");
		
		if($update_result) {
			$_SESSION['BG'] = $bg;
			$_SESSION['BG_LETTER'] = $bg_letter;
			
			echo "<script>window.location = 'index_alex.php'</script>";
			exit;
		}
		else{
			die('Error : ('. $mysqli->errno .') '. $mysqli->error);
		}
		
	}
	
	
	
	
}

?>