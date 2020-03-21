<script src="assets/plugin/tinyslider/tinyslider.js"></script>
<script src="assets/js/build.min.js"></script>
<script src="assets/js/script.js"></script>
<?php if(in_array($source, array('product'))){ ?>
	<link rel="stylesheet" href="assets/css/product_detail.css">
	<link rel="stylesheet" href="assets/css/magicscroll.css">
	<link rel="stylesheet" href="assets/css/magiczoomplus.css">
	<script src="assets/js/magicscroll.js"></script>
	<script src="assets/js/magiczoomplus.js"></script>
<?php } ?>
<script>
	 var mobile = 'false',
      isTestPage = false,
      isDemoPage = true,
      classIn = 'jello',
      classOut = 'rollOut',
      speed = 400,
      doc = document,
      win = window,
      ww = win.innerWidth || doc.documentElement.clientWidth || doc.body.clientWidth,
      initFns = {},
      sliders = new Object(),
      edgepadding = 50,
      gutter = 10;

	var options = {
    'vertical': {
      container: '#vertical',
      items: 2,
      // loop: false,
      mouseDrag: true,
      // axis: 'vertical',
      autoplay: true,
      autoplayTimeout: 2000,
      arrowKeys: false,
      swipeAngle: false,
      controls:false,
      rewind:false,
      prevButton:false,
      nextButton:false,
      nav:false,
      autoplayButtonOutput:false
    },
    'khachhang_slider': {
      container: '#khachhang_slider',
      items: 3,
      // loop: false,
      mouseDrag: true,
      autoplay: true,
      autoplayTimeout: 2000,
      arrowKeys: false,
      swipeAngle: false,
      controls:false,
      rewind:false,
      prevButton:false,
      nextButton:false,
      nav:false,
      autoplayButtonOutput:false
    },
};
for (var i in options) {
    var item = options[i];
    item.container = '#' + i;
    item.swipeAngle = false;
    if (!item.speed) { item.speed = speed; }

    if (doc.querySelector(item.container)) {
      sliders[i] = tns(options[i]);
      // insert code
        // test responsive pages
    } else if (i.indexOf('responsive') >= 0) {
      if (isTestPage && initFns[i]) { initFns[i](); }
    }
}

var swiper_product = new Swiper('#ykien .swiper-container', {
       
        spaceBetween: 30,
        centeredSlides: true,
        loop:true,
        autoplay: {
        delay: 4000,
        },
         breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
      },
        // pagination: '.swiper-product .swiper-pagination',
        paginationClickable: true,
        slideToClickedSlide: true,
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        },
        on: {
            slideChangeTransitionStart:function(){
                $(".ykien_content").removeClass("active");
            },
            slideChangeTransitionEnd: function(){
                var a = $("#ykien .swiper-slide-active .khachhang_item").data("id");
                $("."+a).addClass("active");
            }
        }

        });
</script>