<?php 
	$partners = array();

	$partners_q = "SELECT * FROM partners";
	$db->run($partners_q);

	while ( $db->row($partners_q)) {
		
		$partner = array(
		    "id" => $db->data['id'],
		    "name" => $db->data['name'],
		    "logo" => $db->data['logo'],
		);

		array_push($partners, $partner);
	};
	$db->stop();