<?php
$title = "Home";
get_header();
?>

<div class="swiper-container" id="slidePropaganda">
    <div class="swiper-wrapper">
      <div class="swiper-slide">Slide 1</div>
      <div class="swiper-slide">Slide 2</div>
      <div class="swiper-slide">Slide 3</div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>



  <script>
	      var swiper = new Swiper('.swiper-container', {
      pagination: {
        el: '.swiper-pagination',
      },
	  loop: true,
    });
  </script>


<?php
get_footer();
