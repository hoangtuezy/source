<?php
$_p_w = 285;
$_p_h = 215;
$_com = $item["type"];
if(empty($_com)){
	$_com = $com;
}
?>
<div class="product-item hover itemhover">
	<div class="image hieuung">
		<a href="<?=$item['tenkhongdau']?>" class="d-block overflow-hidden">
			<img src="thumb/2-<?=$_p_w?>-<?=$_p_h?>/upload/product/<?=$item["photo"]?>" class="card-img-top w-100" alt="<?=$item["tenkhongdau"]?>" onerror="this.src='img/<?=$_p_w?>x<?=$_p_h?>/'">
		</a>
		
	</div>
	<div class="detail">
		<h3><a href="<?=$item['tenkhongdau']?>" class="h3a"><?=$item["ten_$lang"]?></a></h3>
		<div class="mota"><?=$item["mota_$lang"]?></div>
		<div class="addons">
			<div class="giaban">Giá: <span><?=price($item["giaban"])?></span></div>
			
		</div>
		
	</div>
</div>