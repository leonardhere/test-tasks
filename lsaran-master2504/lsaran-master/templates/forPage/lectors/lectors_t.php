	<section id="lectors">
		<h1>Лекторы <span class="subH">2018</span></h1>
		<ul>
			<?php foreach ($lectors as $lector) { ?>
				<li class="content">
					<a href=/page/lectors/<?php echo $lector['id'] ?>>
						<div class="lector_img">
						<img src='/image/lectors/<?php echo $lector['img'] ?>' alt="">
						<span class="name" ><span><span class="name_"><?php echo $lector['name'] ?></span></span>
											<span><span class="name_"><?php echo $lector['surname'] ?></span></span>
						</span>							
						</div>
						<span class="title"><?php echo $lector['lection_title'] ?></span>
					</a>
				</li>
			<?php } ?>
		</ul>
	</section>