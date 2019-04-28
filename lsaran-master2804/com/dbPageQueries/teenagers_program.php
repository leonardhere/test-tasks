<?php 
	$teenagers_programs = array();

	$teenagers_programs_q = "SELECT * FROM ` teenagers_program`";
	$db->run($teenagers_programs_q);

	while ( $db->row($teenagers_programs_q)) {
		
		$teenagers_program = array(
		    "id" => $db->data['id'],
		    "name" => $db->data['name'],
		    "surname" => $db->data['surname'],
		    "image" => $db->data['image'],
		);
		
		array_push($teenagers_programs, $teenagers_program);
	};
	$db->stop();