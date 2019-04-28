	<section id="lectorSingl">
			<div class="description">
				<h1>
					<span><?php echo $lector['name'] ?></span>
					<span><?php echo $lector['surname']?></span>
				</h1>
				<hr class="separ">
				<p class="lection_descr">
					<p class="label"> Биография</p><br><br>
					<?php echo $lector['description'] ?>
				</p>				
			</div>
			<div class="image">
				<img src='/image/lectors/<?php echo $lector['img'] ?>' alt="">
				<p><?php $lector['part_year'] ?></p>
				<span></span>
			</div>

	</section>

	<link rel="stylesheet" href="/css/lectors_hist_single.css">
