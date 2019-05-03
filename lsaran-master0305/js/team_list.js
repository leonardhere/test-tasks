var scroll_cont = document.getElementById('scroll_container');
var scroll_cont_frame = document.getElementById('team_list');

scroll_cont.style.top = scroll_cont_frame.offsetHeight + 'px'
function scroll_container(){
	var position = Number(scroll_cont.style.top.slice(0, -2));
	if(position <= -1*(scroll_cont.offsetHeight )){
		scroll_cont.style.top = scroll_cont_frame.offsetHeight + 'px';			
	} else{
		scroll_cont.style.top = Number(scroll_cont.style.top.slice(0, -2)) -1 + 'px';	
	}

}

setInterval(scroll_container, 10);
