
<?php

class Schedules extends Application

{
	public function __construct()
	
	{
		parent::__construct();
	
		$this->load->model('Schedules_model');
	}
	
	public function index()
	{
	
	
		
		
		
		
		
		
		$id = $this->session->userdata('$id');
		$this->data['infos']=$this->Schedules_model->getUserInfo($id);
		
		$this->data['schedules'] = $this->Schedules_model->get_course_1();
		$this->data['schedules2'] = $this->Schedules_model->get_course_2();
		$this->data['schedules3'] = $this->Schedules_model->get_course_3();
		
		$this->ag_auth->view('schedules',$this->data);
	
	
	}
}
