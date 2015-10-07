<?php
?><!DOCTYPE html>
<html lang="en">
<head>
	<?php
			header('Cache-Control: no-store, no-cache, must-revalidate'); 
		    header('Cache-Control: post-check=0, pre-check=0', FALSE); 
		    header('Pragma: no-cache'); 
	?>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>


</head>
<body>

<div id="container">

	<div id="body">
		
		<?php

			
			echo form_open('site/createuser')."<br/>";
			echo "First Name: ".form_input('firstname',set_value('firstname'))."<br/>";
			echo "Last Name: ".form_input('lastname',set_value('lastname'))."<br/>";
			echo "Email Address: ".form_input('email',set_value('email'))."<br/>";
			echo "Username: ".form_input('username',set_value('username'))."<br/>";
			echo "Password: ".form_password('password','','placeholder="Password"')."<br/>";
			echo "Confirm password: ".form_password('confirm','','placeholder="Confirm Password"')."<br/>";
			echo form_submit('submit','register');
			echo validation_errors('<p>');

		?>
	</div>

</body>
</html>