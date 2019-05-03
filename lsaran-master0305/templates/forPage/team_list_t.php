<section id="team_list">

	<div id='scroll_container'>
		<p>Режиссер - постановщик:</p>
		<ul>
			<?php foreach ($director as $director_item) { ?>
				<li class="content">
					<?php echo $director_item['name_surname'] ?>
				</li>
			<?php } ?>
		</ul>
		<p>Авторы сценария:</p>
		<ul>
			<?php foreach ($writers as $writers_item) { ?>
				<li class="content">
					<?php echo $writers_item['name_surname'] ?>
				</li>
			<?php } ?>
		</ul>
		<p>Продюсеры:</p>
		<ul>
			<?php foreach ($producer as $producer_item) { ?>
				<li class="content">
					<?php echo $producer_item['name_surname'] ?>
				</li>
			<?php } ?>
		</ul>
		<p>Альтернативные сценарии для самых требовательных:  </p>
		<ul>
			<?php foreach ($writers_2 as $writers_2_item) { ?>
				<li class="content">
					<?php echo $writers_2_item['name_surname'] ?>
				</li>
			<?php } ?>
		</ul>
		<p>Кастинг каскадеров :</p>
		<ul>
			<?php foreach ($casting as $casting_item) { ?>
				<li class="content">
					<?php echo $casting_item['name_surname'] ?>
				</li>
			<?php } ?>
		</ul>
		<p>Композиторы:</p>
		<ul>
			<?php foreach ($сomposers as $сomposers_item) { ?>
				<li class="content">
					<?php echo $сomposers_item['name_surname'] ?>
				</li>
			<?php } ?>
		</ul>
		<p>Художники декораций:</p>
		<ul>
			<?php foreach ($artists as $artists_item) { ?>
				<li class="content">
					<?php echo $artists_item['name_surname'] ?>
				</li>
			<?php } ?>
		</ul>
		<p>Площадка для съемок и учет актеров:</p>
		<ul>
			<?php foreach ($area as $area_item) { ?>
				<li class="content">
					<?php echo $area_item['name_surname'] ?>
				</li>
			<?php } ?>
		</ul>
		<p>Художник по костюмам:</p>
		<ul>
			<?php foreach ($costume_designer as $costume_designer_item) { ?>
				<li class="content">
					<?php echo $costume_designer_item['name_surname'] ?>
				</li>
			<?php } ?>
		</ul>
		<p>Диспетчеры:</p>
		<ul>
			<?php foreach ($dispatchers as $dispatchers_item) { ?>
				<li class="content">
					<?php echo $dispatchers_item['name_surname'] ?>
				</li>
			<?php } ?>
		</ul>
		<p>Монтаж:</p>
		<ul>
			<?php foreach ($installation as $installation_item) { ?>
				<li class="content">
					<?php echo $installation_item['name_surname'] ?>
				</li>
			<?php } ?>
		</ul>
		<p>Редакторы:</p>
		<ul>
			<?php foreach ($editors as $editors_item) { ?>
				<li class="content">
					<?php echo $editors_item['name_surname'] ?>
				</li>
			<?php } ?>
		</ul>
		<p>Поддержка с воздуха:</p>
		<ul>
			<?php foreach ($air_support as $air_support_item) { ?>
				<li class="content">
					<?php echo $air_support_item['name_surname'] ?>
				</li>
			<?php } ?>
		</ul>
		<p>Поддержка с земли:</p>
		<ul>
			<?php foreach ($support_ground as $support_ground_item) { ?>
				<li class="content">
					<?php echo $support_ground_item['name_surname'] ?>
				</li>
			<?php } ?>
		</ul>
		<p>Романсы и финансы:</p>
		<ul>
			<?php foreach ($romance_finance as $romance_finance_item) { ?>
				<li class="content">
					<?php echo $romance_finance_item['name_surname'] ?>
				</li>
			<?php } ?>
		</ul>
		<p>Волонтеры - каскадеры:</p>
		<ul>
			<?php foreach ($volunteers_stuntmen as $volunteers_stuntmen_item) { ?>
				<li class="content">
					<?php echo $volunteers_stuntmen_item['name_surname'] ?>
				</li>
			<?php } ?>
		</ul>
		<p>В остальных ролях:</p>
		<ul>
				<li class="content">
					Все гости  Лсарана
				</li>
		</ul>
		<p>Фильм сделан не по заказу, а по зову сердца</p>
	</div>
	<div class="shadow">
		<h1>Наша команда</h1>
		<a class="full_inform" href="/page/team">
			Подробнее
		</a>
		
	</div>

</section>
<script src="/js/team_list.js"></script>