function nav_btn(){
	var btn = document.getElementById('nav_btn');
	btn.addEventListener('click', nav_toggle);
}

function nav_toggle(){
	var ul = document.getElementById('main-ul');
	if (ul.className == ''){
		ul.classList.add('main-ul-open');
	}else{
		ul.classList.remove('main-ul-open');
	}
}

nav_btn();

function bind_wrap_toggle(){
	var wrap = document.querySelectorAll('.wrap');
	for(var i=0; i< wrap.length; i++){
		wrap[i].parentElement.addEventListener('mouseenter', function(event){wrap_toggle_open(event)})
		wrap[i].parentElement.addEventListener('mouseleave',  function(event){wrap_toggle_close(event)})

		wrap[i].parentElement.addEventListener('click', function(event){
			if (event.target.parentElement.querySelector('.wrap').offsetHeight == 0){
				wrap_toggle_open(event);
			}else{
				wrap_toggle_close(event);				
			}
		})
	}
}

bind_wrap_toggle()

function wrap_toggle_open(event){

	var lis = event.target.parentElement.querySelectorAll('.wrap li');
	lis_height = 0;
	for (var i =0; i< lis.length; i++){
		lis_height += lis[i].offsetHeight;
	}
	event.target.parentElement.querySelector('.wrap').style.height = lis_height + 'px';
}

function wrap_toggle_close(event){
	event.target.parentElement.querySelector('.wrap').style.height = 0
}