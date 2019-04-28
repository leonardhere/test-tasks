<?php
/*ini_set('display_errors', 1);
error_reporting(E_ALL);*/
?>

<?php session_start();

define("INDEX", ""); // УСТАНОВКА КОНСТАНТЫ ГЛАВНОГО КОНТРОЛЛЕРА
require_once($_SERVER['DOCUMENT_ROOT']."/cfg/core.php"); // ПОДКЛЮЧЕНИЕ ЯДРА

// ПОДКЛЮЧЕНИЕ К БД
$db = new MyDB();
$db->connect();

$menu_arr = array();

$menu_q = "SELECT * FROM menu where par_id = -1 and active_flg = 'Y';";
$db->run($menu_q);

while ( $db->row($menu_q)) {
	
	$menu_item = array(
		"id" => $db->data["id"],
		"par_id" => $db->data["par_id"],
		"label" => $db->data["label"],
		"wrap" => $db->data["wrap"],
		"link" => $db->data["link"],
		"presubitems" => array()
	);

	array_push($menu_arr, $menu_item);
};
$db->stop();

foreach ($menu_arr as $menu_item) {
	if ($menu_item["wrap"] == "Y") {
		$menu_item_q = "SELECT * FROM menu where par_id = " . $menu_item["id"]." and active_flg = 'Y';";
		$db->run($menu_item_q);

		while ( $db->row($menu_item_q)) {
			
			$menu_item_pre = array(
				"id" => $db->data["id"],
				"par_id" => $db->data["par_id"],
				"label" => $db->data["label"],
				"wrap" => $db->data["wrap"],
				"link" => $db->data["link"]
			);

			array_push($menu_arr[$menu_item['id']-1]["presubitems"], $menu_item_pre);
			/*доработать*/

		};
		$db->stop();
	}
}

if ($_POST['formAction'] == 'addClient') {
	include($_SERVER['DOCUMENT_ROOT']."/db_action/addClient.php");	
}


switch ($_GET['option']) {
case "admin":
include($_SERVER['DOCUMENT_ROOT']."/com/admin/admin.php");
break;
case "page":
include($_SERVER['DOCUMENT_ROOT']."/com/page.php");
break;
case "wo_handler":
include($_SERVER['DOCUMENT_ROOT']."/db_action/transaction_result.php");
break;
default:
include($_SERVER['DOCUMENT_ROOT']."/com/home.php");
break;
include($_SERVER['DOCUMENT_ROOT']."/footer.php");


}
$db->close();

