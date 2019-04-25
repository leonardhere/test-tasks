function check_info_pos(){
	var inform_block = document.getElementById('inform');

	if (window.pageYOffset >= 10){
		inform_block.classList.add('down');
	}else{
		inform_block.classList.remove('down');
	}
	
}
check_info_pos();
window.addEventListener('scroll', check_info_pos);