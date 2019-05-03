<?php 
for ($i=0; $i < $_POST['clientsCount']; $i++) { 

	if ($_POST['volunteer']) {


	}else{
		$addClient_q = "

		INSERT INTO `clients` 
			  (`id`,
			   `surname`, 
			   `name`, 
			   `last_name`, 
			   `email`,
			   `phone`,
			   `passport_number`, 
			   `passport_given`, 
			   `passport_date`, 
			   `pay_flg`, 
			   `room_id`, 
			   `room_type`) 
		VALUES (NULL, 
				'N', 
				'".$_POST['surname_'.$i]."', 
				'".$_POST['name_'.$i]."', 
				'".$_POST['lastname_'.$i]."', 
				'".$_POST['email'.$i]."',
				'".$_POST['phone_number'.$i]."',
				'".$_POST['passport_number_'.$i]."', 
				'".$_POST['passport_given_'.$i]."', 
				'".$_POST['passport_date_'.$i]."', 
				'1', 
				'room_type_id', 
				'".$_POST['passport_date_'.$i]."');

		";
		$db->run($addClient_q);
		
	}
}

$db->stop();

