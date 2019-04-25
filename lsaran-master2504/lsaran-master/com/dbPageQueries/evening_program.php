<?php 
	$evening_programs = array();

	$evening_programs_q = "SELECT * FROM evening_program";
	$db->run($evening_programs_q);

	while ( $db->row($evening_programs_q)) {
		
		$evening_program = array(
		    "id" => $db->data['id'],
		    "name" => $db->data['name'],
		    "surname" => $db->data['surname'],
		    "img" => $db->data['img'],
		    "type" => $db->data['type'],
		    "descr" => $db->data['descr']
		);

		array_push($evening_programs, $evening_program);
	};
	$db->stop();