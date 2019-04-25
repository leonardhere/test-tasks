
<form method="POST" action="">
	<script>
	window.location.replace("/page/registration");
</script>
<section id="set_clients_data">

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
		<input type="hidden" id="volunteer" name="volunteer" value='0'>	
			<div class="formBlock">
					<div class="ddm_btn">
						<span>Анкета для взрослого</span>
						<i class="fas fa-angle-down"></i>
					</div>
				<div class="container">
					<p class="title">Анкета для взрослого</p>
					<label for="surname_">
						<span>Фамилия					</span>
						<input class="client_value" id="surname_" type="text"></label>
					<label for="name_">
						<span>Имя						</span>
						<input class="client_value" id="name_" type="text"></label>
					<label for="lastname_">
						<span>Отчество					</span>
						<input class="client_value" id="lastname_" type="text"></label>
					<label for="phone_number_">
						<span>Контактный номер</span>
						<input class="client_value" id="phone_number_" type="text"></label>
					<label for="email_">
						<span>Электронная почта</span>
						<input class="client_value" id="email_" type="email"></label>
					<label for="passport_number_" class="passport_number">
						<span>Серия и номер паспорта 	</span>
						<input class="client_value" id="passport_number_" type="text"></label>
					<label for="given_">
						<span>Кем выдан паспорт		</span>
						<textarea class="client_value" id="given_"></textarea></label>
					<label for="passport_date_">
						<span>Когда выдан паспорт		</span>
						<input class="client_value" id="passport_date_" type="date"></label>

					<label class="promo" for="promo_">
						<span>Персональный промо код</span>
						<input class="client_value" id="promo_"></label>

					<div class="pre_ordered form_btn">
						<input id="pre_order_" type="checkbox">
						<label for="pre_order_">У меня предварительная регистрация</label>				
					</div>			
					<div class="complete form_btn">
						<input id="complete_" type="checkbox">
						<label for="complete_">Готово!</label>				
					</div>				
				</div>
			</div>
			<div class="formBlock">
				<div class="ddm_btn">
					<span>Анкета для ребенка</span>
					<i class="fas fa-angle-down"></i>
				</div>			
				<div class="container">
					<p class="title">Анкета для ребенка</p>
					<label for="surname_">
						<span>Фамилия					</span>
						<input class="client_value" id="surname_" type="text"></label>
					<label for="name_">
						<span>Имя						</span>
						<input class="client_value" id="name_" type="text"></label>
					<label for="lastname_">
						<span>Отчество					</span>
						<input class="client_value" id="lastname_" type="text"></label>
					<label for="phone_number_">
						<span>Контактный номер</span>
						<input class="client_value" id="phone_number_" type="text"></label>
					<label for="passport_number_" class="passport_number">
						<span>номер свидетельства о рождении 	</span>
						<input class="client_value" id="passport_number_" type="text"></label>
					<div class="complete form_btn">
						<input id="complete_" type="checkbox">
						<label for="complete_">Готово!</label>				
					</div>				
				</div>
			</div>
			<div class="formBlock">
				<div class="ddm_btn">
					<span>Анкета для малыша</span>
					<i class="fas fa-angle-down"></i>
				</div>			
				<div class="container">
					<p class="title">Анкета для малыша</p>
					<label for="surname_">
						<span>Фамилия					</span>
						<input class="client_value" id="surname_" type="text"></label>
					<label for="name_">
						<span>Имя						</span>
						<input class="client_value" id="name_" type="text"></label>
					<label for="lastname_">
						<span>Отчество					</span>
						<input class="client_value" id="lastname_" type="text"></label>
					<label for="phone_number_">
						<span>Контактный номер</span>
						<input class="client_value" id="phone_number_" type="text"></label>
					<label for="passport_number_" class="passport_number">
						<span>номер свидетельства о рождении 	</span>
						<input class="client_value" id="passport_number_" type="text"></label>
					<div class="complete form_btn">
						<input id="complete_" type="checkbox">
						<label for="complete_">Готово!</label>				
					</div>				
				</div>
			</div>
		<input type="hidden" id="clientsCount" name="clientsCount" value="">
	

</section>
<div id="room">	
		<h2>Без проживания</h2>
		<div class="guests_cnt">
			<span> взрослый</span>
			<span class="fill_value">не заполнен</span>
		</div>		
			<div class="bed_icon"><i class="fas fa-bed"></i></div>
		<span class="room_name"></span>
			<div class="guests_cnt">
				<span>взрослый</span>
				<span class="fill_value">не заполнен</span>
			</div>
			
			<div class="guests_cnt">
				<span>ребенок</span>
				<span class="fill_value">не заполнен</span>
			</div>

			<div class="guests_cnt">
				<span>малыш</span>
				<span class="fill_value">не заполнен</span>
			</div>

		<p class="price"> р. </p>
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

	<input type="hidden" id="room_price"   name="room_price"   value='' >
	<input type="hidden" id="room_type_id" name="room_type_id" value='' >
</form>
<script src="/js/registrationForm.js"></script>