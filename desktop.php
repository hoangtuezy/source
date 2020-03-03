<!doctype html>
<html class="no-js" lang="<?=$lang?>">
<head>
	<meta charset="UTF-8">
	<base href="<?=$Protocol.$config_url?>/">
	<link id="favicon" rel="shortcut icon" href="<?=_upload_hinhanh_l.$favicon['thumb_'.$lang]?>" type="image/x-icon" />
	<link rel="canonical" href="<?=getCurrentPageURL();?>" />
	<?php include _template."layout/seo.php";?>
  
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/base.css">

	<link rel="stylesheet" href="assets/css/news.css">
	<link rel="stylesheet" href="assets/js/swiper/swiper.min.css">
	<link rel="stylesheet" href="assets/js/owl/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/jquery.mmenu.css">
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/jquery.mmenu.all.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=<?=$config['gv3_client']?>"></script>
	<?=$row_setting['scriptcode']?>
</head>
<body class="<?=$source?>">
	<span class="action-button d-none"></span>
	<?php if(empty($id)){ ?><h1 class="nina"><?php if($title_bar!='') echo $title_bar; else echo $row_setting['title']; ?></h1><?php } ?>
	<div id="nav">
		<?php include _template."layout/header.php";?>
	</div>
	<div id="wrapper">
			<?php if($com!='index'){ ?>
				<?php include _template."layout/breadcrum.php";?>
			<?php } ?>
      <?php include _template."layout/product_list.php";?>
			<?php include _template.$template."_tpl.php";?>	
			<?php include _template."layout/footer.php";?>
	</div>
	<?php include _template."layout/js.php";?>
	<?php include _lib."web_schema.php";?>
	<script type="text/javascript">
		if ('serviceWorker' in navigator) {
			window.addEventListener('load', function() {
				navigator.serviceWorker.register('services-worker.js')
				.then(function(registration) { console.log('Service worker ready'); registration.update(); })
				.catch(function(error) { console.log('Registration failed with ' + error); });
			});
		}
	</script>
</div>
<div class="clearfix"></div>
<?=$row_setting['bodycode']?>

<?php include _template."layout/support-online.php";?>

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
</body>
</html>