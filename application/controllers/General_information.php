<?php

class General_information extends CI_Controller
{
    public function index()
    {
    	$this->load->helper('url');
    	
        $this->load->view('templates/header');
        $this->load->view('general_information');
        $this->load->view('templates/footer');
    }
}
?>