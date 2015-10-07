<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>


</head>
<body>

<div id="container">
	<h1></h1>

	<div id="body">
		
		<?php

			echo form_open('site/login');
			echo form_input('username','','placeholder="Username"');
			echo form_password('password','','placeholder="Password"');
			echo form_submit('submit','login!');
			echo form_close();
			echo form_open('site/register');
			echo form_submit('submit','register!');
			echo form_close();
			echo anchor('site/page1', 'page1');			
			echo validation_errors('<p>');

		?>
	</div>

</body>
</html>