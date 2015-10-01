
<?php

class Dashboard extends Application

{

	public function __construct()

	{

		parent::__construct();
		$this->load->model('edit_my_profile');
		$this->load->model('Schedules_model');
	}

	public function index()

	{
		if(logged_in())
		{
			if($this->input->post('upload'))
			{
				$this->edit_my_profile->do_upload();
			}
			
			$this->data['information'] = $this->edit_my_profile->getInfo();
			$this->data['images'] = $this->edit_my_profile->get_image();
			//$this->data['schedules'] = $this->Schedules_model->getSpecialSchedule();
            //$this->data['schedules1'] = $this->Schedules_model->getScheduleCourse1();
            //$this->data['schedules2'] = $this->Schedules_model->getScheduleCourse2();
            //$this->data['schedules3'] = $this->Schedules_model->getScheduleCourse3();
            
			$this->data['schedules'] = $this->Schedules_model->getAllSchedule();
            
			$this->ag_auth->view('student/dashboard', $this->data);
		}
		else
		{
			$this->login();
		}
		


	}
	
	public function form()
	{
        $this->ag_auth->view('upload_form', array('error' => ' ' ));
    }
	
	


}
