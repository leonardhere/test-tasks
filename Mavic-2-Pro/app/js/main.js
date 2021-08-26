$(document).on('ready', function() {
    $(".regular").slick({
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 1,
      nextArrow: '<div class="next-arr"><img src="images/arrow-right.png"></div>',
      prevArrow: '<div class="prev-arr"><img src="images/arrow-left.png"></div>'
    });
  });


function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
// window.onclick = function(event) {
//   if (!event.target.matches('.dropbtn')) {
//     var dropdowns = document.getElementsByClassName("dropdown-content");
//     var i;
//     for (i = 0; i < dropdowns.length; i++) {
//       var openDropdown = dropdowns[i];
//       if (openDropdown.classList.contains('show')) {
//         openDropdown.classList.remove('show');
//       }
//     }
//   }
// }

