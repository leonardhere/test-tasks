(function() {
    document.querySelector('.nav-button').addEventListener('click', function() {
      this.parentNode.parentNode.classList.toggle('closed')
    }, false);
  })();

  (function() {
    document.querySelector('.nav-buttontwo').addEventListener('click', function() {
      this.parentNode.parentNode.classList.toggle('closed')
    }, false);
  })();