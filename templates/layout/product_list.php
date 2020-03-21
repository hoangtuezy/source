<?php
$per_page = 8; // Set how many records do you want to display per page.
$startpoint = ($page * $per_page) - $per_page;
$limit = ' limit '.$startpoint.','.$per_page;
$url = 'all';
$index_product_list = result_array("select * from #_product_list where noibat=1 and hienthi=1 and type='san-pham' and noibat=1 order by stt asc ");

$where_sanpham = " #_product where hienthi=1 and type='san-pham' and noibat!=0 and id_list='".$index_product_list[0]['id']."' ";
$result_sanpham="select id,ten_$lang,photo,tenkhongdau,mota_$lang,giaban,type,noibat1 from $where_sanpham order by stt,id desc $limit";
$d->query($result_sanpham);
$result_product=$d->result_array();
$paging_sanpham = pagination_ajax($where_sanpham,$per_page,$page,$url);
$target="all";
?>
<div id="sanpham_noibat">
    <div class="header-title">
        <h2 class="h2-title">
           <span>Thực Đơn Tiêu Biểu</span>
        </h2>
        <div class="desc"><?=$row_setting["slogan"]?></div>
    </div>
    <div class="container">
        <ul class="nav justify-content-center" id="product_list_tab" role="tablist">
            <?php foreach($index_product_list as $stt => $list){ ?>
            <li class="nav-item">
                <a class="product_tpl_tab_item nav-link <?=$stt==0?'active':''?>" id="<?=return_uid($list["id"])?>-tab" data-toggle="tab" href="#<?=return_uid($list["id"])?>" role="tab" aria-controls="<?=return_uid($list["id"])?>" aria-selected="true">
                    <div class="w-100"><span class="b"><?=$list["ten_$lang"]?></span></div>
                </a>
            </li>
            <?php } ?>
        </ul>
    </div>
<div class="container py-4">
        <div class="tab-content" id="myTabContent">
            <?php foreach($index_product_list as $stt => $list){
            $where_sanpham = " #_product where hienthi=1 and type='san-pham' and noibat!=0 and id_list='".$list["id"]."' ";
            $_result_sanpham="select * from $where_sanpham order by stt,id desc $limit";
            $d->query($_result_sanpham);
            $_result_sanpham=$d->result_array();
            $paging_sanpham = pagination_ajax($where_sanpham,$per_page,$page,$list["tenkhongdau"]);
            ?>
            <div class="tab-pane fade show <?= $stt == 0?'active':''?>" id="<?=return_uid($list["id"])?>" role="tabpanel" aria-labelledby="<?=return_uid($list["id"])?>-tab">
                <div class="row sanpham">
                    <?php foreach($_result_sanpham as $item){ ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <?php include _template."components/product_item.php";?>
                    </div>
                    <?php } ?>
                    
                </div>
                <div class="clearfix"></div>
                    <div class="col-12">
                        <div class="pagination" >
                            <div class="paging paging_ajax" data-target="<?=return_uid($list["id"])?>" data-idlist='<?=$list["id"]?>'  data-_crsf="<?=$_crsf?>"><?=$paging_sanpham?></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>