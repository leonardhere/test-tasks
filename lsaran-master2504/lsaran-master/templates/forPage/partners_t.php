<ul id="partners">

		<?php foreach ($partners as $partner) { ?>
			<li class="content">
				<img src='../image/partners/<?php echo $partner['logo'] ?>' alt="">
				<span class="name"><?php echo $partner['name'] ?></span>
			</li>
		<?php } ?>
	</ul>