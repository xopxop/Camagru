<?php
	class Home extends Controller {
		public function __construct() {
		}

		public function index() {
			$data = [
				'title' => 'Camagru',
			];

			$this->view('home/index', $data);
		}

		public function about() {
			$data = [
				'title' => 'About Us'
			];

			$this->view('home/about', $data);
		}
	}
