<?php
$per_page = 8; // Set how many records do you want to display per page.
$startpoint = ($page * $per_page) - $per_page;
$limit = ' limit '.$startpoint.','.$per_page;
$url = 'all';
$index_product_list = result_array("select * from #_product_list where noibat=1 and hienthi=1 and type='san-pham' and noibat=1 order by stt asc ");
foreach($index_product_list as $stt => $list){
$index_product_cat = result_array("select * from #_product_cat where hienthi=1 and id_list='".$list["id"]."' order by stt asc ");
$where_sanpham = " #_product where hienthi=1 and type='san-pham' and noibat!=0 and id_list='".$list["id"]."'";
$result_sanpham="select id,ten_$lang,photo,tenkhongdau,mota_$lang,giaban,type,noibat1 from $where_sanpham order by stt,id desc $limit";
$d->query($result_sanpham);
$result_product=$d->result_array();
$paging_sanpham = pagination_ajax($where_sanpham,$per_page,$page,$url);
$target="all";
if(count($result_product) > 0){
?>
<div class="sanpham_noibat" id="<?=$list["tenkhongdau"]?>_sp_list">
    <div class="container">
        <div class="header-title">
            <h2 class="h2-title">
                <span><?=$list["ten_$lang"]?></span>
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="<?=$list['tenkhongdau']?>-all" role="tabpanel" aria-labelledby="<?=$list['tenkhongdau']?>-all-tab">
                <div class="row sanpham">
                    <?php foreach($result_product as $item){ ?>
                    <div class="col-3">
                        <?php include _template."components/product_item.php";?>
                    </div>
                    
                    <?php } ?>
                    <?php if(!empty($paging_sanpham)){ ?>
                    <div class="clearfix"></div>
                    <div class="col-12">
                        <div class="pagination">
                            <div class="paging paging_ajax" data-target="<?=$list['tenkhongdau']?>-all"><?=$paging_sanpham?></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                <?php } ?>
                </div>
            </div>
            <?php foreach($index_product_cat as $stt => $cat){
            $where_sanpham = " #_product where hienthi=1 and type='san-pham' and noibat!=0 and id_cat='".$cat["id"]."' ";
            $_result_sanpham="select ten_$lang,photo,tenkhongdau,mota_$lang,giaban,type from $where_sanpham order by stt,id desc $limit";
            $d->query($_result_sanpham);
            $_result_sanpham=$d->result_array();
            $paging_sanpham = pagination_ajax($where_sanpham,$per_page,$page,$list["tenkhongdau"]);
            ?>
            <div class="tab-pane fade show <?php //$stt == 0?'active':''?>" id="<?=return_uid($cat["id"])?>" role="tabpanel" aria-labelledby="<?=return_uid($cat["id"])?>-tab">
                <div class="row sanpham">
                    <?php foreach($_result_sanpham as $item){ ?>
                    <div class="col-3">
                        <?php include _template."components/product_item.php";?>
                    </div>
                    <?php } ?>
                    <div class="clearfix"></div>
                    <div class="col-12">
                        <div class="pagination" >
                            <div class="paging paging_ajax" data-target="<?=return_uid($cat["id"])?>" data-idlist='<?=$list["id"]?>' data-idcat='<?=$cat["id"]?>'><?=$paging_sanpham?></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php } ?>
<?php } ?>