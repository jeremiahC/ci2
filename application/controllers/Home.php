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
}

else

{

$this->ag_auth->view('home');

}

}

}
