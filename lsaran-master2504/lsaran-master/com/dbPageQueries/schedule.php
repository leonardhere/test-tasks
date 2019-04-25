<?php
$schedules = array();

	$schedule_q = "
	SELECT 
		a.day,
		a.lector_name,
		a.lection_title,
		a.time,
		a.room,
		b.label
	FROM schedule as a
	inner join schedule_rooms_labels as b
	on a.room = b.room_number
	";
	$db->run($schedule_q);
	while ( $db->row($schedule_q)) {
		
		$schedule = array(
		    "day" => $db->data['day'],
		    "room" => $db->data['room'],
		    "label" => $db->data['label'],
			"lector_name" => $db->data['lector_name'],
			"lection_title" => $db->data['lection_title'],
			"time" => $db->data['time']
		);
		array_push($schedules, $schedule);
	};
	$db->stop();