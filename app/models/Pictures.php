<?php
	class Picture {
		private $db;

		public function __construct() {
			
		}

		public function getPictures() {
			$this->db->query('SELECT * FROM pictures');

			$result = $this->db->fetchAll();
			return $result;
		}
	}