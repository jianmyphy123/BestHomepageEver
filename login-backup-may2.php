<!-- reCAPTCHA secret key -->
<!-- 6LdFXR4UAAAAAAjkD3VTJVQ5_qH5oO5fJYiNEblS -->

<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="css/jquery.validation.css">
      

    <script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.validation-1.5.3.js"></script>
    <script type="text/javascript" src="bootstrap/twitter/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap/twitter/js/bootstrap-popover.js"></script>
    <script type="text/javascript" src="bootstrap/twitter/js/bootstrap-tooltip.js"></script>
    
    
    
	<!-- reCAPTCHA -->    
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<!-- reCAPTCHA --> 
	
	
	
    <link rel="stylesheet" href="css/login-v2.0.css" type='text/css'></link>
</head>
<?php
require_once('settings.php');

if(isset($_POST['register'])) {

	session_start(); // Starting Session
	
	$fname = $_POST['register']['firstname'];
	$lname = $_POST['register']['lastname'];
	$username = $_POST['register']['email'];
	$password = md5($_POST['register']['password']);

	$mysqli = new mysqli($server, $db_user_name, $db_password, $database); 

	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	
	
	
	
	
	
	$results = $mysqli->query("select * from users where username='$username'");
	
	$rows = $results->num_rows;
	$row = $results->fetch_object();
	
	if ($rows == 0) {
		$NUMBERS=array('a','b');
		shuffle($NUMBERS);

		$bg = str_pad(rand(1,16), 2, '0', STR_PAD_LEFT);
		$bg_letter = $NUMBERS[0];
		
	
		//MySqli Insert Query
		$insert_row = $mysqli->query("INSERT INTO users (fname, lname, username, password, bg, bg_letter) VALUES ('$fname','$lname','$username', '$password', '$bg', '$bg_letter')");

		if($insert_row){
			
			
			$_SESSION['fname'] = $fname;
			$_SESSION['lname'] = $lname;
			$_SESSION['login_user']=$username; // Initializing Session
			$_SESSION['user_id'] = $mysqli->insert_id;
			$_SESSION['BG'] = $bg;
			$_SESSION['BG_LETTER'] = $bg_letter;
			
			echo "<script>window.location='index.php'</script>";
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
	
	$username=$_POST['login']['email'];
	$password=md5($_POST['login']['password']);
	
	if (empty($username) || empty($password)) {
		header("location: login.php?err=1");
	}
	else
	{
		// Define $username and $password
		
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
			
			echo "<script type='text/javascript'>window.location='index.php'</script>";
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
<div class="login-page2">
	<div class="form2">
	 
		<img src="Logo/flat/darker_flat_md.png" class="padding-bottom-10px" width="120" height="109">
		
		
		
		<form id="form-register"
		      name="form-register"
		      method="POST"
		      class="validation-form-container register-form" action="login.php">
		      <div class="field">
		    	<span id='register_error_message'><?php if ($state==2 && $error_id != 0) {
					echo $errors[$error_id];
				} ?></span>
			</div>	
		
		    <div class="field">
		        <div class="ui left labeled input">
		
		            <input id="register-firstname"
		                   name="register[firstname]"
		                   type="text"
		                   data-validation="[NOTEMPTY]"
		                   placeholder="First Name">
		
	    <!--        <div class="ui corner label">
		                <i class="asterisk icon">*</i>
		            </div> 
         -->
		        </div>
		    </div>
		    <div class="field">
		        <div class="ui left labeled input">
		
		            <input id="register-lastname"
		                   name="register[lastname]"
		                   type="text"
		                   data-validation="[NOTEMPTY]"
		                   placeholder="Last Name">
		
	    <!--        <div class="ui corner label">
		                <i class="asterisk icon">*</i>
		            </div> 
         -->
		        </div>
		    </div>
		    <div class="field">
		        <div class="ui left labeled input">
		
		            <input id="register-email"
		                   name="register[email]"
		                   type="text"
		                   data-validation="[EMAIL]" placeholder="Email">
		
	    <!--        <div class="ui corner label">
		                <i class="asterisk icon">*</i>
		            </div> 
         -->
		        </div>
		    </div>
		    <div class="field">
		        <div class="ui left labeled input">
		
		            <input id="register-password"
		                   name="register[password]"
		                   type="password" data-validation="[L>=5]"
		                   data-validation-message="$ must be at least 5 characters" placeholder="Password">
		
	    <!--        <div class="ui corner label">
		                <i class="asterisk icon">*</i>
		            </div> 
         -->
		        </div>
		    </div>
		    <div class="field">
		        <div class="ui left labeled input">
		
		            <input id="register-password-confirm"
		                   name="register[password-confirm]"
		                   type="password"
		                   data-validation="[V==register[password]]"
		                   data-validation-message="$ does not match the password" placeholder="Confirm Password">
		
	    <!--        <div class="ui corner label">
		                <i class="asterisk icon">*</i>
		            </div> 
         -->
		        </div>
		    </div>
		    <div class="field">
		        <div class="ui left labeled input">
		
		            <!-- reCAPTCHA -->
		          <div class="g-recaptcha" data-sitekey="6LdFXR4UAAAAAHAb9bmweemZt5HBdKTYtwd9bcj_" style="transform:scale(1.058);transform-origin:0 0" data-callback="recaptchaCallback"></div>
		          <!-- /reCAPTCHA --> 
			  <input id="register-recaptcha"
		                   name="register[recaptcha]"
		                   type="hidden"
		                   data-validation="[L>=0]"
		                   data-validation-message="Please verify that you are not a robot." placeholder="First Name">
	    <!--        <div class="ui corner label">
		                <i class="asterisk icon">*</i>
		            </div> 
         -->
		        </div>
		    </div>
		    
			
		
		    <input type="submit" class="ui blue submit button" value="Create" name="register">
		
		    <div style="text-align: center">
		    	<p class="message padding-bottom-10px">Already registered? <a class="toggle_link" href="#" id="gotoSign">Sign In</a></p>
		        <hr>
                <p class="message center">Information is private, and never shared.</p>
		    </div>
		</form>
		<form class="validation-form-container login-form" method="POST" id="form-login" name="form-login" action="login.php">
			<div class="field">
				<span id='login_error_message'><?php if ($state==1 && $error_id != 0) {
					echo $errors[$error_id];
				} ?></span>
		
			</div>
			<div class="field">
			        <div class="ui left labeled input">
			
			            <input id="login-email"
			                   name="login[email]"
			                   type="text"
			                   data-validation="[EMAIL]"
			                   placeholder="Email">
			            
			        </div>
			    </div>
			    
			<div class="field">
			        <div class="ui left labeled input">
			
			            <input id="login-password"
			                   name="login[password]"
			                   type="password" data-validation="[L>=5]"
			                   data-validation-message="$ must be at least 5 characters" placeholder="Password">
			            
			        </div>
			    </div>
				
		      <input type="submit" class="ui blue submit button" value="login" name="login">
		      <div style="text-align: center">
		      	   <p class="message">Not registered? <a class="toggle_link" href="#">Create an account</a></p>
			   <p class="message"><a href="changepass.php">Forgot Password?</a></p>
		      </div>
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



<script>
    $(document).ready(function(){
	    
		$('.message a.toggle_link').click(function(){
		   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
		   $('#login_error_message').text('');
		});
		
		$('#gotoSign').click(function() {
			$('#register_error_message').text('');
		});
	    
    });
    
    $('#form-register').validate({
	        submit: {
	            settings: {
	                inputContainer: '.field'
	            },
	            callback: {
	                onBeforeSubmit: function (node) {
	                    if(grecaptcha.getResponse() != '')
	                    	$('#register-recaptcha').val('true');
	                },
	                onSubmit: function (node) {
	                    console.log('#' + node.id + ' has a submit override.');
	                    node[0].submit();
	                }
	            }
	        }
	        
	    });
    $('#form-login').validate({
        submit: {
            settings: {
                inputContainer: '.field'
            },
            callback: {
                onBeforeSubmit: function (node) {
                    
                },
	        onSubmit: function (node) {
	                console.log(node);
	                node[0].submit();
	        }    
	    }
        },
        ignore:""
    });
    
    function recaptchaCallback() {
	  if(grecaptcha.getResponse() == '')
    		$('#register-recaptcha').val('');
    	  else
    	  	$('#register-recaptcha').val('true');
    };
</script>
</html>