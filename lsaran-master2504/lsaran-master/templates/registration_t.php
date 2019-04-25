<form id="search_room" action="/page/registrationForm" method="POST" >	
<section>
	<h1>Регистрация Лсаран 2018</h1>
	<hr>
</section>
<section  style="background-color: #e4d4f9">
		<input type="hidden" name="formAction" value="generForms">
		<input type="hidden" name="room_price" id="room_price">		
		<h2>Однодневная регистрация на 26 или 27 октября (без заселения)
		<p style="color:red;">питание не включено</p>
		</h2>
		<hr style="width: 25%">
		<br>
		<div class="trigger volunteer">
			<div class="value volunteer">
				<label class="preorder" for="volunteer">
					<span>Перейти к регистрации</span>
					<input type="checkbox" id="volunteer" value="on" name="volunteer">					
				</label>			
			</div>
		</div>		
</section>

<section>
	
		<h2>Полная регистрация с проживанием 26-28 октября
				<p style="color:red;">питание не включено</p>
		</h2>
		<hr style="width: 25%">
		<br>
		<div class="trigger">
			<p>Взрослые (11 лет и старше)</p>
			<div class="value people" id="adult_cnt">
				<input type="radio" id="adult_cnt_1" value="1" name="adult_cnt" checked>
				<label for="adult_cnt_1">1 гость</label>
				<input type="radio" id="adult_cnt_2" value="2" name="adult_cnt">
				<label for="adult_cnt_2">2 гостя</label>
				<input type="radio" id="adult_cnt_3" value="3" name="adult_cnt">
				<label for="adult_cnt_3">3 гостя</label>
				<input type="radio" id="adult_cnt_4" value="4" name="adult_cnt">
				<label for="adult_cnt_4">4 гостя</label>				
			</div>	
		</div>
		<div class="trigger">
			<p>Дети (6 - 10 лет)</p>
			<div class="value people" id="cnt_chldrn_6_10">
				<input type="radio" id="cnt_chldrn_6_10_0" value="0" name="cnt_chldrn_6_10" checked>
				<label for="cnt_chldrn_6_10_0">0 гостей</label>
				<input type="radio" id="cnt_chldrn_6_10_1" value="1" name="cnt_chldrn_6_10">
				<label for="cnt_chldrn_6_10_1">1 гость</label>
				<input type="radio" id="cnt_chldrn_6_10_2" value="2" name="cnt_chldrn_6_10">
				<label for="cnt_chldrn_6_10_2">2 гостя</label>
				<input type="radio" id="cnt_chldrn_6_10_3" value="3" name="cnt_chldrn_6_10">
				<label for="cnt_chldrn_6_10_3">3 гостя</label>
			</div>
		</div>

		<div class="trigger">
			<p>Малыши (до 5 лет)</p>
			<div class="value people" id="cnt_chldrn_0_5">
				<input type="radio" id="cnt_chldrn_0_5_0" name="cnt_chldrn_0_5" value="0" checked>
				<label for="cnt_chldrn_0_5_0">0 гостей</label>
				<input type="radio" id="cnt_chldrn_0_5_1" name="cnt_chldrn_0_5" value="1">
				<label for="cnt_chldrn_0_5_1">1 гость</label>
				<input type="radio" id="cnt_chldrn_0_5_2" name="cnt_chldrn_0_5" value="2">
				<label for="cnt_chldrn_0_5_2">2 гостя</label>
				<input type="radio" id="cnt_chldrn_0_5_3" name="cnt_chldrn_0_5" value="3">
				<label for="cnt_chldrn_0_5_3">3 гостя</label>		
			</div>
		</div>
		<div class="trigger">		
			<p>тип кроватей</p>
			<div class="value" id="bed_cnt">
				<input type="radio" id="single_bed" value="2" name="bed_cnt" checked>
				<label for="single_bed">две односпальные</label>
				<input type="radio" id="king_size_bed" value="1" name="bed_cnt">
				<label for="king_size_bed">одна двуспальная</label>
			</div>
		</div>


		<button type="button" id="search_btn" class="submit">Поиск</button>


</section>
	<div id="rooms">
		
	</div>
	</form>
<script src="/js/registration.js"></script>