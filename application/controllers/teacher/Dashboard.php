
<?php

class Dashboard extends Application

{

	public function __construct()

	{

		parent::__construct();
		$this->load->model('edit_my_profile');
		$this->load->model('Schedules_model');
		$this->load->model('edit_my_profile');
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
			$this->data['schedules'] = $this->Schedules_model->getSpecialSchedule();
            $this->data['schedules1'] = $this->Schedules_model->getScheduleCourse1();
            $this->data['schedules2'] = $this->Schedules_model->getScheduleCourse2();
            $this->data['schedules3'] = $this->Schedules_model->getScheduleCourse3();
            
			$this->ag_auth->view('teacher/profile', $this->data);
			$this->load->view('auth/pages/templates/footer');
		}
		else
		{
			$this->login();
		}
		


	}
	
	public function form()
	{
        $this->ag_auth->view('upload_form', array('error' => ' ' ));
		$this->load->view('auth/pages/templates/footer');
    }
	
	public function edit(){
	
	
		$this->form_validation->set_rules('firstname', 'First name' ,'trim|required|xss_clean|callback_alpha_only_space');
		$this->form_validation->set_rules('age', 'Age', 'trim|numeric');
		$this->form_validation->set_rules('contact', 'Contact', 'trim|numeric');
		$this->form_validation->set_rules('lastname', 'Last name' ,'trim|required|xss_clean|callback_alpha_only_space');
		$this->form_validation->set_rules('skype', 'Skype Account','trim|required|valid_email');
	
		if($this->form_validation->run() == false)
		{
			$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Try again! Please fill up correctly..</div>');
			 $this->ag_auth->view('editprofile');
		}
		else
		{
	
			$username = $this->session->userdata('username');
			$user_name= ($this->input->post('firstname'));
			$user_lastname= ($this->input->post('lastname'));
			$user_bio= ($this->input->post('bio'));
			$user_age= ($this->input->post('age'));
			$user_education= ($this->input->post('education'));
			$user_contact=($this->input->post('contact'));
			$user_skype=($this->input->post('skype'));
	
	
	
			$data = array(
	
					'username' => $username,
					'user_name' => $user_name,
					'user_lastname' => $user_lastname,
					'user_bio' => $user_bio,
					'user_age' => $user_age,
					'user_education' => $user_education,
					'user_contact' => $user_contact,
					'user_skype' => $user_skype,
			);
	
			$this->load->database();
			$this->db->update('users',$data);
			$this->edit_my_profile->updateInfo($data);
			$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Save successfully!</div>');
	
			redirect('teacher/dashboard');
	
		}
	}


}
