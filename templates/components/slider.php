<?php
$slider =result_array("select ten_vi,photo_vi,link from #_photo where type='slider'  and hienthi=1 order by stt,id desc");
$width=910;
$height = 380;
$sliderzc = 1;
$slider_indicators = true;
$slider_pagination = true;
?>
<div id="slider">
 <div class="swiper-container">
  <div class="swiper-wrapper">
   <?php foreach($slider as $stt => $item){ ?>
     <div class="swiper-slide">
       <a href="<?=$item["link"]?>">
        <img src="thumb/1-<?=$width?>-<?=$height?>/<?=_upload_hinhanh_l.$item["photo_vi"]?>" class="img-fluid w-100" alt="<?=$item["photo_vi"]?>">
      </a>
    </div>
  <?php } ?>
</div>
<!-- Add Arrows -->
<?php if($slider_pagination){ ?>
  <div class="swiper-pagination"></div>
<?php } ?>
<?php if($slider_indicators){ ?>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
<?php } ?>
</div>
</div>