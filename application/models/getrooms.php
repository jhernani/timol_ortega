<?php
	class getrooms extends CI_Model{

		/*function __construct(){
			parent::__construct();
		}*/
		function getAllrooms(){
			$query = $this->db->query("SELECT room_id,building_number,room_type,maximum_occupants,current_number_of_occupants,gender_preference FROM rooms WHERE status = 1");

			if($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
		}
		function getRoomsid(){
			$query = $this->db->query("SELECT room_id FROM rooms WHERE status = 1");

			if($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
		}
		function getSrooms($room_id){
			$query = $this->db->query("SELECT room_id,building_number,room_type,maximum_occupants,current_number_of_occupants,gender_preference FROM rooms WHERE room_id = '$room_id'");
			if($query->num_rows() == 1){
				return $query->result();
			}else{
				return NULL;
			}
		}
		public function edit_room_info(){
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
		echo $this->input->post('room_number').$building.$this->input->post('room_type').$this->input->post('occupants').$this->input->post('gender_preference');
			$new_member_update_data = array(
					'room_id' => $this->input->post('room_number'),
					'building_number' => $building,
					'room_type' => $this->input->post('room_type'),
					'maximum_occupants' => $this->input->post('occupants'),
					'current_number_of_occupants' => 0,
					'status' => 0,
					'gender_preference' => $this->input->post('gender_preference'),
					'status' => 1
				);
			$this->db->where('room_id',$room_id);
			$update = $this->db->update('rooms',$new_member_update_data);
			return $update;

		}
		public function disable_room(){
			$room_id = $this->input->post('room_id');
			$new_member_update_data1 = array(
					'status' => 0
				);
			$this->db->where('rooms_room_id',$room_id);
			$this->db->update('rooms_has_tenants',$new_member_update_data1);
			$new_member_update_data = array(
					'status' => 0
				);
			$this->db->where('room_id',$room_id);
			$update = $this->db->update('rooms',$new_member_update_data);
			return $update;

		}
		/*function getBuildings(){
			$query = $this->db->query('SELECT password FROM rooms');

			if($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
		}
		function getRoomtypes(){
			$query = $this->db->query('SELECT email FROM rooms');

			if($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
		}
		function getMaxoccupants(){
			$query = $this->db->query('SELECT id FROM rooms');

			if($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
		}
		function getCurrentoccupants(){
			$query = $this->db->query('SELECT * FROM rooms');

			if($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
		}
		function getGenderpref(){
			$query = $this->db->query('SELECT * FROM rooms');

			if($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
		}*/

	}
?> 