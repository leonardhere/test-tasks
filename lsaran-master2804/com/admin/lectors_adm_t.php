<?php defined('INDEX') OR die('Прямой доступ к странице запрещён!');
/* КОМПОНЕНТ СТРАНИЦЫ */

$lector_arr = array();

$lector_q = "SELECT * FROM lectors";
$db->run($lector_q);

while ( $db->row($lector_q)) {
	
	$lector_item = array(
		"lector_id" => 		$db->data["lector_id"],
		"lector_img" => 	$db->data["lector_img"],
		"lector_name" => 	$db->data["lector_name"],
		"lector_surname" => $db->data["lector_surname"],
		"bio" => 			$db->data["bio"],
		"lection_title" => 	$db->data["lection_title"],
		"lection_descr" => 	$db->data["lection_descr"]
	);

	array_push($lector_arr, $lector_item);
};
$db->stop();
?>

	<h2> Лекторы </h2>

	<table>
		<tr>
				<td>Идентификатор</td>
				<td>аватарка</td>
				<td>Имя</td>
				<td>Фамилия</td>
				<td>Описание(БИО)</td>
				<td>Тема лекции</td>
				<td>Описание лекции</td>
		</tr>
		<?php foreach ($lector_arr as $lector) {?>
			<tr>
				<td><?php echo $lector["lector_id"] ?>		</td>
				<td><?php echo $lector["lector_img"] ?>		</td>
				<td><?php echo $lector["lector_name"] ?>	</td>
				<td><?php echo $lector["lector_surname"] ?>	</td>
				<td><?php echo $lector["bio"] ?>			</td>
				<td><?php echo $lector["lection_title"] ?>	</td>
				<td><?php echo $lector["lection_descr"] ?>	</td>
				<td><p class="button changeArr" 
					   data-id="<?php echo $lector["lector_id"] ?>"> 
						Внести изменения
					</p>
					<p class="button buttonDel deleteArr" 
					   data-id="<?php echo $lector["lector_id"] ?>"> 
						Удалить
					</p>
				</td>
			</tr>
		<?php } ?>
	</table>