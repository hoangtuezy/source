<?php

$_result_items = $tintuc;
if(!empty($result_product)){
	$_result_items = $result_product;
}
?>
<div class="container">
	<div class="header-title">
		<h2 class="h2-title"><?=$title_detail?></h2>
	</div>
	<div class="row">
		<?php foreach($_result_items as $item){?>
			<div class="col-md-3 col-sm-4 col-6 mb-3">
				<div class="duan_item"  data-src="<?=$item['tenkhongdau']?>" data-id="<?=$item['id']?>">
					<a href="<?=$item['tenkhongdau']?>">
					<img src="upload/baiviet/<?=$item["photo"]?>" alt="<?=$item["photo"]?>" class="img-fluid w-100" >
					</a>
					<h3>
						<span><?=$item["ten_$lang"]?></span></h3>
				</div>
				</div>
		<?php } ?>
	</div>
	<div class="clearfix"></div>
	<div class="paging d-flex justify-content-center w-100"><?=$paging?></div>
	<?php if(empty($_result_items)) echo _no_post;?>
</div>