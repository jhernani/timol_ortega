<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>


</head>
<body>

<div id="container">
	<h1><?php echo $page_header; ?></h1>

	<div id="body">
		
		<?php

			foreach($users as $object){
				echo "Username: ".$object->username ." Password: ".$object->password."</br>";
			}
			echo form_open('site/page1');
			echo form_input('username','','placeholder="Username"');
			echo form_password('password','','placeholder="Password"');
			echo form_submit('submit','GO!');
			echo anchor('site/page1', 'page1');

		?>
	</div>

</body>
</html>