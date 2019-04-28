<?php 

for ($i=0; $i < $_POST['clientsCount']; $i++) { 

    $client_data = json_decode($_POST['json_data' + $i], true);

    if ($_POST['volunteer']) {
      $update_volunteer_q = "
        UPDATE 'clients' 
        SET 'pay_flg' = '1' 
        WHERE 'passport_number' = " 
        . iconv('windows-1251', 'utf-8', $client_data['passport_number_0']) .
        ";";
        
        $db->run($update_volunteer_q);

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
                '". iconv("windows-1251", "utf-8", $client_data['surname']) ."', 
                '". iconv("windows-1251", "utf-8", $client_data['name']) ."', 
                '". iconv("windows-1251", "utf-8", $client_data['lastname']) ."',                 
                '". iconv("windows-1251", "utf-8", $client_data['email']) ."',
                '". iconv("windows-1251", "utf-8", $client_data['phone_number']) ."',
                '". iconv("windows-1251", "utf-8", $client_data['passport_number']) ."', 
                '". iconv("windows-1251", "utf-8", $client_data['given']) ."', 
                '". iconv("windows-1251", "utf-8", $client_data['passport_date']) ."', 
                '1',  
                '1',  
                '". iconv("windows-1251", "utf-8", $_POST['room_type_id']) ."');

        ";
        $db->run($addClient_q);
    }
}

$db->stop();

?>

<?php 
    $file = '/var/www/lsara410/data/www/lsaran.info/db_action/people.txt';

    $current = file_get_contents($file);
    $current .= "$update_volunteer_q";
    file_put_contents($file, $current);   
 ?>

<?php 
    function print_answer($result, $description){
      print "WMI_RESULT=" . strtoupper($result) . "&";
      print "WMI_DESCRIPTION=" .$description;
      exit();
    }

    print_answer("Ok", "Заказ #" . $_POST["WMI_PAYMENT_NO"] . " оплачен!");

 ?>


