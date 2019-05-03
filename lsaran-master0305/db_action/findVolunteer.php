<?php 
    session_start();

    define("INDEX", ""); // УСТАНОВКА КОНСТАНТЫ ГЛАВНОГО КОНТРОЛЛЕРА
    require_once($_SERVER['DOCUMENT_ROOT']."/cfg/core.php"); // ПОДКЛЮЧЕНИЕ ЯДРА

    // ПОДКЛЮЧЕНИЕ К БД
    $db_ajax = new MyDB();
    $db_ajax->connect();

    $volunteer_q = "
        SELECT * FROM clients 
            where 
            passport_number    = " .$_POST['passport_number']."   and
            volunteer_flg  = " ."'Y'".";";

    $db_ajax->run($volunteer_q);

    $response = $db_ajax->row($volunteer_q);
    echo $response;
    $db_ajax->stop();
    $db_ajax->close();


?>













