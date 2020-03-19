<?php
$album_images = $result_hinhanh ;
if(count($album_images) > 0){ 
?>
<div id="album">
    <div class="container">
        <div class="content">
            <div class="row row-20 w-100" id="lightgallery">
                <?php foreach($album_images as $stt => $item){
                ?>
                <a rel="prettyPhoto[<?=$item["tenkhongdau"]?>]" href="thumb/1-720-480/upload/baiviet/<?=$item["photo"]?>"  class="col-md-3 col-sm-4 col-6 d-block">
                    <img src="thumb/1-320-240/upload/baiviet/<?=$item["photo"]?>" alt="<?=$item["photo"]?>" class="img-fluid w-100" onerror='this.src="img/320x200/"'>
                    <h3 class="h3a text-center my-3"><?=$item["ten_$lang"]?></h3>
                </a>
                <?php } ?>
            </div>
        </div>

<?php
$js_container[] = <<<AGAGA
<link rel="stylesheet" href="js/prettyphoto/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
<script src="js/prettyphoto/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
$(document).ready(function(){
!(function(){
// finally, initialize photobox on all retrieved images
$('#lightgallery').photobox('a', { thumbs:true, loop:false });
// using setTimeout to make sure all images were in the DOM, before the history.load() function is looking them up to match the url hash
})();
});
</script>
AGAGA;
?>
 <?php } ?>
<div class="header-title my-3">
  <h2 class="h2-title"><span>Các Album Khác</span></h2>
</div>
<div class="product-all" id="album">
    <div class="container">
                <div class="">
                    <div class="swiper-slide">
                        <div class="col-md-12 col-12 d-flex justify-content-between flex-wrap">
                            <div class="row row-10 w-100">
                                <?php foreach($tintuc as $stt => $item){
                                if($stt % 7 >= 4){
                                    $w = 600;
                                    $h = 360;
                                    $c = 'col-sm-4 col-12';
                                }else{
                                    $w = 390;
                                    $h = 260;
                                    $c = 'col-md-3 col-sm-6 col-12';
                                }
                                ?>
                                <div class=" <?=$c?>">
                                    <div class="kgq_item hieuung">
                                        <a href="hinh-anh/<?=$item["tenkhongdau"]?>.html">
                                            <img src="thumb/1-<?=$w?>-<?=$h?>/upload/baiviet/<?=$item["photo"]?>" alt="<?=$item["photo"]?>" class="img-fluid w-100" onerror='this.src="img/<?=$w?>x<?=$h?>/"'>
                                        </a>
                                        <h3 class="overlay"><?=$item["ten_$lang"]?></h3>
                                    </div>
                                </div>
                            <?php if($stt + 1 == count($tintuc)) { echo('</div></div></div>');break;} ?>
                        <?php if($stt % 7 == 6) { echo('</div></div></div><div class="swiper-slide"><div class="col-md-12 col-12 d-flex justify-content-between flex-wrap"><div class="row row-10 w-100">');} ?>
                        <?php } ?>
                    </div>
                </div>
</div>
</div>
    </div>
