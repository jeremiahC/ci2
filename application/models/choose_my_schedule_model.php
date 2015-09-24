<?php
class Choose_my_schedule_model extends CI_Model {

	//this will get schedule from special schedules
	function getSpecialSchedule(){	
		$this->db->select("id,username,course,date,time_start,comment,teacher,status");
		$query = $this->db->get('special_schedules');
		return $query->result();
	}
	
	//this will get schedule from course1_enrollees
	function getScheduleCourse1(){
		$this->db->select("id,username,course,date,time_start,comment,teacher,status");
		$query = $this->db->get('course1_enrollees');
		return $query->result();
	}
	
	//this will get schedule from course2_enrollees
	function getScheduleCourse2(){
		$this->db->select("id,username,course,date,time_start,comment,teacher,status");
		$query = $this->db->get('course2_enrollees');
		return $query->result();
	}
	
	//this will get schedule from course3_enrollees
	function getScheduleCourse3(){
		$this->db->select("id,username,course,date,time_start,comment,teacher,status");
		$query = $this->db->get('course3_enrollees');
		return $query->result();
	}


		
	
	//this will enroll students to special schedules
	function addSpecialSchedule($schedule,$prof){
	
		$this->db->insert('special_schedules', $schedule);
		extract($prof);
		$this->db->where('username',$username);
		$this->db->update('users',$prof);
		
		return true;
		}
	
	function updatesSpecialSchedules($data)
	{
		extract($data);
		$this->db->where('id',$id);
		$this->db->update('special_schedules',$data);
		
		return true;
	}
	



	
}