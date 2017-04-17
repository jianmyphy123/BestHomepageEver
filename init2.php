<?php
$FONT = array(
	array('name'=>'Worldly (default)', 'value'=>'Verdana'),
	array('name'=>'Modern', 'value'=>'Arial'),
	array('name'=>'Clean', 'value'=>'Trebuchet MS'),
	array('name'=>'Cursive', 'value'=>'Comic Sans MS'),
	array('name'=>'Palatino', 'value'=>'Palatino Linotype'),
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
 
if($fontStyle=='undefined')$fontStyle='';
if($tab=='undefined')$tab='';

 
if(isset($_GET['num'])){
	$NUM=$_GET['num'];
	$LETTER=$_GET['letter'];
	
	setcookie('fontStyle', $fontStyle, time() + (86400 * 30));
	setcookie('tab', $tab, time() + (86400 * 30));
	
	setcookie('BG', $NUM, time() + (86400 * 30));
	setcookie('BG_LETTER', $LETTER, time() + (86400 * 30));
	header( 'refresh: 0; url=index.php?done-'.$NUM.''.$LETTER.'-'.$fontStyle.'-'.$tab.'' );
	exit;
}
if(isset($_GET['clear'])){
	setcookie('BG', '', time() - (86400 * 30));
	setcookie('BG_LETTER', '', time() - (86400 * 30));
	setcookie('fontStyle', '', time() - (86400 * 30));
	setcookie('tab', '', time() - (86400 * 30));
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