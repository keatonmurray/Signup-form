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
