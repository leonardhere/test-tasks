<h1>Отзывы</h1>
<ul id="recalls">
	<?php foreach ($recalls as $recall) { ?>
		<li class="content">
			<div class="img_cont">
				<img src='/image/recall/<?php echo $recall['img'] ?>' alt="">				
			</div>
			<span class="name"><?php echo $recall['name'] ?></span>
			<span class="descr"><?php echo $recall['meaning'] ?></span>
		</li>
	<?php } ?>
</ul>