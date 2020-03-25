<?php
$row_default_photo = fetch_array("select photo_vi,link from #_photo where type='img_product_detail' ");
$product_giaohang = fetch_array("select mota_$lang from #_info where type='giaohang' ");
$product_hoantra= fetch_array("select mota_$lang from #_info where type='hoantra' ");
$product_thongtin = fetch_array("select noidung_$lang from #_company where type='product_info' ");
$p_w = 260;
$p_h = 240;
?>
<div class="scrollbar">
    <div class="container">
        <div id="product-detail">
            <div class="row">
                <div id="left" class="col-md-5 col-12">
                    <div class="showhinh text-center">
                        <a class="MagicZoomPlus" id="shoes" href="<?=_upload_product_l.$row_detail['photo']?>"><img src="thumb/1-<?=$p_w*2?>-<?=$p_h*2?>/<?=_upload_product_l.$row_detail['photo']?>" alt="<?=$row_detail['ten_'.$lang]?>" onerror='this.src="img/<?=$p_w*2?>x<?=$p_h*2?>/"'/></a>
                    </div>
                    <div class="MagicScroll thumbhinh" data-options="draggable: true;items: 5;">
                        <a data-zoom-id="shoes" href="<?=_upload_product_l.$row_detail['photo']?>" data-image="thumb/1-<?=$p_w*2?>-<?=$p_h*2?>/<?=_upload_product_l.$row_detail['photo']?>"><img src="thumb/1-<?=$p_w*0.4?>-<?=$p_h*0.4?>/<?=_upload_product_l.$row_detail['photo']?>" alt="<?=$row_detail['ten_'.$lang]?>" class="img-fluid" /></a>
                        <?php
                        if(count($result_hinhanh) > 0) {
                            for($i=0;$i<count($result_hinhanh);$i++) { ?>
                                <a data-zoom-id="shoes" href="<?=_upload_product_l.$result_hinhanh[$i]['photo']?>" data-image="thumb/1-<?=$p_w*2?>-<?=$p_h*2?>/<?=_upload_product_l.$result_hinhanh[$i]['photo']?>"><img src="thumb/1-<?=$p_w*0.4?>-<?=$p_h*0.4?>/<?=_upload_product_l.$result_hinhanh[$i]['photo']?>" alt="<?=$row_detail['ten_'.$lang]?>" class="img-fluid"/></a>
                            <?php } }?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="right" class="col-md-7 col-12">
                        <h1 class="vcard fn"><?php echo $row_detail['ten_'.$lang]; ?></h1>
                        <?php if(!empty($row_detail["masp"])){ ?>
                            <div class="product_info">
                                <div class="ma-product masp"><span class="label"><?=_masp?>:</span> <font><?=$row_detail["masp"]?></font></div>
                            </div>
                        <?php } ?>
                        <div class="product_info">
                            <div class="giaban"><span class="label"><?=_gia?>:</span><span class="text-red" style="font-size: 18px;"><?= price($row_detail["giaban"]) ?></span> <?php if(!empty($row_detail["giacu"])){ ?> <del class="text-grey" style="font-size: 16px;text-decoration: line-through;"><?= price($row_detail["giacu"]) ?><?php } ?></div>
                        </div>
                     <?php /*   <div class="product_info mausac">
                                <?php $colors = json_decode($row_detail['price_bycolor'],1); ?>
                                <div class="input-group mb-3">
                              <div class="input-group-prepend col-2 p-0 text-center">
                                <label class="input-group-text w-100" for="select_mausac">Màu sắc</label>
                            </div>
                            <select class="custom-select col-lg-4 col-md-6 col-12" id="select_mausac">
                                <option selected>Chọn màu sắc...</option>
                                <?php  foreach($colors as $i => $c){
                                    $color = fetch_array("select * from #_thuoctinh where id='".$i."' ");?>
                                    <option value="<?=$i?>"><?=$color["ten_$lang"]?> - <?=price($c)?></option>
                                <?php } ?>
                            </select>
                        </div>
                            </div>
                            <div class="product_info size">
                                 <?php 
                                 $sizes = explode(',', $row_detail['size']); ?>
                                <div class="input-group mb-3">
                              <div class="input-group-prepend col-2 p-0 text-center">
                                <label class="input-group-text w-100" for="select_size">Size</label>
                            </div>
                            <select class="custom-select col-lg-4 col-md-6 col-12" id="select_size">
                                <option selected>Chọn size...</option>
                                <?php  foreach($sizes as $i){
                                    $size = fetch_array("select * from #_thuoctinh where id='".$i."' ");?>
                                    <option value="<?=$i?>"><?=$size["ten_$lang"]?></option>
                                <?php } ?>
                            </select>
                        </div>
                            </div>
                             */ ?>
                             <?php /* ?>
                            <div class="product_info">
                                <div class="input-group mb-3">
                                <div class="input-group-prepend col-md-2 col-3 p-0 text-center">
                                <label class="input-group-text w-100" for="input_soluong">Số lượng</label>
                            </div>
                                <div class="soluong_11 <?=return_uid($row_detail["id"])?>" data-product="<?=return_uid($row_detail["id"])?>">
                                    <a href="javascript:void()" class="minus a_1">-</a>
                                    <input type="text" value="1" min="1" max="999" name="soluong" class="soluong form-control" id="input_soluong">
                                    <a href="javascript:void()" class="add a_1">+</i></a>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                            </div>
                            <div class="product_info d-flex ">
                                <div class="btn-giohang add_cart" data-product="<?=return_uid($row_detail["id"])?>">THÊM VÀO GIỎ HÀNG</div>
                                <div class="btn-giohang muangay px-2" onclick="addtocart(<?=$row_detail['id']?>)" data-product="<?=return_uid($row_detail["id"])?>">MUA NGAY</div>
                            </div>
                         <?php */ ?>   
                        <?php if(!empty($row_detail['mota_'.$lang])){ ?>
                            <div class="product_info">
                               <?=$row_detail['mota_'.$lang]; ?>
                           </div>
                       <?php } ?>
                       <div class="product_info">
                         <?php include _template."layout/chiase.php";?>
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
<div class="product-all row row-15">
    <?php foreach($product_khac as $item) { ?>
        <div class="col-md-3 col-sm-4 col-6 mb-3">
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
