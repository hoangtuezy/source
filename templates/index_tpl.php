<?php
$product_list= "select * from #_product_list where hienthi=1 and type='san-pham' and noibat=1 order by stt,id desc";
$d->query($product_list);
$product_list = $d->result_array();
$first_product_list = array_pop($product_list);
if(!empty($product_list)){ 	
?>
<div id="video" class="py-4">
	<div class="container">
		<div class="header-title">
			<h2 class="h2-title"><span >BỘ SƯU TẬP</span></h2>
			<div class="desc text-secondary">Chúng tôi chuyên cung cấp những sản phẩm bàn ghế tốt nhất</div>
		</div>
		<div class="first_product_list">
			<div class="product_list_item first">
				<a href="<?=$first_product_list["tenkhongdau"]?>">
				<img src="upload/product/<?=$first_product_list["photo"]?>" alt="<?=$first_product_list["photo"]?>" class="img-fluid w-100"></a>
				<h3><a href="<?=$first_product_list["tenkhongdau"]?>"><?=$first_product_list["tenkhongdau"]?></a></h3>
			</div>
		</div>
		<div id="slider_product_list_noibat_select" class="mt-2  w-100">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<?php foreach($product_list as $stt => $item){

						?>
						<div class="swiper-slide">
							<div class="product_list_item hieuung"><a href="<?=$item["tenkhongdau"]?>">
								<img src="thumb/1-385-360/upload/product/<?=$item["photo"]?>" alt="<?=$item["photo"]?>" class="img-fluid w-100"></a>
								<h3><a href="<?=$item["tenkhongdau"]?>"><?=$item["tenkhongdau"]?></a></h3>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>

	</div>
</div>
<?php } ?>
<?php
$d->reset();
$d->query("select * from #_info where type='gioi-thieu' ");
$index_gioithieu = $d->fetch_array();

?>
<div id="gioithieu">
	<div class="container flex jb w">
		<div class="detail">
			<div class="gioithieu-header">
				<div class="label">Giới thiệu công ty</div>
				<div class="title"><?php echo e($index_gioithieu["ten_vi"]); ?></div>
			</div>
			<div class="gioithieu-content">
				<?php echo e($index_gioithieu["mota_$lang"]); ?>

			</div>
			<div class="more">
				<a href="gioi-thieu" class="xemthem">Xem thêm</a>
			</div>
		</div>
		<div class="image">
			<img src="upload/hinhanh/<?=$index_gioithieu["photo"]?>" alt="Giới thiệu " class="img-fluid">
		</div>
	</div>
</div>


		<?php
		$dichvu_items = result_array("select * from #_baiviet where type='dich-vu' and hienthi=1 and noibat=1 order by stt asc ");
	if(!empty($dichvu_items)){ 	
		?>
		<div id="dichvu">
			<div class="container">
				<div class="header-title">
					<h2 class="h2-title">
						DỊCH VỤ CHÚNG TÔI
					</h2>
				</div>
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<?php foreach($dichvu_items as $item){ ?>
							<div class="swiper-slide">
								<div class="dichvu_item mb-4 hover">
									<div class="image hieuung">
										<a href="<?=$item["tenkhongdau"]?>" class="d-block overflow-hidden">
											<img src="thumb/1-380-365/upload/baiviet/<?=$item["photo"]?>" class="card-img-top" alt="<?=$item["tenkhongdau"]?>" onerror="this.src='img/380x365/'">
										</a>
									</div>
									<div class="detail">
										<div>
											<h3><a href="<?=$item["tenkhongdau"]?>"><?=$item["ten_$lang"]?></a></h3>
											<div class="mota">
												<?=catchuoi($item["mota_$lang"],120)?>
											</div>
											<div class="xemthem">
												<a href="<?=$item["tenkhongdau"]?>"><span class="chitiet">Chi tiết</span></a>
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
	<?php } ?>

<?php
$khonggianquan_index = result_array("select * from #_album where type='album' and hienthi=1  limit 10");
if(!empty($khonggianquan_index)){ 
?>
<div id="khonggianquan">
	<div class="container">
		<div class="header-title">
			<h2 class="h2-title">
				<span>Không Gian Buổi Tiệc</span>
			</h2>
		</div>
		<div class="content">
				<div class="d-flex kgq_item_container">
					<?php foreach($khonggianquan_index as $stt => $item){
						if($stt == 0 || $stt == 3){
							$w = 290;
							$h = 260;
							$c = 'w-20';
						}else{
							$w = 290;
							$h = 260;
							$c = 'w-20';
						}
						?>
						<div class="kgq_item <?=$c?> hieuung">
							<a href="<?=$item["tenkhongdau"]?>">
								<img src="thumb/1-<?=$w?>-<?=$h?>/upload/baiviet/<?=$item["photo"]?>" alt="<?=$item["photo"]?>" class="img-fluid w-100" onerror='this.src="img/<?=$w?>x<?=$h?>/"'>
							</a>
							<h3 class="overlay d-none"><?=$item["ten_$lang"]?></h3>
						</div>
						<?php if($stt + 1 == count($khonggianquan_index)) { echo('</div>');break;} ?>
						<?php if($stt % 5 == 4) { echo('</div><div class="d-flex kgq_item_container stt2">');} ?>  
					<?php } ?>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
<?php } ?>

		
		<?php
		$minibox_tintuc = result_array("select * from #_baiviet where type='tin-tuc' and hienthi=1 and noibat=1 order by stt asc ");
		$video = result_array("select * from #_video where type='video' and hienthi=1 order by stt asc");
		?>
		<div id="minibox">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-sm-6 col-12">
						<h2 class="minibox_title"><span>TIN TỨC NỔI BẬT</span></h2>
						<div class="content" id="minibox_vertical_baiviet">
							<div class="vertical_tintuc">
								<div id="scroller">
									<!-- Additional required wrapper -->
									<?php foreach($minibox_tintuc as $stt => $item){ ?>
											<div class="vertical_baiviet_item <?=$stt&1?'flex-row-reverse':''?>">
												<div class="image hieuung">
													<a href="<?=$item["tenkhongdau"]?>">
														<img src="thumb/1-140-140/upload/baiviet/<?=$item["photo"]?>" alt="<?=$item["photo"]?>" onerror='this.src="img/140x140/"'>
													</a>
												</div>
												<div class="detail">

													<h3><a href="<?=$item["tenkhongdau"]?>"><?=$item["ten_$lang"]?></a></h3>
													<div class="ngaytao"><span class="icon calendar">Tháng <?=date('m,d Y',$item["ngaytao"])?></span></div>
													<div class="mota">
														<?=catchuoi($item["mota_$lang"],100)?>
													</div>
												</div>
											</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-5 col-sm-6 col-12">
						<h2 class="minibox_title"><span>FANPAGE</span></h2>
						<div class="content">
							<?=layout_fanpage($row_setting['facebook'],500,450)?>
						</div>
					</div>
				</div>
			</div>
		</div>
