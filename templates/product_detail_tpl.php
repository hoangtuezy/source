<?php
$row_default_photo = fetch_array("select photo_vi,link from #_photo where type='img_product_detail' ");
$product_giaohang = fetch_array("select mota_$lang from #_info where type='giaohang' ");
$product_hoantra= fetch_array("select mota_$lang from #_info where type='hoantra' ");
$product_thongtin = fetch_array("select noidung_$lang from #_company where type='product_info' ");
?>
<div class="scrollbar">
    <div class="container">
        <div id="product-detail">
            <div class="row">
                <div id="left" class="col-5">
                    <div class="showhinh text-center">
                        <a class="MagicZoomPlus" id="shoes" href="<?=_upload_product_l.$row_detail['photo']?>"><img src="thumb/1-560-640/<?=_upload_product_l.$row_detail['photo']?>" alt="<?=$row_detail['ten_'.$lang]?>" onerror='this.src="img/560x640/"'/></a>
                    </div>
                    <div class="MagicScroll thumbhinh" data-options="draggable: true;items: 5;">
                        <a data-zoom-id="shoes" href="<?=_upload_product_l.$row_detail['photo']?>" data-image="thumb/1-560-640/<?=_upload_product_l.$row_detail['photo']?>"><img src="thumb/1-112-128/<?=_upload_product_l.$row_detail['photo']?>" alt="<?=$row_detail['ten_'.$lang]?>" class="img-fluid" /></a>
                        <?php
                        if(count($result_hinhanh) > 0) {
                            for($i=0;$i<count($result_hinhanh);$i++) { ?>
                                <a data-zoom-id="shoes" href="<?=_upload_product_l.$result_hinhanh[$i]['photo']?>" data-image="thumb/1-560-640/<?=_upload_product_l.$result_hinhanh[$i]['photo']?>"><img src="thumb/1-112-128/<?=_upload_product_l.$result_hinhanh[$i]['photo']?>" alt="<?=$row_detail['ten_'.$lang]?>" class="img-fluid"/></a>
                            <?php } }?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="right" class="col-7">
                        <h1 class="vcard fn"><?php echo $row_detail['ten_'.$lang]; ?></h1>
                        <?php if(!empty($row_detail["masp"])){ ?>
                            <div class="product_info">
                                <div class="ma-product masp"><span class="label"><?=_masp?>:</span> <font><?=$row_detail["masp"]?></font></div>
                            </div>
                        <?php } ?>
                        <div class="product_info">
                            <div class="giaban"><span class="label"><?=_gia?>:</span><span class="text-red" style="font-size: 18px;"><?= price($row_detail["giaban"]) ?></span> <?php if(!empty($row_detail["giacu"])){ ?> <del class="text-grey" style="font-size: 16px;text-decoration: line-through;"><?= price($row_detail["giacu"]) ?><?php } ?></div>
                        </div>
                
            
                        <?php if(!empty($row_detail['mota_'.$lang])){ ?>
                            <div class="product_info">
                               <?=$row_detail['mota_'.$lang]; ?>
                           </div>
                       <?php } ?>
                       <div class="product_info">
                           <div class="chiase df aic">
                            <div class="fb-like" data-href="<?=getCurrentPageURL()?>" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                            &nbsp;<div class="zalo-share-button" data-href="<?=getCurrentPageURL()?>" data-oaid="579745863508352884" data-layout="1" data-color="blue" data-customize=false></div>
                            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            <g:plusone size="medium" ></g:plusone>
                            <div class="clearfix"></div>
                        </div>
                    </div>
              
         
            
            
        </div>
        
    </div>
    <div class="clearfix"></div>
    <div class="mb-20">
        <h4>Thông Tin Chi Tiết</h4>
        <div id="product_detail_noidung">
         <?=$row_detail['noidung_'.$lang]?>
     </div>
     <div class="fb-comments" data-href="<?=getCurrentPageURL()?>" data-width="100%" data-numposts="10"></div>
 </div>
</div>

<div class="header-title my-4 text-center">
    <h2 class="h2-title"><span><?=$title_com?> <?=_khac?></span></h2>
</div>
<div class="product-all row row-20">
    <?php foreach($product_khac as $item) { ?>
        <div class="col-3 mb-3">
            <?php include _template."components/product_item.php";?>
        </div>
    <?php } ?>
</div>
<form name="form2" action="index.php" id="form2" method="POST">
    <input type="hidden" name="productid" />
    <input type="hidden" name="idsize" />
    <input type="hidden" name="idmau" />
    <input type="hidden" name="quality" />
    <input type="hidden" name="_crsf" value="<?=$_crsf?>"/>
    <input type="hidden" name="command" />
</form>
<script language="javascript">
    function addtocart(pid){
        document.form2.idsize.value=$("#idsize option:selected").val();
        document.form2.idmau.value=$("input[name='idmau']:checked").val();
        document.form2.quality.value=$("#input_soluong").val();
        document.form2.productid.value=pid;
        document.form2.command.value='add';
        document.form2.submit();
    }
</script>
</div>
</div>
