<?php
$d->reset();
$d->query("select photo_vi,link from #_photo where type='logo' ");
$row_logo = $d->fetch_array();

$d->reset();
$d->query("select photo_vi,link from #_photo where type='banner'");
$row_banner = $d->fetch_array();

$d->reset();
$d->query("select photo_vi,link from #_photo where type='quangcao'");
$row_qc = $d->fetch_array();

$d->reset();
$d->query("select * from #_product_list where type='san-pham' and hienthi=1 and noibat=1 order by stt asc ");
$product_list = $d->result_array();
?>
<div id="header">
	<div id="banner">
			<a href="">
				<img src="thumb/1-1366-120/upload/hinhanh/<?=$row_banner["photo_vi"]?>" alt="banner" onerror='this.src="img/1366x120/"' class="img-fluid w-100"/>
			</a>
		</div>
	<div class="container">
		<div id="logo">
			<a href="">
				<img src="thumb/1-170-120/upload/hinhanh/<?=$row_logo["photo_vi"]?>" alt="banner" onerror='this.src="img/170x120/"' class="img-fluid w-100"/>
			</a>
		</div>
		<div class="addons">
			<?=layout_mxh(32,32,"mxh_top")?>
			<div class="hotline">
				Hotline<br />
				<span class="number"><?=$row_setting["hotline"]?></span>
			</div>
		</div>
	</div>
</div>
<div id="menu-top">
	<div class="container">
		<a href="#menu_responsive" class="btn-responsive"><span class="icon menu_responsive"></span></a>
			<?php include _template."components/menu.php";?>
			<?php include _template."components/timkiem.php";?>
	</div>
</div>
<?php if($com=='index'){ ?>
	<?php include _template."components/slider.php";?>
<?php } ?>

<div id="menu_responsive">
	<ul>
	<li class=" <?=$com=='index'?'active':''?>"><a href=""><span>Trang Chủ</span></a></li>
	<li class=" <?=$com=='gioi-thieu'?'active':''?>"><a href="gioi-thieu"><span>Giới thiệu</span></a></li>
	<?php if(!empty($product_list)){ ?>
		<?php foreach($product_list as $list){
$product_cat = result_array("select id,tenkhongdau,ten_$lang from #_product_cat where hienthi=1 and id_list='".$list['id']."'");
		 ?>
			<li class=" <?=$com=='san-pham'?'active':''?>"><a href="san-pham"><span><?=$list["ten_$lang"]?></span></a>
				<?php if(!empty($product_cat)){ ?>
				<ul class="nav--list">
					<?php foreach($product_cat as $cat){ ?>
						<li class="-list"><a href="<?=$cat["tenkhongdau"]?>"><?=$cat["ten_$lang"]?></a>
							<?php 
							$product_cat = result_array("select id,tenkhongdau,ten_$lang from #_product_cat where hienthi=1 and id_list='".$list['id']."'");
							if(!empty($product_cat)){ ?>
								<ul class="nav--cat">
									<?php foreach($product_cat as $cat){ ?>
										<li class="-cat"><a href="<?=$cat["tenkhongdau"]?>"><span><?=$cat["ten_$lang"]?></span></a>
											<?php 
											$product_items = result_array("select id,tenkhongdau,ten_$lang from #_product_item where hienthi=1 and id_list='".$list['id']."'");
											if(!empty($product_items)){ ?>
												<ul class="nav--item">
													<?php foreach($product_items as $items){ ?>
														<li class="-item"><a href="<?=$items["tenkhongdau"]?>"><span><?=$items["ten_$lang"]?></span></a></li>
													<?php } ?>
												</ul>
											<?php } ?>
										</li>
									<?php } ?>
								</ul>
							<?php } ?>
						</li>	
					<?php }?>
				</ul>
			<?php }?>
		</li>
	<?php }?>
<?php }?>
<li class="menu <?=$com=='tin-tuc'?'active':''?>"><a href="tin-tuc"><span>Tin Tức</span></a></li>
<li class="menu <?=$com=='lien-he'?'active':''?>"><a href="lien-he"><span>Liên Hệ</span></a></li>
</ul>

</div>