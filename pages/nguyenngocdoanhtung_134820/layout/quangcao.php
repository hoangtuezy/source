<?php
$d->reset();
$d->query("select ten_vi,photo_vi,link from #_photo where type='quangcao' and hienthi=1 order by stt,id desc");
$quangcao =$d->result_array();
$width=1366;
$height = 390;
$quangcaozc = 1;
$quangcao_indicators = false;
$quangcao_pagination = false;
?>
<div id="quangcao">
 <div class="swiper-container">
  <div class="swiper-wrapper">
   <?php foreach($quangcao as $stt => $item){ ?>
     <div class="swiper-slide">
       <a href="<?=$item["link"]?>">
        <img src="thumb/1-<?=$width?>-<?=$height?>/<?=_upload_hinhanh_l.$item["photo_vi"]?>" class="img-fluid w-100" alt="<?=$item["photo_vi"]?>" onerror='this.src="img/<?=$width?>x<?=$height?>/"'>
      </a>
    </div>
  <?php } ?>
</div>
<!-- Add Arrows -->
<?php if($quangcao_pagination){ ?>
  <div class="swiper-pagination"></div>
<?php } ?>
<?php if($quangcao_indicators){ ?>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
<?php } ?>
</div>
</div>