<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $this->session->userdata('username'); ?></title>


</head>
<body>

<div id="container">

	<div id="body">
		
		<?php
			$id = $this->session->userdata('id');
			echo form_open('site/updateuser')."<br/>";
			echo form_hidden('id',$id);
			echo "New First Name: ".form_input('firstname',set_value('firstname'))."<br/>";
			echo "New Last Name: ".form_input('lastname',set_value('lastname'))."<br/>";
			echo "New Email Address: ".form_input('email',set_value('email'))."<br/>";
			echo "New Username: ".form_input('username',set_value('username'))."<br/>";
			echo "New Password: ".form_password('password','','placeholder="Password"')."<br/>";
			echo "Confirm New Password: ".form_password('confirm','','placeholder="Confirm Password"')."<br/>";
			echo form_submit('submit','register');
			echo validation_errors('<p>');

		?>
	</div>

</body>
</html>