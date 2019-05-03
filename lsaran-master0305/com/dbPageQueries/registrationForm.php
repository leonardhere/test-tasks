<?php
	if (isset($_POST['room_type_id'])) {
	    $rooms_q = "SELECT * FROM rooms where room_id = " .$_POST['room_type_id'].";";
	    $db->run($rooms_q);
		$db->row($rooms_q);

		$rooms_arr = array(
	            "name" =>                    $db->data["name"],
	            "rooms_cnt" =>               $db->data["rooms_cnt"],
	            "bed_cnt" =>                 $db->data["bed_cnt"],
	            "descr" =>                   $db->data["descr"],
	            "room_cnt_total" =>          $db->data["room_cnt_total"],
	            "room_cnt_available" =>      $db->data["room_cnt_available"]
	        );
	}