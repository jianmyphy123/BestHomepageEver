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

if(isset($_POST['changepass']) && isset($_POST['token'])) {
	$token = $_POST['token'];
	$password = md5($_POST['password']);
	
	$mysqli = new mysqli($server, $db_user_name, $db_password, $database); 

	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	$results = $mysqli->query("select * from users where token='$token'");
	$rows = $results->num_rows;
	$row = $results->fetch_object();
	
	if ($rows == 0 || $rows != 1) {
		echo "<script>window.location='changepass.php?err=5'</script>";
		exit;
		
	} 
	else {
		$results = $mysqli->query("update users set password='$password' where id='$row->id'");
			
		if ($results) {
			echo "<script>window.location='login.php'</script>";
			exit;
		}
	}
	
}

if(isset($_GET['token'])) {
	
	$token = $_GET['token'];
	$mysqli = new mysqli($server, $db_user_name, $db_password, $database); 

	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	$results = $mysqli->query("select * from users where token='$token'");
	$rows = $results->num_rows;
	$row = $results->fetch_object();
	
	if ($rows == 0 || $rows != 1) {
		echo "<script>window.location='changepass.php?err=5'</script>";
		exit;
		
	} 
	else {
		echo '<div class="login-page">
			
				  <div class="form">
					
					<form class="login-form" action="changepass.php" method="post" id="changepass_form">
					  <input type="password" placeholder="new password" name="password" required/>
					  <input type="hidden" name="token" value="'.$token.'">
					  <button type="submit" name="changepass">Change Password</button>
					</form>
				  </div>
				</div>';
	}
	
}

else {
	if(isset($_POST['sendemail'])) {
		session_start(); // Starting Session
		
		$username = $_POST['username'];

		$mysqli = new mysqli($server, $db_user_name, $db_password, $database); 

		if ($mysqli->connect_error) {
			die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
		}
		
		$results = $mysqli->query("select * from users where username='$username'");

		$rows = $results->num_rows;
		$row = $results->fetch_object();
		
		if ($rows == 0 || $rows != 1) {
			echo "<script>window.location='changepass.php?err=3'</script>";
			exit;
			
		} 
		else {
			$token = md5($username.date("y.m.d.h.m.s"));
			
			$results = $mysqli->query("update users set token='$token' where id='$row->id'");
			
			if ($results) {
				// the message
				$link = "http://besthomepageever.com/changepass.php?token=$token";
				$msg = '
					<!DOCTYPE html>
					<html lang="en">
						<meta charset="utf8">
					</html>
					<body>
						<a href="'.$link.'">'.$link.'</a>
					</body>
				';
				$headers[] = 'MIME-Version: 1.0';
				$headers[] = 'Content-type: text/html; charset=iso-8859-1';
				$headers[] = 'From: <support@besthomepageever.com>';
				$headers[] = 'Reply-To: support@besthomepageever.com';
				
				$success = mail("$username","[BestHompageEver] Forgotten Password", $msg, implode("\r\n", $headers));
				
				if($success) {
					echo '<div class="login-page">
						
						  <div class="form" action="changepass.php" method="post">
							<span style="color: blue">email was sent successfully</span>
							<form class="login-form" action="changepass.php" method="post" id="changepass_form">
							  <input type="email" placeholder="your email address" name="username" required/>
							  
							  <button type="submit" name="sendemail">Send Email</button>
							</form>
						  </div>
						</div>';
				}
				else {
					echo "<script>window.location='changepass.php?err=6'</script>";
					exit;
				}
				
				
			} else {
				echo "<script>window.location='changepass.php'</script>";
				exit;
				
			}
			
		}
		$mysqli->close(); // Closing Connection
	}
	else { ?>
	<body>
		<?php 
		$error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0; 
		
		?>
		<div class="login-page">
			
		  <div class="form">
			
			<form class="login-form" action="changepass.php" method="post" id="changepass_form">
				<?php 
				if ($error_id != 0) 
					echo "<span id='login_error_message'>$errors[$error_id]</span>";
				if(isset($_GET['data']) && $_GET['data'] == 1)
					echo "<span style='color: blue'>your password was changed successfully</span>";
				
				?>
			  <input type="email" placeholder="your email address" name="username" required/>
			  
			  <button type="submit" name="sendemail">Send Email</button>
			</form>
		  </div>
		</div>
	</body>
	<?php } 

}
?>


</html>