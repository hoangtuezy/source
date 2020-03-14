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
				<img src="thumb/1-360-115/upload/hinhanh/<?=$row_banner["photo_vi"]?>" alt="banner" onerror='this.src="img/330x112/"'/>
			</a>
		</div>
		<?php include _template."components/timkiem.php";?>
		<div class="addons d-flex justify-content-between flex-wrap">
			<div class="hotline">
				<div><span class="number"><?=$row_setting["hotline"]?></span></div>
				<div><span class="number"><?=$row_setting["dienthoai"]?></span></div>
			</div>
		
		</div>
	</div>
</div>
<div id="menu-top">
	<div class="container">
			<?php include _template."components/menu.php";?>
	</div>
</div>
	<?php include _template."components/slider.php";?>

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