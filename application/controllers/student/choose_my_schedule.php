<?php

class Choose_my_schedule extends Application

{

public function __construct()

{ 

parent::__construct();
$this->load->model('Schedules_model');

if($this->session->userdata('logged_in')!=TRUE) {
	$this->session->set_userdata('Schedules_model', current_url());
	redirect('login');
}

}

public function index()

{

	
		$this->ag_auth->view('student/choose_my_schedule');
		$this->load->view('auth/pages/templates/footer');
		
		
}





public function save(){
	
	$this->form_validation->set_rules('course', 'Course', 'trim|required|callback_course_validation');
	$this->form_validation->set_rules('date', 'Date', 'trim|required');
	$this->form_validation->set_rules('time_start', 'Time Start', 'trim|required|xss_clean');
	$this->form_validation->set_rules('user_skype', 'Skype ID', 'trim|required');
	
	function course_validation($course){
		
		if($course==='none')
		{
			return FALSE;
			echo course('Choose course');
		}else{
			return TRUE;
		}
		
		
	}
	
	if($this->form_validation->run() == false)
	{
		
		$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Error.</div>');
		$this->ag_auth->view('student/choose_my_schedule');
		$this->load->view('auth/pages/templates/footer');
		
	}
	else
	{

	$id = $this->session->userdata('id');
	$username = $this->session->userdata('username');
	$course = $this->input->post('course');
	$date = $this->input->post('date');
	$time_start = $this->input->post('time_start');
	$user_skype = $this->input->post('user_skype');
	$user_contact= $this->input->post('user_contact');
	


	$schedule = array(
			'username' => $username,
			'COURSE' => $course,
			'DATE' => $date,
			'TIME_START' => $time_start,
			//define
			'course_no' => '5',
			'status' => 'Waiting for confirmation'
	);
	
	$prof = array(
			'username' => $username,
			'USER_SKYPE' => $user_skype,
			'USER_CONTACT' => $user_contact,
	);
	

	$this->Schedules_model->enroll($schedule,$prof);
	$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Schedule created. We will send you an email for follow-up. </div>');
 	redirect('student/profile');
	}
}



}
