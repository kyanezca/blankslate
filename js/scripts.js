
$( document ).ready(function() {
$('.single-item').slick({
  autoplay:true,
  autoplaySpeed:2000,
  arrows:true,
  speed: 1200,
  pauseOnFocus: false,
  cssEase: "cubic-bezier(.38,0,.61,.98)",
  prevArrow:'<button type="button" class="slick-prev"></button>',
  nextArrow:'<button type="button" class="slick-next"></button>'
  });
$('.entry-content img').wrap("<div class='post-image'></div>");
});
