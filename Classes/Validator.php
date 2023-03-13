<?php

	class Validator {

		private $fields = [];

		public function __construct($fields = []) {

			$this->fields = $fields;
		}

		public function validate() {

			if (empty($this->fields)) {

				echo "Empty";
			}
		}
	}

//instantiate the class

if (isset($_POST['submit'])) {

	$fields = [$_POST['name'], $_POST['email'], $_POST['username'], $_POST['password']];

	$validate = new Validator($fields);
	$validate->validate();
}
