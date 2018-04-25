<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {

  /**
   * Index for trail web site
   */
  public function index() {
    $this->load->view('header');
	
	$query = $this->db->get("student"); 
	$data['students'] = $query->result();
	
    $this->load->view('students',$data);
    
	$this->load->view('footer'); 
		 
  }
  
  function __construct() { 
	 parent::__construct(); 
	 $this->load->database(); 
  } 
  
  public function add_student() { 
	 $this->load->model('Student_Model');
		
	 $data = array( 
		'first_name' => $this->input->post('first_name'), 
		'last_name' => $this->input->post('last_name'),
		'email' => $this->input->post('email'),
		'phone' => $this->input->post('phone'),
		'password' => md5($this->input->post('password'))
	 ); 
		
	 $this->Student_Model->insert($data); 
	 
	 $this->index();
	 
  } 
  
  public function add_student_view(){
	$this->load->view('header');
	
    $this->load->view('student_add_view');
    
	$this->load->view('footer'); 
	
  }
  
  public function delete_student() { 
	 $this->load->model('Student_Model'); 
	 $id = $this->uri->segment('3'); 
	 $this->Student_Model->delete($id); 
		
	$this->index(); 
  } 
  
  public function update_student_view() { 
	 $id = $this->uri->segment('3'); 
	 $query = $this->db->get_where("student",array("student_id"=>$id));
	 $data['student'] = $query->result();  
	 
	 
	$this->load->view('header');
	
    $this->load->view('student_update_view',$data);
    
	$this->load->view('footer'); 
  } 

  public function update_student(){ 
	 $this->load->model('Student_Model');
	 
	 $id = $this->uri->segment('3'); 
		
	 $data = array( 
		'first_name' => $this->input->post('first_name'), 
		'last_name' => $this->input->post('last_name'),
		'email' => $this->input->post('email'),
		'phone' => $this->input->post('phone'),
		'password' => md5($this->input->post('password'))
	 ); 
		
	 $this->Student_Model->update($data,$id); 
		
	 $this->index(); 
  } 
  
  public function search(){
	$param = $this->input->post('name'); 
	
	//$query = $this->db->get("student");
	$this->db->from('student');
	$this->db->where("first_name like '$param%' OR last_name like '$param%'");
	$query = $this->db->get();
	
	$data['students'] = $query->result();  
	
	$this->load->view('header');
    $this->load->view('students',$data);
	$this->load->view('footer'); 
	
  }
  
  
}
