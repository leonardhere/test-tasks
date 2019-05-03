{
	document.querySelectorAll('#programm_slider .controller')[0].addEventListener('click', changePage);
	document.querySelectorAll('#programm_slider .controller')[1].addEventListener('click', changePage);
	var activePage = '11';
	var pages = document.querySelectorAll('.programm_content');
	function changePage(event){
		var target = event.target;
		var siblings = target.parentElement.children;
		for(var i=0; i<= siblings.length-1; i++){
			siblings[i].classList.remove('active');
		}
		target.classList.add('active');
		var changing = target.getAttribute('data');
		if (changing.substr(0, 1) == 'D'){
			activePage = changing.substr(1, 1) + activePage.substr(1,1);
		}else{
			activePage = activePage.substr(0,1) + changing.substr(1, 1);
		}

		for(var i=0; i<= pages.length-1; i++){
			pages[i].style.display = 'none'
		}
		document.querySelector('.programm_content[data="'+activePage+'"]').style.display = 'block';
		
	}
}