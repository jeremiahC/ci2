<?php
class Admin_crud extends CI_Model {

	//get special schedules
	function getSpecialSchedule($start, $limit){	
		$this->db->select("id,username,course,date,time_start,comment,teacher,status");
		$this->db->where('course_no','5');
		$query = $this->db->get('enrollees', $start, $limit);
		
		return $query->result();
	}
	
	//count special schedules
	function getSpecialScheduleCount(){
		$this->db->select('*');
		$this->db->where('course_no','5');
		$query = $this->db->get('enrollees');
		
		return $query->num_rows();
		
		
	}
	
	function getScheduleCourse1($start, $limit){
		$this->db->select("id,username,course,date,time_start,comment,teacher,status");
		$this->db->where('course_no','1');
		$query = $this->db->get('enrollees',$start, $limit);
		
		return $query->result();
	}
	
	function getScheduleCourse1Count(){
		$this->db->select('*');
		$this->db->where('course_no','1');
		$query = $this->db->get('enrollees');
	
		return $query->num_rows();
	}
	
	
	function getScheduleCourse2($start, $limit){
		$this->db->select("id,username,course,date,time_start,comment,teacher,status");
		$this->db->where('course_no','2');
		$query = $this->db->get('enrollees',$start, $limit);
		
		return $query->result();
	}
	
	function getScheduleCourse2Count(){
		$this->db->select('*');
		$this->db->where('course_no','2');
		$query = $this->db->get('enrollees');
	
		return $query->num_rows();
	}
	
	function getScheduleCourse3($start, $limit){
		$this->db->select("id,username,course,date,time_start,comment,teacher,status");
		$this->db->where('course_no','3');
		$query = $this->db->get('enrollees',$start, $limit);
		
		return $query->result();
	}
	
	function getScheduleCourse3Count(){
		$this->db->select('*');
		$this->db->where('course_no','3');
		$query = $this->db->get('enrollees');
	
		return $query->num_rows();
	}

	function getVisitorSchedule($start, $limit){
		$this->db->select("id,username,course,date,time_start,comment,teacher,status");
		$this->db->where('membership','visitor');
		$query = $this->db->get('enrollees', $start,$limit);
		return $query->result();
	}
	
	function getVisitorScheduleCount(){
		$this->db->select('*');
		$this->db->where('membership','visitor');
		$query = $this->db->get('enrollees');
		return $query->num_rows();
	}

	//this will update special schedules enrollees comment/teacher/status/etc.
	function updatesSpecialSchedules($data)
	{
		extract($data);
		$this->db->where('id',$id);
		$this->db->update('enrollees',$data);
		
		return true;
	}
	
	//this will update course 1 enrollees comment/teacher/status/etc.
	function updatesCourse1($data)
	{
		extract($data);
		$this->db->where('id',$id);
		$this->db->update('enrollees',$data);
	
		return true;
	}
	
	//this will update course 2 enrollees comment/teacher/status/etc.
	function updatesCourse2($data)
	{
		extract($data);
		$this->db->where('id',$id);
		$this->db->update('enrollees',$data);
	
		return true;
	}
	
	//this will update course 3 enrollees comment/teacher/status/etc.
	function updatesCourse3($data)
	{
		extract($data);
		$this->db->where('id',$id);
		$this->db->update('enrollees',$data);
	
		return true;
	}
	
	//this will update visitor schedules enrollees comment/teacher/status/etc.
	function updatesVisitorSchedules($data)
	{
		extract($data);
		$this->db->where('id',$id);
		$this->db->update('enrollees',$data);
	
		return true;
	}
	
	//function search of teacher
	function search($keyword){
		$this->db->select('*')->from('users');
		$this->db->like('username',$keyword,'after');
		$query = $this->db->get();
			
		return $query->result();
	}

	
}