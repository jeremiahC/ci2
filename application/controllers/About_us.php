

<?php

class About_us extends Application

{

	public function __construct()

	{

		parent::__construct();

	}

	public function index()

	{

		

			$this->ag_auth->view('about_us');

		

	}

}
