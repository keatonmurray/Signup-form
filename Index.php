<?php 

	include_once "Includes/Validator-object.php";
	require_once "Classes/Insert.php";

	$database = new mysqli('localhost', 'root', '', 'keaton');
	Insert::set_database($database);

	if (isset($_POST['submit'])) {

		$insert = new Insert ($_POST['name'], $_POST['email'], $_POST['username'], $_POST['password']);
		$insert->signup($database);
	}

	include_once "Create-user.php";
