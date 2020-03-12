<?php
$quangcao =result_array("select ten_vi,photo_vi,link from #_photo where type='quangcao'  and hienthi=1 order by stt,id desc");
$tintuc =result_array("select * from #_baiviet where type='tin-tuc'  and hienthi=1 and noibat=1 order by stt,id desc");
?>
<div class="box-left-quangcao">
	<?php foreach($quangcao as $stt => $item): ?>
		<div class="qc_item">
			<img src="upload/hinhanh/<?=$item["photo_vi"]?>" alt="<?=$item["photo"]?>" class="img-fluid">
		</div>

	<?php endforeach; ?>
</div>
<div class="box-left-tintuc box-item">
	<h2><span>Tin Tức Mới</span></h2>
	<div class="content">
		<?php foreach($tintuc as $stt => $item): ?>
			<div class="v-tintuc-item hover mb-3">
				<div class="image">
					<a href="<?=$item["tenkhongdau"]?>">
						<img src="thumb/1-250-170/upload/baiviet/<?=$item["photo"]?>" alt="<?=$item["photo"]?>" class="img-fluid" onerror='this.src="img/250x170/"'>
					</a>
				</div>
				<h3><a href="<?=$item["tenkhongdau"]?>"><?=$item["ten_$lang"]?></a></h3>
				<div class="ngaytao d-flex align-items-center flex-wrap" style="color: #555"><img src="assets/images/ngaytao.jpg" alt="ab" class="mr-2"><?=date('d/m/Y',(int)$item['ngaytao'])?></div>
				<p class="mota"><?=catchuoi($item["mota_$lang"],90)?></p>
			</div>
		<?php endforeach; ?>	
	</div>
</div>