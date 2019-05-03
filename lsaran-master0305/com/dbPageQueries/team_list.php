<?php 
$director = array();
	$director_q = "SELECT * FROM volunteers where type = 'director'";
	$db->run($director_q);

	while ( $db->row($director_q)) {
		
		$director_item = array(
		    "id" => $db->data['id'],
		    "name_surname" => $db->data['name_surname'],
		    "type" => $db->data['type']
		);

		array_push($director, $director_item);
	};

	$writers = array();

	$writers_q = "SELECT * FROM volunteers where type = 'writers'";
	$db->run($writers_q);

	while ( $db->row($writers_q)) {
		
		$writers_item = array(
		    "id" => $db->data['id'],
		    "name_surname" => $db->data['name_surname'],
		    "type" => $db->data['type']
		);

		array_push($writers, $writers_item);
	};

	$producer = array();

	$producer_q = "SELECT * FROM volunteers where type = 'producer'";
	$db->run($producer_q);

	while ( $db->row($producer_q)) {
		
		$producer_item = array(
		    "id" => $db->data['id'],
		    "name_surname" => $db->data['name_surname'],
		    "type" => $db->data['type']
		);

		array_push($producer, $producer_item);
	};

	$writers_2 = array();

	$writers_2_q = "SELECT * FROM volunteers where type = 'writers_2'";
	$db->run($writers_2_q);

	while ( $db->row($writers_2_q)) {
		
		$writers_2_item = array(
		    "id" => $db->data['id'],
		    "name_surname" => $db->data['name_surname'],
		    "type" => $db->data['type']
		);

		array_push($writers_2, $writers_2_item);
	};

	$сomposers = array();

	$сomposers_q = "SELECT * FROM volunteers where type = 'сomposers'";
	$db->run($сomposers_q);

	while ( $db->row($сomposers_q)) {
		
		$сomposers_item = array(
		    "id" => $db->data['id'],
		    "name_surname" => $db->data['name_surname'],
		    "type" => $db->data['type']
		);

		array_push($сomposers, $сomposers_item);
	};

	$artists = array();

	$artists_q = "SELECT * FROM volunteers where type = 'artists'";
	$db->run($artists_q);

	while ( $db->row($artists_q)) {
		
		$artists_item = array(
		    "id" => $db->data['id'],
		    "name_surname" => $db->data['name_surname'],
		    "type" => $db->data['type']
		);

		array_push($artists, $artists_item);
	};

	$area = array();

	$area_q = "SELECT * FROM volunteers where type = 'area'";
	$db->run($area_q);

	while ( $db->row($area_q)) {
		
		$area_item = array(
		    "id" => $db->data['id'],
		    "name_surname" => $db->data['name_surname'],
		    "type" => $db->data['type']
		);

		array_push($area, $area_item);
	};

	$costume_designer = array();

	$costume_designer_q = "SELECT * FROM volunteers where type = 'costume_designer'";
	$db->run($costume_designer_q);

	while ( $db->row($costume_designer_q)) {
		
		$costume_designer_item = array(
		    "id" => $db->data['id'],
		    "name_surname" => $db->data['name_surname'],
		    "type" => $db->data['type']
		);

		array_push($costume_designer, $costume_designer_item);
	};

	$dispatchers = array();

	$dispatchers_q = "SELECT * FROM volunteers where type = 'dispatchers'";
	$db->run($dispatchers_q);

	while ( $db->row($dispatchers_q)) {
		
		$dispatchers_item = array(
		    "id" => $db->data['id'],
		    "name_surname" => $db->data['name_surname'],
		    "type" => $db->data['type']
		);

		array_push($dispatchers, $dispatchers_item);
	};


	$installation = array();

	$installation_q = "SELECT * FROM volunteers where type = 'installation'";
	$db->run($installation_q);

	while ( $db->row($installation_q)) {
		
		$installation_item = array(
		    "id" => $db->data['id'],
		    "name_surname" => $db->data['name_surname'],
		    "type" => $db->data['type']
		);

		array_push($installation, $installation_item);
	};


	$editors = array();

	$editors_q = "SELECT * FROM volunteers where type = 'editors'";
	$db->run($editors_q);

	while ( $db->row($editors_q)) {
		
		$editors_item = array(
		    "id" => $db->data['id'],
		    "name_surname" => $db->data['name_surname'],
		    "type" => $db->data['type']
		);

		array_push($editors, $editors_item);
	};


	$air_support = array();

	$air_support_q = "SELECT * FROM volunteers where type = 'air_support'";
	$db->run($air_support_q);

	while ( $db->row($air_support_q)) {
		
		$air_support_item = array(
		    "id" => $db->data['id'],
		    "name_surname" => $db->data['name_surname'],
		    "type" => $db->data['type']
		);

		array_push($air_support, $air_support_item);
	};



	$support_ground = array();

	$support_ground_q = "SELECT * FROM volunteers where type = 'support_ground'";
	$db->run($support_ground_q);

	while ( $db->row($support_ground_q)) {
		
		$support_ground_item = array(
		    "id" => $db->data['id'],
		    "name_surname" => $db->data['name_surname'],
		    "type" => $db->data['type']
		);

		array_push($support_ground, $support_ground_item);
	};


	$romance_finance = array();

	$romance_finance_q = "SELECT * FROM volunteers where type = 'romance_finance'";
	$db->run($romance_finance_q);

	while ( $db->row($romance_finance_q)) {
		
		$romance_finance_item = array(
		    "id" => $db->data['id'],
		    "name_surname" => $db->data['name_surname'],
		    "type" => $db->data['type']
		);

		array_push($romance_finance, $romance_finance_item);
	};				


	$volunteers_stuntmen = array();

	$volunteers_stuntmen_q = "SELECT * FROM volunteers where type = 'volunteers_stuntmen'";
	$db->run($volunteers_stuntmen_q);

	while ( $db->row($volunteers_stuntmen_q)) {
		
		$volunteers_stuntmen_item = array(
		    "id" => $db->data['id'],
		    "name_surname" => $db->data['name_surname'],
		    "type" => $db->data['type']
		);

		array_push($volunteers_stuntmen, $volunteers_stuntmen_item);
	};											


	$casting = array();
	$casting_q = "SELECT * FROM volunteers where type = 'casting'";
	$db->run($casting_q);

	while ( $db->row($casting_q)) {
		
		$casting_item = array(
		    "id" => $db->data['id'],
		    "name_surname" => $db->data['name_surname'],
		    "type" => $db->data['type']
		);

		array_push($casting, $casting_item);
	};