if (false || !!document.documentMode){
	document.getElementsByClassName = function(cl) {
	  var retnode = [];
	  var elem = this.getElementsByTagName('*');
	  for (var i = 0; i < elem.length; i++) {
	    if((' ' + elem[i].className + ' ').indexOf(' ' + cl + ' ') > -1) retnode.push(elem[i]);
	  }
	  return retnode;
	}; 

}

function addEvent(evnt, elem, func) {
   if (elem.addEventListener)  // W3C DOM
      elem.addEventListener(evnt,func);
   else if (elem.attachEvent) { // IE DOM
      elem.attachEvent("on"+evnt, func);
   }
}


function addEventArticle(elem, func) {
   if (elem.addEventListener)  // W3C DOM
      elem.addEventListener("click",func);
   else if (elem.attachEvent) { // IE DOM
      elem.attachEvent("onclick", func);
   }
}

function customParser(JSONString){
   var stringStart = JSONString.indexOf('{')+1
   var stringEnd = JSONString.indexOf('}')
   var string = JSONString.slice(stringStart, stringEnd)
   var JSON = new Object()
   var index = 1;
   while (string.indexOf('"', index) != -1){
      var keyStart   = string.indexOf('"', index) + 1
      var keyEnd     = string.indexOf('"', keyStart+1)
      var valueStart    = string.indexOf('"', keyEnd+1)+1
      var valueEnd   = string.indexOf('"', valueStart+1)
      var key        = string.slice(keyStart, keyEnd)
      var value      = string.slice(valueStart, valueEnd)
      JSON[key]      = value;
      index = valueEnd + 1
   }
   return JSON
}


function parseJSON(JSONString){
   try {
      return JSON.parse(JSONString)
   } catch(e) {
      return customParser(JSONString)
   }
}