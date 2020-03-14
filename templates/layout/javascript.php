
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
 <script>
  
  
  </script>
  <script>
    $(document).ready(function(){
      // $("#menu_responsive").mmenu();
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

<?php if(!empty($config_cart)){ ?>
  <link rel="stylesheet" href="assets/css/giohang.css">
  <script src="assets/js/custom/giohang.js"></script>
<?php } ?>
<script>
  $(document).ready(function(){
             var main_dichvu = new Swiper('#dichvu .swiper-container', {
            slidesPerView: 3,
            spaceBetween: 30,
            updateOnWindowResize:true,
            autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      // init: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});
  })
</script>