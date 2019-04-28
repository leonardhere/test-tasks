function add_clients_row(room_id, room_type_id, price ,clientsCount, json_arr){
			var variablesStr = 'clientsCount='+ clientsCount;

			for (var i=0; i<clientsCount; i++){
				variablesStr += "&json_data_" + i + "=" + json_arr[i];
			}

			variablesStr += "&room_id=" + room_id;
			variablesStr += "&room_type_id=" + room_type_id;
			variablesStr += "&price=" + price;

		    var data_file = "/db_action/transaction_data.php";
		    var http_request = new XMLHttpRequest();
		    http_request.onreadystatechange = function(){
			
		       if (http_request.readyState == 4){
		          response = http_request.responseText;
		       }
		    }
			
		    http_request.open("POST", data_file, false);
			  http_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		    http_request.send(variablesStr);
		}