
<?php

class Profile extends Application

{

	public function __construct()

	{

		parent::__construct();
		$this->load->model('edit_my_profile');
		$this->load->model('Schedules_model');
		$this->load->helper('date');
		$this->load->library('pagination');
		$this->load->helper('url');
		$this->load->helper('form');
	}

	public function index()

	{
		if(logged_in())
		{
			
		$config['base_url'] = base_url().'index.php/student/Profile/index/';
		$config['total_rows'] = $this->Schedules_model->getScheduleCount();
		$config['per_page'] = "10";
		$config["uri_segment"] = 4;
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);
		
		
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		
		$this->pagination->initialize($config);
		$this->data['page'] = $this->uri->segment(4);
		
		$this->data['schedules'] = $this->Schedules_model->getSchedules($config["per_page"], $this->data['page']);
		$this->data['pagination'] = $this->pagination->create_links();
		
		
			if($this->input->post('upload'))
			{
				$this->edit_my_profile->do_upload();
			}
			
			$this->data['information'] = $this->edit_my_profile->getInfo();
			$this->data['images'] = $this->edit_my_profile->get_image();
			
            
			$this->ag_auth->view('student/dashboard', $this->data);

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
