<?php
	class rooms_building extends CI_Model{

		

		function getRoomidone(){
			$building = "Building 1";
			$query = $this->db->query("SELECT room_id, maximum_occupants, current_number_of_occupants FROM rooms WHERE status = 1 AND building_number = '$building' AND maximum_occupants - current_number_of_occupants > 0");

			if($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
		}
		function getRoomidtwo(){
			$building = "Building 2";
			$query = $this->db->query("SELECT room_id, maximum_occupants, current_number_of_occupants FROM rooms WHERE status = 1 AND building_number = '$building' AND maximum_occupants - current_number_of_occupants > 0");

			if($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
		}
		function getRoomidthree(){
			$building = "Building 3";
			$query = $this->db->query("SELECT room_id, maximum_occupants, current_number_of_occupants AS mo FROM rooms WHERE status = 1 AND building_number = '$building' AND maximum_occupants - current_number_of_occupants > 0");

			if($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
		}
		function getRoomidfour(){
			$building = "Building 4";
			$query = $this->db->query("SELECT room_id, maximum_occupants, current_number_of_occupants AS mo FROM rooms WHERE status = 1 AND building_number = '$building' AND maximum_occupants - current_number_of_occupants > 0");

			if($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
		}
		function getRoomidfive(){
			$building = "Building 5";
			$query = $this->db->query("SELECT room_id, maximum_occupants, current_number_of_occupants AS mo FROM rooms WHERE status = 1 AND building_number = '$building' AND maximum_occupants - current_number_of_occupants > 0");

			if($query->num_rows() > 0){
				return $query->result();
			}else{
				return NULL;
			}
		}

		


	}

?>