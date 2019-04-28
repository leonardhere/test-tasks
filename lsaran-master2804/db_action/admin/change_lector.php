<?php 
    session_start();

    define("INDEX", ""); // УСТАНОВКА КОНСТАНТЫ ГЛАВНОГО КОНТРОЛЛЕРА
    require_once($_SERVER['DOCUMENT_ROOT']."/cfg/core.php"); // ПОДКЛЮЧЕНИЕ ЯДРА
    
    $respArr = array();

    // ПОДКЛЮЧЕНИЕ К БД
    $db_ajax = new MyDB();
    $db_ajax->connect();

    $lector_q = 
    "
    UPDATE lectors
    SET  `lector_name` = '" .     $_POST['FormName']    . "', 
         `lector_surname` = '" .  $_POST['FormSurname'] . "', 
         `bio` = '" .             $_POST['FormBio']     . "', 
         `lection_title` = '" .   $_POST['FormTitle']   . "', 
         `lection_descr` = '" .   $_POST['FormDescr']   . "', 
         `part_year` = '" .       $_POST['FormPartyYear']   . "'
    
    WHERE `lector_id` = ". $_POST['FormId'] . urlencode("&") . ";";

    $db_ajax->run($lector_q);


    $target_dir = "/image/lectors";
    $target_file = $target_dir . basename($_FILES["FormImg"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_FILES["FormImg"])) {
        move_uploaded_file($_FILES["FormImg"]["tmp_name"], $target_file)
    }

    echo $target_file;

    $db_ajax->stop();
    $db_ajax->close();
?>
