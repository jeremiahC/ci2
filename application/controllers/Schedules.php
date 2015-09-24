
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
	
	
		
		
		
		$this->ag_auth->view('schedules');
		
		$this->data['schedules'] = $this->Schedules_model->get_course_1();
		$id = $this->session->userdata('$id');
		$this->data['infos']=$this->Schedules_model->getUserInfo($id);
		$this->load->view('auth/pages/course_1',$this->data);
		
		$this->data['schedules2'] = $this->Schedules_model->get_course_2();
		$id = $this->session->userdata('$id');
		$this->data['infos']=$this->Schedules_model->getUserInfo($id);
		$this->load->view('auth/pages/course_2',$this->data);
		
		$this->data['schedules3'] = $this->Schedules_model->get_course_3();
		$id = $this->session->userdata('$id');
		$this->data['infos']=$this->Schedules_model->getUserInfo($id);
		$this->load->view('auth/pages/course_3',$this->data);
		
		
		$this->load->view('auth/pages/templates/footer');
	
	
	}
}
