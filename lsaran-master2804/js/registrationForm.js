function includeJs(jsFilePath) {
    var js = document.createElement("script");

    js.type = "text/javascript";
    js.src = jsFilePath;

    document.body.appendChild(js);
}

function bind_wrap_form(){
	var dd_btns = document.querySelectorAll('.ddm_btn');
	var client_value_inputs = document.querySelectorAll('.client_value');
	for (var i = 0; i< dd_btns.length; i++){
		dd_btns[i].addEventListener('click', function(event){wrap_form(event);});
	}

	for (var i = 0; i< client_value_inputs.length; i++){
		client_value_inputs[i].addEventListener('focus', function(event){wrap_form(event);});
	}	
}

function wrap_form(e){
	var form = e.target.closest('.formBlock');
	var forms = document.querySelectorAll('.formBlock');
	for(var i = 0; i < forms.length; i++){
		forms[i].querySelector('i').classList.remove('ddm_btn_rotate');
		forms[i].style.height = '15px';
		forms[i].querySelector('.ddm_btn span').style.opacity = 1;
	}

	form.style.height = form.querySelector('.container').offsetHeight + 15 + 'px';
	form.querySelector('i').classList.add('ddm_btn_rotate');
	form.querySelector('.ddm_btn span').style.opacity = 0;

}

if (document.querySelector('.ddm_btn')){
	bind_wrap_form();
}




function bind_corr_wrap_form(){
	window.addEventListener('resize', corr_wrap_form);
}

function corr_wrap_form(){
	var formBlock = document.querySelectorAll(".formBlock");

	 for (var i=0; i< formBlock.length; i++){
	 	if (formBlock[i].offsetHeight > 35){
			formBlock[i].style.height = formBlock[i].querySelector('.container').offsetHeight + 15 + 'px';
	 	} 
	 }
}

bind_corr_wrap_form();



function pre_order_toggle(event){

	var formBlock = event.target.closest('.formBlock');
	var promo = formBlock.querySelector('.promo');
	
	if (event.target.checked){
		promo.style.display = "inline-block";
	}else{
		promo.style.display = "none";		
	}

	var container = formBlock.querySelector(".container");
	formBlock.style.height = container.offsetHeight + 15 + 'px';

}

function bind_pre_order_toggle(){
	var btns = document.querySelectorAll('.pre_ordered input');
	for (var i =0; i< btns.length; i++){
		btns[i].addEventListener('change', function(event){pre_order_toggle(event);});
	} 
}

bind_pre_order_toggle();


function bind_pay_btn(){
	var btn = document.getElementById('pay_btn');
	btn.addEventListener('click', pay_btn_handler);
}

function pay_btn_handler(){

	var clientCount = document.getElementById('clientsCount').value;
	var form = document.forms[0]
	var inputs_name = ['surname', 
					   'name', 
					   'lastname', 
					   'phone_number', 
					   'email', 
					   'passport_number', 
					   'passport_date', 
					   'pre_order',
					   'promo',
					   'given',
					   'age_0',
					   'day_0'];
	var inputs = document.querySelectorAll('.container input');

	for (var i=0; i<clientCount; i++){
		json_req = "{ "
		for (var j=0; j<inputs_name.length; j++){
			var elem = document.querySelector("#"+inputs_name[j]+"_"+i);
			if (elem){
				var value;
				if (elem.type == 'checkbox'){
					value = elem.checked ? elem.value : "";	
				}else if (elem.type == 'radio'){
					value = elem.checked ? elem.value : document.querySelector("#"+inputs_name[j].substr(0, 4)+"1" +"_"+i).value;	
				} else {
					value = elem.value;
				}
				json_req += '"' + inputs_name[j]+'": "'+value+'", ';
			}
		}
		json_req = json_req.slice(0, -2) + '}';
		
		var input = document.createElement('input');
		input.setAttribute('type', 'hidden');
		input.setAttribute('name', 'json_data_' + i);
		input.value = json_req;

		form.appendChild(input);
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
		document.querySelector('#room_price').value = document.querySelector('#room_price').value - (promo_cnt* 700) - (volunteer_cnt* 4200);
	}else{


		var price =0;
		if (document.getElementById('age_0_0').checked == true){
			price = 500;
		}else{
			price = 1000;
		}

		if (document.getElementById('day_1_0').checked == true){
			price = price * 2;
		}		
		document.querySelector('#room_price').value = price;			
	}


	document.forms[0].submit();
}

bind_pay_btn();

includeJs("/js/registration_validation.js");