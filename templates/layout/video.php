<?php
$result_video= "select id,ten_$lang,links from #_video where hienthi=1 and type='video' order by stt,id desc";
$d->query($result_video);
$result_video = $d->result_array();
?>
<div id="video">
	<div class="container">
		<div class="header-slogan text-center">
				<h2><span class="header-slogan">Món Ngon Mỗi Ngày</span></h2>
			</div>
		<div id="slider_video_select" class="mt-2  w-100">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<?php foreach($result_video as $stt => $item){

						?>
						<div class="swiper-slide">
							<div>
								<a class="d-block select_video_item" href="<?=$item['links']?>" data-fancybox="gallery" data-id="<?=$item['id']?>" style="height: 205px;overflow-y: hidden;background: url(https://img.youtube.com/vi/<?=youtobi($item['links'])?>/maxresdefault.jpg);background-size: cover;">
								</a>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>

	</div>
</div>