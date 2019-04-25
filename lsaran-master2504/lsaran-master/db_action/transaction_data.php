<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>


 <?php 

    session_start();

    define("INDEX", ""); // УСТАНОВКА КОНСТАНТЫ ГЛАВНОГО КОНТРОЛЛЕРА
    require_once($_SERVER['DOCUMENT_ROOT']."/cfg/core.php"); // ПОДКЛЮЧЕНИЕ ЯДРА

    // ПОДКЛЮЧЕНИЕ К БД
    $db_ajax = new MyDB();
    $db_ajax->connect();


    for ($i=0; $i < $_POST['clientsCount']; $i++) { 


      $json = $_POST['json_data_'.$i];
      $value = json_decode($json, true);

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
             `room_type`,
             `promo`,
             `price`,
             `singl_age`,
             `singl_day`
             ) 
      VALUES (NULL, 
              '". $value['surname'] ."', 
              '". $value['name'] ."', 
              '". $value['lastname'] ."',
              '". $value['email'] ."',
              '". $value['phone_number'] ."',
              '". $value['passport_number'] ."', 
              '". $value['given'] ."', 
              '". $value['passport_date'] ."', 
              '0',  
              '". $_POST['room_id'] ."',
              '". $_POST['room_type_id'] ."',
              '". $value['promo'] ."',
              '". $_POST['price'] ."',
              '". $value['age_0'] ."',
              '". $value['day_0'] ."'
              );

      ";
      $db_ajax->run($addClient_q);
  }

     $db_ajax->stop();
    $db_ajax->close(); 
?>

