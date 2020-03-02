<?php
$row_logo = fetch_array("select photo_vi,link from #_photo where type='logo' ");
$row_banner = fetch_array("select photo_vi,link from #_photo where type='banner' ");
?>
<div id="header" class="d-none">
	<div class="container d-flex">
		<div id="logo">
			<a href="">
				<img src="upload/hinhanh/<?=$row_logo["photo_vi"]?>" alt="logo" />
			</a>
		</div>
		<div id="banner">
			<a href="">
				<img src="upload/hinhanh/<?=$row_banner["photo_vi"]?>" alt="banner"  class="img-fluid"/>
			</a>
		</div>
	</div>
</div>
<div id="menu-top">
	<a href="#menu_responsive" class="btn-menu"><span class="icon menu_responsive"></span></a>
	<?php include _template."components/menu.php";?>
</div>
<div id="menu_responsive">
	<ul class="nav-menu">
		<li class="menu <?=$com=='index'?'active':''?>"><a href=""><span>Trang Chủ</span></a></li>
		<li class="menu <?=$com=='gioi-thieu'?'active':''?>"><a href="gioi-thieu"><span>Giới thiệu</span></a></li>

		<li class="menu <?=$com=='san-pham'?'active':''?>"><a href="san-pham"><span>Sản phẩm</span></a>
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
		<li class="menu <?=$com=='dich-vu'?'active':''?>"><a href="dich-vu"><span>Dịch Vụ  </span></a></li>
		<li class="menu <?=$com=='tin-tuc'?'active':''?>"><a href="tin-tuc"><span>Tin Tức</span></a></li>
		<li class="menu <?=$com=='tuyen-dung'?'active':''?>"><a href="tuyen-dung"><span>Tuyển Dụng</span></a></li>
		<li class="menu <?=$com=='lien-he'?'active':''?>"><a href="lien-he"><span>Liên Hệ</span></a></li>

	</ul>
</div>


