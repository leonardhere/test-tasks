
<?php defined('INDEX') OR die('Прямой доступ к странице запрещён!');
?>

<form method="POST" action="/db_action/send_data.php">

<?php  
	$all_cnt = $_POST['adult_cnt'] + $_POST['cnt_chldrn_6_10'] + $_POST['cnt_chldrn_0_5'];
?>
<?php if ($all_cnt == 0 and $_POST['volunteer'] != 'on'): ?>
	<script>
	window.location.replace("/page/registration");
</script>
<?php endif ?>
<section id="set_clients_data">

	<?php if ($_POST['volunteer'] == 'on') {?>
		<input type="hidden" id="volunteer" name="volunteer" value='1' >
		<div class="formBlock volunteer">
				<div class="container">
					<p class="title">Регистрация на один день (без проживания)</p>
					<label for="surname_0">
						<span>Фамилия					</span>
						<input class="client_value" id="surname_0" type="text">
					</label>
					<label for="name_0">
						<span>Имя						</span>
						<input class="client_value" id="name_0" type="text">
					</label>
					<label for="phone_number_0">
						<span>Контактный номер</span>
						<input class="client_value" id="phone_number_0" type="text">
					</label>
					<label for="email_0">
						<span>Электронная почта</span>
						<input class="client_value" id="email_0" type="email">
					</label>	
						<p>Возраст</p>
	
						<div class="form_btn">
							<input checked id="age_0_0" value='le10' name="age" type="radio">
							<label for="age_0_0">до 10 лет (включительно)</label>				
						</div>		
						<div class="form_btn">
							<input id="age_1_0" value='g10' name="age" type="radio">
							<label for="age_1_0">с 11 лет</label>				
						</div>							

						<p>День прибывания</p>
	
						<div class="form_btn">
							<input checked id="day_0_0" value='26' name="day" type="radio">
							<label for="day_0_0">26 (пятница)</label>				
						</div>		
						<div class="form_btn">
							<input id="day_1_0" value='27' name="day" type="radio">
							<label for="day_1_0">27 (суббота)</label>				
						</div>							
					
					<div class="complete form_btn">
						<input id="complete_0" type="checkbox">
						<label for="complete_0">Готово!</label>				
					</div>									
									
				</div>
			</div>	
			<input type="hidden" name="clientsCount" id="clientsCount" value="1">				
	<?php } else {	 ?>
		<input type="hidden" id="volunteer" name="volunteer" value='0'>		
		
		<?php $indMain = 0; ?>

		<?php for ($ind = 0; $ind < $_POST['adult_cnt']; $ind++) { ?>
			<div class="formBlock <?php echo ($all_cnt == 1) ? 'single_customer' : ''; ?>">
				<?php if ($all_cnt != 1): ?>
					<div class="ddm_btn">
						<span>Анкета для взрослого</span>
						<i class="fas fa-angle-down"></i>
					</div>			
				<?php endif ?>
				<div class="container">
					<p class="title">Анкета для взрослого</p>
					<label for="surname_<?php echo $ind ?>">
						<span>Фамилия					</span>
						<input class="client_value" id="surname_<?php echo $ind ?>" type="text"></label>
					<label for="name_<?php echo $ind ?>">
						<span>Имя						</span>
						<input class="client_value" id="name_<?php echo $ind ?>" type="text"></label>
					<label for="lastname_<?php echo $ind ?>">
						<span>Отчество					</span>
						<input class="client_value" id="lastname_<?php echo $ind ?>" type="text"></label>
					<label for="phone_number_<?php echo $ind ?>">
						<span>Контактный номер</span>
						<input class="client_value" id="phone_number_<?php echo $ind ?>" type="text"></label>
					<label for="email_<?php echo $ind ?>">
						<span>Электронная почта</span>
						<input class="client_value" id="email_<?php echo $ind ?>" type="email"></label>
					<label for="passport_number_<?php echo $ind ?>" class="passport_number">
						<span>Серия и номер паспорта 	</span>
						<input class="client_value" id="passport_number_<?php echo $ind ?>" type="text"></label>
					<label for="given_<?php echo $ind ?>">
						<span>Кем выдан паспорт		</span>
						<textarea class="client_value" id="given_<?php echo $ind ?>"></textarea></label>
					<label for="passport_date_<?php echo $ind ?>">
						<span>Когда выдан паспорт		</span>
						<input class="client_value" id="passport_date_<?php echo $ind ?>" type="date"></label>

					<label class="promo" for="promo_<?php echo $ind ?>">
						<span>Персональный промо код</span>
						<input class="client_value" id="promo_<?php echo $ind ?>"></label>

					<div class="pre_ordered form_btn">
						<input id="pre_order_<?php echo $ind ?>" type="checkbox">
						<label for="pre_order_<?php echo $ind ?>">У меня предварительная регистрация</label>				
					</div>			
					<div class="complete form_btn">
						<input id="complete_<?php echo $ind ?>" type="checkbox">
						<label for="complete_<?php echo $ind ?>">Готово!</label>				
					</div>				
				</div>
			</div>
		<?php } ?>
		<?php $indMain =  $ind; ?>

		<?php for ($ind = $indMain; $ind < $indMain + (int)$_POST['cnt_chldrn_6_10']; $ind++) { ?>
			<div class="formBlock">
				<div class="ddm_btn">
					<span>Анкета для ребенка</span>
					<i class="fas fa-angle-down"></i>
				</div>			
				<div class="container">
					<p class="title">Анкета для ребенка</p>
					<label for="surname_<?php echo $ind ?>">
						<span>Фамилия					</span>
						<input class="client_value" id="surname_<?php echo $ind ?>" type="text"></label>
					<label for="name_<?php echo $ind ?>">
						<span>Имя						</span>
						<input class="client_value" id="name_<?php echo $ind ?>" type="text"></label>
					<label for="lastname_<?php echo $ind ?>">
						<span>Отчество					</span>
						<input class="client_value" id="lastname_<?php echo $ind ?>" type="text"></label>
					<label for="phone_number_<?php echo $ind ?>">
						<span>Контактный номер</span>
						<input class="client_value" id="phone_number_<?php echo $ind ?>" type="text"></label>
					<label for="passport_number_<?php echo $ind ?>" class="passport_number">
						<span>номер свидетельства о рождении 	</span>
						<input class="client_value" id="passport_number_<?php echo $ind ?>" type="text"></label>
					<div class="complete form_btn">
						<input id="complete_<?php echo $ind ?>" type="checkbox">
						<label for="complete_<?php echo $ind ?>">Готово!</label>				
					</div>				
				</div>
			</div>
		<?php } ?>	
		<?php $indMain =  $ind; ?>
		
		<?php for ($ind = $indMain; $ind < $indMain + (int)$_POST['cnt_chldrn_0_5']; $ind++) { ?>
			<div class="formBlock">
				<div class="ddm_btn">
					<span>Анкета для малыша</span>
					<i class="fas fa-angle-down"></i>
				</div>			
				<div class="container">
					<p class="title">Анкета для малыша</p>
					<label for="surname_<?php echo $ind ?>">
						<span>Фамилия					</span>
						<input class="client_value" id="surname_<?php echo $ind ?>" type="text"></label>
					<label for="name_<?php echo $ind ?>">
						<span>Имя						</span>
						<input class="client_value" id="name_<?php echo $ind ?>" type="text"></label>
					<label for="lastname_<?php echo $ind ?>">
						<span>Отчество					</span>
						<input class="client_value" id="lastname_<?php echo $ind ?>" type="text"></label>
					<label for="phone_number_<?php echo $ind ?>">
						<span>Контактный номер</span>
						<input class="client_value" id="phone_number_<?php echo $ind ?>" type="text"></label>
					<label for="passport_number_<?php echo $ind ?>" class="passport_number">
						<span>номер свидетельства о рождении 	</span>
						<input class="client_value" id="passport_number_<?php echo $ind ?>" type="text"></label>
					<div class="complete form_btn">
						<input id="complete_<?php echo $ind ?>" type="checkbox">
						<label for="complete_<?php echo $ind ?>">Готово!</label>				
					</div>				
				</div>
			</div>
		<?php } ?>		
		<?php $indMain =  $ind; ?>

		<input type="hidden" id="clientsCount" name="clientsCount" value="<?php echo $indMain; ?>">

	<?php } ?>
	

