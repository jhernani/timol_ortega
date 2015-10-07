<?php
	class gettenant extends CI_Model{


		function getAlltenants(){
			$query = $this->db->query("SELECT RT.rooms_room_id,RT.tenants_users_user_id,RT.status,T.users_user_id,T.fname,T.lname,R.room_id,R.room_type,R.building_number FROM rooms_has_tenants RT,tenants T,rooms R WHERE RT.status = 1 AND RT.rooms_room_id = R.room_id AND RT.tenants_users_user_id = T.users_user_id");

			if($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
		}
		function getStenant($tenant_id){
			$query = $this->db->query("SELECT RT.rooms_room_id,RT.tenants_users_user_id,RT.status,T.users_user_id,T.fname,T.lname,T.mname,T.email,T.bday,R.room_id,R.room_type,R.building_number FROM rooms_has_tenants RT,tenants T,rooms R WHERE RT.status = 1 AND RT.rooms_room_id = R.room_id AND RT.tenants_users_user_id = T.users_user_id AND RT.tenants_users_user_id = '$tenant_id'");
			if($query->num_rows() == 1){
				return $query->result();
			}else{
				return NULL;
			}
		}
		public function disable_tenant(){
			$tenant = $this->input->post('tenantuserid');

			$new_member_update_data = array(
					'status' => 0
				);
			$this->db->where('tenants_users_user_id',$tenant);
			$update = $this->db->update('rooms_has_tenants',$new_member_update_data);
			return $update;

		}
		public function edit_tenant_info(){
			$room_id = $this->input->post('room_id');
			switch ($this->input->post('building')) {
			case 1:
				$building = "Building 1";
				break;
			case 2:
				$building = "Building 2";
				break;
			case 3:
				$building = "Building 3";
				break;
			case 4:
				$building = "Building 4";
				break;
			case 5:
				$building = "Building 5";
				break;
			
			default:
				break;
		}
			

			if(!$this->input->post('month')){
				$new_member_update_data2 = array(
					'fname' => $this->input->post('fname'),
					'mname' => $this->input->post('mname'),
					'lname' => $this->input->post('lname'),
					'email' => $this->input->post('email'),
					'bday'	=> $this->input->post('bday')
				);
				$this->db->where('users_user_id',$this->input->post('tenant_user_id'));
				$this->db->update('tenants',$new_member_update_data2);
			}else{
				$arr = array();
				$arr['year'] = $this->input->post('year');
				$arr['month'] = $this->input->post('month');
				$arr['day'] = $this->input->post('day');
				$bday = implode('-',$arr);
				$new_member_update_data2 = array(
					'fname' => $this->input->post('fname'),
					'mname' => $this->input->post('mname'),
					'lname' => $this->input->post('lname'),
					'email' => $this->input->post('email'),
					'bday'	=> $bday
				);
				$this->db->where('users_user_id',$this->input->post('tenant_user_id'));
				$this->db->update('tenants',$new_member_update_data2);
			}


			$new_member_update_data3 = array(
					'rooms_room_id' => $this->input->post('room')
				);
				$this->db->where('tenants_users_user_id',$this->input->post('tenant_user_id'));
				$update = $this->db->update('rooms_has_tenants',$new_member_update_data3);
				return $update;

		}


	}
?>