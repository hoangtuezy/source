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
		<div class="addons d-flex justify-content-between flex-wrap">
			<div class="hotline">
				<div>HOTLINE: <span class="number"><?=$row_setting["hotline"]?></span></div>
				<div style="font-family: roboto-regular;font-size: 14px;color: #434343;">Đặt hàng: (7h - 20h từ T2-CN)</div> 
			</div>
			<a class="cart" href="gio-hang">
				Giỏ hàng<br />
				(<span class="count_cart"><?=count((array)$_SESSION['cart'])?></span>) sản phẩm
			</a>
		</div>
	</div>
</div>
<div id="menu-top">
	<div class="container">
		<a href="#menu_responsive" class="btn-menu"><span class="icon menu_responsive"></span></a>
	<div class="nav-left">
		<span class="icon-btn-menu" style="height: 14px;display: flex;
    margin-right: 10px;"><img src="assets/images/btn-menu.png" alt="btnmenu"></span>
		DANH MỤC SẢN PHẨM
		<?php if(!empty($product_list)){ ?>
			<div class="vertical_menu d-block">
						<ul class="nav-menu-list">
							<?php foreach($product_list as $list){ ?>
								<li class="menu-list">
									<a href="<?=$list["tenkhongdau"]?>" class="menu-list-text">
										<img src="upload/product/<?=$list['photo']?>" class="product_list_photo" alt="<?=$list['photo']?>">
										<?=$list["ten_$lang"]?></a>
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
<div class="container d-flex justify-content-between flex-wrap">
	<div></div>
	<?php include _template."components/slider.php";?>
</div>

<div id="menu_responsive">
	<ul>
			<?php $sub_menu = array();
			foreach($menu_array as $key => $item){
				$_tmp = result_array("select id,tenkhongdau,ten_$lang from #_product_list where hienthi=1 and type='".$item['type']."' order by stt asc ");
				$sub_menu[$key]=$_tmp;?>
				<li class="menu <?=$com==$key?'active':''?>"><a href="<?=$key==='index'?'':$key?>"><?=$item["title"]?></a>
					<?php if(!empty($sub_menu[$key])){ ?>
						<ul>
							<?php foreach($sub_menu[$key] as $list){ ?>
								<li><a href="<?=$list["tenkhongdau"]?>"><?=$list["ten_$lang"]?></a>
									<?php if($item['lv'] > 1){ 
										$product_cat = result_array("select id,tenkhongdau,ten_$lang from #_".$item['table']."_cat where hienthi=1 and id_list='".$list['id']."'");
										if(!empty($product_cat)){ ?>
											<ul>
												<?php foreach($product_cat as $cat){ ?>
													<li><a href="<?=$cat["tenkhongdau"]?>"><?=$cat["ten_$lang"]?></a>
														<?php if($item['lv'] > 2){ 
															$product_items = result_array("select id,tenkhongdau,ten_$lang from #_".$item['table']."_item where hienthi=1 and id_list='".$list['id']."'");
															if(!empty($product_items)){ ?>
																<ul>
																	<?php foreach($product_items as $items){ ?>
																		<li ><a href="<?=$items["tenkhongdau"]?>"><?=$items["ten_$lang"]?></a></li>
																	<?php } ?>
																</ul>
															<?php } ?><?php } ?>
														</li>
													<?php } ?>
												</ul>
											<?php } ?>
										<?php } ?>	
									</li>	
								<?php }?>
							</ul>
						<?php }?>	
					</li>
				<?php }?>
			</ul>

</div>