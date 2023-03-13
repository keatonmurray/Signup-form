<?php

	class Validator {

		private $fields = array();

		public function __construct (array $fields) {

			$this->fields = $fields;
		}

		public function name () {

			if (empty($this->fields['name'])) {

				return "Please enter your name";
			}
		}

		public function email () {

			if (empty($this->fields['email'])) {

				return "Please enter your email address";
			}
		}

		public function username () {

			if (empty($this->fields['username'])) {

				return "Please enter a username";
			}
		}

		public function password () {

			if (empty($this->fields['password'])) {

				return "Please enter a password";
			}
		}
	}
