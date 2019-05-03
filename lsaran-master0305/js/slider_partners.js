function slider_partners(){
	var container = document.querySelector('#partners .slider_container ul');
	var content = document.querySelectorAll('#partners li');
	var slide_number;
	var contentWidth = content[0].offsetWidth;
	container.style.left = -2 * contentWidth + 'px';

	for (var i = 1; i<= content.length ; i++){
		content[i-1].style.order =  i;
	}

	function slider_partners_inner(){
		var contentWidth = content[0].offsetWidth;

		container.style.left = Number(container.style.left.slice(0, -2)) -1 + 'px'

		if (Number(container.style.left.slice(0, -2)) <= contentWidth*-1){
			var changeblock = document.querySelector('#partners li[style = "order: 1;"]');
		
			for (var i = 0; i<= content.length -1 ; i++){
				var newAttr = Number(content[i].style.order) -1; 
				content[i].style.order =  newAttr.toString();
			}
			changeblock.style.order =  content.length.toString();

			container.style.left = 0;

		}
	}







slider_partners_inner();
/*	setInterval(slider_partners_inner, 10)*/
};
slider_partners();