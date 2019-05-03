var ModalIsOpenGlobal = 0
var modalContainerElem = document.getElementById('modal')
var modalContentElem = document.getElementById('modalContent')

var exit 		= document.getElementById('modalExit');
var changeArr 	= document.getElementsByClassName('changeArr')
var deleteArr 	= document.getElementsByClassName('deleteArr')
var addArr 		= document.getElementsByClassName('addArr')

modalContainerElem.style.top = 0
modalContainerElem.style.left = 0

function changeButtonBind(){
	var changeButtonArr = document.getElementsByClassName("changeButtonArr")[0]
	addEvent('click', changeButtonArr,  function(){changeDataHandler()});
}


function changeModalParam(){
	var windowWidth  = window.innerWidth  || screen.availWidth
	var windowHeight = window.innerHeight || screen.availHeight
	modalContainerElem.style.height  = windowHeight 		+ 'px'
	modalContainerElem.style.width   = windowWidth  		+ 'px'
	modalContentElem.style.width     = windowWidth * 0.8 	+ 'px'
	modalContentElem.style.marginTop = windowHeight * 0.05 	+ 'px'

}

changeModalParam()

function ajax2DB(actionType, articleNum){
	var articleNum = articleNum || 1;
	var response;
	var variablesStr = actionType+'ID='+ articleNum ;
	var data_file = "/db_action/admin/get_lector_"+actionType+".php";
	var http_request = new XMLHttpRequest();
	http_request.onreadystatechange = function(){

	   if (http_request.readyState == 4){
	      response = http_request.responseText;
	   }
	}
	http_request.open("POST", data_file, false);
	http_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	http_request.send(variablesStr);

	respJSON = parseJSON(response)
	return generateProfile(actionType, respJSON)
}

function ajaxChangeData(){
	var response;
	var FormId = 		document.getElementById('FormId');
	var FormName = 		document.getElementById('FormName');
	var FormSurname = 	document.getElementById('FormSurname');
	var FormBio = 		document.getElementById('FormBio');
	var FormTitle = 	document.getElementById('FormTitle');
	var FormDescr = 	document.getElementById('FormDescr');
	var FormImg = 		document.getElementById('FormImg');
	var Part_year = 	document.getElementById('Part_year');
	var formData = 		new FormData()
	
	var variablesStr = 
	' FormId=' 			+ FormId.innerText + 
	'&FormName=' 		+ FormName.value +
	'&FormSurname=' 	+ FormSurname.value +
	'&FormBio=' 		+ FormBio.value +
	'&FormTitle=' 		+ FormTitle.value +
	'&FormPartyYear=' 	+ Part_year.value +
	'&FormDescr=' 		+ FormDescr.value +
	'&FormImg=' 		+ FormImg.files[0]
	;

	var data_file = "/db_action/admin/change_lector.php";
	var http_request = new XMLHttpRequest();
	http_request.onreadystatechange = function(){

	   if (http_request.readyState == 4){
	      response = http_request.responseText;
	   }
	}


	formData.append('FormId', 			FormId.innerText);
	formData.append('FormName', 		FormName.value);
	formData.append('FormSurname', 		FormSurname.value);
	formData.append('FormBio', 			FormBio.value);
	formData.append('FormTitle', 		FormTitle.value);
	formData.append('FormPartyYear',	Part_year.value);
	formData.append('FormDescr', 		FormDescr.value);
	formData.append('FormImg', 			FormImg.files[0]);


	http_request.open("POST", data_file, false);
	http_request.setRequestHeader("Content-type", "multipart/form-data");
	http_request.send(formData);
	console.log(response)
	return response
}

function generateProfile(actionType, respJSON){

	htmlOutput = 
 			'<form id="changeForm">'
 		+	'	<table>'
 		+	'		<tr>'
 		+	'			<td>id</td>'
 		+	'			<td id="FormId">'+ respJSON["lector_id"] +'</td>'
 		+	'		</tr>'
 		+	'		<tr>'
 		+	'			<td>Имя</td>'
 		+	'			<td><input id="FormName" type="text" value="'+ respJSON["lector_name"] +'"></td>'
 		+	'		</tr>'
 		+	'		<tr>'
 		+	'			<td>Фамилия</td>'
 		+	'			<td><input id="FormSurname" type="text" value="'+ respJSON["lector_surname"] +'"></td>'
 		+	'		</tr>'
 		+	'		<tr>'
 		+	'			<td>БИО</td>'
 		+	'			<td><textarea id="FormBio" cols="30" rows="10">'+respJSON["bio"]+'</textarea></td>'
 		+	'		</tr>'
 		+	'		<tr>'
 		+	'			<td>Название лекции</td>'
 		+	'			<td><textarea id="FormTitle" cols="30" rows="10">'+respJSON["lection_title"]+'</textarea></td>'
 		+	'		</tr>'
 		+	'		<tr>'
 		+	'			<td>Описание лекции</td>'
 		+	'			<td><textarea id="FormDescr" cols="30" rows="10">'+respJSON["lection_descr"]+'</textarea></td>'
 		+	'		</tr>'
 		+	'		<tr>'
 		+	'			<td>Год выступления</td>'
 		+	'			<td><textarea id="Part_year" cols="30" rows="10">'+respJSON["part_year"]+'</textarea></td>'
 		+	'		</tr>'
 		+	'		<tr>'
 		+	'			<td> аватарка</td>'
 		+	'			<td>'
 		+	'			<img src="/image/lectors/'+respJSON["lector_img"]+'">'
 		+	'			<input id="FormImg" type="file" accept="image/*">'
 		+	'			</td>'
 		+	'		</tr>'
 		+	'	</table>'
 		+	'</form>'
 		+	'<p class="button changeButtonArr">Внести изменения</p>'
	;

	return htmlOutput 
}

function changeDataHandler(){
	ajaxChangeData()
	closeModal()
}


function openModal(actionType, actionNumber){
	ModalIsOpenGlobal = 1
	modalContainerElem.style.display = 'block';
	if (actionType == 'change'){
		modalContentElem.innerHTML = "<h2><center> Изменения профиля </center></h2>"
		modalContentElem.innerHTML = ajax2DB(actionType, actionNumber)
		changeButtonBind()

	} else 	if (actionType == 'delete'){
		modalContentElem.innerHTML = "<h2><center> Удаление профиля </center></h2>"
	} else 	if (actionType == 'add'){
		modalContentElem.innerHTML = "<h2><center> Добавление профиля </center></h2>"
	}

}


function closeModal(){
	ModalIsOpenGlobal = 0
	modalContainerElem.style.display = 'none';
	modalContentElem.innerHTML = '';
}


for (var i = 0;  i < changeArr.length; i++){
	addEvent('click', changeArr[i],  function(){openModal('change', this.getAttribute('data-id'));});
}

for (var i = 0;  i < deleteArr.length; i++){
	addEvent('click', deleteArr[i],  function(){openModal('delete', this.getAttribute('data-id'));});
}

for (var i = 0;  i < addArr.length; i++){
	addEvent('click', addArr[i],  function(){openModal('add', this.getAttribute('data-id'));});
}


addEvent('click', exit, function(){closeModal()});

addEvent('resize', window, function(){changeModalParam()});
