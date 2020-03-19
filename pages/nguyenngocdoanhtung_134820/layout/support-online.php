
<a class="ictbtn" id="btn-chat-call" target="_blank" href="tel://<?=str_replace(' ', '', $row_setting['hotline'])?>">
        <div class="animated infinite zoomIn chat-facebook"></div>
        <div class="animated infinite pulse chat-facebook-fill"></div>
        <span>
            <img src="assets/images/default/tel_icon.png" alt="zalo" />
        </span>
</a>
<a class="ictbtn" id="btn-chat-zalo" target="_blank" href="https://zalo.me/<?=str_replace(' ', '', $row_setting['hotline'])?>">
        <div class="animated infinite zoomIn chat-facebook"></div>
        <div class="animated infinite pulse chat-facebook-fill"></div>
        <span>
            <img src="assets/images/default/zalo_icon.png" alt="zalo" />
        </span>
</a>
<a class="ictbtn" id="btn-chat-facebook" target="_blank">
        <div class="animated infinite zoomIn chat-facebook"></div>
        <div class="animated infinite pulse chat-facebook-fill"></div>
        <span><img src="assets/images/default/facebook_icon.png" alt="facebook"></span>
</a>
<div id="khungchatn">
    <div class='fb-page chat-item' data-adapt-container-width='true' data-height='300' data-hide-cover='false' data-href='<?=$row_setting['facebook']?>' data-show-facepile='true' data-show-posts='false' data-small-header='false' data-tabs='messages' data-width='300'></div>
</div>
<div id="backtotop" class="transition"><div class="scrollup2"><img src="assets/images/default/top_icon.png" alt="top_icon.png" /></div></div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#btn-chat-facebook').click(function(){
            $('#khungchatn').toggle(300);
        });
    });
     $(function(){$(window).scroll(function(){if($(this).scrollTop()!=0){$('.scrollup2').fadeIn();}else{$('.scrollup2').fadeOut();}});$('.scrollup2').click(function(){$('body,html').animate({scrollTop:0},800);});});
</script> 
<style>
    @-webkit-keyframes zoomIn {
  from {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3);
  }

  50% {
    opacity: 1;
  }
}

@keyframes zoomIn {
  from {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3);
  }

  50% {
    opacity: 1;
  }
}

.zoomIn {
  -webkit-animation-name: zoomIn;
  animation-name: zoomIn;
}
@-webkit-keyframes pulse {
  from {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }

  50% {
    -webkit-transform: scale3d(1.05, 1.05, 1.05);
    transform: scale3d(1.05, 1.05, 1.05);
  }

  to {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}

@keyframes pulse {
  from {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }

  50% {
    -webkit-transform: scale3d(1.05, 1.05, 1.05);
    transform: scale3d(1.05, 1.05, 1.05);
  }

  to {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}

.pulse {
  -webkit-animation-name: pulse;
  animation-name: pulse;
}
    .animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

.animated.infinite {
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
}

.animated.delay-1s {
  -webkit-animation-delay: 1s;
  animation-delay: 1s;
}

.animated.delay-2s {
  -webkit-animation-delay: 2s;
  animation-delay: 2s;
}

.animated.delay-3s {
  -webkit-animation-delay: 3s;
  animation-delay: 3s;
}

.animated.delay-4s {
  -webkit-animation-delay: 4s;
  animation-delay: 4s;
}

.animated.delay-5s {
  -webkit-animation-delay: 5s;
  animation-delay: 5s;
}

.animated.fast {
  -webkit-animation-duration: 800ms;
  animation-duration: 800ms;
}

.animated.faster {
  -webkit-animation-duration: 500ms;
  animation-duration: 500ms;
}

.animated.slow {
  -webkit-animation-duration: 2s;
  animation-duration: 2s;
}

.animated.slower {
  -webkit-animation-duration: 3s;
  animation-duration: 3s;
}

@media (print), (prefers-reduced-motion) {
  .animated {
    -webkit-animation: unset !important;
    animation: unset !important;
    -webkit-transition: none !important;
    transition: none !important;
  }
}
    #btn-chat-zalo, #btn-chat-call, #btn-chat-marker { display: block; width: 40px; height: 40px; position: fixed; right: 20px; bottom: 200px; z-index: 99999999999; }
#btn-chat-call { bottom: 275px !important; }
#btn-chat-facebook { display: block; width: 40px; height: 40px; position: fixed; right: 20px; bottom: 130px; z-index: 99999999999; }
.ictbtn span { display: flex; display: -ms-flex; align-items: center; -ms-flex-align: center; justify-content: center; width: 40px; height: 40px; border-radius: 50%; background: rgba(0, 152, 219, 0.85) !important; position: relative; color: #17a1de; }
.ictbtn span img { vertical-align: middle; position: absolute; top: 0; left: 0; width: 40px; height: 40px; filter: invert(1) opacity(1); }
.chat-facebook-fill { width: 60px; height: 60px; top: -10px; position: absolute; -webkit-transition: all 0.2s ease-in-out; -moz-transition: all 0.2s ease-in-out; -ms-transition: all 0.2s ease-in-out; -o-transition: all 0.2s ease-in-out; transition: all 0.2s ease-in-out; -webkit-border-radius: 100%; -moz-border-radius: 100%; border-radius: 100%; border: 2px solid transparent; -webkit-transition: all .5s; -moz-transition: all .5s; -o-transition: all .5s; transition: all .5s; background-color: rgba(0, 152, 219, 0.51); opacity: .75; right: -10px; }
.chat-facebook { width: 50px; height: 50px; top: -5px; right: -5px; position: absolute; background-color: transparent; -webkit-border-radius: 100%; -moz-border-radius: 100%; border-radius: 100%; border: 2px solid rgba(243, 227, 192, 0.26); opacity: .1; border-color: rgba(0, 152, 219, 0.54); opacity: .5; }
#khungchatn { position: fixed; width: 300px; height: 350px; top: 100px; right: 10px; z-index: 999999; background: #fff; border-radius: 10px; overflow: hidden; display: none; }
#backtotop > div{
  background: #0a673b;
  border-radius: 50%;
}
#backtotop { border: none; position: fixed; right: 15px; bottom: 58px; opacity: .5; z-index: 1; cursor: pointer; width: 50px; height: 50px;border-radius: 50%; }
#backtotop:hover { opacity: 1; }
#backtotop img { width: 50px; height: 50px; }

</style>