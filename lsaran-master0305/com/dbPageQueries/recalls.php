<?php
	$recalls  = array();
	$recalls_q = "SELECT * FROM recalls";
	$db->run($recalls_q);

	while ( $db->row($recalls_q)) {
		
		$recall = array(
		    "id" => $db->data['recall_id'],
		    "name" => $db->data['recall_name'],
		    "img" => $db->data['recall_img'],
		    "meaning" => $db->data['recall_meaning']
		);

		array_push($recalls, $recall);
	};
	$db->stop();