
<?php session_start();

define("INDEX", ""); // УСТАНОВКА КОНСТАНТЫ ГЛАВНОГО КОНТРОЛЛЕРА
require_once($_SERVER['DOCUMENT_ROOT']."/cfg/core.php"); // ПОДКЛЮЧЕНИЕ ЯДРА

// ПОДКЛЮЧЕНИЕ К БД
$db = new MyDB();
$db->connect();


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/css/admin.css">
</head>
<body>
	<h1>Добро пожаловать в уютную, но не оформленную админку</h1>
	<p>я обязательно сделаю ее красивее. Когда-нибудь... потом...</p>
	<a href="admin/lectors">Лекторы</a>
	<a href="admin/voluntears">Волонтеры</a>

	<?php 
		if ($_GET['option'] == "lectors") {
			include($_SERVER['DOCUMENT_ROOT']."/com/admin/lectors_adm_t.php");
		}
	?>

 <div id="modal">
 	<div id="modalContainer">
 		<img id="modalExit" src="image/icons/exit.png" alt="close">
 		<div id="modalContent">

 		</div>
 	</div>
</div>
<div class="button addArr addButton"></div>
<script src="/js/optimisation.js"></script>
<script src="/js/modal.js"></script>
</body>
</html>