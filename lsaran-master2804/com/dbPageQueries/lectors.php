<?php
if ($tab <> -1){
		$lector_q = "SELECT * FROM lectors where lector_id =".$tab." order by lector_surname;";
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

	}else{
		$lectors  = array();
		$lectors_q = "SELECT * FROM lectors where part_year = '2018' order by lector_surname;";
		$db->run($lectors_q);

		while ( $db->row($lectors_q)) {

			$lector = array(
			    "id" => $db->data['lector_id'],
			    "name" => $db->data['lector_name'],
			    "surname" => $db->data['lector_surname'],
			    "grade" => $db->data['lector_grade'],
			    "img" => $db->data['lector_img'],
			    "lection_title" => $db->data['lection_title']
			);

			array_push($lectors, $lector);
		};
		$db->stop();
		include ($_SERVER['DOCUMENT_ROOT'].$forPageTemp."/lectors/lectors_t.php");	
	};