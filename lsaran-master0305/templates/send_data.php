
<?php 

//Секретный ключ интернет-магазина
  $shop_key = "454678433043486d685b594a385c62444e464e3264577839473764";
 
  $fields = array();
 
  // Добавление полей формы в ассоциативный массив
  $fields["WMI_MERCHANT_ID"]    = "150936708409";
  $fields["WMI_PAYMENT_AMOUNT"] = $_POST["room_price"];
  $fields["WMI_CURRENCY_ID"]    = "643";
  $fields["WMI_PAYMENT_NO"]     = rand(10001, 99999);
  $fields["WMI_EXPIRED_DATE"]   = date('Y-m-d', strtotime('+1 day')) . 't23:59:59';
  $fields["WMI_SUCCESS_URL"]    = "http://lsaran.info";
  $fields["WMI_FAIL_URL"]       = "http://lsaran.info";
   foreach ($_POST as $key => $value) {
      $fields[$key]=  $value;
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
<!--  <script>
  document.forms[0].submit();
</script> -->