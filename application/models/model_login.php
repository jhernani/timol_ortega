<?php
	class model_login extends CI_Model{
		

		public function login_user(){
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$query = $this->db->query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");
			$row = $query->row();
			if($query->num_rows() == 1){
				$session_data = array(
					'id' => $row->id,
					'username' => $row->username,
					'email' => $row->email,
					'firstname' => $row->firstname,
					'lastname' => $row->lastname
					);
				return $this->set_session($session_data);

			}else{
				return 0;
			}
		}

		private function set_session($session_data){
			$sess_data = array(
				'id' => $session_data['id'],
				'username' => $session_data['username'],
				'email' => $session_data['email'],
				'firstname' => $session_data['firstname'],
				'lastname' => $session_data['lastname'],
				);
			return $sess_data;
			
		}


	}
?>