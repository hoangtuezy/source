<div id="album">
    <div class="container">
        <div class="content">
            <div class="row row-20 w-100" id="lightgallery">
                <?php foreach($tintuc as $stt => $item){
                $sql_khac = result_array("select * from #_baiviet_photo where id_baiviet='".$item['id']."' order by id desc");
                ?>
                <a rel="prettyPhoto[<?=$item["tenkhongdau"]?>]" href="thumb/1-720-480/upload/baiviet/<?=$item["photo"]?>"  class="col-md-3 col-sm-4 col-6 d-block">
                    <img src="thumb/1-320-240/upload/baiviet/<?=$item["photo"]?>" alt="<?=$item["photo"]?>" class="img-fluid w-100" onerror='this.src="img/320x200/"'>
                    <h3 class="h3a text-center my-3"><?=$item["ten_$lang"]?></h3>
                </a>
                <?php foreach($sql_khac as $photo){ ?>
                <a rel="prettyPhoto[<?=$item["tenkhongdau"]?>]" href="thumb/1-720-480/upload/baiviet/<?=$photo["photo"]?>"  class="col-3 d-none">
                    <img src="thumb/1-320-240/upload/baiviet/<?=$photo["photo"]?>" alt="<?=$photo["photo"]?>" class="img-fluid w-100" onerror='this.src="img/320x200/"'>
                </a>
                <?php } ?>
                
                <?php } ?>
            </div>
        </div>
    </div>
</div>
</div>
<?php
$js_container[] = <<<ALBUM
<link rel="stylesheet" href="assets/js/prettyphoto/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
<script src="assets/js/prettyphoto/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
$(document).ready(function(){
!(function(){
// finally, initialize photobox on all retrieved images
$('#lightgallery').photobox('a', { thumbs:true, loop:false });
// using setTimeout to make sure all images were in the DOM, before the history.load() function is looking them up to match the url hash
})();
});
</script>
ALBUM;
?>