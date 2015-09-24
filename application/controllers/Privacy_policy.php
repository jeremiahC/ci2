<?php

class Privacy_policy extends CI_Controller
{
    public function index()
    {
    	$this->load->helper('url');
    	
        $this->load->view('templates/header');
        $this->load->view('privacy_policy');
        $this->load->view('templates/footer');
    }
}
?>