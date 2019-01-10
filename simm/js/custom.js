/* Theme Name: Worthy - Free Powerful Theme by HtmlCoder
 * Author:HtmlCoder
 * Author URI:http://www.htmlcoder.me
 * Version:1.0.0
 * Created:November 2014
 * License: Creative Commons Attribution 3.0 License (https://creativecommons.org/licenses/by/3.0/)
 * File Description: Place here your custom scripts
 */
$(document).ready(function() {
  if ($('[data-background]').length > 0) {
       $('[data-background]').each(function() {
         var $background, $backgroundmobile, $this;
         $this = $(this);
         $background = $(this).attr('data-background');
         $backgroundmobile = $(this).attr('data-background-mobile');
         if ($this.attr('data-background').substr(0, 1) === '#') {
           return $this.css('background-color', $background);
         } else if ($this.attr('data-background-mobile') && device.mobile()) {
           return $this.css('background-image', 'url(' + $backgroundmobile + ')');
         } else {
           return $this.css('background-image', 'url(' + $background + ')');
         }
       });
     }
   });
 $(document).ready(function(){
   $('.ct-slick-homepage').slick({
     autoplay: false,
       autoplaySpeed: 3000,
      dots: true,
      arrows: false
   });
 });