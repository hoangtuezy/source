<?php
$index_visaochon = result_array("select * from #_baiviet where type='vi-sao-chon' and hienthi=1 and noibat=1 order by stt asc");
if(!empty($index_visaochon)){ ?>
<div id="visaochon">
	<div class="container">
		<div class="header-title">
			<h2 class="h2-title"><span>TẠI SAO CHỌN CHÚNG TÔI</span></h2>
		</div>
		<div class="row content">
			<div class="image col-md-6 col-sm-12 col-12">
				<img src="assets/images/img_visaochon.png" alt="img visaochon " class="img-fluid">
			</div>
			<div class="detail col-md-6 col-sm-12 col-12">
				
			</div>
		</div>
	</div>
</div>

	<?php } ?>
