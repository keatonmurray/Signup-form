<?php
	
	require_once "Classes/Validator.php";

	if (isset($_POST['submit'])) {

		$validate = new Validator($fields);

		$fields = array (
				"name"=>$_POST['name'], 
				"email"=>$_POST['email'], 
				"username"=>$_POST['username'], 
				"password"=>$_POST['password']
				);

		$name = $validate->name();
		$email = $validate->email();
		$username = $validate->username();
		$password = $validate->password();
	}
