<!DOCTYPE html>
<html>
	<head>
		<?php
			header('Cache-Control: no-store, no-cache, must-revalidate'); 
		    header('Cache-Control: post-check=0, pre-check=0', FALSE); 
		    header('Pragma: no-cache'); 
		?>
		<title>
			USC DORMITORY
		</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/semantic.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/custom.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/jquery.dataTables.css">
		<script type='text/javascript' src="<?php echo base_url(); ?>js/jquery.js"></script>
		<script type='text/javascript' src="<?php echo base_url(); ?>js/main.js"></script>
		<script type='text/javascript' src="<?php echo base_url(); ?>js/semantic.js"></script>
		<script type='text/javascript' src="<?php echo base_url(); ?>js/jquery.dataTables.js"></script>
	</head>
	<body>
		<div class="ui inverted green menu">
			<h3 class="header item">USC dormitory</h3>
			<a class="item" href="<?php echo base_url().'userprofile'?>">Home</a>
			<a class="item" href="<?php echo base_url().'room'?>">Rooms</a>
			<a class="item" href="<?php echo base_url().'tenant'?>">Tenants</a>	
			<div class="right menu">
			    <div class="item">
			      <div class="ui transparent inverted icon input">
			        <input type="text" placeholder="Search">
			      </div>
			    </div>
			    <a class="item" href="<?php echo base_url().'logout'?>">Logout</a>
			  </div>
		</div>
