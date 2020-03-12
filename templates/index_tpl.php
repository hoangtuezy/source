	<?php $product_noibat = result_array("select * from #_product where type='san-pham' and hienthi=1 and noibat1=1 order by stt asc ");
	if(!empty($product_noibat)){ 
		?>
		<div id="product_noibat">
			<div class="header-slogan">
				<h2><span class="header-slogan">Sản phẩm khuyến mãi</span></h2>
			</div>
			<div class="container">
				<div class="content">
					<!-- Additional required wrapper -->
					<div class="row row-15">
						<?php foreach($product_noibat as $stt => $item): ?>
							<div class="col-lg-3 col-md-4 col-sm-6 col-6">
								<?php include _template."components/product_item.php";?>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>

		</div>
	<?php } ?>
<?php $product_list = result_array("select * from #_product_list where type='san-pham' and hienthi=1 and noibat=1 order by stt asc ");
if(!empty($product_list)){ 
	foreach($product_list as $list):
		$products = result_array("select * from #_product where type='san-pham' and hienthi=1 and noibat=1 and id_list='".$list['id']."' order by stt asc ");
		?>
		<div id="product_list">
			<div class="container">
				<?php if(!empty($list["quangcao"])){ ?>
				<div class="v-quangcao">
					<img src="thumb/1-900-240/upload/product/<?=$list["quangcao"]?>"  class="img-fluid w-100" alt="<?=$list["quangcao"]?>" onerror='this.src="img/900x240/"'>
				</div>
			<?php } ?>
				<div class="header-slogan">
				<h2><span class="header-slogan"><?=$list["ten_$lang"]?></span></h2>
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
	<?php endforeach; } ?>

