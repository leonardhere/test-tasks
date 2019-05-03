	<section id="lectorSingl">
			<div class="description">
				<span class="label"> Биография</span>
				<h1>
					<span><?php echo $lector['name'] ?></span>
					<span><?php echo $lector['surname']?></span>
				</h1>
				<p><?php echo $lector['bio'] ?></p>
				<hr class="separ">
				<?php echo $lector['work'] ?>
				<span class="label">Тема лекции</span>
				<h2 class="title"><?php echo $lector['lection_title'] ?></h2>
				<p class="lection_descr">
					<?php echo $lector['lection_descr'] ?>
				</p>				
			</div>
			<div class="image">
				<img src='/image/lectors/<?php echo $lector['img'] ?>' alt="">
			</div>

	</section>

	<section id="lectors">
	<link rel="stylesheet" href="/css/lectorSingl.css">
	<?php if (isset($similar_lectors[0])) {?>
		<h2>Похожие темы</h2>
		<ul>
			<?php foreach ($similar_lectors as $similar_lector) { ?>
					<li class="content">
						<a href=/page/lectors/<?php echo $similar_lector['id'] ?>>
						<div class="lector_img">
						<img src='/image/lectors/<?php echo $similar_lector['img'] ?>' alt="">
						<span class="name" ><span><span class="name_"><?php echo $similar_lector['name'] ?></span></span>
											<span><span class="name_"><?php echo $similar_lector['surname'] ?></span></span>
						</span>							
						</div>
						<span class="descr"><?php echo $similar_lector['grade'] ?></span>
						<span class="title"><?php echo $similar_lector['lection_title'] ?></span>
						</a>
					</li>
			<?php } ?>
		</ul>	
	<?php } ?>		
	</section>
