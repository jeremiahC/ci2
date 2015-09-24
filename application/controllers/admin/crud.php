<?php

class Crud extends Application
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->ag_auth->restrict('admin'); // restrict this controller to admins only
		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('grocery_CRUD');
		$this->load->library('pagination');
		$this->load->model('admin_crud');
		
	}
	
	public function _example_output($output = null)
	{
		$this->ag_auth->view('admin/manage',$output);
	}
	
	public function users()
	{
		
		$crud = new grocery_CRUD();
		
		$crud->set_theme('datatables');
		$crud->set_table('users');
		$crud->where('group_id','100');
		$crud->columns('username','email','user_skype','user_contact','user_lastname');
		
		$output = $crud->render();
		
		$this->_example_output($output);
	}
	
	public function teachers()
	{
	
		$crud = new grocery_CRUD();
	
		$crud->set_theme('datatables');
		$crud->set_table('users');
		$crud->where('group_id','2');
		$crud->columns('username','email','user_skype','user_contact','user_lastname');
	
		$output = $crud->render();
	
		$this->_example_output($output);
	}
	
	public function admins()
	{
	
		$crud = new grocery_CRUD();
	
		$crud->set_theme('datatables');
		$crud->set_table('users');
		$crud->where('group_id','1');
		$crud->columns('username','email','user_skype','user_contact','user_lastname');
	
		$output = $crud->render();
	
		$this->_example_output($output);
	}
	
	public function course_1()
	{
	
	
	
		$crud = new grocery_CRUD();
	
		$crud->set_theme('datatables');
		$crud->set_table('course_1');
	
		$output = $crud->render();
	
		$this->_example_output($output);
	}
	
	
	
	public function course_2()
	{
	
	
	
		$crud = new grocery_CRUD();
	
		$crud->set_theme('datatables');
		$crud->set_table('course_2');
	
		$output = $crud->render();
	
		$this->_example_output($output);
	}
	
	
	
	public function course_3()
	{
	
	
	
		$crud = new grocery_CRUD();
	
		$crud->set_theme('datatables');
		$crud->set_table('course_3');
	
		$output = $crud->render();
	
		$this->_example_output($output);
	}
	
	///////////////////////////////////
	//start special schedules functions
	//////////////////////////////////
	
	public function special_schedules()
	{
		
		$this->load->model('admin_crud');
		$config['base_url'] = base_url().'index.php/admin/crud/special_schedules';
		$config['total_rows'] = $this->admin_crud->getSpecialScheduleCount();
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
		
		
		$this->data['schedules'] = $this->admin_crud->getSpecialSchedule($config["per_page"], $this->data['page']);
		$this->data['pagination'] = $this->pagination->create_links();
		$this->ag_auth->view('admin/special_schedulesView',$this->data);
		
		
		//WORKING!!
		//WITH GROCERY CRUD!!
		// 		$crud = new grocery_CRUD();
			
		// 		$crud->set_theme('datatables');
		// 		$crud->set_table('special_schedules');
		// 		$crud->columns('username','course','date','comment');
			
		// 		$output = $crud->render();
			
		// 		$this->_example_output($output);
	}
	

	public function special_schedules_editComment()
	{
	
		$data = array(
				'id' => $this->input->post('id'),
				'comment'=>$this->input->post('comment'),
		);
	
	
		$this->load->model('admin_crud');
		$this->admin_crud->updatesSpecialSchedules($data);
	
		$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Comment Edited!</div>');
		redirect_back();
	}
	
	public function special_schedules_editStatus()
	{
	
		$data = array(
				'id' => $this->input->post('id'),
				'status'=>$this->input->post('status'),
		);
	
	
		$this->load->model('admin_crud');
		$this->admin_crud->updatesSpecialSchedules($data);
	
		$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Status edited!</div>');
		redirect_back();
	}
	
	
	public function special_schedules_editTeacher()
	{
	
		$data = array(
				'id' => $this->input->post('id'),
				'teacher'=>$this->input->post('teacher'),
		);
	
	
		$this->load->model('admin_crud');
		$this->admin_crud->updatesSpecialSchedules($data);
	
		$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Teacher column edited!</div>');
		redirect_back();
	}
	
	/////////////////////////////////////
	//end special schedules functions
	////////////////////////////////////

	
	
	//start course name 1 schedules functions
	public function course1_enrollees()
	{
	
		$config['base_url'] = base_url().'index.php/admin/crud/course1_enrollees';
		$config['total_rows'] =  $this->admin_crud->getScheduleCourse1Count();
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
		
		
		$this->data['schedules'] = $this->admin_crud->getScheduleCourse1($config["per_page"], $this->data['page']);
		$this->data['pagination'] = $this->pagination->create_links();
		$this->ag_auth->view('admin/course1_enrolleesView',$this->data); 
		
		
	
	
	}
	

	
	public function course1_editComment()
	{
	
		$data = array(
				'id' => $this->input->post('id'),
				'comment'=>$this->input->post('comment'),
		);
	
	
		$this->load->model('admin_crud');
		$this->admin_crud->updatesCourse1($data);
	
		$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Comment Edited!</div>');
		redirect_back();
	}
	
	public function course1_editStatus()
	{
	
		$data = array(
				'id' => $this->input->post('id'),
				'status'=>$this->input->post('status'),
		);
	
	
		$this->load->model('admin_crud');
		$this->admin_crud->updatesCourse1($data);
	
		$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Status edited!</div>');
		redirect_back();
	}
	
	
	public function course1_editTeacher()
	{
	
		$data = array(
				'id' => $this->input->post('id'),
				'teacher'=>$this->input->post('teacher'),
		);
	
	
		$this->load->model('admin_crud');
		$this->admin_crud->updatesCourse1($data);
	
		$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Teacher column edited!</div>');
		redirect_back();
	}
	
	
	//end course 1 schedules functions
	
	//start course name 2 schedules functions
	public function course2_enrollees()
	{
	
		$config['base_url'] = base_url().'index.php/admin/crud/course2_enrollees';
		$config['total_rows'] = $this->admin_crud->getScheduleCourse2Count();
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
		
		$this->data['schedules'] = $this->admin_crud->getScheduleCourse2($config["per_page"], $this->data['page']);
		$this->data['pagination'] = $this->pagination->create_links();
		$this->ag_auth->view('admin/course2_enrolleesView',$this->data); 
	
	
	}
	
	public function course2_editComment()
	{
	
		$data = array(
				'id' => $this->input->post('id'),
				'comment'=>$this->input->post('comment'),
		);
	
	
		$this->load->model('admin_crud');
		$this->admin_crud->updatesCourse2($data);
	
		$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Comment Edited!</div>');
		redirect_back();
	}
	
	public function course2_editStatus()
	{
	
		$data = array(
				'id' => $this->input->post('id'),
				'status'=>$this->input->post('status'),
		);
	
	
		$this->load->model('admin_crud');
		$this->admin_crud->updatesCourse2($data);
	
		$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Status edited!</div>');
		redirect_back();
	}
	
	
	public function course2_editTeacher()
	{
	
		$data = array(
				'id' => $this->input->post('id'),
				'teacher'=>$this->input->post('teacher'),
		);
	
	
		$this->load->model('admin_crud');
		$this->admin_crud->updatesCourse2($data);
	
		$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Teacher column edited!</div>');
		redirect_back();
	}
	
	
	//end course 2 schedules functions
	
	
	
	
	//start course name 3 schedules functions
	public function course3_enrollees()
	{
	
		$config['base_url'] = base_url().'index.php/admin/crud/course3_enrollees';
		$config['total_rows'] = $this->admin_crud->getScheduleCourse3Count();
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
		
		$this->data['schedules'] = $this->admin_crud->getScheduleCourse3($config["per_page"], $this->data['page']);
		$this->data['pagination'] = $this->pagination->create_links();
		$this->ag_auth->view('admin/course3_enrolleesView',$this->data); 
	
	
	
	}
	
	public function course3_editComment()
	{
	
		$data = array(
				'id' => $this->input->post('id'),
				'comment'=>$this->input->post('comment'),
		);
	
	
		$this->load->model('admin_crud');
		$this->admin_crud->updatesCourse3($data);
	
		$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Comment Edited!</div>');
		redirect_back();
	}
	
	public function course3_editStatus()
	{
	
		$data = array(
				'id' => $this->input->post('id'),
				'status'=>$this->input->post('status'),
		);
	
	
		$this->load->model('admin_crud');
		$this->admin_crud->updatesCourse3($data);
	
		$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Status edited!</div>');
		redirect_back();
	}
	
	
	public function course3_editTeacher()
	{
	
		$data = array(
				'id' => $this->input->post('id'),
				'teacher'=>$this->input->post('teacher'),
		);
	
	
		$this->load->model('admin_crud');
		$this->admin_crud->updatesCourse3($data);
	
		$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Teacher column edited!</div>');
		redirect_back();
	}
	
	
	//end course 3 schedules functions
	
	

	///////////////////////////////////
	//start visitor schedules functions
	//////////////////////////////////
	
	public function visitor_schedules()
	{
		//pagination settings
		$config['base_url'] = base_url().'index.php/admin/crud/visitor_schedules';
		$config['total_rows'] = $this->admin_crud->getVisitorScheduleCount();
		$config['per_page'] = "10";
		$config["uri_segment"] = 4;
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);
		
		//config for bootstrap pagination class integration
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
		
		$this->data['pagination'] = $this->pagination->create_links();

		$this->data['schedules'] = $this->admin_crud->getVisitorSchedule($config["per_page"], $this->data['page']);
			
		$this->ag_auth->view('admin/visitor_schedulesView',$this->data);
			
	
	}
	
	public function visitor_schedulesStatus()
	{
		$status=$this->input->post('status');
		
			//pagination settings
			$config['base_url'] = base_url().'index.php/admin/crud/visitor_schedulesStatus';
			$config['total_rows'] = $this->admin_crud->countVisitorScheduleStatus($status);
			$config['per_page'] = "10";
			$config["uri_segment"] = 4;
			$choice = $config["total_rows"] / $config["per_page"];
			$config["num_links"] = floor($choice);
		
			//config for bootstrap pagination class integration
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
		
			$this->data['pagination'] = $this->pagination->create_links();
		
			
			
			$this->data['schedules'] = $this->admin_crud->getVisitorScheduleStatus($config["per_page"], $this->data['page'],$status);
				if($this->data['schedules']!='')
				{
					$this->ag_auth->view('admin/visitor_schedulesView',$this->data);
				}else{
					$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">No results found!</div>');
					$this->ag_auth->view('admin/visitor_schedulesView');
				}
			
	}
	
	
	public function visitor_schedules_editComment()
	{
	
		$data = array(
				'id' => $this->input->post('id'),
				'comment'=>$this->input->post('comment'),
		);
	
	
		$this->load->model('admin_crud');
		$this->admin_crud->updatesVisitorSchedules($data);
	
		$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Comment Edited!</div>');
		redirect_back();
	}
	
	public function visitor_schedules_editStatus()
	{
	
		$data = array(
				'id' => $this->input->post('id'),
				'status'=>$this->input->post('status'),
		);
	
	
		$this->load->model('admin_crud');
		$this->admin_crud->updatesVisitorSchedules($data);
	
		$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Status edited!</div>');
		redirect_back();
	}
	
	
	public function visitor_schedules_editTeacher()
	{
	
		$data = array(
				'id' => $this->input->post('id'),
				'teacher'=>$this->input->post('teacher'),
		);
	
	
		$this->load->model('admin_crud');
		$this->admin_crud->updatesVisitorSchedules($data);
	
		$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Teacher column edited!</div>');
		redirect_back();
	}
	
	/////////////////////////////////////
	//end visitor schedules functions
	////////////////////////////////////
	
	
	
	
	
	
	
	public function searchCourse1(){

		$keyword = $this->input->post('term');
		$data['response'] = 'false'; //Set default response
		$query = $this->admin_crud->search($keyword); //Search DB
		if( ! empty($query) )
		{
			$data['response'] = 'true'; //Set response
			$data['message'] = array(); //Create array
			foreach( $query as $row )
			{
				$data['message'][] = array(
						'id'=>$row->id,
						'value' => $row->username,
						''
				);  //Add a row to array
			}
		}
		if('IS_AJAX')
		{
			echo json_encode($data); //echo json string if ajax request
			 
		}
		else
		{
			$this->ag_auth->view('admin/course1_enrolleesView',$data); //Load html view of search results
		}
	}
	
	
	public function searchCourse2(){
	
		$keyword = $this->input->post('term');
		$data['response'] = 'false'; //Set default response
		$query = $this->admin_crud->search($keyword); //Search DB
		if( ! empty($query) )
		{
			$data['response'] = 'true'; //Set response
			$data['message'] = array(); //Create array
			foreach( $query as $row )
			{
				$data['message'][] = array(
						'id'=>$row->id,
						'value' => $row->username,
						''
				);  //Add a row to array
			}
		}
		if('IS_AJAX')
		{
			echo json_encode($data); //echo json string if ajax request
	
		}
		else
		{
			$this->ag_auth->view('admin/course2_enrolleesView',$data); //Load html view of search results
		}
	}
	
	public function searchCourse3(){
	
		$keyword = $this->input->post('term');
		$data['response'] = 'false'; //Set default response
		$query = $this->admin_crud->search($keyword); //Search DB
		if( ! empty($query) )
		{
			$data['response'] = 'true'; //Set response
			$data['message'] = array(); //Create array
			foreach( $query as $row )
			{
				$data['message'][] = array(
						'id'=>$row->id,
						'value' => $row->username,
						''
				);  //Add a row to array
			}
		}
		if('IS_AJAX')
		{
			echo json_encode($data); //echo json string if ajax request
	
		}
		else
		{
			$this->ag_auth->view('admin/course3_enrolleesView',$data); //Load html view of search results
		}
	}
	
	public function searchSpecial(){
	
		$keyword = $this->input->post('term');
		$data['response'] = 'false'; //Set default response
		$query = $this->admin_crud->search($keyword); //Search DB
		if( ! empty($query) )
		{
			$data['response'] = 'true'; //Set response
			$data['message'] = array(); //Create array
			foreach( $query as $row )
			{
				$data['message'][] = array(
						'id'=>$row->id,
						'value' => $row->username,
						''
				);  //Add a row to array
			}
		}
		if('IS_AJAX')
		{
			echo json_encode($data); //echo json string if ajax request
	
		}
		else
		{
			$this->ag_auth->view('admin/special_schedulesView',$data); //Load html view of search results
		}
	}
	
	public function searchVisitor(){
	
		$keyword = $this->input->post('term');
		$data['response'] = 'false'; //Set default response
		$query = $this->admin_crud->search($keyword); //Search DB
		if( ! empty($query) )
		{
			$data['response'] = 'true'; //Set response
			$data['message'] = array(); //Create array
			foreach( $query as $row )
			{
				$data['message'][] = array(
						'id'=>$row->id,
						'value' => $row->username,
						''
				);  //Add a row to array
			}
		}
		if('IS_AJAX')
		{
			echo json_encode($data); //echo json string if ajax request
	
		}
		else
		{
			$this->ag_auth->view('admin/visitor_schedulesView',$data); //Load html view of search results
		}
	}
	
	
}

?>