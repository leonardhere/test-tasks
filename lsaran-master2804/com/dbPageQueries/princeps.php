<?php 
	$princeps = array();

	$princeps_q = "SELECT * FROM princeps";
	$db->run($princeps_q);


	while ( $db->row($princeps_q)) {
		
		$princep = array(
		    "id" => $db->data['id'],
		    "icon" => $db->data['icon'],
		    "descr" => $db->data['descr']
		);

		array_push($princeps, $princep);
	};
	$db->stop();