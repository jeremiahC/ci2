<?php

class Admin extends Application
{
	public function __construct()
	{
		parent::__construct();
		
		
	}
	
	public function index()
	{
		if(logged_in())
		{
			if(user_group('admin'))
			{
			$this->ag_auth->view('admin/dashboard');
			}
			else{
				
				$this->ag_auth->view('home');
				
			}
		  
		}
		else
		{
			$this->logout();
		}
	}
	
	
}

/* End of file: dashboard.php */
/* Location: application/controllers/admin/dashboard.php */