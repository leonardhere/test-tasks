<section id="lectors_hist_list">
	<?php echo $tab ?>
	<?php foreach ($yearLists as $year) { ?>
	<a  class="year" 
		href=/page/lectors_hist_list/<?php echo $year['year'] ?>
		style="background-image: url('/image/years_bg/<?php echo $year['image'] ?>');"

	>
		<?php echo $year['year'] ?>
	</a>

	<?php } ?>
</section>