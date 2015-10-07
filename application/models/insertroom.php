<?php
	class insertroom extends CI_Model{

		


		public function insert_room(){
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
		$pbuilding = $this->input->post('building')*1000;
		$room_id = $pbuilding + $this->input->post('room_number');
			$new_room_insert_data = array(
					'room_id' => $room_id,
					'building_number' => $building,
					'room_type' => $this->input->post('room_type'),
					'maximum_occupants' => $this->input->post('occupants'),
					'current_number_of_occupants' => 0,
					'status' => 0,
					'gender_preference' => $this->input->post('gender_preference'),
					'status' => 1
				);
			$insert = $this->db->insert('rooms', $new_room_insert_data);
			return $insert;
		}

		


	}

?>