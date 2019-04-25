
 <?php 
    session_start();

    define("INDEX", ""); // УСТАНОВКА КОНСТАНТЫ ГЛАВНОГО КОНТРОЛЛЕРА
    require_once($_SERVER['DOCUMENT_ROOT']."/cfg/core.php"); // ПОДКЛЮЧЕНИЕ ЯДРА

    // ПОДКЛЮЧЕНИЕ К БД
    $db_ajax = new MyDB();
    $db_ajax->connect();


if ($_POST['room_type_id'] != '-1') {

    for ($i=0; $i <$_POST['clientsCount'] ; $i++) { 
      
      if ($_POST['promo_' . $i] != ''){
       $change_promo_q = " 
        UPDATE promo 
        SET used_flg = 1 
        WHERE value = '" . $_POST['promo_'. $i] . "';";
      $db_ajax->run($change_promo_q);
      }
    }


    $change_room_cnt_q = " 
      UPDATE  rooms 
      SET     room_cnt_available = room_cnt_available - 1 
      WHERE   room_id = '" . $_POST['room_type_id'] . "';";

    $db_ajax->run($change_room_cnt_q);
    
}


  $change_pay_flg_q = " 
    UPDATE  clients 
    SET     pay_flg = 1 
    WHERE   room_id = '" . $_POST['WMI_PAYMENT_NO'] . "';";
  $db_ajax->run($change_pay_flg_q);
    ?>

        

<?php $db_ajax->stop();?>





<?php 
    function print_answer($result, $description){
      print "WMI_RESULT=" . strtoupper($result) . "&";
      print "WMI_DESCRIPTION=" .$description;
      exit();
    }

    print_answer("Ok", "order " . $_POST["WMI_PAYMENT_NO"] . " is paid!");

 ?>


