<?php include ($_SERVER['DOCUMENT_ROOT']."/preview.php"); ?>
<section id="princeps">
	<h1>Базовые принципы Лсаран</h1>
		<ul>

			<?php foreach ($princeps as $princep) { ?>
				<li class="content">
					<div class="icon">
						<?php echo $princep['icon'] ?>				
					</div>
					<span class="descr"><?php echo $princep['descr'] ?></span>
				</li>
			<?php } ?>
		</ul>
	
</section>	
<script src="/js/time-counter.js"></script>