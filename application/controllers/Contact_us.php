<?php

class Contact_us extends CI_Controller
{
    public function index()
    {
    	$this->load->helper('url');
    	
        $this->load->view('templates/header');
        $this->load->view('contact_us');
        $this->load->view('templates/footer');
    }
}
?>