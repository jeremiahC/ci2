<?php

class Visitor_choose_my_schedule extends Application

{

function __construct()

{ 

parent::__construct();
$this->load->model('Schedules_model');

}



 function index()

{

		$this->ag_auth->view('visitor/visitor_choose_my_schedule');
		$this->load->view('auth/pages/templates/footer');
		
		
}

function visitor_success()

{

	$this->ag_auth->view('visitor/success_enroll');
	$this->load->view('auth/pages/templates/footer');


}




 function save(){
	
	$this->form_validation->set_rules('course', 'Course', 'trim|required|xss_clean');
	$this->form_validation->set_rules('date', 'Date', 'trim|required');
	$this->form_validation->set_rules('time_start', 'Time Start', 'trim|required|xss_clean');
	$this->form_validation->set_rules('email', 'Email', 'trim|required');
	$this->form_validation->set_rules('user_skype', 'Skype ID', 'trim|required');
	

	
	if($this->form_validation->run() == false)
	{
		$course = $this->input->post('course');
		$date = $this->input->post('date');
		$time_start = $this->input->post('time_start');
		$email = $this->input->post('email');
		$user_skype = $this->input->post('user_skype');
		$user_contact= $this->input->post('user_contact');
		$full_name=$this->input->post('full_name');
		
		$enroll = array(
				'COURSE' => $course,
				'DATE' => $date,
				'TIME_START' => $time_start,
				'email' => $email,
				'USER_SKYPE' => $user_skype,
				'USER_CONTACT' => $user_contact,
				'full_name' => $full_name,
		);

		$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Error.</div>');
		redirect('visitor/visitor_choose_my_schedule');
// 		$this->ag_auth->view('visitor/visitor_choose_my_schedule',$enroll);
// 		$this->load->view('auth/pages/templates/footer');

	}
	else
	{

	$course = $this->input->post('course');
	$date = $this->input->post('date');
	$time_start = $this->input->post('time_start');
	$email = $this->input->post('email');
	$user_skype = $this->input->post('user_skype');
	$user_contact= $this->input->post('user_contact');
	$full_name=$this->input->post('full_name');


	$enroll = array(
			'course' => $course,
			'date' => $date,
			'time_start' => $time_start,
			'username' => $full_name,
			'email' => $email,
			'user_skype' => $user_skype,
			'user_contact' => $user_contact,
			//define
			'status' => 'Waiting for confirmation',
			'course_no' => '5',
			'membership'=>'visitor'
	);
	
	$this->Schedules_model->visitorEnroll($enroll);
	$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Schedule created. We will send you an email for follow-up. </div>');
//  	$this->ag_auth->view('visitor/success_enroll');
//  	$this->load->view('auth/pages/templates/footer');
	redirect('visitor/visitor_choose_my_schedule/visitor_success');
	}
}


}