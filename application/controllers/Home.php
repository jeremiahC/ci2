<?php

class Home extends Application

{

public function __construct()

{ 

parent::__construct();

}

public function index()

{

if(logged_in())

{

$this->ag_auth->view('home');
$this->load->view('auth/pages/templates/footer');

}

else

{

$this->ag_auth->view('home');
$this->load->view('auth/pages/templates/footer');

}

}

}
