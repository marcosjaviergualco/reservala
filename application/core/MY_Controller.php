<?php

class MY_Controller extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('parser');
		$this->load->helper('email');
	}

}
