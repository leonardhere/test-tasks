<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>


<?php 

//Секретный ключ интернет-магазина
  // $shop_key = "6d307c6d337b54376a67465e616c5d66364a4f5f767a4b66454f6b";
  $shop_key = "";
  $fields = array();

  // Добавление полей формы в ассоциативный массив
  $fields["WMI_MERCHANT_ID"]    = "150936708409";
  $fields["WMI_PAYMENT_AMOUNT"] = $_POST["room_price"];
  $fields["WMI_CURRENCY_ID"]    = "643";
  $fields["WMI_PAYMENT_NO"]     = rand(10001, 99999);
  $fields["WMI_EXPIRED_DATE"]   = date('Y-m-d', strtotime('+1 day')) . 't23:59:59';
  $fields["WMI_SUCCESS_URL"]    = "http://lsaran.moscow";
  $fields["WMI_FAIL_URL"]       = "http://lsaran.moscow";
  



  foreach ($_POST as $key_1 => $value) {
    if (strtoupper(substr($key_1, 0, 4)) != 'JSON') {
      $fields[$key_1 . "" ] =  $value . "";
    };
  }


  for ($i=0; $i < $_POST['clientsCount'] ; $i++) { 

    $json = $_POST['json_data_'.$i];
    $value = json_decode($json, true);
    if (isset($value['promo'])){
      $fields['promo_' . $i] = $value['promo'];
    }


  }

  //Сортировка значений внутри полей
  foreach($fields as $name => $val)
  {
      if(is_array($val))
      {
          usort($val, "strcasecmp");
          $fields[$name] = $val;
      }
  }
 
  // Формирование сообщения, путем объединения значений формы,
  // отсортированных по именам ключей в порядке возрастания.
  uksort($fields, "strcasecmp");
  $fieldValues = ""; 
 
  foreach($fields as $value)
  {
      if(is_array($value))
          foreach($value as $v)
          {
              //Конвертация из текущей кодировки (UTF-8)
              //необходима только если кодировка магазина отлична от Windows-1251
              $v = iconv("utf-8", "windows-1251", $v);
              $fieldValues .= $v;
          }
      else
      {
          //Конвертация из текущей кодировки (UTF-8)
          //необходима только если кодировка магазина отлична от Windows-1251
          $value = iconv("utf-8", "windows-1251", $value);
          $fieldValues .= $value;
      }
  }
 
  // Формирование значения параметра WMI_SIGNATURE, путем
  // вычисления отпечатка, сформированного выше сообщения,
  // по алгоритму MD5 и представление его в Base64
 
  $signature = base64_encode(pack("H*", md5($fieldValues . $shop_key)));
 
  //Добавление параметра WMI_SIGNATURE в словарь параметров формы
 
  $fields["WMI_SIGNATURE"] = $signature;
 
  // Формирование HTML-кода платежной формы
 
  print "<form action='https://wl.walletone.com/checkout/checkout/Index' method='POST'>";
  /*print "<form action='https://lsaran.moscow/wo_handler' method='POST'>";*/
  foreach($fields as $key => $val)
  {
      if(is_array($val))
          foreach($val as $value)
          {
              print "<input type='hidden' name='$key' value='$value'/>";
          }
      else
          print "<input type='hidden' name='$key' value='$val'/>";
  }

print "</form>"
?>


<script src="/js/send_data_to_db.js">
  
</script>




<script>
  var clientsCount = <?php echo $_POST['clientsCount'] ?>;
  var json_arr = [];

  <?php 
    foreach ($_POST as $key_1 => $value) {
      if (strtoupper(substr($key_1, 0, 4)) == 'JSON') {
      echo "json_arr.push(JSON.stringify(" . $value . "));";
    };
  };
  ?>

  add_clients_row(
    <?php echo $fields['WMI_PAYMENT_NO'] ?>,
    <?php if ($fields['room_type_id'] ) {
      echo $fields['room_type_id'];
    }else{echo '-1';}?>,
    <?php echo $fields['room_price'] ?>,    
    clientsCount,
    json_arr);
</script>


 <script>
document.forms[0].submit();
</script>