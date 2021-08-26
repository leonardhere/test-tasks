(function() {
    function openModal() {
        var modalTrigger = document.getElementsByClassName('jsModalTrigger');
        for(var i = 0; i < modalTrigger.length; i++) {
            modalTrigger[i].onclick = function() {
              var target = this.getAttribute('href').substr(1);
              var modalWindow = document.getElementById(target);
  
              modalWindow.classList ? modalWindow.classList.add('open') : modalWindow.className += ' ' + 'open'; 
            }
        }   
    }
  
    function closeModal(){
      var closeButton = document.getElementsByClassName('jsModalClose');
      var closeOverlay = document.getElementsByClassName('jsOverlay');
        for(var i = 0; i < closeButton.length; i++) {
          closeButton[i].onclick = function() {
            var modalWindow = this.parentNode.parentNode;
  
            modalWindow.classList ? modalWindow.classList.remove('open') : modalWindow.className = modalWindow.className.replace(new RegExp('(^|\\b)' + 'open'.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
          }
        }   
        for(var i = 0; i < closeOverlay.length; i++) {
          closeOverlay[i].onclick = function() {
            var modalWindow = this.parentNode;
  
            modalWindow.classList ? modalWindow.classList.remove('open') : modalWindow.className = modalWindow.className.replace(new RegExp('(^|\\b)' + 'open'.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
          }
        }  
  
    }
    function ready(fn) {
      if (document.readyState != 'loading'){
        fn();
      } else {
        document.addEventListener('DOMContentLoaded', fn);
      }
    }
    ready(openModal);
    ready(closeModal);
  }());


  (function() {
    function openModal() {
        var modalTrigger = document.getElementsByClassName('jsModalTrigger-two');
        for(var i = 0; i < modalTrigger.length; i++) {
            modalTrigger[i].onclick = function() {
              var target = this.getAttribute('href').substr(1);
              var modalWindow = document.getElementById(target);
  
              modalWindow.classList ? modalWindow.classList.add('open') : modalWindow.className += ' ' + 'open'; 
            }
        }   
    }
  
    function closeModal(){
      var closeButton = document.getElementsByClassName('jsModalClose-two');
      var closeOverlay = document.getElementsByClassName('jsOverlay-two');
        for(var i = 0; i < closeButton.length; i++) {
          closeButton[i].onclick = function() {
            var modalWindow = this.parentNode.parentNode;
  
            modalWindow.classList ? modalWindow.classList.remove('open') : modalWindow.className = modalWindow.className.replace(new RegExp('(^|\\b)' + 'open'.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
          }
        }   
        for(var i = 0; i < closeOverlay.length; i++) {
          closeOverlay[i].onclick = function() {
            var modalWindow = this.parentNode;
  
            modalWindow.classList ? modalWindow.classList.remove('open') : modalWindow.className = modalWindow.className.replace(new RegExp('(^|\\b)' + 'open'.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
          }
        }  
  
    }
    function ready(fn) {
      if (document.readyState != 'loading'){
        fn();
      } else {
        document.addEventListener('DOMContentLoaded', fn);
      }
    }
    ready(openModal);
    ready(closeModal);
  }());

  (function() {
    function openModal() {
        var modalTrigger = document.getElementsByClassName('jsModalTrigger-three');
        for(var i = 0; i < modalTrigger.length; i++) {
            modalTrigger[i].onclick = function() {
              var target = this.getAttribute('href').substr(1);
              var modalWindow = document.getElementById(target);
  
              modalWindow.classList ? modalWindow.classList.add('open') : modalWindow.className += ' ' + 'open'; 
            }
        }   
    }
  
    function closeModal(){
      var closeButton = document.getElementsByClassName('jsModalClose-three');
      var closeOverlay = document.getElementsByClassName('jsOverlay-three');
        for(var i = 0; i < closeButton.length; i++) {
          closeButton[i].onclick = function() {
            var modalWindow = this.parentNode.parentNode;
  
            modalWindow.classList ? modalWindow.classList.remove('open') : modalWindow.className = modalWindow.className.replace(new RegExp('(^|\\b)' + 'open'.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
          }
        }   
        for(var i = 0; i < closeOverlay.length; i++) {
          closeOverlay[i].onclick = function() {
            var modalWindow = this.parentNode;
  
            modalWindow.classList ? modalWindow.classList.remove('open') : modalWindow.className = modalWindow.className.replace(new RegExp('(^|\\b)' + 'open'.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
          }
        }  
  
    }
    function ready(fn) {
      if (document.readyState != 'loading'){
        fn();
      } else {
        document.addEventListener('DOMContentLoaded', fn);
      }
    }
    ready(openModal);
    ready(closeModal);
  }());