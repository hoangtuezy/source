<?php
if(!empty($_POST)){
	$page = (int) $_POST['page'];
	if($page ==0) $page=1;
	$target = $_POST['target'];
	$idlist = (int) $_POST['idlist'];
	$idcat = (int) $_POST['idcat'];
	$noibat =  $_POST['noibat'];
	$type =  $_POST['type'];
	$perpage = 8;
	if(!empty($_POST['perpage'])){
			$perpage =  $_POST['perpage']; // Set how many records do you want to display per page.
		}


		$startpoint = ($page * $perpage) - $perpage;
		$limit = ' limit '.$startpoint.','.$perpage;
		if($idlist > 0){
			$_idlist = ' and id_list='.$idlist;
		}
		if($idcat > 0){
			$_idlist = ' and id_cat='.$idcat;
		}
		if(empty($noibat)){
			$_noibat = ' and noibat=1 ';
		}else{
			$_noibat = ' and '.$noibat.'=1 ';
		}

		if(empty($type)){
			$type = 'san-pham';
		}
		$where_sanpham = " #_product where hienthi=1 and type='".$type."' $_noibat  $_idlist";
		$result_sanpham="select * from $where_sanpham order by stt,id desc $limit";
		$d->reset();
		$d->query($result_sanpham);
		$result_sanpham =$d->result_array();
		$paging_sanpham = pagination_ajax($where_sanpham,$perpage,$page,$target);
	}
	?>
	<div class="row sanpham">
		<?php foreach($result_sanpham as $stt => $item){ ?>
			<div class="col-md-3 col-sm-4 col-xs-6">
				<?php include _template."components/product_item.php";?>
			</div>
		<?php } ?>

	</div>
	<?php if(!empty($paging_sanpham)){ ?>
	<div class="clearfix"></div>
	<div class="pagination">
		<div class="paging paging_ajax" data-_crsf="<?=$_crsf?>" <?php if(!empty($noibat)) { ?>data-noibat="<?=$noibat?>"<?php } ?> <?php if($idlist > 0) { ?> data-idlist="<?=$idlist?>"<?php } ?> <?php if($idcat > 0) { ?> data-idcat="<?=$idcat?>"<?php } ?> <?php if(!empty($type)) { ?>data-type="<?=$type?>"<?php } ?> <?php if(!empty($target)) { ?> data-target="<?=$target?>"<?php } ?> <?php if(!empty($perpage)) { ?> data-perpage="<?=$perpage?>"<?php } ?>><?=$paging_sanpham?></div>
	</div>
	<div class="clearfix"></div>
<?php } ?>