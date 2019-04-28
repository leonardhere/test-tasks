var maxHeight = 0;
var lections = document.querySelectorAll('.schedule_lection');
for (var i=0; i< lections.length; i++){
	if (lections[i].offsetHeight > maxHeight){
		maxHeight = lections[i].offsetHeight;
	}
}

for (var i=0; i< lections.length; i++){
	lections[i].style.height =  maxHeight + 'px';
}