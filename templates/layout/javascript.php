
<script src="assets/js/owl/owl.carousel.min.js"></script>
<script>
	  $(window).scroll(function() {
        var cach_top = $(window).scrollTop();
        if (cach_top >= 128) {
            $("#menu-top").addClass("sticky_topbar");
             $(".vertical_menu").removeClass("d-block");
        } else {
            $("#menu-top").removeClass("sticky_topbar");
            $(".vertical_menu").addClass("d-block");
        }
    });
</script>
<script type="text/javascript">
 $('.visao_slider').owlCarousel({
    // loop:true,
    margin:40,
    responsiveClass:true,
    items: 3,
    autoplay:true,
    speed:1000,
    nav:false,
		responsive:{
        0:{
            items:1,
            nav:false
        },
        768:{
            items:2,
            nav:false
        },
				900:{
            items:3,
            nav:false
        },
       
    },
})
</script>
 <script>
  var mySwiper = new Swiper ('#quytrinh .swiper-container', {
    // Optional parameters
    loop: true,
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
   
    breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 30,
        },
      }
  });
var baogia = new Swiper ('.sub-videos .swiper-container', {
    // Optional parameters
    loop: true,
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
   
    breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 10,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 10,
        },
      }
  });
  var subvidecscso = new Swiper('.ykien .swiper-container', {
       
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
  <script>
    $(document).ready(function(){
     var i=0;
    var deg=0;
    deg=parseInt(deg);
    var tranx=($('.spin-container').width()/2);
    $('.rp-xoay').each(function(){
      i++;
      $('.rp-xoay:nth-child('+i+')').css('transform','rotate('+deg+'deg) translateX(-'+tranx+'px) rotate(-'+deg+'deg)');
      deg=deg+72;
    });

    if($('.spin-item').length<2){
      $('.adxoay').removeClass('xoay');
      $('.rp-xoay > div').removeClass('xoay1');
    }else{
      $('.adxoay').addClass('xoay');
      $('.rp-xoay > div').addClass('xoay1');
    }

});

       
$(document).on("click",".spin-item",function(){
  var _link = $(this).data("link");
  window.location.href = _link;
});
  </script>
  <script type="text/javascript">
       function textboxChange(tb, f, sb) {
        if (!f) {
            if (tb.value == "") {
                tb.value = sb;
            }
        } else {
            if (tb.value == sb) {
                tb.value = "";
            }
        }
    }

    function doEnter(evt) {
        var key;
        if (evt.keyCode == 13 || evt.which == 13) {
            onSearch(evt);
        }
    }

    function onSearch(evt) {
        var keyword = document.getElementById("keyword").value;
        if (keyword == '' || keyword == 'Tìm kiếm') alert('Bạn chưa nhập từ khóa tìm kiếm!');
        else
        document.frm_timkiem.submit();
    }
</script>