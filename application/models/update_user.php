<?php

	class update_user extends CI_Model{

		public function userupdate(){
			$id = $this->input->post('id');

			$new_member_update_data = array(
					'firstname' => $this->input->post('firstname'),
					'lastname' => $this->input->post('lastname'),
					'username' => $this->input->post('username'),
					'email' => $this->input->post('email'),
					'password' => md5($this->input->post('password'))
				);
			$this->db->where('id',8);
			$update = $this->db->update('users',$new_member_update_data);
			return $update;

		}

	}

?>