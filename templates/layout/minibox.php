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
						<div class="vertical_baiviet_item hover mb-3 main">
							<div class="image hieuung col-6 p-0">
								<a href="<?=$item["tenkhongdau"]?>">
									<img src="thumb/1-380-200/upload/baiviet/<?=$item["photo"]?>" alt="<?=$item["photo"]?>" onerror='this.src="img/380x200/"'>
								</a>
							</div>
							<div class="detail col-6">

								<h3><a href="<?=$item["tenkhongdau"]?>"><?=$item["ten_$lang"]?></a></h3>

								<div class="mota">
									<?=catchuoi($item["mota_$lang"],100)?>
								</div>
								<a class="xemthem" href="tin-tuc">XEM THÊM</a>
							</div>
						</div>
						<div class="vertical_tintuc">
							<div id="vertical">
								<!-- Additional required wrapper -->
								<?php foreach($minibox_tintuc as $stt => $item){ ?>
									<div>
										<div class="vertical_baiviet_item hover">
											<div class="image hieuung">
												<a href="<?=$item["tenkhongdau"]?>">
													<img src="thumb/1-140-140/upload/baiviet/<?=$item["photo"]?>" alt="<?=$item["photo"]?>" onerror='this.src="img/140x140/"'>
												</a>
											</div>
											<div class="detail">

												<h3><a href="<?=$item["tenkhongdau"]?>"><?=$item["ten_$lang"]?></a></h3>

												<div class="mota">
													<?=catchuoi($item["mota_$lang"],100)?>
												</div>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5 col-sm-12 col-12">
					<h2 class="minibox_title"><span>Video Clip</span></h2>
					<div class="content">
						<?php include __DIR__."/video.php";?>
					</div>
				</div>
			</div>
		</div>
	</div>
