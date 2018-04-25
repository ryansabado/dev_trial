<?php 
   class Student_Model extends CI_Model {
	
      function __construct() { 
         parent::__construct(); 
      } 
   
      public function insert($data) { 
         if ($this->db->insert("student", $data)) { 
            return true; 
         }else{
		 	return false;
		 }
      } 
   
      public function delete($id) { 
         if ($this->db->delete("student", "student_id = ".$id)) { 
            return true; 
         } 
      } 
   
      public function update($data,$id) { 
         $this->db->set($data); 
         $this->db->where("student_id", $id); 
         $this->db->update("student", $data); 
      } 
   } 
?> 