
<?php

class Promos extends Application

{

	public function __construct()

	{

		parent::__construct();

	}

	public function index()

	{


		$this->ag_auth->view('promos');
		$this->load->view('auth/pages/templates/footer');

	}

}
