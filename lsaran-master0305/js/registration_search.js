
var response;
var max_people_cnt = 4;
var form = document.getElementById('search_room');
var inputs_search = document.querySelectorAll('#search_room .people:not(#cnt_chldrn_0_5) input');
var search_btn = document.getElementById('search_btn');
document.querySelector('.volunteer input').checked = false;

function available_cb(){
	document.getElementById("rooms").innerText = '';
	var people_chk = form.querySelectorAll('.people:not(#cnt_chldrn_0_5) input:checked');
	var cur_people_cnt = 0;
	for (var i=0; i < inputs_search.length; i++){
		inputs_search[i].disabled = false;
	}

	for(var i=0; i < people_chk.length; i++){
		cur_people_cnt = cur_people_cnt + Number(people_chk[i].value);
	}

	for(var i=0; i < people_chk.length; i++){
		var sibling = people_chk[i];
		while (sibling.nextSibling) {
			sibling = sibling.nextSibling;
			if (sibling.value > max_people_cnt  - (cur_people_cnt - people_chk[i].value)) {
				sibling.disabled = true;
			}
		}
	}
}

for (var i = 0; i < inputs_search.length; i++){
	inputs_search[i].addEventListener('change', available_cb);
}


/*function singl_day_toggle(event){
	var people_chk = form.querySelectorAll('.value:not(.volunteer) input');	
	if (event.target.checked){
		for (var i =0; i< people_chk.length; i++){
			people_chk[i].setAttribute('disabled', 'disabled');
		}
	}else{
		for (var i =0; i< people_chk.length; i++){
			people_chk[i].removeAttribute('disabled');
		}
	}
}

document.getElementById('volunteer').addEventListener('click',function(){singl_day_toggle(event)});*/


function search_room(){
	var perent_rooms = document.getElementById('rooms');
	perent_rooms.innerHTML = '';
	
	if (!form.volunteer.checked){
	    var msie_flg = window.navigator.userAgent.indexOf("MSIE ");
		
		if (msie_flg){

		var variablesStr = 
			'adult_cnt=' 			+ form.querySelector('[name=adult_cnt]:checked').value+
			'&cnt_chldrn_0_5=' 		+ form.querySelector('[name=cnt_chldrn_0_5]:checked').value+
			'&cnt_chldrn_6_10=' 	+ form.querySelector('[name=cnt_chldrn_6_10]:checked').value+
			'&bed_cnt=' 			+ form.querySelector('[name=bed_cnt]:checked').value;
		}else{
			var variablesStr = 
			'adult_cnt=' 			+ form.adult_cnt.value + 
			'&cnt_chldrn_0_5=' 		+ form.cnt_chldrn_0_5.value +
			'&cnt_chldrn_6_10=' 	+ form.cnt_chldrn_6_10.value +
			'&bed_cnt=' 			+ form.bed_cnt.value;
			
		}

	    var data_file = "/db_action/searchRoom.php";
	    var http_request = new XMLHttpRequest();
	    http_request.onreadystatechange = function(){
		
	       if (http_request.readyState == 4){;
	       	  console.log(variablesStr)
	          response = JSON.parse(http_request.responseText);
			  var perent = document.getElementById('rooms');
			  perent.innerHTML = '<h2>Выбрать место</h2>';
			  // perent.innerHTML += '<p>Мы подобрали для вас '+response.length+' номера. Выберите наиболее подходящий вам.</p>';	          
	          for (var i = 0; i < response.length; i++){
	          	renderRoom(response[i]);
	          };
	          bind_chose_room();
	       }
	    }
		
	    http_request.open("POST", data_file, false);
		http_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	    http_request.send(variablesStr);
	}else{
		document.getElementById('room_price').value = ''; 
		document.forms[0].submit();
	}


 }


 function renderRoom(roomParm){
	var elem   = document.createElement('div');
	var perent = document.getElementById('rooms');
	var bed_cnt = roomParm['bed_cnt'];

	for (var i =0; i<bed_cnt; i++){
		var bed_icon = document.createElement('div');
		bed_icon.innerHTML = '<i class="fas fa-bed"></i>';
		bed_icon.classList.add('bed_icon');
		elem.appendChild(bed_icon);		
	}

	elem.classList.add('room');
	elem.innerHTML = elem.innerHTML + '<span class="room_name">'+roomParm['name']+'</span>';
	elem.innerHTML = elem.innerHTML + '<hr>';
	if (roomParm['sofa_flg'] == 'Y'){	
		elem.innerHTML = elem.innerHTML + '<b> + Диван</b>';
	} else {  
		elem.innerHTML = elem.innerHTML + '<br>';
	};
	elem.innerHTML = elem.innerHTML + '<p class="guests_cnt"> <span>Взрослые:</span> 	<span>не больше ' + roomParm['max_cnt_adult_11_'] 	+ '</span></p>';
	elem.innerHTML = elem.innerHTML + '<p class="guests_cnt"> <span>Дети:</span> 		<span>не больше ' + roomParm['max_cnt_chldrn_6_10'] 	+ '</span></p>';
	elem.innerHTML = elem.innerHTML + '<p class="guests_cnt"> <span>Малыши:</span>  	<span>не больше ' + roomParm['max_cnt_chldrn_0_5'] 	+ '</span></p>';
	elem.innerHTML = elem.innerHTML + '<p class="price"> '+ roomParm['price'] + ' р. </p>';
	elem.innerHTML = elem.innerHTML + '<input class="chose_room_input" type="radio" name="room_type_id" id="room_'+ roomParm['id'] +'" value="'+roomParm['id']+'">';
	elem.innerHTML = elem.innerHTML + '<label class="full_inform" for="room_'+ roomParm['id'] +'" >Выбрать</label>';
	perent.appendChild(elem);
 	
 }



function bind_chose_room(){
	
	var chose_room = document.querySelectorAll('.chose_room_input');
	for(var i=0; i<chose_room.length; i++){
		chose_room[i].addEventListener('change', function(event){chose_room_act(event)});
	}
} 

function chose_room_act(event){
	document.getElementById('room_price').value = parseInt(event.target.parentElement.querySelector('.price').innerText);
	document.forms[0].submit();
} 

function bind_reg_type_trigger(){
	var trig = document.querySelector('.volunteer label');
	trig.addEventListener('click', function(){
/*		document.getElementById("rooms").innerText = '';
		if (document.querySelector('#volunteer:checked')){
			var btns = document.querySelectorAll('.trigger:not(.volunteer)')
			for (var j = 0; j<btns.length; j++){
				btns[j].style.display = 'none';
				trig.querySelector('span').innerText = 'А нет хочу на весь Лсаран';
			}
		}else{
			var btns = document.querySelectorAll('.trigger:not(.volunteer)')
			for (var j = 0; j<btns.length; j++){
				btns[j].style.display = 'inline-block';
			}
			trig.querySelector('span').innerText = 'Все же на один день';								
		}*/
		document.querySelector('.volunteer input').checked = true;
		document.querySelector('.volunteer input').value = 'on';
		
		document.forms[0].submit();

	})
}

bind_reg_type_trigger();

search_btn.addEventListener('click', search_room);