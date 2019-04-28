<?php 
    session_start();

    define("INDEX", ""); // УСТАНОВКА КОНСТАНТЫ ГЛАВНОГО КОНТРОЛЛЕРА
    require_once($_SERVER['DOCUMENT_ROOT']."/cfg/core.php"); // ПОДКЛЮЧЕНИЕ ЯДРА

    $singl_room_adult_singl = 9500; 
    $singl_room_adult = 6700;
    $singl_room_child = 2000; 
    $double_room_adult_singl = 11500; 
    $double_room_adult = 7700; 
    $double_room_adult_extra = 5900; 
    $double_room_child_extra = 4400; 
    $double_room_child = 2000; 


    // ПОДКЛЮЧЕНИЕ К БД
    $db_ajax = new MyDB();
    $db_ajax->connect();

    $rooms_arr = array();
    $response = '';
    $rooms_q = "
        SELECT * FROM rooms 
            where 
            max_cnt_adult_11_    >= " .$_POST['adult_cnt']      ."   and
            max_cnt_chldrn_6_10  >= " .$_POST['cnt_chldrn_6_10']."   and
            max_people_cnt_total >= " .($_POST['cnt_chldrn_6_10'] + $_POST['adult_cnt'])." and
            room_cnt_available  >  0 and 
            bed_cnt = " . $_POST['bed_cnt'] . ";
    ";

    $db_ajax->run($rooms_q);

    while ( $db_ajax->row($rooms_q)) {
        $cur_price = 0;

        if ($db_ajax->data["rooms_cnt"] == 1) {
            if ($_POST['adult_cnt'] == 1) {
                  $cur_price = $singl_room_adult_singl + $_POST['cnt_chldrn_6_10'] * $singl_room_child;
            }else{
                  $cur_price = $singl_room_adult * $_POST['adult_cnt'];
            };
        }else{
            if ($_POST['adult_cnt'] == 1){
                $cur_price = $cur_price + $double_room_adult_singl;
                if ($_POST['cnt_chldrn_6_10'] > 0){
                    $cur_price = $cur_price + 
                                 $double_room_child + 
                                 $double_room_child_extra * ($_POST['cnt_chldrn_6_10']-1);
                }
            } elseif ($_POST['adult_cnt'] == 2) {
                $cur_price = $cur_price + $double_room_adult * 2;
                $cur_price = $cur_price + $double_room_child_extra * $_POST['cnt_chldrn_6_10'];                
            } elseif ($_POST['adult_cnt'] > 2) {
                $cur_price = $cur_price + ($double_room_adult * 2) + 
                             ($double_room_adult_extra*($_POST['adult_cnt'] - 2));
                $cur_price = $cur_price + $double_room_child_extra * $_POST['cnt_chldrn_6_10'];                             
            }

        }

        $rooms_item = array(
            "id" =>                      $db_ajax->data["room_id"],
            "name" =>                    $db_ajax->data["name"],
            "rooms_cnt" =>               $db_ajax->data["rooms_cnt"],
            "max_cnt_chldrn_0_5" =>      $db_ajax->data["max_cnt_chldrn_0_5"],
            "max_cnt_chldrn_6_10" =>     $db_ajax->data["max_cnt_chldrn_6_10"],
            "max_cnt_adult_11_" =>       $db_ajax->data["max_cnt_adult_11_"],
            "max_chldrn_cnt_total" =>    $db_ajax->data["max_chldrn_cnt_total"],
            "bed_cnt" =>                 $db_ajax->data["bed_cnt"],
            "sofa_flg" =>                $db_ajax->data["sofa_flg"],
            "descr" =>                   $db_ajax->data["descr"],
            "room_cnt_total" =>          $db_ajax->data["room_cnt_total"],
            "room_cnt_available" =>      $db_ajax->data["room_cnt_available"],
            "price" =>                   $cur_price

        );

        array_push($rooms_arr, $rooms_item);
    };
    $response_01 = '';
    foreach ($rooms_arr as $room) {
        $response_02 = '';
        foreach ($room as $key => $value) {
            $response_02 = $response_02 . '"'. $key . '"'. ': ' . '"'. $value . '"'. ', '; 
        };
        $response_01 = $response_01 . '{' . substr($response_02, 0, -2) . '}, ';
    };
    $response = '[' . substr($response_01, 0, -2) . ']';
    echo $response;

    $db_ajax->stop();
    $db_ajax->close();
?>













