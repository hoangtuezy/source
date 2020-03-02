<?php $congtrinh = result_array("select * from #_baiviet_list where type='cong-trinh' and hienthi=1 and noibat=1 order by stt asc "); ?>
<div id="congtrinh">
	<div class="row row-5">
	<?php foreach($congtrinh as $item): ?>
	<div class="col-sm-4 col-12">
		<div class="congtrinh_item">
		<a href="<?=$item["tenkhongdau"]?>">
			<img src="thumb/1-450-270/upload/baiviet/<?=$item["photo"]?>" alt="<?=$item["photo"]?>" class="w-100 img-fluid">
		</a>
		<h3><?=$item["ten_$lang"]?></h3>
		</div>
	</div>
	<?php endforeach; ?>
	</div>
</div>
<?php
$index_gioithieu = fetch_array("select * from #_info where type='gioi-thieu' ");
?>
<div id="gioithieu">
	<div class="container">
		<div class="detail">
			<div class="gioithieu-header">
				<div class="label">VỀ CHÚNG TÔI</div>
				<div class="title"><?php echo e($index_gioithieu["ten_vi"]); ?></div>
			</div>
			<div class="gioithieu-content">
				<?=$index_gioithieu["mota_$lang"]?>
			</div>
			<div class="more">
				<a href="gioi-thieu" class="xemthem">Xem thêm</a>
			</div>
		</div>
		<div class="image">
			<img src="upload/hinhanh/<?=$index_gioithieu["photo"]?>" alt="Giới thiệu">
		</div>
	</div>
</div>
<?php $product_noibat = result_array("select * from #_product where type='san-pham' and hienthi=1 and noibat=1 order by stt asc "); ?>
<div id="product_noibat">
	<div class="container">
		<div class="header-title">
			<h2 class="h2-title">
				<span>
					SẢN PHẨM NỔI BẬT
				</span>
			</h2>
		</div>
		<div class="content row">
			<?php foreach($product_noibat as $item): ?>
				<div class="col-lg-4 col-md-6 col-sm-6 col-12">
					<div class="product-item">
						<div class="image">
							<a href="<?=$item["tenkhongdau"]?>">
								<img src="thumb/1-375-268/upload/product/<?php echo e($item["photo"]); ?>" alt="product">
							</a>
						</div>
						<div class="detail">
							<h3><a href="<?=$item["tenkhongdau"]?>"><?php echo e($item["ten_$lang"]); ?></a></h3>
							<div class="mota">
								<?php echo e($item["mota_$lang"]); ?>

							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div> 

<?php $product_list_noibat = result_array("select * from #_product_list where type='san-pham' and hienthi=1 and noibat=1 order by stt asc "); ?>

<div id="product_list_noibat">
	<?php foreach($product_list_noibat as $item): ?>
		<div class="product_list">
			<img src="upload/product/<?php echo e($item["photo"]); ?>" alt="<?php echo e($item["photo"]); ?>" class="w-100">
			<div class="container">
				<div class="inline-block text-center">
					<h3><a href="<?php echo e($item["tenkhongdau"]); ?>"><?php echo e($item["ten_$lang"]); ?></a></h3>
					<p><?php echo e($item["mota_$lang"]); ?></p>
					<a href="<?php echo e($item["tenkhongdau"]); ?>" class="xemthem mx-auto">Xem thêm</a>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>

<?php $quytrinh = result_array("select * from #_baiviet where type='quy-trinh' and hienthi=1 and noibat=1 order by stt asc limit 3")?>
<div id="quytrinh" class="py-5">
	<div class="container">
		<div class="header-title">
			<h2 class="h2-title">
				<span>
					QUY TRÌNH THỰC HIỆN
				</span>
			</h2>
		</div>
		<div class="content row">
			<div class="swiper-container">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">
					<?php foreach($quytrinh as $item): ?>
						<div class="swiper-slide">
							<div class="qt_item">
								<div class="image">
									<a href="#">
										<img src="thumb/1-144-144/upload/baiviet/<?php echo e($item["photo"]); ?>" alt="product" class="img-fluid rounded-circle">
									</a>
								</div>
								<div class="detail">
									<h3><a href="#"><?php echo e($item["ten_$lang"]); ?></a></h3>
									<div class="mota">
										<?php echo e(catchuoi($item["mota_$lang"],120)); ?>

									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
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

