<?php

	class Insert {

		private static $database;

		private $name;
		private $email;
		private $username;
		private $password;

		public static function set_database ($database) {

			self::$database = $database;

		}

		public function __construct ($name, $email, $username, $password) {

			$this->name = $name;
			$this->email = $email;
			$this->username = $username;
			$this->password = $password;

		}

		public function signup ($database) {

			if (isset($_POST['submit'])) {

				if (!empty($this->name) && !empty($this->email) && !empty($this->username) && !empty($this->password)) {

					$sql = "INSERT INTO keatonmurray (name, email, username, password) VALUES ('$this->name', '$this->email', '$this->username', '$this->password')";
					$db = self::set_database($database);

					//mysqli_query($db, $sql);
				}
			}
		}
	}
	