function includeJs(jsFilePath) {
    var js = document.createElement("script");

    js.type = "text/javascript";
    js.src = jsFilePath;

    document.body.appendChild(js);
}
includeJs("/js/registration_ajax_check.js");

function mainValidation(event){

	var valid_flg = 1;
	var inputs;
	var block = event.target.closest('.formBlock');

	if (block.querySelector('.pre_ordered input') && block.querySelector('.pre_ordered input').checked){
		inputs = block.querySelectorAll('.container>label input, .container>label textarea');
	}else{
		inputs = block.querySelectorAll('.container>label:not(.promo) input, .container>label textarea');
		
	}
	var volunteer = document.getElementById('volunteer').value;

	for(var i=0; i<inputs.length; i++){
		inputs[i].classList.remove('inputError');
	}


	if (volunteer == '1'){

		for(var i=0; i<inputs.length; i++){
			inputs[i].value = inputs[i].value.replace(/[\"\'{}]+/g, '');

			if (inputs[i].value == ""){
				inputs[i].classList.add('inputError');
				valid_flg = 0;
			}

			if (inputs[i].id.slice(0, -2) == 'phone_number'){
				inputs[i].value  = inputs[i].value.replace(/\D/g, '');
				if (validationPhone(inputs[i].value)) {
					inputs[i].classList.add('inputError'); 
					valid_flg = 0;
				}
			}

			if (inputs[i].id.slice(0, -2) == 'email'){
				if (validationMail(inputs[i].value)) {
					inputs[i].classList.add('inputError'); 
					valid_flg = 0;
				}
			}	
		}	

	}else {
		for(var i=0; i<inputs.length; i++){
			if (inputs[i].value == ""){
				inputs[i].classList.add('inputError');
				valid_flg = 0;
			}

			if (inputs[i].id.slice(0, -2) == 'phone_number'){
				inputs[i].value  = inputs[i].value.replace(/\D/g, '');
				if (validationPhone(inputs[i].value)) {
					inputs[i].classList.add('inputError'); 
					valid_flg = 0;
				}
			}

			if (inputs[i].id.slice(0, -2) == 'email'){
				if (validationMail(inputs[i].value)) {
					inputs[i].classList.add('inputError'); 
					valid_flg = 0;
				}
			}	

			if (inputs[i].id.slice(0, -2) == 'passport_number'){
				inputs[i].value  = inputs[i].value.replace(/\s/g, '');
			}

			if (inputs[i].id.slice(0, -2) == 'promo'){

				var promos = document.querySelectorAll('.promo input');

				for (var j =0; j < promos.length; j++){
					if (inputs[i].value == promos[j].value && inputs[i].id != promos[j].id){
						inputs[i].classList.add('inputError');
						valid_flg = 0;
					}
				}
				
				var response = ajax_check(inputs[i].value,'promo');


				
				if (response.trim() == 0) {
					inputs[i].classList.add('inputError');
					valid_flg = 0;
				}
				
			}



		}
	}

	if (valid_flg){
		block.querySelector('.complete input').checked = true;
	}else {
		block.querySelector('.complete input').checked = false;
	}
	refresh_indicator();


}

function validationMail(mail){
	var mailMask = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	return !mailMask.test(mail)
}

function validationPhone(phoneNumber){
	var phoneMask = /\d{11}$/;
	return !phoneMask.test(phoneNumber)
}

function refresh_indicator(){
	var mainCompleteFlg = 1;
	var complete_flg = document.querySelectorAll('.complete input');
	var indicators = document.querySelectorAll('.guests_cnt');
	var pay_btn = document.getElementById('pay_btn');

	var user_agr = document.getElementById('user_agr').checked;
	var pers_inf = document.getElementById('pers_inf').checked;

	for (var i =0; i<complete_flg.length; i++){
		if (complete_flg[i].checked){
			indicators[i].querySelector('.fill_value').innerText = 'заполнен';
		}else{
			indicators[i].querySelector('.fill_value').innerText = 'не заполнен';
			mainCompleteFlg = 0;
		}
	}
	
	if (mainCompleteFlg && user_agr && pers_inf){
		pay_btn.removeAttribute('disabled');
	}else{
		pay_btn.setAttribute('disabled', 'disabled');
	}


	if (document.getElementById('volunteer').value == 0){
		var promo = document.querySelectorAll('.promo input');
		var promo_cnt = 0;
		var volunteer_cnt = 0;

		for (var i=0; i < promo.length; i++){
			var complete 	= promo[i].closest('.formBlock').querySelector('.complete input').checked;
			var pre_ordered = promo[i].closest('.formBlock').querySelector('.pre_ordered input').checked;
			var pref = promo[i].closest('.formBlock').querySelector('.promo input').value.substring(0, 1);

			if (complete && pre_ordered ) {
				if (pref.toUpperCase() == 'V'){
					volunteer_cnt++;
				}else{
					promo_cnt++;
				}
			};
		}
		document.querySelector('.price').innerText = document.querySelector('#room_price').value - (promo_cnt* 700) - (volunteer_cnt* 4200) + ' р.';
	}else{
		var price =0;

		if (document.getElementById('age_0_0').checked){
			price = 500;
		}else{
			price = 1000;
		}

		if (document.getElementById('day_1_0').checked){
			price = price * 2;
		}		
		document.querySelector('.price').innerText = price + ' р.';		
	}

}

function change_input(event){
	event.target.closest('.formBlock').querySelector('.complete input').checked = false;
	refresh_indicator();
}

function bind_agreement(){
	var agrs = document.querySelectorAll('#user_agr, #pers_inf');

	for (var i=0; i< agrs.length; i++){
		agrs[i].addEventListener('change', refresh_indicator)
	}
}

bind_agreement();

function bind_change_input(){
	var inputs = document.querySelectorAll('.container label input');
	for (var i=0; i< inputs.length; i++){
		inputs[i].addEventListener('change', function(event){change_input(event)});
	}
}
bind_change_input();


function bind_change_radio_btn(){
	var form_btn = document.querySelectorAll('.form_btn');
	document.querySelector('.complete input').checked = false;

	for (var i=0; i< form_btn.length; i++){
		form_btn[i].addEventListener('click', refresh_indicator);
	}
}
bind_change_radio_btn();


function bindMainValidation(){
	var inputs = document.querySelectorAll('.complete input, .pre_ordered input');

	for(var i=0; i<inputs.length; i++){
		inputs[i].addEventListener('click', function(event){mainValidation(event)})
	}
}
bindMainValidation();