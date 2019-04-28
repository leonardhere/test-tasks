{
	var container = document.querySelector('#slider_recall .slider_container ul');
	var elem = document.querySelectorAll('#slider_recall .slider_container li');
	var controller = document.querySelectorAll('#slider_recall .controller div');
	var position=0;
	controller[0].addEventListener('click', scrollLeft);	
	controller[1].addEventListener('click', scrollRight);	

	function scrollRight(){
		if (position != (elem.length-1)*(-1)){
			position--;	
			changePosition();
		}
	}

	function scrollLeft(){
		if (position != 0){
			position++;	
			changePosition();
		}
	}

	function changePosition(){
		container.style.left = position*elem[0].offsetWidth + 'px';
		if (position == 0){
			controller[0].style.display = 'none';
		} else if (position == (elem.length-1)*(-1)){
			controller[1].style.display = 'none';
		}else{
			controller[0].style.display = 'inline-block';
			controller[1].style.display = 'inline-block';
		}
	}

}