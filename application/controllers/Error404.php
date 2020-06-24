<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Error404 extends CI_Controller 

{

	// Inside application/controllers/MyCustom404Ctrl.php

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index(){
        $this->output->set_status_header('404');

        // Make sure you actually have some view file named 404.php
        $this->load->view('404');
    }


}
?>