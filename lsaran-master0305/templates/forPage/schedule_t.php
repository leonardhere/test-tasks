	<div id="schedule">
			<?php 

				$schedule_new = array();
				$schedule_room_1 = array();
				$schedule_room_2 = array();
				$schedule_room_3 = array();
				$schedule_room_4 = array();
				$schedule_room_5 = array();
				$schedule_room_6 = array();
				$room  = array();

				foreach ($schedules as $schedule) {
						if ($schedule['day'] == 1) {
							
							if ($schedule['room'] == 1) {
								$room = array(
									'label' =>   $schedule['label'] , 
									'time' =>   $schedule['time'] , 
									'lection_title' =>   $schedule['lection_title'] , 
									'lector_name' =>  $schedule['lector_name'] );
								array_push($schedule_room_1, $room);
							} 
							elseif($schedule['room'] == 2) {
								$room = array(
									'label' =>   $schedule['label'] , 
									'time' =>   $schedule['time'] , 
									'lection_title' =>   $schedule['lection_title'] , 
									'lector_name' =>  $schedule['lector_name'] );

								array_push($schedule_room_2, $room);
							} elseif($schedule['room'] == 3) {
								$room = array(
									'label' =>   $schedule['label'] , 
									'time' =>   $schedule['time'] , 
									'lection_title' =>   $schedule['lection_title'] , 
									'lector_name' =>  $schedule['lector_name'] );
								array_push($schedule_room_3, $room);
							} elseif($schedule['room'] == 4) {
								$room = array(
									'label' =>   $schedule['label'] , 
									'time' =>   $schedule['time'] , 
									'lection_title' =>   $schedule['lection_title'] , 
									'lector_name' =>  $schedule['lector_name'] );
								array_push($schedule_room_4, $room);
							} elseif($schedule['room'] == 5) {
								$room = array(
									'label' =>   $schedule['label'] , 
									'time' =>   $schedule['time'] , 
									'lection_title' =>   $schedule['lection_title'] , 
									'lector_name' =>  $schedule['lector_name'] );
								array_push($schedule_room_5, $room);
							}elseif($schedule['room'] == 6) {
								$room = array(
									'label' =>   $schedule['label'] , 
									'time' =>   $schedule['time'] , 
									'lection_title' =>   $schedule['lection_title'] , 
									'lector_name' =>  $schedule['lector_name'] );
								array_push($schedule_room_6, $room);
							}

						}
				};
				array_push($schedule_new, $schedule_room_1);
				array_push($schedule_new, $schedule_room_2);
				array_push($schedule_new, $schedule_room_3);
				array_push($schedule_new, $schedule_room_4);
				array_push($schedule_new, $schedule_room_5);
				array_push($schedule_new, $schedule_room_6);
			?>
			

			<div class="content">
			<div class="schedule_day">
			<p class="tab-day"> <span class="day">26 октября</span> <span>| расписание</span> </p>
			<?php foreach ($schedule_new as $room): ?>
				<?php if (isset($room[0]) ): ?>
					<div class="schedule_room">
						<p class="room_lable"><?php echo $room[0]['label']; ?></p>
						<?php foreach ($room as $lection): ?>
							<div class="schedule_lection">
								<p class="time"><?php echo $lection['time'] ?></p>
								<p class="name"><?php echo $lection['lector_name'] ?></p>
								<p class="title"><?php echo $lection['lection_title'] ?></p>
							</div>
						<?php endforeach ?>
					</div>
				<?php endif ?>
			<?php endforeach ?>
			</div>


<?php 
				$schedule_new = array();
				$schedule_room_1 = array();
				$schedule_room_2 = array();
				$schedule_room_3 = array();
				$schedule_room_4 = array();
				$schedule_room_5 = array();
				$schedule_room_6 = array();
				$room  = array();

				foreach ($schedules as $schedule) {
						if ($schedule['day'] == 2) {
							
							if ($schedule['room'] == 1) {
								$room = array(
									'label' =>   $schedule['label'] , 
									'time' =>   $schedule['time'] , 
									'lection_title' =>   $schedule['lection_title'] , 
									'lector_name' =>  $schedule['lector_name'] );
								array_push($schedule_room_1, $room);
							} 
							elseif($schedule['room'] == 2) {
								$room = array(
									'label' =>   $schedule['label'] , 
									'time' =>   $schedule['time'] , 
									'lection_title' =>   $schedule['lection_title'] , 
									'lector_name' =>  $schedule['lector_name'] );

								array_push($schedule_room_2, $room);
							} elseif($schedule['room'] == 3) {
								$room = array(
									'label' =>   $schedule['label'] , 
									'time' =>   $schedule['time'] , 
									'lection_title' =>   $schedule['lection_title'] , 
									'lector_name' =>  $schedule['lector_name'] );
								array_push($schedule_room_3, $room);
							} elseif($schedule['room'] == 4) {
								$room = array(
									'label' =>   $schedule['label'] , 
									'time' =>   $schedule['time'] , 
									'lection_title' =>   $schedule['lection_title'] , 
									'lector_name' =>  $schedule['lector_name'] );
								array_push($schedule_room_4, $room);
							} elseif($schedule['room'] == 5) {
								$room = array(
									'label' =>   $schedule['label'] , 
									'time' =>   $schedule['time'] , 
									'lection_title' =>   $schedule['lection_title'] , 
									'lector_name' =>  $schedule['lector_name'] );
								array_push($schedule_room_5, $room);
							}elseif($schedule['room'] == 6) {
								$room = array(
									'label' =>   $schedule['label'] , 
									'time' =>   $schedule['time'] , 
									'lection_title' =>   $schedule['lection_title'] , 
									'lector_name' =>  $schedule['lector_name'] );
								array_push($schedule_room_6, $room);
							}
						}
				};
				array_push($schedule_new, $schedule_room_1);
				array_push($schedule_new, $schedule_room_2);
				array_push($schedule_new, $schedule_room_3);
				array_push($schedule_new, $schedule_room_4);
				array_push($schedule_new, $schedule_room_5);
				array_push($schedule_new, $schedule_room_6);
 ?>
			<div class="schedule_day">
			<p class="tab-day"> <span class="day">27 октября</span> <span>| расписание</span> </p>
			<?php foreach ($schedule_new as $room): ?>
				<?php if (isset($room[0]) ): ?>
					<div class="schedule_room">
						<p class="room_lable"><?php echo $room[0]['label']; ?></p>
						<?php foreach ($room as $lection): ?>
							<div class="schedule_lection">
								<p class="time"><?php echo $lection['time'] ?></p>
								<p class="name"><?php echo $lection['lector_name'] ?></p>
								<p class="title"><?php echo $lection['lection_title'] ?></p>
							</div>
						<?php endforeach ?>
					</div>
				<?php endif ?>
			<?php endforeach ?>
			</div>			

			</div>		
	</div>
<script src="/js/schedule.js"></script>