<?php
	class insertuser extends CI_Model{

		public function validate(){
			$this->load->library('encrypt');
			$this->db->where('username', $this->input->post('username'));
			$this->db->where('password',md5($this->input->post('password')));
			$query = $this->db->get('users');

			if($query->num_rows == 1){
				return true;
			}
		}

		public function insert_user(){
			$this->load->library('encrypt');
			$username = $this->input->post('username');

			$new_member_insert_data = array(
					'firstname' => $this->input->post('firstname'),
					'lastname' => $this->input->post('lastname'),
					'username' => $this->input->post('username'),
					'email' => $this->input->post('email'),
					'password' => md5($this->input->post('password'))
				);
			$insert = $this->db->insert('users', $new_member_insert_data);
			return $insert;
		}
		public function insert_tenant(){
			$this->load->library('encrypt');
			$building = $this->input->post('building');
			$room = $this->input->post('room');
			$arr = array();
			$arr['year'] = $this->input->post('year');
			$arr['month'] = $this->input->post('month');
			$arr['day'] = $this->input->post('day');
			$bday = implode('-',$arr);
			echo $building_room."-".$bday;
			
			if($this->input->post('type')==1){
				$new_member_insert_data1 = array(
					'user_id' => $this->input->post('tenant_id'),
					'type' => 1
				);
				$this->db->insert('users', $new_member_insert_data1);
			}else if($this->input->post('type')==2){
				$new_member_insert_data1 = array(
					'user_id' => $this->input->post('tenant_id'),
					'type' => 2
				);
				$this->db->insert('users', $new_member_insert_data1);
			}else{

			}

			$new_member_insert_data2 = array(
					'users_user_id' => $this->input->post('tenant_id'),
					'fname' => $this->input->post('fname'),
					'mname' => $this->input->post('mname'),
					'lname' => $this->input->post('lname'),
					'email' => $this->input->post('email'),
					'bday' => $bday
				);
			$this->db->insert('tenants', $new_member_insert_data2);

			$new_member_insert_data3 = array(
					'rooms_room_id' => $room,
					'tenants_users_user_id' => $this->input->post('tenant_id'),
					'status' => 1,
					'type' => 1
				);
			$insert = $this->db->insert('rooms_has_tenants', $new_member_insert_data3);
			#-------------------------------------------------------------------------------------------
			$query = $this->db->query("UPDATE rooms SET current_number_of_occupants = current_number_of_occupants + 1 WHERE status = 1 AND room_id = '$room'");

			return $insert;
		}

		public function check_email($email){

			$this->db->where('email', $email);
			$result = $this->db->get('users');

			if($result->num_rows() > 0){
				return FALSE;
			}else{
				return TRUE;
			}

		}

		public function check_username($username){

			$this->db->where('username', $username);
			$result = $this->db->get('users');

			if($result->num_rows() > 0){
				return FALSE;
			}else{
				return TRUE;
			}
			
		}


	}

?>