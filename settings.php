 <?php
 
 $server = 'localhost';
 $db_user_name = 'root';
 $db_password = '';
 $database = 'BestHomepageEver';
 
 $cookie_name = 'siteAuth';
 $cookie_time = (3600 * 24 * 30); // 30 days
 
 $errors = array(
			1 => 'email or password is invalid',
			2 => 'email address already exists',
			3 => 'email address is invalid',
			4 => 'email address is invalid',
			5 => 'Password update failed.<br>Check for newer reset e-mail.'
		);
 
 ?>