<?php
$result_product;
if(count($result_product) > 0){
	?>
	<div class="container mb-3">
		
		<div class="scrollbar">
			<div class="row sanpham row-32">
				<?php foreach($result_product as $item) { ?>
					<div class="col-md-3 col-sm-4 col-xs-6 col-12">
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