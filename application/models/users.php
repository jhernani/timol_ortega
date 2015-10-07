<?php
	class users extends CI_Model{

		/*function __construct(){
			parent::__construct();
		}*/
		function getUsernames(){
			$query = $this->db->query('SELECT username FROM users');

			if($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
		}
		function getPasswords(){
			$query = $this->db->query('SELECT password FROM users');

			if($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
		}
		function getEmails(){
			$query = $this->db->query('SELECT email FROM users');

			if($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
		}
		function getIds(){
			$query = $this->db->query('SELECT id FROM users');

			if($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
		}
		function getUsers(){
			$query = $this->db->query('SELECT * FROM users');

			if($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
		}
		function CheckUsername($username){
			$query = $this->db->query("SELECT * FROM users WHERE username = '$username'");

			if($query->num_rows() > 0){
				return TRUE;
			}else{
				return FALSE;
			}
			
		}

	}
?> 