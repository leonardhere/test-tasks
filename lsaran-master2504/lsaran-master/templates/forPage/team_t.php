<!-- <script>
	window.location.replace("/");
</script> -->
<section>
		<h1>Наша команда <span class="subH">все</span></h1>
		<ul>
			<?php foreach ($team_participants as $team_participant) { ?>
				<?php if ($team_participant['img'] <> ''): ?>
					<li class="content">
						<div class="team_participant_img">
						<img src='/image/team/<?php echo $team_participant['img'] ?>' alt="">
						<span class="name" ><span><span class="name_"><?php echo $team_participant['name'] ?></span></span>
											<span><span class="name_"><?php echo $team_participant['surname'] ?></span></span>
						</span>							
						</div>
						<span class="descr"><?php echo $team_participant['descr'] ?></span>
					</li>
				<?php endif ?> 					
			<?php } ?>
		</ul>

		<ul class="voluntears">
			<?php foreach ($team_participants as $team_participant) { ?>
					
				<?php if ($team_participant['img'] == ''): ?>
					<li >
						<span ><?php echo $team_participant['name'] ?></span>
						<span class="surname"><?php echo $team_participant['surname'] ?></span>
					</li>
				<?php endif ?> 	
			<?php } ?>			
		</ul>		
	</section>