	<section id="evening_programs">
		<h1>
			Вечерняя программа
		</h1>
		<br>
		<p class="descr_h">
			Пятница, 26 октября:
		</p>
			<ul class="descr">
				<li>Проведение поэтического вечера.</li>	
				<li>Проведение большой игры в формате «Что? Где? Когда?».</li>
				<li>SpeedNetting </li>
				<li>Проведение настольных игр.</li>
			</ul>

		<p class="descr_h">
			Суббота, 27 октября:
		</p>		
			<ul class="descr">
				<li>Презентация проектов/исследований участников конференции (постерная сессия).</li>	
				<li>Организация концерта.</li>
				<li>Проведение интерактивной двухдневной игры «киллер».</li>
			</ul>

		<h2>Поэтический вечер <span class="subH">| вечерняя программа</span></h2>
		<ul>

			<?php foreach ($evening_programs as $party) { ?>
				<?php if ($party['type'] == 'P'): ?>
					
				<li class="content">
					<div class="party_img">
					<img src='/image/evening_programs/<?php echo $party['img'] ?>' alt="">
					<span class="name" ><span><span class="name_"><?php echo $party['name'] ?></span></span>
										<span><span class="name_"><?php echo $party['surname'] ?></span></span>
					</span>							
					</div>
					<span class="title"><?php echo $party['lection_title'] ?></span>
				</li>
				<?php endif ?>
			<?php } ?>
		</ul>

		<h2>Участники концерта <span class="subH">| вечерняя программа</span></h2>
		<ul>

			<?php foreach ($evening_programs as $party) { ?>
				<?php if ($party['type'] == 'C'): ?>
					
				<li class="content">
					<div class="party_img">
					<img src='/image/evening_programs/<?php echo $party['img'] ?>' alt="">
					<span class="name" >
						<?php if ($party['name'] != ''): ?>
							<span>
								<span class="name_"><?php echo $party['name'] ?></span>
							</span>
						<?php endif ?>

										<span><span class="name_"><?php echo $party['surname'] ?></span></span>
					</span>							
					</div>
					<span class="title"><?php echo $party['lection_title'] ?></span>
				</li>
				<?php endif ?>
			<?php } ?>
		</ul>

	</section>