<?php

class Vision_mission extends CI_Controller
{
    public function index()
    {
    	$this->load->helper('url');
    	
        $this->load->view('templates/header');
        $this->load->view('vision_mission');
        $this->load->view('templates/footer');
    }
}
?>