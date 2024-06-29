<?php 
class Db_model extends CI_Model { 
		public function __construct(){ 
			parent::__construct(); 
			$this->load->database(); 
		} 
	
		public function getUsers() {		 
			$data = $this->db->query('SELECT * FROM enquiry') ; 
			return $data;
		}	 
	
} 

?> 
