<?php
$index_visaochon = result_array("select * from #_baiviet where type='vi-sao-chon' and hienthi=1 and noibat=1 order by stt asc");
if(!empty($index_visaochon)){ ?>
<div id="visaochon">
	<div class="container">
		<div class="header-title">
			<h2 class="h2-title"><span>TẠI SAO CHỌN CHÚNG TÔI</span></h2>
			<div class="desc"><?=$row_setting["slogan_$lang"]?></div>
		</div>
		<div class="row content">
			<div class="image col-md-6 col-sm-12 col-12 mb-3">
				<img src="assets/images/img_visaochon.png" alt="img visaochon " class="img-fluid">
			</div>
			<div class="detail col-md-6 col-sm-12 col-12">
				<?php foreach($index_visaochon as $stt => $item): ?>
					<div class="visaochon_item">
						<div class="stt"><?=++$stt?></div>
						<div class="detail">
							<h3><?=$item["ten_$lang"]?></h3>
							<div class="mota"><?=catchuoi($item["mota_$lang"],30)?></div>
						</div>
					</div>

				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>

	<?php } ?>
