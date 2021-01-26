$(function(){

$('.compare__slider').slick({
    infinite: false,
    slidesToScroll: 1,
    slidesToShow: 3,
    arrows: true,
    prevArrow: '<img class="slider-arrow slider-arrow-left arrow-upper" src="img/arrow-left.png" alt=""></img>',
    nextArrow: '<img class="slider-arrow slider-arrow-right arrow-upper" src="img/arrow-right.png" alt=""></img>',
    responsive: [
      {
        breakpoint: 769,
        settings: {
          slidesToShow: 2,
        }
      }
    ]
});

$("#navToggle").click(function() {
  $(this).toggleClass("active");
  $(".overlay").toggleClass("open");
  $("body").toggleClass("locked");
});
$('.overlay').click(function() {
  $(this).removeClass('open');
  $('.navBurger').removeClass('active');
});

$('#clearslider').on('click', function() {
  $('.slick-list').html('');
})
  
});


function removeElem(delElem, attribute, attributeName) {
    if (!(delElem && attribute && attributeName)) return;
    return function(e) {
      let target = e.target;
      if (!(target.hasAttribute(attribute) ?
          (target.getAttribute(attribute) === attributeName ? true : false) : false)) return;
      let elem = target;
      while (target != this) {
        if (target.classList.contains(delElem)) {
          target.remove();
          return;
        }
        target = target.parentNode;
      }
      return;
    };
  }
  
  
document.addEventListener("click", removeElem("slick-slide", "data-del", "delete"));


const $slider = document.querySelector('.compare__slider');
const $comparatorItem = document.querySelector('.compare__slider-item.last')
const callback = function(mutationsList, observer) {
  mutationsList.forEach(mutation => {
    if (mutation.type === 'childList') {
      console.log("here");
      ($slider.querySelectorAll(".compare__slider-item").length <= 2)
      ? $comparatorItem.querySelector("div").classList.remove("hidden")
      : $comparatorItem.querySelector("div").classList.add("hidden")
    }
  })
};

const sliderObserver = new MutationObserver(callback);
sliderObserver.observe($slider, { childList: true, subtree: true });
