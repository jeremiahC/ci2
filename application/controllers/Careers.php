<?php

class Careers extends CI_Controller
{
    public function index()
    {
    	$this->load->helper('url');
    	
        $this->load->view('templates/header');
        $this->load->view('careers');
        $this->load->view('templates/footer');
    }
}
?>