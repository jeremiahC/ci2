
<?php

class Editprofile extends Application

{

	public function __construct()

	{

		parent::__construct();
		$this->load->model('edit_my_profile');
	}

	public function index()

	{
		if(logged_in())
		{
			$this->data['informations'] = $this->edit_my_profile->getInfo();
			$this->ag_auth->view('student/editprofile', $this->data);
		}
		else
		{
			$this->login();
		}



	}
	public function edit(){
	
	
		$this->form_validation->set_rules('firstname', 'First name' ,'trim|required|xss_clean|callback_alpha_only_space');
		$this->form_validation->set_rules('lastname', 'Last name' ,'trim|required|xss_clean|callback_alpha_only_space');
		$this->form_validation->set_rules('skype', 'Skype Account','trim|required');
		$this->form_validation->set_rules('contact', 'Skype Account','trim|required');
	
		if($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Try again ! Please fill up correctly..</div>');
			$this->data['informations'] = $this->edit_my_profile->getInfo();
			$this->ag_auth->view('student/editprofile',$this->data);
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
	
	
			$this->edit_my_profile->updateInfo($data);
			$this->session->set_flashdata('msgEditProf','<div class="alert alert-success text-center">Your informations has been save successfully!</div>');
			redirect('student/profile');
		}
	}
	
	
	
	
	

}
