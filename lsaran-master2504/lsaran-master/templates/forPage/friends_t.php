	<section>
		
	<h1>Наши друзья</h1>

	<div>

		<p>
			Наши друзья – это частные лица, фонды и компании, которые помогают команде Лсарана в организации конференции, предоставляют финансовую и информационную поддержку. 
		</p>

		<p>
			Благодаря их помощи мы можем арендовать аудитории для проведения конференции; обеспечить техническое оснащение лекций, концертов и мастер – классов, организовать автобусы для проезда участников, субсидировать проживание лекторов и волонтеров и многое другое 
		</p>


		<p>
			Мы благодарим всех тех, кто уже помог конференции Лсаран 2018:
		</p>


		
	</div>
	<hr class="brd">
	<h2>Спонсоры:</h2>
	<ul  class="sponsors">

		<?php foreach ($sponsors as $sponsor) { ?>
			<li class="content">
				<span class="name"><?php echo $sponsor['name'] ?></span>
				<span class="surname"><?php echo $sponsor['surname'] ?></span>
			</li>
		<?php } ?>
	</ul>
	<h2>Партнеры:</h2>
	<ul  class="partners">
		<?php foreach ($partners as $partner) { ?>
			<?php if ($partner['inform_flg'] == 0): ?>
				
				<li class="content">
					<div class="img_cont">
						<img src='/image/partners/<?php echo $partner['logo'] ?>' alt="">
					</div>
					<div class="inform">
						<span class="brand"><?php echo $partner['brand'] ?></span>
						<span class="descr"><?php echo $partner['descr'] ?></span>
					</div>
				</li>
			<?php endif ?>
		<?php } ?>	
	</ul>

	<h2>Информационные партнеры:</h2>
	<ul  class="partners">
		<?php foreach ($partners as $partner) { ?>
			<?php echo $partner['inform_flg']; ?>
			<?php if ($partner['inform_flg'] == 1): ?>			
				<li class="content">
					<div class="img_cont">
						<img src='/image/partners/<?php echo $partner['logo'] ?>' alt="">
					</div>
					<div class="inform">
						<span class="brand"><?php echo $partner['brand'] ?></span>
						<span class="descr"><?php echo $partner['descr'] ?></span>
					</div>
				</li>
			<?php endif ?>
		<?php } ?>			

	</ul>

	</section>