
<?php defined('INDEX') OR die('Прямой доступ к странице запрещён!');
/* КОМПОНЕНТ СТРАНИЦЫ */

$lectors = array();
$recalls  = array();
$schedules = array();
$partners = array();


include($_SERVER['DOCUMENT_ROOT']."/templates/header.php");


$lectors_q = "SELECT * FROM lectors";
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


$recalls_q = "SELECT * FROM recalls";
$db->run($recalls_q);

while ( $db->row($recalls_q)) {
	
	$recall = array(
	    "id" => $db->data['recall_id'],
	    "name" => $db->data['recall_name'],
	    "recall_year" => $db->data['recall_year'],
	    "img" => $db->data['recall_img'],
	    "meaning" => $db->data['recall_meaning']
	);

	array_push($recalls, $recall);
};
$db->stop();

$schedule_q = "SELECT * FROM schedule";
$db->run($schedule_q);

while ( $db->row($schedule_q)) {
	
	$schedule = array(
	    "id" => $db->data['id'],
	    "day" => $db->data['day'],
	    "room" => $db->data['room']
	);

	array_push($schedules, $schedule);
};
$db->stop();


$partners_q = "SELECT * FROM partners";
$db->run($partners_q);

while ( $db->row($partners_q)) {
	
	$partner = array(
	    "id" => $db->data['id'],
	    "logo" => $db->data['logo']
	);

	array_push($partners, $partner);
};
$db->stop();

include ($_SERVER['DOCUMENT_ROOT']."/templates/home_t.php");
include($_SERVER['DOCUMENT_ROOT']."/templates/footer.php");
// ПЕРЕМЕННЫЕ КОМПОНЕНТА


// ЕСЛИ СТРАНИЦЫ НЕ СУЩЕСТВУЕТ
/*if (!$id) {
header("HTTP/1.1 404 Not Found");
$component = "ОШИБКА 404! Данной страницы не существует";
}*/
$db->stop();