<?php $product_list = result_array("select * from #_product_list where type='san-pham' and hienthi=1 and noibat=1 order by stt asc ");
if(!empty($product_list)){ 
	foreach($product_list as $list):
		$product_cat = result_array("select * from #_product_cat where type='san-pham' and hienthi=1 and noibat=1 and id_list='".$list['id']."' order by stt asc limit 8");
		$products = result_array("select * from #_product where type='san-pham' and hienthi=1 and noibat=1 and id_list='".$list['id']."' order by stt asc limit 8");
		if(!empty($products)){ 
		?>
		<div id="product_list">
			<div class="container">
				<div class="header-slogan">
				<h2>
					<span class="header-slogan"><?=$list["ten_$lang"]?></span>
					<?php foreach($product_cat as $stt2 => $cat): ?>
					<span class="pcat <?=$stt2==0?'active':''?>"><a href="<?=$cat["tenkhongdau"]?>"><?=$cat["ten_$lang"]?></a></span>
					<?php endforeach; ?>
				</h2>
				<a href="<?=$list["tenkhongdau"]?>" class="more_a">Xem tất cả</a>
			</div>
				<div class="content">
					<div class="row row-15">
						<!-- Additional required wrapper -->
						<?php foreach($products as $stt => $item): ?>
							<div class="col-lg-3 col-md-4 col-sm-6 col-6">
								<?php include _template."components/product_item.php";?>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>

		</div>
		<?php } ?>
	<?php endforeach; } ?>