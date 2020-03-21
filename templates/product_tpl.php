<?php
$result_product;
if(count($result_product) > 0){
	?>
	<div class="container mb-3">
		
		<div class="scrollbar">
			<div class="row sanpham">
				<?php foreach($result_product as $item) { ?>
					<div class="col-md-3 col-sm-4 col-6">
						<?php include _template."components/product_item.php";?>
					</div>
				<?php } ?>
				<div class="clearfix"></div>
				<div class="paging d-flex justify-content-center w-100"><?=$paging?></div>
			</div>
		</div>
	</div>
<?php }else{ ?>
	<div class="container mb-3">
		<div>Sản phẩm đang được cập nhật</div>
	</div>
	<?php } ?>