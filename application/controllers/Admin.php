<?php

class Admin extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->view('include/header');
		$this->load->view('home');
		$this->load->view('include/footer');
	}

	public function category() {
		echo "This is a cat function";
	}
}


?>