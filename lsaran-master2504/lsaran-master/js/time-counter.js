
{
	var counter = document.querySelector('#counter .container');
	date_lsaran = new Date(2018, 9, 25, 23, 59, 59);
	var element = [];
	var time_labels = [];

	function recount_time(){
		date_now = new Date();
		element[0].innerText = Math.abs(date_now.getMonth()- date_lsaran.getMonth())*30 + (date_lsaran.getDate() - date_now.getDate())
		element[1].innerText = Math.abs(date_now.getHours()- date_lsaran.getHours());
		element[2].innerText = Math.abs(date_now.getMinutes()- date_lsaran.getMinutes());
	};
	
	for (var i = 0; i <=2; i++){
		element[i] = document.createElement('div');
	}

	recount_time();


	if (element[0].innerText == 1) {
		time_labels[0] = 'день';
	}else if (element[0].innerText%10 >= 2 
		   && element[0].innerText%10 <= 4 
		   && (element[0].innerText < 11 
		   	 ||element[0].innerText > 19)) {
		time_labels[0] = 'дня';
	}else {
		time_labels[0] = 'дней';
	}

	if (element[1].innerText == 1) {
		time_labels[1] = 'час';
	}else if (element[1].innerText%10 >= 2 
		   && element[1].innerText%10 <= 4 
		   && (element[1].innerText < 11 
		   	 ||element[1].innerText > 19)) {
		time_labels[1] = 'часа';
	}else {
		time_labels[1] = 'часов';
	}	

	if (element[2].innerText == 1) {
		time_labels[2] = 'минута';
	}else if (element[2].innerText%10 >= 2 
		   && element[2].innerText%10 <= 4 
		   && (element[2].innerText < 11 
		   	 ||element[2].innerText > 19)) {
		time_labels[2] = 'минуты';
	}else {
		time_labels[2] = 'минут';
	}	

	for (var i = 0; i <=time_labels.length-1; i++){
		var block = document.createElement('div');
		var title = document.createElement('span');
		block.classList.add('time_counter');
		title.innerText = time_labels[i];
		block.appendChild(element[i]);
		block.appendChild(title);
		counter.appendChild(block);
	}
	setInterval(recount_time, 1000);

	


}