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
	<div class="container">
		
		<div id="banner">
			<a href="">
				<img src="thumb/1-330-112/upload/hinhanh/<?=$row_banner["photo_vi"]?>" alt="banner" onerror='this.src="img/330x112/"'/>
			</a>
		</div>
		<?php include _template."components/timkiem.php";?>
		<div class="hotline">
			
		</div>
	</div>
</div>
<div id="menu-top">
	<div class="container">
		<a href="#menu_responsive" class="btn-menu"><span class="icon menu_responsive"></span></a>
	<div class="nav-left">
		DANH MỤC SẢN PHẨM
		<?php if(!empty($product_list)){ ?>
			<div class="vertical_menu d-block">
						<ul class="nav-menu-list">
							<?php foreach($product_list as $list){ ?>
								<li class="menu-list"><a href="<?=$list["tenkhongdau"]?>" class="menu-list-text"><?=$list["ten_$lang"]?></a>
									<?php  
										$product_cat = result_array("select id,tenkhongdau,ten_$lang from #_".'product'."_cat where hienthi=1 and id_list='".$list['id']."'");
										if(!empty($product_cat)){ ?>
											<ul class="nav-menu-cat">
												<?php foreach($product_cat as $cat){ ?>
													<li class="menu-cat"><a href="<?=$cat["tenkhongdau"]?>"><?=$cat["ten_$lang"]?></a>
														<?php 
															$product_items = result_array("select id,tenkhongdau,ten_$lang from #_".'product'."_item where hienthi=1 and id_list='".$list['id']."'");
															if(!empty($product_items)){ ?>
																<ul class="nav-menu-item">
																	<?php foreach($product_items as $items){ ?>
																		<li class="menu-item"><a href="<?=$items["tenkhongdau"]?>"><?=$items["ten_$lang"]?></a></li>
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
							</div>
						<?php }?>
	</div>
		<?php include _template."components/menu.php";?>
	</div>
</div>
<?php include _template."components/slider.php";?>


