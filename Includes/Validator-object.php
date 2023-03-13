<?php
	
	require_once "Classes/Validator.php";
	//instantiate the class

	if (isset($_POST['submit'])) {

		$fields = [$_POST['name'], $_POST['email'], $_POST['username'], $_POST['password']];

		$validate = new Validator($fields);
		$validate->validate();
	}
