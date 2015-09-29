<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



class Course_enroll extends Application
{

	public function __construct()
	
	{
		parent::__construct();

		$this->load->model('Schedules_model');
		$this->load->library('form_validation');
	
		
	}

	public function course1()
	{
		$username = $this->session->userdata('username');
		$this->data['infos'] = $this->Schedules_model->getUserInfo($username);
		$this->data['schedules'] = $this->Schedules_model->get_course_1();
		$this->ag_auth->view('course_1',$this->data);
	}
	
	
	
	
	public function course2()
	{
	
	
		$this->data['schedules'] = $this->Schedules_model->get_course_2();
		$this->ag_auth->view('course_2',$this->data);
	}
	
	public function course3()
	{
	
	
		$this->data['schedules'] = $this->Schedules_model->get_course_2();
		$this->ag_auth->view('course_3',$this->data);
	}
	
	
	
	//function to enroll student from course1,course2 and course3
	function enroll(){
	
		$this->form_validation->set_rules('user_skype', 'Skype ID', 'trim|required');
		$this->form_validation->set_rules('user_contact', 'Contact #', 'trim|required');
	
		if($this->form_validation->run() == false)
		{
	
			$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Error.</div>');
			redirect_back();
		}
		else
		{
			$course = $this->input->post('course');
			$id = $this->session->userdata('id');
			$username = $this->session->userdata('username');
			$date = $this->input->post('date');
			$time = $this->input->post('time');
			$hours = $this->input->post('hours');
			$price = $this->input->post('price');
			$user_skype = $this->input->post('user_skype');
			$user_contact= $this->input->post('user_contact');
			$course_no= $this->input->post('course_no');
	
				
			$enroll = array(
					'course' => $course,
					'username' => $username,
					'date' => $date,
					'TIME_START' => $time,
					'hours' => $hours,
					'price' => $price,
					'course_no' =>$course_no,
					//define
					'status' => 'Enrolled'
			);
	
			$prof = array(
					'username' => $username,
					'USER_SKYPE' => $user_skype,
					'USER_CONTACT' => $user_contact,
			);
	
	
			$this->Schedules_model->enroll($enroll,$prof);
			$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Schedule created. We will send you an email for confirmation. </div>');
			redirect('student/profile');
		}
	
	}
	
	
	
	function visitor(){
		if(logged_in())
		{
			redirect(home);
		}		
		else { 
		
			$data['course']=$this->input->post('course');
			$data['date']=$this->input->post('date');
			$data['time']=$this->input->post('time');
			$data['hours']=$this->input->post('hours');
			$data['price']=$this->input->post('price');
			$data['course_no']=$this->input->post('course_no');
			
		
			$this->ag_auth->view('visitor/visitor_enroll',$data);
		}
	}
	
	function visitor_enroll(){
	
// 		$this->form_validation->set_rules('course', 'Course', 'trim|required');
// 		$this->form_validation->set_rules('date', 'Date', 'trim|required');
// 		$this->form_validation->set_rules('time', 'Time', 'trim|required');
// 		$this->form_validation->set_rules('hours', 'No. of Hours', 'trim|required');
// 		$this->form_validation->set_rules('price', 'Price', 'trim|required');
		$this->form_validation->set_rules('full_name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('user_skype', 'Skype ID', 'trim|required');
		$this->form_validation->set_rules('user_contact', 'Contact #', 'trim|required');
	
		if($this->form_validation->run() == false)
		{
			$data['course']=$this->input->post('course');
			$data['date']=$this->input->post('date');
			$data['time']=$this->input->post('time');
			$data['hours']=$this->input->post('hours');
			$data['price']=$this->input->post('price');
			
			
			$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Error.</div>');
			$this->ag_auth->view('visitor/visitor_enroll',$data);
		}
		else
		{
			$course = $this->input->post('course');
			$date = $this->input->post('date');
			$time_start = $this->input->post('time');
			$hours = $this->input->post('hours');
			$price = $this->input->post('price');
			$full_name= $this->input->post('full_name');
			$email = $this->input->post('email');
			$user_skype = $this->input->post('user_skype');
			$user_contact= $this->input->post('user_contact');
			$course_no= $this->input->post('course_no');
	
	
	
			$enroll = array(
					'course' => $course,
					'date' => $date,
					'time_start' => $time_start,
					'hours' => $hours,
					'price' => $price,
					'username' => $full_name,
					'email' => $email,
					'user_skype' => $user_skype,
					'user_contact' => $user_contact,
					'course_no' =>$course_no,
					//define
					'membership'=>'visitor',
					'status' => 'Enrolled'
			);
	
			$this->Schedules_model->visitorEnroll($enroll);
			$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Schedule created. We will send you an email for confirmation. </div>');
			redirect('course_enroll/visitor_success');
		}
	
	}
	
	function visitor_success(){
		if (logged_in())
		{
			redirect('home');
		}
		else{
			$this->ag_auth->view('visitor/success_enroll');
		}
		
		
	}

	
	
	
	
	
}



