function slider_lectors(){
	var container = document.querySelector('#slider_lectors .slider_container ul');
	var content = document.querySelectorAll('#slider_lectors .content');
	var slide_number;

	for (var i = 0; i<= content.length -1 ; i++){
		content[i].style.order =  (i+1).toString();
	}

	function slider_lectors(){
		var contentWidth = content[0].offsetWidth;

		container.style.left = Number(container.style.left.slice(0, -2)) -1 + 'px'

		if (Number(container.style.left.slice(0, -2)) <= contentWidth*-1){
			var changeblock = document.querySelector('#slider_lectors .content[style = "order: 1;"]');
		
			for (var i = 0; i<= content.length -1 ; i++){
				var newAttr = Number(content[i].style.order) -1; 
				content[i].style.order =  newAttr.toString();
			}
			changeblock.style.order =  content.length.toString();

			container.style.left = 0;

		}
	}

	setInterval(slider_lectors, 10)
};
slider_lectors();