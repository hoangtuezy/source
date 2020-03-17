<?php include _template."layout/gioithieu.php"; ?>
<?php include _template."layout/quangcao.php"; ?>
<?php include _template."layout/product_list.php"; ?>
<?php $khachhang = result_array("select * from #_baiviet where type='khach-hang' and hienthi=1 and noibat=1 order by stt asc");
if(!empty($khachhang)){ 
	?>
	<div id="ykien" class="fullpage">
		<div class="container">
			<div class="header-title invert">
				<h2 class="h2-title">Cảm Nhận Khách Hàng</h2>
			</div>
			<div class="swiper-container mw-100">
				<div class="swiper-wrapper">
					<?php foreach($khachhang as $item){ ?>
						<div class="swiper-slide">
							<div class="khachhang_item rounded-circle" data-id="<?=$item["tenkhongdau"]?>">
								<div class="image hieuung rounded-circle">
									<img src="thumb/1-190-190/upload/baiviet/<?=$item["photo"]?>" alt="<?=$item["photo"]?>" class="img-fluid rounded-circle">
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="content-khachhang mw-100">
				<?php foreach($khachhang as $item){ ?>
					<div class="ykien_content <?=$item["tenkhongdau"]?> text-center">
						<div class="mota text-center">
							<?=catchuoi($item["mota_$lang"],300)?>

						</div>
						<h3><?=$item["ten_$lang"]?></h3>
					</div>
				<?php } ?>
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
			<div class="desc">Chuyên nhận nấu tiệc: liên hoan, tân gia, kết hôn, sinh nhật, hội nghị</div>
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
							<a href="upload/baiviet/<?=$item["photo"]?>" data-fancybox="khonggianquan_index">
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
					<div class="col-md-7 col-sm-12 col-12">
						<h2 class="minibox_title"><span>TIN TỨC NỔI BẬT</span></h2>
						<div class="content" id="minibox_vertical_baiviet">
							<div class="vertical_tintuc">
								<div id="vertical">
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
					<div class="col-md-5 col-sm-12 col-12">
						<h2 class="minibox_title"><span>FANPAGE</span></h2>
						<div class="content">
							<?=layout_fanpage($row_setting['facebook'],500,450)?>
						</div>
					</div>
				</div>
			</div>
		</div>