<?php $baogia = result_array("select * from #_baiviet where type='bao-gia' and hienthi=1 and noibat=1 order by stt asc limit 3");
if(!empty($baogia)){ 
	?>
	<div id="baogia" class="py-5 bg-dark">
		<div class="container">
			<div class="header-title reverse">
				<h2 class="h2-title">
					<span>
						BẢNG BÁO GIÁ
					</span>
				</h2>
			</div>
			<div class="content">
				<div class="swiper-container">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<?php foreach($baogia as $item): ?>
							<div class="swiper-slide">
								<div class="baogia_item">
									<h3><a href="#"><?php echo e($item["ten_$lang"]); ?></a></h3>
									<div class="detail">
										<div class="price"><span><?=price($item["giaban"])?></span> / M2</div>
										<div class="mota">
											<?php echo e(catchuoi($item["mota_$lang"],120)); ?>
										</div>
										<a href="<?=$item["tenkhongdau"]?>" class="more"><span>LIÊN HỆ</span></a>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
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

<?php $khachhang = result_array("select * from #_baiviet where type='khach-hang' and hienthi=1 and noibat=1 order by stt asc limit 3")?>
<div id="ykien" class="fullpage">
	<div class="container">
		<div class="header-title">
			<h2 class="h2-title">CẢM NHẬN KHÁCH HÀNG</h2>
		</div>
		<div class="swiper-container mw-100">
			<div class="swiper-wrapper">
				<?php foreach($khachhang as $item): ?>
					<div class="swiper-slide">
						<div class="khachhang_item rounded-circle" data-id="<?=$item["tenkhongdau"]?>">
							<div class="image hieuung rounded-circle">
								<img src="thumb/1-190-190/upload/baiviet/<?=$item["photo"]?>" alt="<?=$item["photo"]?>" class="img-fluid rounded-circle">
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="content-khachhang mw-100">
			<?php foreach($khachhang as $item): ?>
				<div class="ykien_content <?=$item["tenkhongdau"]?> text-center">
					<div class="mota text-center">
						<?=catchuoi($item["mota_$lang"],300)?>

					</div>
					<h3><?=$item["ten_$lang"]?></h3>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<?php
$gioithieu_index = fetch_array("select * from #_info where type='gioi-thieu' ");
$minibox_tintuc = result_array("select * from #_baiviet where type='tin-tuc' and hienthi=1 and noibat=1 order by stt asc limit 3");
$result_video= result_array("select id,ten_$lang,links from #_video where hienthi=1 and type='video' order by stt,id desc");
if(!empty($minibox_tintuc)){ 
	?>
	<div id="toolbox">
		<div class="container" id="minibox_vertical_baiviet">
			<div class="vertical_tintuc">
				<div id="news_01" class="d-flex flex-wrap">
					<div class="w-50">
						<div class="vertical_tintuc_item d-flex justify-content-between flex-wrap" >
							<div class="w-50 image hieuung">
								<h2 class="gioithieu_title">Tin Tức & Video</h2>
								<div class="gioithieu_mota">
									<?=catchuoi(strip_tags($gioithieu_index["mota_$lang"]),120)?>
								</div>
							</div>
							<div class="w-50 detail bg_lightyellow">
								<div class="relative">
									<div class="ngaytao">
										<?=date('d/m/Y',$minibox_tintuc[0]["ngaytao"])?>
									</div>
									<h3><a class="b14" href="<?=_link_media("tin-tuc",$minibox_tintuc[0]["tenkhongdau"])?>"><?=$minibox_tintuc[0]["ten_$lang"]?></a></h3>
									<div class="mota">
										<?=catchuoi($minibox_tintuc[0]["mota_$lang"],80)?>
									</div>
									<div class="xemthem">
										<a class="b14" href="<?=_link_media("tin-tuc",$minibox_tintuc[0]["tenkhongdau"])?>">Xem thêm</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="w-50">
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<?php foreach($result_video as $stt => $item){

									?>
									<div class="swiper-slide">
										<a class="d-block video_item" href="<?=$item['links']?>" data-fancybox="gallery" data-id="<?=$item['id']?>" style="height: 220px;overflow-y: hidden;background: url(https://img.youtube.com/vi/<?=youtobi($item['links'])?>/maxresdefault.jpg);background-size: cover;">
										</a>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
					<!-- Additional required wrapper -->
					<div class="w-100 d-flex justify-content-between flex-wrap">
						<?php foreach($minibox_tintuc as $stt => $item){
							if($stt < 1) continue;
							?>
							<div class="vertical_tintuc_item w-50">
								<div class=" d-flex justify-content-between flex-wrap">
									<div class="w-50 image hieuung">
										<a href="<?=_link_media("tin-tuc",$item["tenkhongdau"])?>" class="d-block">
											<img src="thumb/1-320-280/upload/baiviet/<?=$item["photo"]?>" alt="<?=$item["photo"]?>" onerror='this.src="img/320x280/"' class="w-100 img-fluid">
										</a>
									</div>
									<div class="w-50 detail">
										<div class="relative">
											<div class="ngaytao">
												<?=date('d/m/Y',$item["ngaytao"])?>
											</div>
											<h3><a class="b14" href="<?=_link_media("tin-tuc",$item["tenkhongdau"])?>"><?=$item["ten_$lang"]?></a></h3>
											<div class="mota">
												<?=catchuoi($item["mota_$lang"],80)?>
											</div>
											<div class="xemthem">
												<a class="b14" href="<?=_link_media("tin-tuc",$item["tenkhongdau"])?>">Xem thêm</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
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