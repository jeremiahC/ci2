
<?php

class Profile extends Application

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
			$this->data['schedules'] = $this->Schedules_model->getSchedules();
            
			$this->ag_auth->view('student/dashboard', $this->data);
			$this->load->view('auth/pages/templates/footer');
		}
		else
		{
			$this->login();
		}
		


	}
	
	public function form()
	{
		$this->data['images'] = $this->edit_my_profile->get_image();
        $this->ag_auth->view('upload_form', array('error' => ' ' ));
		$this->load->view('auth/pages/templates/footer');
    }
	
	
	public function delete()
	{
		$name = "jeremiah";
		$username = $this->session->userdata('username',$name);
		
		$this->load->database();
		$this->db->where('user_picture');
		$this->db->delete('users');
	}

}
