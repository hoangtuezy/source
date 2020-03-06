<?php $quytrinh = result_array("select * from #_baiviet where type='quy-trinh' and hienthi=1 and noibat=1 order by stt asc ");
if(!empty($quytrinh)){ 
	?>
	<div id="quytrinh">
		<div class="container">
			<div class="header-title">
				<h2 class="h2-title">QUY TRÌNH HOẠT ĐỘNG</h2>
			</div>
			<div class="content">
				<div class="swiper-container">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<?php foreach($quytrinh as $stt => $item): ?>
							<div class="swiper-slide">
								<div class="qt_item <?=$stt==0?'active':''?>" data-id=".mt<?=$item['id']?>">
									<h3><a href="<?=$item["tenkhongdau"]?>"><?=$item["ten_$lang"]?></a></h3>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
					<?php foreach($quytrinh as $stt => $item): ?>
						<div class="mota_qt_item mt<?=$item['id']?> <?=$stt==0?'active':''?>">
							<?=$item["mota_$lang"]?>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>

	</div>

<?php } ?>

<?php $dichvu = result_array("select * from #_baiviet where type='dich-vu' and hienthi=1 and noibat=1 order by stt asc limit 9");
if(!empty($dichvu)){ 
	?>
	<div id="dichvu">
		<div class="container">
			<div class="header-title reverse">
				<div class="label">MARCONT DECOR</div>
				<h2 class="h2-title">DỊCH VỤ CHÍNH</h2>
			</div>
			<div class="content">
				<div class="swiper-container">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<?php foreach($dichvu as $stt => $item): ?>
							<div class="swiper-slide">
								<div class="dichvu_item <?=$stt==0?'active':''?>" data-id=".mt<?=$item['id']?>">
									<div class="detail">
										<h3><a href="<?=$item['tenkhongdau']?>" class="h3a"><?=$item["ten_$lang"]?></a></h3>
										<div class="mota"><?=catchuoi($item["mota_$lang"],120)?></div>
									</div>
									<div class="image hieuung">
										<a href="<?=$item['tenkhongdau']?>" class="d-block overflow-hidden">
											<img src="thumb/2-375-275/upload/product/<?=$item["photo"]?>" class="card-img-top w-100" alt="<?=$item["tenkhongdau"]?>" onerror="this.src='img/375x275/'">
										</a>

									</div>
									
								</div>
							</div>
						<?php endforeach; ?>
					</div>

				</div>
				<div class="xemtatca">
					<a href="dich-vu">Xem tất cả dịch vụ</a>
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
		<div class="detail">
			<div class="header-title">
				<div class="label">GIỚI THIỆU CHUNG</div>
				<h2 class="h2-title"><?php echo e($index_gioithieu["ten_vi"]); ?></h2>
			</div>
			<div class="gioithieu-content text-center">
				<?=$index_gioithieu["mota_$lang"]?>
			</div>
			<div class="xemtatca ">
				<a href="gioi-thieu" class="">Xem thêm</a>
			</div>
		</div>
	</div>
</div>

<?php
$duan_list = result_array("select * from #_baiviet_list where type='du-an' and hienthi=1 and noibat=1 order by stt asc ");
$duan_all = result_array("select * from #_baiviet where type='du-an' and hienthi=1 and noibat=1 and id_list <> 0 order by stt asc limit 8");
if(!empty($duan_all)){

$duan_all_id = array_filter($duan_all,function($arr){
	return $arr['id'];
});
?>
<div class="duan_detail_page">
	
</div>



<div id="duan">
	<div class="container">
		<div class="header-title">
			<h2 class="h2-title">
				DỰ ÁN TIÊU BIỂU
			</h2>
			<div class="desc">
				
			</div>
		</div>
		<div class="content_label">
			<span class="duan_list_label">Tất cả</span>
			<?php foreach($duan_list as $list): ?>
				<span class="duan_list_label" data-list="<?=$list["id"]?>">
					<?=$list["ten_$lang"]?>
				</span>
			<?php endforeach; ?>
		</div>
	</div>
	<div class="duan_content">
		<div class="row">
		<?php foreach($duan_all as $item): ?>
			<div class="col-md-3 col-sm-4 col-6">
				<div class="duan_item"  data-src="<?=$item['tenkhongdau']?>" data-id="<?=$item['id']?>">
					<a href="<?=$item['tenkhongdau']?>">
					<img src="upload/baiviet/<?=$item["photo"]?>" alt="<?=$item["photo"]?>" class="img-fluid w-100" >
					</a>
					<h3>
						<span><?=$item["ten_$lang"]?></span></h3>
				</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
	<div class="xemtatca">
		<a href="du-an">Xem tất cả dự án</a>
	</div>
</div>

<?php } ?>
<script>
	$(document).on('click','.duan_list_label',function(){
		var tg = $(this).data('list');
		$.ajax({
			method: "POST",
			url: 'ajax/load_duan',
			data: {list:tg},
			success: function(data){
				$(".duan_content").html(data);
			}
		});

	});
</script>
<?php $visaochon = result_array("select * from #_baiviet where type='vi-sao-chon' and hienthi=1 and noibat=1 order by stt asc ");
if(!empty($visaochon)){ 
?>
<div id="visaochon" class="py-5">
	<div class="container">
		
		<div class="content row">
			<div class="swiper-container">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">
					<?php foreach($visaochon as $item){ ?>
						<div class="swiper-slide">
							<div class="visaochon_item">
								<div class="image">
									<a href="<?=$item["tenkhongdau"]?>">
										<img src="thumb/1-95-95/upload/baiviet/<?php echo e($item["photo"]); ?>" alt="product" class="img-fluid rounded-circle" onerror='this.src="img/95x95/"'>
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
			<div class="row">
				<div class="vertical_tintuc col-lg-6 col-md-12">
					<h2>TIN TỨC</h2>
					<!-- Additional required wrapper -->
					<div class="w-100 d-flex justify-content-between flex-wrap">
						<?php foreach($minibox_tintuc as $stt => $item){
							?>
							<div class="vertical_tintuc_item w-100 hover">
								<div class=" d-flex justify-content-between flex-wrap">
									<div class="image hieuung">
										<a href="<?=$item["tenkhongdau"]?>" class="d-block">
											<img src="thumb/1-170-140/upload/baiviet/<?=$item["photo"]?>" alt="<?=$item["photo"]?>" onerror='this.src="img/170x140/"' class="w-100 img-fluid">
										</a>
									</div>
									<div class="detail">
										<div class="relative">
											
											<h3><a class="b14" href="<?=$item["tenkhongdau"]?>"><?=$item["ten_$lang"]?></a></h3>
											<div class="mota">
												<?=catchuoi($item["mota_$lang"],80)?>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="album col-lg-6 col-md-12">
					<h2>VIDEO CLIP</h2>
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

<div id="newsletter">
	<div class="container">
		<div class="newsl-left col-md-6 col-sm-12 col-12">
			<p style="font-size: 26px;">Nhận báo giá hoặc tư vấn thiết kế</p>
			<p style="font-stretch: 16px;">Đăng ký nhận tin mới nhất từ công ty chúng tôi hàng tuần</p>
		</div>
		<div class="news-right col-md-6 col-sm-12 col-12">
			<form action="nhan-mail" method="POST" id="frm_nhanmail">
				<input type="hidden" name="nhanmail">
				<input type="hidden" name="type" value="nhanmail">
				<input type="text" name="email" placeholder="Email">
				<input type="submit" >
			</form>
		</div>
	</div>
</div>