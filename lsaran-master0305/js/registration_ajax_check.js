function ajax_check(value, flg_type){
	var response;
	var variablesStr = 
	'value=' 			      + value + 
	'&flg_type=' 				+ flg_type ;

    var data_file = "/db_action/ajax_check.php";
    var http_request = new XMLHttpRequest();
    http_request.onreadystatechange = function(){
	
       if (http_request.readyState == 4){
          response = http_request.responseText;
       }
    }
	
    http_request.open("POST", data_file, false);
	  http_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http_request.send(variablesStr);
    return response;
}