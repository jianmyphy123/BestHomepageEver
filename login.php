<!doctype html>
<html>
<head>
<script src="js/jquery-1.12.0.min.js"></script>
<link rel="stylesheet" href="css/login.css" type='text/css'></link>
<script type="text/javascript">
	$(document).ready(function(){
		var is_valid_username = false;
		$('.message a.toggle_link').click(function(){
		   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
		   $('#login_error_message').text('');
		});
		
		$('#btn_create').click(function(){
			var pass1 = $('#input_password').val();
			var pass2 = $('#input_password2').val();
			
			if(pass1 != pass2) {
				$('#register_error_message').text('invalid password');
				return false;
			}
			
			
		});
		
		$('#username').change(function() {
			is_valid_username = false;
		});
		
		$('#gotoSign').click(function() {
			$('#register_error_message').text('');
		});
	})
</script>
</head>
<?php
require_once('settings.php');

if(isset($_POST['register'])) {
	session_start(); // Starting Session
	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$mysqli = new mysqli($server, $db_user_name, $db_password, $database); 

	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	
	
	
	
	
	
	$results = $mysqli->query("select * from users where username='$username'");
	
	//		$results = $mysqli->query("SELECT COUNT(*) FROM users");
	//		$get_total_rows = $results->fetch_row(); //hold total records in variable
	//		die(var_dump($get_total_rows));
	
	$rows = $results->num_rows;
	$row = $results->fetch_object();
	
	if ($rows == 0) {
		$NUMBERS=array('a','b');
		shuffle($NUMBERS);

		$bg = str_pad(rand(1,16), 2, '0', STR_PAD_LEFT);
		$bg_letter = $NUMBERS[0];
		
		
		$mysqli->autocommit(FALSE);

		//MySqli Insert Query
		$insert_row = $mysqli->query("INSERT INTO `users` (`fname`, `lname`, `username`, `password`, `bg`, `bg_letter`) VALUES ('$fname','$lname','$username', '$password', '$bg', '$bg_letter')");
		
		$mysqli->commit();

		if($insert_row){
			
			
			$_SESSION['fname'] = $fname;
			$_SESSION['lname'] = $lname;
			$_SESSION['login_user']=$username; // Initializing Session
			$_SESSION['user_id'] = $mysqli->insert_id;
			$_SESSION['BG'] = $bg;
			$_SESSION['BG_LETTER'] = $bg_letter;
			
			echo "<script>window.location='index_alex.php'</script>";
			die();

		} else{
			die('Error : ('. $mysqli->errno .') '. $mysqli->error);
		}

		
	} else {
		echo "<script>window.location='login.php?err=2&state=2'</script>";
		exit;
		
	}
	$results->free();
	$mysqli->close(); // Closing Connection
	
	
	
	
	
	

}
else if(isset($_POST['login'])) {
	session_start(); // Starting Session
	if (empty($_POST['username']) || empty($_POST['password'])) {
		header("location: login.php?err=1");
	}
	else
	{
		// Define $username and $password
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$mysqli = new mysqli($server, $db_user_name, $db_password, $database); 
		// To protect MySQL injection for Security purpose
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = $mysqli->real_escape_string($username);
		$password = $mysqli->real_escape_string($password);
		
		
		
		
		
		$results = $mysqli->query("select * from users where password='$password' AND username='$username'");
		

		$rows = $results->num_rows; 
		$row = $results->fetch_object();
		
		if ($rows == 1) {
			$_SESSION['login_user']=$username; // Initializing Session
			$_SESSION['fname'] = $row->fname;
			$_SESSION['lname'] = $row->lname;
			$_SESSION['user_id'] = $row->id;
			$_SESSION['fontStyle'] = $row->fontstyle;
			$_SESSION['tab'] = $row->tab;
			$_SESSION['ti'] = $row->ti;
			$_SESSION['BG'] = $row->bg;
			$_SESSION['BG_LETTER'] = $row->bg_letter;
			
			echo "<script type='text/javascript'>window.location='index_alex.php'</script>";
			die();
			
		} else {
			echo "<script type='text/javascript'>window.location='login.php?err=1&state=1'</script>";
			die();
			
		}
		$results->free();
		$mysqli->close(); // Closing Connection
	}
}
else { ?>
<body>
	<?php 
	$error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0; 
	$state = isset($_GET['state']) ? (int)$_GET['state'] : 0; 
	
	?>
	<div class="login-page">
		
	  <div class="form">
      	<img src="Logo/flat/darker_flat_md.png" class="padding-bottom-10px" width="120" height="109">
	    <form class="register-form" action="login.php" method="post" id="register_form">
			<span id='register_error_message'><?php if ($state==2 && $error_id != 0) {
					echo $errors[$error_id];
				} ?></span>
		  <input type="text" placeholder="first name" name="fname" required id="fname"/>
		  <input type="text" placeholder="last name" name="lname" required id="lname"/>
	      <input type="email" placeholder="email address" name="username" required id="username"/>
	      <input type="password" placeholder="password" name="password" required id="input_password"/>
		  <input type="password" placeholder="confirm password" required id="input_password2"/>
	      <button type="submit" name="register" id="btn_create">create</button>
	      <p class="message">Already registered? <a class="toggle_link" href="#" id="gotoSign">Sign In</a></p>
	    </form>
	    <form class="login-form" action="login.php" method="post" id="login_form">
			<span id='login_error_message'><?php if ($state==1 && $error_id != 0) {
					echo $errors[$error_id];
				} ?></span>
          
	      <input type="email" placeholder="email address" name="username" required/>
	      <input type="password" placeholder="password" name="password" required/>
		  
	      <button type="submit" name="login">login</button>
	      <p class="message">Not registered? <a class="toggle_link" href="#">Create an account</a></p>
		  <p class="message"><a href="changepass.php">Forgot Password?</a></p>
	    </form>         
	  </div>
     <p style="color: grey; text-align:center;"><a href="../"><small>Return to homepage</small></a></p>
     
	</div>
	<?php
	if($state == 2 && $error_id==2) {
	?>
	<script>
		$('form').animate({height: "toggle", opacity: "toggle"}, "slow");
	</script>
	<?php
	}
	?>
</body>
<?php } ?>


</html>