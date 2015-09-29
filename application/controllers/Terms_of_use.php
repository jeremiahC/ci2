<?php

class Terms_of_use extends CI_Controller
{
    public function index()
    {
    	$this->load->helper('url');
    	
        $this->load->view('templates/header');
        $this->load->view('terms_of_use');
    }
}
?>