<?php 
    session_start();

    define("INDEX", ""); // УСТАНОВКА КОНСТАНТЫ ГЛАВНОГО КОНТРОЛЛЕРА
    require_once($_SERVER['DOCUMENT_ROOT']."/cfg/core.php"); // ПОДКЛЮЧЕНИЕ ЯДРА
    
    $respArr = array();

    // ПОДКЛЮЧЕНИЕ К БД
    $db_ajax = new MyDB();
    $db_ajax->connect();

    $lector_q = "
        SELECT * FROM lectors 
        where lector_id = " . $_POST['changeID'];

    $db_ajax->run($lector_q);

    $db_ajax->row($lector_q);

    echo  '{
                "lector_id"         : "' . $db_ajax->data['lector_id']       . '",
                "lector_img"        : "' . $db_ajax->data['lector_img']      . '",
                "lector_name"       : "' . $db_ajax->data['lector_name']     . '",
                "lector_surname"    : "' . $db_ajax->data['lector_surname']  . '",
                "bio"               : "' . $db_ajax->data['bio']             . '",
                "lection_title"     : "' . $db_ajax->data['lection_title']   . '",
                "lection_descr"     : "' . $db_ajax->data['lection_descr']   . '",
                "part_year"         : "' . $db_ajax->data['part_year']   . '"
            }';
    $db_ajax->stop();
    $db_ajax->close();
?>