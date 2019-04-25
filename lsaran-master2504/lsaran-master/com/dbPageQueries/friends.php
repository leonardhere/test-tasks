<?php	
	$sponsors = array();

	$sponsors_q = "SELECT * FROM sponsors";
	$db->run($sponsors_q);

	while ( $db->row($sponsors_q)) {
		
		$sponsor = array(
		    "id" => $db->data['id'],
		    "name" => $db->data['name'],
		    "surname" => $db->data['surname'],
		);

		array_push($sponsors, $sponsor);
	};
	$db->stop();

	$partners = array();

	$partners_q = "SELECT * FROM partners";
	$db->run($partners_q);

	while ( $db->row($partners_q)) {
		
		$partner = array(
		    "id" => $db->data['id'],
		    "logo" => $db->data['logo'],
		    "brand" => $db->data['brand'],
		    "descr" => $db->data['descr'],
		    "inform_flg" => $db->data['inform_flg']
		);

		array_push($partners, $partner);
	};
	$db->stop();