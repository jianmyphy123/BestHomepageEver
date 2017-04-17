<?php
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

 
if(isset($_GET['num'])){
	$NUM=$_GET['num'];
	$LETTER=$_GET['letter'];
	setcookie('fontStyle', $fontStyle, time() + (86400 * 30));
	setcookie('tab', $tab, time() + (86400 * 30));
	setcookie('ti', $ti, time() + (86400 * 30));
	setcookie('BG', $NUM, time() + (86400 * 30));
	setcookie('BG_LETTER', $LETTER, time() + (86400 * 30));
	header( 'refresh: 0; url=index.php?done-'.$NUM.''.$LETTER.'-'.$fontStyle.'-'.$tab.'-'.$ti.'' );
	exit;
}
if(isset($_GET['clear'])){
	setcookie('BG', '', time() - (86400 * 30));
	setcookie('BG_LETTER', '', time() - (86400 * 30));
	setcookie('fontStyle', '', time() - (86400 * 30));
	setcookie('tab', '', time() - (86400 * 30));
	setcookie('ti', '', time() - (86400 * 30));
	header( 'refresh: 0; url=index.php' );
	exit;
}
if(isset($_GET['clearbg'])){
	setcookie('BG', '', time() - (86400 * 30));
	setcookie('BG_LETTER', '', time() - (86400 * 30));
	header( 'refresh: 0; url=index.php' );
	exit;
}


?>