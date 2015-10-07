<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
		<script type='text/javascript' src="<?php echo base_url(); ?>jquery/jquery.js"></script>
	</head>
	<body>
		<div class="left">
			<img src="<?php echo base_url(); ?>images/logo.png" class="headerlogo"/>
		    <a href="#" class="pure-menu-heading">
		      	Title
		    </a>
		    <ul class="pure-menu-list">
		        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Home</a></li>
		        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Profile</a></li>
		        <li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover">
		            <a href="#" class="pure-menu-link">Room Management</a>
		            <ul class="pure-menu-children">
		                <li class="pure-menu-item"><a class="pure-menu-link" href="/handlebars">View Rooms</a></li>
		                <li class="pure-menu-item"><a class="pure-menu-link" href="/dust">Add Rooms</a></li>
		                <li class="pure-menu-item"><a class="pure-menu-link" href="/react">Edit Rooms</a></li>
		                <li class="pure-menu-item"><a class="pure-menu-link" href="/react">Delete Rooms</a></li>
		            </ul>
		        </li>
		        <li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover">
		            <a href="#" class="pure-menu-link">Tenant Management</a>
		            <ul class="pure-menu-children">
		                <li class="pure-menu-item"><a class="pure-menu-link" href="/handlebars">View Tenant</a></li>
		                <li class="pure-menu-item"><a class="pure-menu-link" href="/dust">Add Tenant</a></li>
		                <li class="pure-menu-item"><a class="pure-menu-link" href="/react">Edit Tenant</a></li>
		                <li class="pure-menu-item"><a class="pure-menu-link" href="/react">Delete Tenant</a></li>
		            </ul>
		        </li>
		        <li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover">
		            <a href="register" class="pure-menu-link">User Management</a>
		            <ul class="pure-menu-children">
		                <li class="pure-menu-item"><a class="pure-menu-link" href="/handlebars">View User</a></li>
		                <li class="pure-menu-item"><a class="pure-menu-link" href="register">Add User</a></li>
		                <li class="pure-menu-item"><a class="pure-menu-link" href="edit">Edit User</a></li>
		                <li class="pure-menu-item"><a class="pure-menu-link" href="/react">Delete Delete</a></li>
		            </ul>
		        </li>
		        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Lorem Ipsum</a></li>
		    </ul>
		    <a href="#" class="pure-menu-heading">
		      	Title
		    </a>
		    <ul class="pure-menu-list">
		        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Home</a></li>
		        <li class="pure-menu-item"><a href="#" class="pure-menu-link">About</a></li>
		        <li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover">
		            <a href="#" class="pure-menu-link">Lorem Ipsum</a>
		            <ul class="pure-menu-children">
		                <li class="pure-menu-item"><a class="pure-menu-link" href="/handlebars">Lorem Ipsum</a></li>
		                <li class="pure-menu-item"><a class="pure-menu-link" href="/dust">Lorem Ipsum</a></li>
		                <li class="pure-menu-item"><a class="pure-menu-link" href="/react">Lorem Ipsum</a></li>
		                <li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover">
		                    <a href="#" class="pure-menu-link">More Stuff</a>
		                    <ul class="pure-menu-children">
		                        <li class="pure-menu-item"><a class="pure-menu-link" href="/handlebars">Foo</a></li>
		                        <li class="pure-menu-item"><a class="pure-menu-link" href="/dust">Bar</a></li>
		                        <li class="pure-menu-item"><a class="pure-menu-link" href="/react">Baz</a></li>
		                    </ul>
		                </li>
		            </ul>
		        </li>
		        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Contact</a></li>
		        <li class="pure-menu-item"><a href="#" class="pure-menu-link">History</a></li>
		        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Lorem Ipsum</a></li>
		    </ul>
		</div>
	</body>
</html>