<?php 
    session_start();

    define("INDEX", ""); // УСТАНОВКА КОНСТАНТЫ ГЛАВНОГО КОНТРОЛЛЕРА
    require_once($_SERVER['DOCUMENT_ROOT']."/cfg/core.php"); // ПОДКЛЮЧЕНИЕ ЯДРА

    // ПОДКЛЮЧЕНИЕ К БД
    $db_ajax = new MyDB();
    $db_ajax->connect();

    $response = 0;
    if ($_POST['flg_type'] == 'volunteer_flg') {
        $clients_q = "
            SELECT * FROM clients 
                where 
                passport_number         = '" .$_POST['value']."'   and
                volunteer_flg = 'Y'   ;";
    }elseif ($_POST['flg_type'] == 'promo') {
        $clients_q = "
        SELECT * FROM promo 
        where 
        value         = '" .$_POST['value']."'   and
        used_flg = 0   ;";
    }

    $db_ajax->run($clients_q);

    if ($db_ajax->row($clients_q)){
        $response = 1;   
    }
    echo $response;
    $db_ajax->stop();
    $db_ajax->close();

/*    $file = '/var/www/lsara410/data/www/lsaran.info/db_action/people.txt';*/
    /*$file = '/var/www/html/db_action/people.txt';*/

/*    $current = file_get_contents($file);
    $current .= "$clients_q";
    file_put_contents($file, $current);  */ 
?>













