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
			if(isset($name)){
				echo "Hi ". $name;
				echo form_open();
				echo form_input('name','');
				echo form_submit('mysubmit','Pass!');
				echo form_close();
			}else{
				echo form_open();
				echo form_input('name','');
				echo form_submit('mysubmit','Pass!');
				echo form_close();
			}
		?>
	</div>

</body>
</html>