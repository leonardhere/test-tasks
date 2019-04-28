<?php 
	$team_participants = array();
	$team_participants_q = "
	SELECT DISTINCT 
	name, 
	surname, 
	image 
	FROM volunteers 
	order by surname
	";
	$db->run($team_participants_q);

	while ( $db->row($team_participants_q)) {
		
		$team_participant = array(
		    "name" => $db->data['name'],
		    "surname" => $db->data['surname'],
		    "img" => $db->data['image']
		);

		array_push($team_participants, $team_participant);
	};
	$db->stop();