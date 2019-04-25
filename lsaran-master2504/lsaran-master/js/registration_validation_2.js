console.log('registration_validation included success!!');

function validation(){

	var btn = document.getElementById('add_client_btn');
	var forms = document.getElementsByClassName('formBlock');


	function validPhone(event){
	    var phone = event.target;
	    var re = /\d{11}$/;
	    phone.value = phone.value.replace(/\D/g, '');
	    if ((re.test(phone.value) && phone.value.length>0) != true){
	    	alert('Введите корретный номер.')
		};
	}

	function validMail(event){
		var value = event.target.value;
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		if((reg.test(value) && value.length>0) != true) {
		  alert('Введите корректный e-mail');
		};
	}


	function check_volunteer(passport_number){
		var variablesStr = 
		'action=' 				+ 'check_volunteer' + 
		'&passport_number=' 	+  passport_number;

	    var data_file = "../db_action/findVolunteer.php";
	    var http_request = new XMLHttpRequest();
	    http_request.onreadystatechange = function(){
		    if (http_request.readyState == 4){
		    	response = http_request.responseText;
		    }
		}
	    http_request.open("POST", data_file, false);
		http_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	    http_request.send(variablesStr);
	    return Number(response)
	}	

/*	function check_pre_order(){
		var variablesStr = 
		'action=' 				+ 'check_pre_order' + 
		'&passport_number=' 	+  passport_number;

	    var data_file = "../db_action/findVolunteer.php";
	    var http_request = new XMLHttpRequest();
	    http_request.onreadystatechange = function(){
		
	    if (http_request.readyState == 4){
	          response = http_request.responseText;
	       }
	    }
		
	    http_request.open("POST", data_file, false);
		http_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	    http_request.send(variablesStr);
	    return Number(response)		
	}		*/


	function validationRegistrForm(){
		
		var volunteer_chb = document.getElementById('volunteer');
		var errorFlg = 0;
		

		if (volunteer_chb.checked){
			var volonteer_DB_check = check_volunteer(document.getElementById('passport_number_0').value);

			if (!volonteer_DB_check){
				document.getElementById('errors').innerHTML = 'Волонтер с такими данными не найден';
				errorFlg = 1;
			}
		}else{
			for (var i=0; i<forms.length; i++){
				var inputValues;

				/*привязка события окус айт с процесом валидации значения телефона и почты*/
				document.getElementById('phone_number_'+i).addEventListener('focusout', function(event){validPhone(event)});
				document.getElementById('email_'+i).addEventListener('focusout', function(event){validMail(event)});

				/*проверка заполнености полей формы*/

				/*определение набора полей для валидации в зависимости от флага предзаказа*/
				if (!forms[i].querySelector('.pre_ordered input').checked){
					inputValues = forms[i].querySelectorAll('.client_value');
				}else{
					inputValues = forms[i].querySelectorAll('#passport_number_' + i);
				}

				/*обновление полей в зависимости от валидности*/
				for(var j =0; j< inputValues.length; j++){
					inputValues[j].style.backgroundColor = 'white';
					if (!inputValues[j].value){
						errorFlg = 1;
						inputValues[j].style.backgroundColor = 'red';
					}
				}
			}
			if (errorFlg != 0) {
				document.getElementById('errors').innerHTML = 'Необходимо корректно заполнить выделенные поля';
			}
		}


		if (errorFlg == 0) {
			document.getElementById('set_clients_data').submit();
		}
	}


	btn.addEventListener('click', validationRegistrForm);


}