</section>
<div id="room">



	<?php if ($_POST['volunteer'] == 'on'): ?>		
		<h2>Без проживания</h2>
		<div class="guests_cnt">
			<span> <?php echo $i ?> взрослый</span>
			<span class="fill_value">не заполнен</span>
		</div>		
	<?php else: ?>
		<?php for ($i=0; $i < $rooms_arr['bed_cnt'] ; $i++) { ?>
			<div class="bed_icon"><i class="fas fa-bed"></i></div>
		<?php } ?>
		<span class="room_name"><?php echo $rooms_arr['name']; ?></span>

		<?php for ($i=1; $i <= $_POST['adult_cnt'] ; $i++) { ?>
			<div class="guests_cnt">
				<span> <?php echo $i ?> взрослый</span>
				<span class="fill_value">не заполнен</span>
			</div>
		<?php } ?>


		<?php for ($i=1; $i <= $_POST['cnt_chldrn_6_10'] ; $i++) { ?>
			
			<div class="guests_cnt">
				<span> <?php echo $i ?> ребенок</span>
				<span class="fill_value">не заполнен</span>
			</div>
		<?php } ?>


		<?php for ($i=1; $i <= $_POST['cnt_chldrn_0_5'] ; $i++) { ?>
			<div class="guests_cnt">
				<span> <?php echo $i ?> малыш</span>
				<span class="fill_value">не заполнен</span>
			</div>		
		<?php } ?>
	<?php endif ?>

		<p class="price"> <?php echo $_POST['room_price']; ?> р. </p>
	<div>
		<input id="user_agr" type="checkbox">
		<label for="user_agr">принимаю <a target="_blank" href="/page/user_agreement">пользовательское соглашение</a></label>
	</div>
	<div>
		<input id="pers_inf" type="checkbox">
		<label for="pers_inf">согласен с обработкой <a target="_blank" href="/page/personal_data">персональных данных</a></label>
	</div>

	<hr>
	<button type="button" disabled="disabled" id='pay_btn' class="submit">Оплатить</button>

</div>

	<input type="hidden" id="room_price"   name="room_price"   value='<?php echo $_POST['room_price']; ?>' >
	<input type="hidden" id="room_type_id" name="room_type_id" value='<?php echo $_POST['room_type_id']; ?>' >
</form>
<script src="/js/registrationForm.js"></script>