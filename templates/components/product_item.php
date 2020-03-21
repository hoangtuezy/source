<?php
$_p_w = 280;
$_p_h = 290;
$_com = $item["type"];
if(empty($_com)){
	$_com = $com;
}
?>
<div class="product-item hover itemhover">
	<div class="image hieuung">
		<a href="<?=$item['tenkhongdau']?>" class="d-block overflow-hidden">
			<img src="thumb/1-<?=$_p_w?>-<?=$_p_h?>/upload/product/<?=$item["photo"]?>" class="img-fluid w-100" alt="<?=$item["tenkhongdau"]?>" onerror="this.src='img/<?=$_p_w?>x<?=$_p_h?>/'">
		</a>
		
	</div>
	<div class="detail">
		<h3><a href="<?=$item['tenkhongdau']?>" class="h3a"><?=$item["ten_$lang"]?></a></h3>
		<div class="price">
			<div class="giaban"><span><?=price($item['giaban'])?></span></div>
			<?php if(!empty($item["giacu"])){ ?><div class="giacu"><span><?=price($item['giacu'])?></span></div><?php } ?>
		</div>
		
	</div>
</div>