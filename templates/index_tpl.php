<?php $congtrinh = result_array("select * from #_baiviet where type='dich-vu' and hienthi=1 and noibat=1 order by stt asc "); ?>
<div id="congtrinh">
	<div class="container">
		<div class="header-title">
			<h2 class="h2-title text-white">Dịch Vụ chúng tôi</h2>
		</div>
		<div class="row ">
			<?php foreach($congtrinh as $stt => $item): ?>
				<div class="col-sm-6 col-12">
					<div class="congtrinh_item <?=$stt&1?'even':''?>">
						<a href="<?=$item["tenkhongdau"]?>" class="image">
							<img src="thumb/1-250-210/upload/baiviet/<?=$item["photo"]?>" alt="<?=$item["photo"]?>" class="w-100 img-fluid" onerror='this.src="img/250x210/"'>
						</a>
						<div class="detail">
							<h3><a href="<?=$item["tenkhongdau"]?>"><?=$item["ten_$lang"]?></a></h3>
							<p><?=$item["mota_$lang"]?></p>
							<a href="<?=$item["tenkhongdau"]?>" class="readmore">Xem thêm >></a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>

</div>
<?php $video = result_array("select * from #_video where type='video' and hienthi=1  order by stt asc "); ?>
<div id="video">
	<a href="<?=$video[0]["links"]?>">
		<img src="upload/video/<?=$video[0]["photo"]?>" alt="<?=$video[0]["photo"]?>" class="w-100 img-fluid" onerror='this.src="img/1366x450/"'>
	</a>
	<div class="sub-videos">
		<div class="swiper-container">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<?php foreach($video as $item): ?>
					<div class="swiper-slide">
						<div>
							<a href="<?=$item["links"]?>"><img src="thumb/1-108-108/upload/video/<?=$item["photo"]?>" alt="<?=$item["ten_$lang"]?>" onerror='this.src="img/108x108/"'></a>
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

<?php
$gioithieu_index = fetch_array("select * from #_info where type='gioi-thieu' ");
$minibox_tintuc = result_array("select * from #_baiviet where type='tin-tuc' and hienthi=1 and noibat=1 order by stt asc limit 3");
$result_video= result_array("select id,ten_$lang,links from #_video where hienthi=1 and type='video' order by stt,id desc");
if(!empty($minibox_tintuc)){ 
	?>
	<div id="toolbox">
		<div class="container" id="minibox_vertical_baiviet">
			<div class="vertical_tintuc">
					<!-- Additional required wrapper -->
					<div class="w-100 d-flex justify-content-between flex-wrap">
						<?php foreach($minibox_tintuc as $stt => $item){
							?>
							<div class="vertical_tintuc_item w-100">
								<div class=" d-flex justify-content-between flex-wrap">
									<div class="image hieuung">
										<a href="<?=$item["tenkhongdau"]?>" class="d-block">
											<img src="thumb/1-170-130/upload/baiviet/<?=$item["photo"]?>" alt="<?=$item["photo"]?>" onerror='this.src="img/170x130/"' class="w-100 img-fluid">
										</a>
										<div class="ngaytao">
											<div>
												<span class="ngay"><?=date('d',$item["ngaytao"])?></span>
												<span class="thang"><?=date('m.Y',$item["ngaytao"])?></span>
											</div>
											</div>
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
			<div class="album">
				
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
$index_doitac = result_array("select link,photo_vi from #_photo where hienthi=1 and type='doitac' order by stt,id desc");
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