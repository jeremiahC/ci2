<?php

class Courses extends Application

{

public function __construct()

{
		parent::__construct();

		$this->load->model('Schedules_model');
	}

public function index()

{





$this->ag_auth->view('courses');
$this->load->view('auth/pages/templates/footer');

}
	
	public function course_1()
	{
		$this->data['schedules'] = $this->Schedules_model->get_course_1();
		$this->ag_auth->view('course_1',$this->data);
		$this->load->view('auth/pages/templates/footer');
	
	
	
	}
	
	public function course_2()
	{
	
	
		$this->data['schedules2'] = $this->Schedules_model->get_course_2();
		$id = $this->session->userdata('$id');
		$this->data['infos']=$this->Schedules_model->getUserInfo($id);
		$this->ag_auth->view('course_2',$this->data);
		$this->load->view('auth/pages/templates/footer');
	
	
	
	}
	
	public function course_3()
	{
	
	
		$this->data['schedules3'] = $this->Schedules_model->get_course_3();
		$id = $this->session->userdata('$id');
		$this->data['infos']=$this->Schedules_model->getUserInfo($id);
		$this->ag_auth->view('course_3',$this->data);
		$this->load->view('auth/pages/templates/footer');
	
	
	
	}



}
