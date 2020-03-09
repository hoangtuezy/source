<?php $product_list = result_array("select * from #_product_list where type='san-pham' and hienthi=1 and noibat=1 order by stt asc ");
if(!empty($product_list)){ 
	?>
	<div id="product_list">
		<div class="container">
			<div class="content">
				<div class="swiper-container">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<?php foreach($product_list as $stt => $item): ?>
							<div class="swiper-slide">
								<div class="product_list_item <?=$stt==0?'active':''?>" data-id=".mt<?=$item['id']?>">
									<div class="image">
										<a href="<?=$item["tenkhongdau"]?>"><img src="thumb/1-250-250/upload/product/<?=$item["photo"]?>" alt="<?=$item["photo"]?>"></a>
										<h3><?=$item["ten_$lang"]?></h3>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>

	</div>
<?php } ?>

<?php
$index_gioithieu = fetch_array("select * from #_info where type='gioi-thieu' ");
?>
<div id="gioithieu">
	<div class="container">
		<div class="image">
			<img src="upload/hinhanh/<?=$index_gioithieu["photo"]?>" alt="<?=$index_gioithieu["photo"]?>" class="img-fluid">
		</div>
		<div class="detail">
			<div class="gioithieu-title">
				<span class="header-slogan">VỀ CHÚNG TÔI</span>
			</div>
			<div class="gioithieu-content">
				<?=catchuoi($index_gioithieu["mota_$lang"],200)?>
			</div>
			<div class="xemtatca ">
				<a href="gioi-thieu" class="">Xem thêm</a>
			</div>
		</div>
	</div>
</div>

<?php $product_noibat = result_array("select * from #_product where type='san-pham' and hienthi=1 and noibat=1 order by stt asc ");
if(!empty($product_noibat)){ 
	?>
	<div id="product_noibat">
		<div class="header-slogan">
			<h2><span class="header-slogan">Sản phẩm nổi bật</span></h2>
			<div class="desc"><?=$row_setting["slogan_$lang"]?></div>
		</div>
		<div class="container">
			<div class="content">
					<!-- Additional required wrapper -->
					<div class="row col-20">
						<?php foreach($product_noibat as $stt => $item): ?>
							<div class="col">
								<?php include _template."components/product_item.php";?>
							</div>
						<?php endforeach; ?>
					</div>
			</div>
		</div>

	</div>
<?php } ?>


	<?php $visaochon = result_array("select * from #_baiviet where type='vi-sao-chon' and hienthi=1 and noibat=1 order by stt asc ");
	if(!empty($visaochon)){ 
		?>
		<div id="visaochon" class="py-5">
			<div class="container">
				<div class="header-title reverse">
					<h2 class="h2-title"><span>VÌ SAO CHỌN CHÚNG TÔI</span></h2>
				</div>
				<div class="content row">
					<div class="swiper-container">
						<!-- Additional required wrapper -->
						<div class="swiper-wrapper">
							<?php foreach($visaochon as $item){ ?>
								<div class="swiper-slide">
									<div class="visaochon_item">
										<div class="image">
											<a href="<?=$item["tenkhongdau"]?>">
												<img src="thumb/1-173-173/upload/baiviet/<?php echo e($item["photo"]); ?>" alt="product" class="img-fluid rounded-circle" onerror='this.src="img/173x173/"'>
											</a>
										</div>
										<div class="detail">
											<h3><a href="<?=$item["tenkhongdau"]?>"><?php echo e($item["ten_$lang"]); ?></a></h3>
											<div class="mota">
												<?php echo e(catchuoi($item["mota_$lang"],120)); ?>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
						<!-- If we need pagination -->

						<!-- If we need navigation buttons -->
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>

						<!-- If we need scrollbar -->
					</div>
				</div>
			</div>
		</div>
	<?php } ?>




	<?php
	$gioithieu_index = fetch_array("select * from #_info where type='gioi-thieu' ");
	$minibox_tintuc = result_array("select * from #_baiviet where type='tin-tuc' and hienthi=1 and noibat=1 order by stt asc limit 3");
	$result_video= result_array("select id,ten_$lang,links from #_video where hienthi=1 and type='video' order by stt,id desc");
	$result_album = result_array("select * from #_album where type='album' and hienthi=1 ");
	if(!empty($minibox_tintuc)){ 
		?>
		<div id="toolbox">
			<div class="container" id="minibox_vertical_baiviet">
				<div class="d-flex justify-content-between flex-wrap">
					<div class="vertical_tintuc">
						<h2>TIN TỨC <div style="margin: 5px 0 10px;font-family: roboto-regular;font-size: 14px;color: #666666;"><?=$row_setting["slogan_$lang"]?></div></h2>
						<!-- Additional required wrapper -->
						<div class="w-100 d-flex justify-content-between flex-wrap">
							<?php foreach($minibox_tintuc as $stt => $item){
								?>
								<div class="vertical_tintuc_item w-100 hover">
									<div class=" d-flex justify-content-between flex-wrap">
										<div class="image hieuung">
											<a href="<?=$item["tenkhongdau"]?>" class="d-block">
												<img src="thumb/1-190-140/upload/baiviet/<?=$item["photo"]?>" alt="<?=$item["photo"]?>" onerror='this.src="img/190x140/"' class="w-100 img-fluid">
											</a>
										</div>
										<div class="detail">
											<div class="relative">

												<h3><a class="b14" href="<?=$item["tenkhongdau"]?>"><?=$item["ten_$lang"]?></a></h3>
												<div class="mota">
													<?=catchuoi($item["mota_$lang"],250)?>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
					<div class="album">
						<h2>VIDEO CLIP<div style="margin: 5px 0 10px;font-family: roboto-regular;font-size: 14px;color: #666666;"><?=$row_setting["slogan_$lang"]?></div></h2>
						<div class="w-100 d-flex justify-content-between flex-wrap">
							<?php include _template."components/select_video.php";?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).on("click",".select_video_item",function(){
		var id_video = $(this).data("id");
		$("#ajax_video").load("load_video.php", "id="+ id_video);
		return false;
	});
</script>
<?php } ?>

<!-- doitac -->
<?php
$index_doitac = result_array("select * from #_lkweb where hienthi=1 and type='doi-tac' order by stt,id desc");
if(count($index_doitac) > 0){
?>
<div id="doitac">
	<div class="container">
		<marquee behavior="scroll" direction="" onmouseover="this.stop()" onmouseout="this.start()" LOOP=-1>
		<?php foreach($index_doitac as $item) { ?>
		<div class="doitac_item">
			<a href="<?=$item["link"]?>">
				<img src="thumb/1-180-90/upload/hinhanh/<?=$item["photo_vi"]?>" alt="<?=$item["photo_vi"]?>" onerror='this.src="img/180x90/"'>
			</a>
		</div>
		<?php } ?>
		</marquee>
	</div>
</div>
<?php } ?>