<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class edit_my_profile extends CI_Model {

	function getInfo(){
		$this->db->select("id,username,user_name,user_lastname,user_bio,user_contact,user_age,user_education,user_skype");
		$query = $this->db->get('users');
		return $query->result();
	}

	function updateInfo($data){
		
		extract($data);
		
		$this->db->where('username',$username);
		$this->db->update('users',$data);

		return true;
	}
	
	public function do_upload()
	{
		$username = $this->session->userdata('username');
		
		$config = array(
            'upload_path'   => './pictures/',
            'allowed_types' => 'gif|jpg|png',
            'max_size'      => '5000',
            //'max_height'    => '1907',
            //'max_width'     => '1280',
            //'encrypt_name'  => true,
        );

		$this->load->library('upload', $config);

        $this->upload->do_upload();
        
		$upload_data = $this->upload->data();
        $data['user_picture']=  $upload_data['file_name'];
		
		$this->db->where('username',$username);
		$this->db->update('users',$data);
    }
	
	public function get_image()
	{
		$username = $this->session->userdata('username');
		$this->db->where('username',$username);
		$query = $this->db->get('users');
		return $query->result();
	}
}
?>