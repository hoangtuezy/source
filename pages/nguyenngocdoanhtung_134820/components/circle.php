<?php
$dichvu_list = result_array("select * from #_baiviet_list where type='dich-vu' and hienthi=1 and noibat=1 order by stt asc "); ?>
<div class="block-spin mb-5">
	<div class="container">
		<div class="header-title">
			<h2 class="h2-title"><span>DỊCH VỤ</span></h2>
		</div>
		
		<div class="spin-container">
			<div class="adxoay">
			<?php foreach($dichvu_list as $item){ ?>
			<div class="spin-item rp-xoay index" data-link="<?=$item['tenkhongdau']?>">
					<div>
						<a href="<?=$item["tenkhongdau"]?>">
							<img src="thumb/1-190-190/upload/baiviet/<?=$item["photo"]?>" alt="" class="img-fluid">
						</a>
						<h3><?=$item["ten_$lang"]?></h3>
					</div>
			</div>
			<?php } ?>
			</div>
		</div>
	</div>
</div>