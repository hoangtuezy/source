<?php 
$product_list = result_array("select * from #_product_list where hienthi=1 and noibat=1 and type='san-pham' limit 5");
?>

<ul class="nav-menu">
	<li class="menu <?=$com=='index'?'active':''?>"><a href=""><span>Trang Chủ</span></a></li>
	<li class="menu <?=$com=='gioi-thieu'?'active':''?>"><a href="gioi-thieu"><span>Giới thiệu</span></a></li>
	<?php if(!empty($product_list)){ ?>
		<?php foreach($product_list as $list){
$product_cat = result_array("select id,tenkhongdau,ten_$lang from #_product_cat where hienthi=1 and id_list='".$list['id']."'");
		 ?>
			<li class="menu <?=$com=='san-pham'?'active':''?>"><a href="san-pham"><span><?=$list["ten_$lang"]?></span></a>
				<?php if(!empty($product_cat)){ ?>
				<ul class="nav-menu-list">
					<?php foreach($product_cat as $cat){ ?>
						<li class="menu-list"><a href="<?=$cat["tenkhongdau"]?>"><?=$cat["ten_$lang"]?></a>
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
	<?php }?>
<?php }?>
<li class="menu <?=$com=='tin-tuc'?'active':''?>"><a href="tin-tuc"><span>Tin Tức</span></a></li>
<li class="menu <?=$com=='lien-he'?'active':''?>"><a href="lien-he"><span>Liên Hệ</span></a></li>
</ul>





<script type="text/javascript">
	function textboxChange(tb, f, sb) {
		if (!f) {
			if (tb.value == "") {
				tb.value = sb;
			}
		} else {
			if (tb.value == sb) {
				tb.value = "";
			}
		}
	}

	function doEnter(evt) {
		var key;
		if (evt.keyCode == 13 || evt.which == 13) {
			onSearch(evt);
		}
	}

	function onSearch(evt) {
		var keyword = document.getElementById("keyword").value;
		if (keyword == '' || keyword == '<?=_tukhoa?>') alert('Bạn chưa nhập từ khóa tìm kiếm!');
		else
			document.frm_timkiem.submit();
	}
</script>
