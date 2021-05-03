<?php
  class Pictures extends Controller {
    public function __construct(){
      if (!isLoggedIn()) {
        redirect('users/login');
      }

      $this->pictureModel = $this->model('Picture');
    }

    public function index() {
      // Get pictures
      $pictures = $this->pictureModel->getPictures();
      $data = [
        'pictures' => $pictures
      ];
      $this->view('pictures/index', $data);
    }
	}