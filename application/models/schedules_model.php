<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Schedules_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->load->helper('date');
		
	}
	
	
	function getUserInfo($user)
	{
		if($user != FALSE){
			extract($user);
		$this->db->select('user_skype,user_contact');
		$query = $this->db->get_where('users',array('username'=>'$username'));
		
// 		$username = $this->session->userdata('username');
// 		$query = $this->db->get_where('users', array('username' => $username));
		return $query->row_array();
		}else{
			return FALSE;
		}
		
		
	}
	
	
	
	
	
	
	
	////////////////////////////////////////////////
	// * START OF GETTING SCHEDULES OFFERED
	////////////////////////////////////////////////
	
	//this will get schedules offered for course name 1
	function get_course_1() {
		//variable to get current date
		$currentDate = date('Y-m-d'); 
		
		$this->db->select('id,course,date, time, hours, price');
		//filter to get date where date >= current date
		$this->db->where('DATE_FORMAT(date, "%Y-%m-%d") >=',$currentDate);
		$query = $this->db->get('course_1');
		
// 		$username = $this->session->userdata('username');
// 		$this->db->select('user_skype,user_contact');
// 		$this->db->from('users');
// 		$this->db->where('username',$username);
		
		return $query->result_array();
	}
	
	
	//this will get schedules offered for course name 2
	function get_course_2() {
		$currentDate = date('Y-m-d');
		$this->db->select('id,course,date, time, hours, price');
		$this->db->where('DATE_FORMAT(date, "%Y-%m-%d") >=',$currentDate);
		$query = $this->db->get('course_2');
	
		return $query->result_array();
	}
	
	//this will get schedules offered for course name 3
	function get_course_3() {
		$currentDate = date('Y-m-d');
		$this->db->select('id, course,date, time, hours, price');
		$this->db->where('DATE_FORMAT(date, "%Y-%m-%d") >=',$currentDate);
		$query = $this->db->get('course_3');
	
		return $query->result_array();
	}
	
	////////////////////////////////////////////////
	// * END OF GETTING SCHEDULES OFFERED
	////////////////////////////////////////////////
	
	
	
	
	////////////////////////////////////////////////
	// * START: ENROLL TO COURSES
	////////////////////////////////////////////////
	
	//this will enroll students to special schedules
	function SpecialSchedule_enroll($schedule,$prof){
	
		$this->db->insert('special_schedules', $schedule);
		extract($prof);
		$this->db->where('username',$username);
		$this->db->update('users',$prof);
	
		return true;
	}
	
	//this will enroll students to course name 1
	function course1_enroll($enroll,$prof){
	
		$this->db->insert('course1_enrollees', $enroll);
		extract($prof);
		$this->db->where('username',$username);
		$this->db->update('users',$prof);
	
		return true;
	}
	
	//this will enroll students to course name 2
	function course2_enroll($enroll,$prof){
	
		$this->db->insert('course2_enrollees', $enroll);
		extract($prof);
		$this->db->where('username',$username);
		$this->db->update('users',$prof);
	
		return true;
	}
	
	//this will enroll students to course name 3
	function course3_enroll($enroll,$prof){
	
		$this->db->insert('course3_enrollees', $enroll);
		extract($prof);
		$this->db->where('username',$username);
		$this->db->update('users',$prof);
	
		return true;
	}
	
	
	//this will enroll visitors to visitor_enrollees
	function visitor_enroll($enroll){
		$this->db->insert('visitor_enrollees', $enroll);
		return true;
	}
	
	
	
	//this will set schedule of teacher
	function teacher_schedule($schedule,$prof){
		$this->db->insert('teacher_schedule', $schedule);
		extract($prof);
		$this->db->where('username',$username);
		$this->db->update('users',$prof);
		return true;
	}
	////////////////////////////////////////////////
	// * END: ENROLL TO COURSES
	////////////////////////////////////////////////
	
	
	
	
	////////////////////////////////////////////////
	// * START: GET THE STUDENT'S SCHEDULE
	////////////////////////////////////////////////
	
	
	//prototype get all scheds
	function getAllSchedule(){
		$user=$this->session->userdata('username');
		$this->db->select("*");
		$this->db->where('username',$user);
		$this->db->from('enrollees');
		$this->db->order_by("date", "desc");
		$query = $this->db->get();
		return $query->result();
		
		
	}
	
	//this will get schedule from special schedules
	function getSpecialSchedule(){
		$user=$this->session->userdata('username');
		$this->db->select("id,username,course,date,time_start,comment,teacher,status");
		$this->db->where('username',$user);
		$query = $this->db->get('special_schedules');
		return $query->result();
	}
	
	//this will get schedule from course1_enrollees
	function getScheduleCourse1(){
		$user=$this->session->userdata('username');
		$this->db->select("id,username,course,date,time_start,comment,teacher,status");
		$this->db->where('username',$user);
		$query = $this->db->get('course1_enrollees');
		return $query->result();
	}
	
	//this will get schedule from course2_enrollees
	function getScheduleCourse2(){
		$user=$this->session->userdata('username');
		$this->db->select("id,username,course,date,time_start,comment,teacher,status");
		$this->db->where('username',$user);
		$query = $this->db->get('course2_enrollees');
		return $query->result();
	}
	
	//this will get schedule from course3_enrollees
	function getScheduleCourse3(){
		$user=$this->session->userdata('username');
		$this->db->select("id,username,course,date,time_start,comment,teacher,status");
		$this->db->where('username',$user);
		$query = $this->db->get('course3_enrollees');
		return $query->result();
	}
	
	////////////////////////////////////////////////
	// * END: GET THE STUDENT'S SCHEDULE
	////////////////////////////////////////////////
	
	//enroll member/student
	function enroll($schedule,$prof){
	
		$this->db->insert('enrollees', $schedule);
		extract($prof);
		$this->db->where('username',$username);
		$this->db->update('users',$prof);
	
		return true;
	}
	
	//enroll visitor
	function visitorEnroll($schedule){
		$this->db->insert('enrollees', $schedule);
		return true;
	}
	
	//this will get schedules of students to profile
	function getSchedules(){
		$user=$this->session->userdata('username');
		$this->db->select("id,username,course,date,time_start,teacher,status");
		$this->db->where('username',$user);
		$query = $this->db->get('enrollees');
		return $query->result();
	}
	
	//this will get appointments of teachers to profile
	function getAppointments(){
		$user=$this->session->userdata('username');
		$this->db->select("id,username,course,date,time_start,teacher");
		$this->db->where('teacher',$user);
		$query = $this->db->get('enrollees');
		return $query->result();
	}
	
	//prototype get all scheds
	function getTeacherSchedules(){
		$user=$this->session->userdata('username');
		$this->db->select("*");
		$this->db->where('username',$user);
		$this->db->from('teacher_schedule');
		$this->db->order_by("date", "desc");
		$query = $this->db->get();
		return $query->result();
	
	
	}
	
	
	
	
	
	
	
}
	
	
