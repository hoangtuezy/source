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
	<div class="container d-flex">
		<div id="logo">
			<a href="">
				<img src="upload/hinhanh/<?=$row_logo["photo_vi"]?>" alt="logo" onerror='this.src="img/285x142/"'/>
			</a>
		</div>
		<div id="banner">
			<a href="">
				<img src="upload/hinhanh/<?=$row_banner["photo_vi"]?>" alt="banner"  class="img-fluid" onerror='this.src="img/603x142/"'/>
			</a>
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
							<li>
								<?php include _template."components/timkiem.php";?>
							</li>
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
<div class="container">
		<?php include _template."components/slider.php";?>
		<div class="clearfix"></div>
</div>

<?php if($com=='index'){ ?>
<div class="container">
	<a href="<?=$row_qc['link']?>">
				<img src="upload/hinhanh/<?=$row_qc["photo_vi"]?>" alt="logo" onerror='this.src="img/1200x250/"' class="img-fluid"/>
			</a>
</div>
<?php } ?>

<div id="menu_responsive">
	<ul >
		<li class="<?=$com=='index'?'active':''?>"><a href=""><span>Trang Chủ</span></a></li>
		<li class="<?=$com=='gioi-thieu'?'active':''?>"><a href="gioi-thieu"><span>Giới thiệu</span></a></li>

		<li class="<?=$com=='san-pham'?'active':''?>"><a href="san-pham"><span>Sản phẩm</span></a>
			<?php if(!empty($product_list)){ ?>
				<ul class="nav-menu-list">
					<?php foreach($product_list as $list){ ?>
						<li class="menu-list"><a href="<?=$list["tenkhongdau"]?>"><?=$list["ten_$lang"]?></a>
							<?php 
							$product_cat = result_array("select id,tenkhongdau,ten_$lang from #_product_cat where hienthi=1 and id_list='".$list['id']."'");
							if(!empty($product_cat)){ ?>
								<ul class="nav-menu-cat">
									<?php foreach($product_cat as $cat){ ?>
										<li class="menu-cat"><a href="<?=$cat["tenkhongdau"]?>"><span><?=$cat["ten_$lang"]?></span></a>
											<?php 
											$product_items = result_array("select id,tenkhongdau,ten_$lang from #_product_item where hienthi=1 and id_list='".$list['id']."'");
											if(!empty($product_items)){ ?>
												<ul class="nav-menu-item">
													<?php foreach($product_items as $items){ ?>
														<li class="menu-item"><a href="<?=$items["tenkhongdau"]?>"><span><?=$items["ten_$lang"]?></span></a></li>
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
		<li class="<?=$com=='dich-vu'?'active':''?>"><a href="dich-vu"><span>Dịch Vụ  </span></a></li>
		<li class="<?=$com=='tin-tuc'?'active':''?>"><a href="tin-tuc"><span>Tin Tức</span></a></li>
		<li class="<?=$com=='tuyen-dung'?'active':''?>"><a href="tuyen-dung"><span>Tuyển Dụng</span></a></li>
		<li class="<?=$com=='lien-he'?'active':''?>"><a href="lien-he"><span>Liên Hệ</span></a></li>

	</ul>
</div>


