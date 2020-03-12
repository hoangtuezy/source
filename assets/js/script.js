$(document).ready(function(){

         var main_slider = new Swiper('#slider .swiper-container', {
            slidesPerView: 1,
            spaceBetween: 15,
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
 
        var swiper_quangcao = new Swiper('#slider_video_select .swiper-container', {
            slidesPerView: 3,
            spaceBetween: 20,
      // init: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
breakpoints: {
        0: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        568: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
      }
});

 $(document).on('click','.action-button',function(){
  $("body").toggleClass("active-nav");
   main_slider.update();
});
    });


 (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId=1717833035126973";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
//scroll Menu 

$(document).on("click",".paging_ajax .page-link",function(){
  var page = $(this).data("page");
  var target = $(this).parent().parent().parent().data("target");
  var idlist = $(this).parent().parent().parent().data("idlist");
  var idcat= $(this).parent().parent().parent().data("idcat");
  var perpage= $(this).parent().parent().parent().data("perpage");
  var noibat = $(this).parent().parent().parent().data("noibat");
  var type = $(this).parent().parent().parent().data("type");
  var _crsf = $("#ajax_crsf").data('value');
  var all_links = target + " .page-link";
  $.ajax({
    method: "POST",
    url:'ajax/paging_ajax',
    data:{
      'page': page,
      'perpage': perpage,
      'target': target,
      'idlist':idlist,
      'idcat':idcat,
      'noibat':noibat,
      'type':type,
      '_crsf': _crsf
    },
    success: function(data){
      $('#'+target).html(data);
    },
    complete: function(str){
      var ob = JSON.parse(JSON.stringify(str));
            var obj = JSON.parse(ob.responseText);
            var _m = $("#ajax_crsf");
            console.log(_m.data('value'));
            _m.html(obj._crsf);
            update_crsf(obj._crsf);
      $("body,html").animate({
        scrollTop: $('#'+target).parent().parent().offset().top - 200
      }, 500);
    }
  });
}); 

$(document).ready(function(){
    $('.add').click(function() {
        var _parent = $(this).parent();
        var _target = _parent.data('product');
        var _soluong = $('.'+_target+' .soluong');
        var sluong = parseInt(_soluong.val()) + 1;
        $(_soluong).attr('value',sluong);
    });
    
    $('.minus').click(function() {
       var _parent = $(this).parent();
       var _target = _parent.data('product');
       var _soluong = $('.'+_target+' .soluong');
       var sluong = parseInt(_soluong.val()) -1 ;
       if(sluong<1){
                //alert(sluong);exit();
                sluong = 1;
            }
            $(_soluong).attr('value',sluong);
        });
});

$(document).ready(function() {
$("#menu_responsive").mmenu();
    $(window).scroll(function() {
        if($(window).scrollTop() != 0) {
            $('#back-top').fadeIn();
        } else {
            $('#back-top').fadeOut();
        }
    });
    $('#back-top').click(function() {
        $('html, body').animate({scrollTop:0},500);
    });
    $('.btn_backtotop').click(function() {
        $('html, body').animate({scrollTop:0},500);
    });
    
});
function update_crsf(cr){
 $("#ajax_crsf").attr("data-value",cr);
}
