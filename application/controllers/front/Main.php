<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	

    public function load_view($link, $param = []){
		$this->load->view('frontent/includes/header');
		$this->load->view($link, $param);
		$this->load->view('frontent/includes/footer');
    }

    
}