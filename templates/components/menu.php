<?php 
$product_list = result_array("select * from #_product_list where hienthi=1 and noibat=1 and type='san-pham' limit 5");
?>

<div class="container">
	<ul class="nav-menu">
		<li class="menu <?=$com=='gioi-thieu'?'active':''?>"><a href="gioi-thieu"><span>Giới thiệu</span></a></li>
		<li class="menu <?=$com=='dich-vu'?'active':''?>"><a href="dich-vu"><span>Dịch vụ</span></a></li>
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
		</ul>
		<div id="logo">
			<a href="">
				<img src="upload/hinhanh/<?=$row_logo["photo_vi"]?>" alt="logo" />
			</a>
		</div>
		<ul class="nav-menu">
			<li class="menu <?=$com=='cong-trinh'?'active':''?>"><a href="cong-trinh"><span>Công Trình</span></a></li>
			<li class="menu <?=$com=='tuyen-dung'?'active':''?>"><a href="tuyen-dung"><span>Tuyển Dụng</span></a></li>
			<li class="menu <?=$com=='lien-he'?'active':''?>"><a href="lien-he"><span>Liên Hệ</span></a></li>
		</ul>
		<?php include _template."layout/timkiem_icon.php";?>
	</div>


   


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
