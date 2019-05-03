<?php

	if ($year <> -1){
		if ($tab  <> -1){
			$lector_q = " SELECT * FROM lectors "
			."where lector_id = " . $tab . " ;" ;
			$db->run($lector_q);
			$db->row($lector_q);
			$lector = array(
				"id" => $db->data['lector_id'],
		    	"name" => $db->data['lector_name'],
		    	"surname" => $db->data['lector_surname'],
		    	"grade" => $db->data['lector_grade'],
		    	"img" => $db->data['lector_img'],
		    	"lection_title" => $db->data['lection_title'],
		    	"lection_descr" => $db->data['lection_descr'],
		    	"similar_id" => $db->data['similar_id'],
		    	"bio" => ($db->data['dataProcAgreFlg'] == 1) ? $db->data['bio'] : "",
		    	"work" => $db->data['work']
			);
			$db->stop();
			include ($_SERVER['DOCUMENT_ROOT'].$forPageTemp."/lectors/lectorSingl_t.php");	
		} else{
			$lectors  = array();
			$lectors_q = "SELECT * FROM lectors "
			."where part_year = ". $year." ;";
			$db->run($lectors_q);


			while ( $db->row($lectors_q)) {

				$lector = array(
					"id" => $db->data['lector_id'],
		    		"name" => $db->data['lector_name'],
		    		"surname" => $db->data['lector_surname'],
		    		"description" => $db->data['lection_title'],
		    		"img" => $db->data['lector_img']
				);

				array_push($lectors, $lector);
			};
			$db->stop();
			include ($_SERVER['DOCUMENT_ROOT'].$forPageTemp."/lectors/lectors_hist.php");	
		};

	} else{

		$yearList  = array();
		$yearLists = array();

		$year_q = " SELECT * FROM history_years";
		$db->run($year_q);

		while ( $db->row($year_q)) {
			$yearList = array(
				    "id" => $db->data['id'],
				    "year" => $db->data['years'],
				    "image" => $db->data['image']
			);
			array_push($yearLists, $yearList);
		};
		$db->stop();

		include ($_SERVER['DOCUMENT_ROOT'].$forPageTemp."/lectors/lectors_hist_list.php");	
	
	}