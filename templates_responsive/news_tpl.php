<?php

$_result_items = $tintuc;
if(!empty($result_product)){
	$_result_items = $result_product;
}
?>
<div class="container">
	<div class="row">
		<?php foreach($_result_items as $item){?>
			<div class="col-12">
				<div class="card mb-4">
					<div class="d-flex flex-wrap">
						<div class="image col-md-2 p-0">
							<a href="<?=$item["tenkhongdau"]?>">
								<img src="thumb/1-180-150/upload/baiviet/<?=$item["photo"]?>" class="card-img img-fluid" alt="<?=$item["photo"]?>" onerror='this.src="img/180x150/"'>
							</a>
						</div>
						<div class="content col-md-10 py-2">
							<a href="<?=$item["tenkhongdau"]?>" class="h3-title">
								<?=$item["ten_$lang"]?>
							</a>
							<p class="card-text"><?=catchuoi($item["mota_$lang"],150)?></p>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
	<div class="clearfix"></div>
	<div class="paging d-flex justify-content-center w-100"><?=$paging?></div>
	<?php if(empty($_result_items)) echo _no_post;?>
</div>