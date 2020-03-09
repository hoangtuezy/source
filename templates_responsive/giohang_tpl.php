<div class="container">
	<?php if(is_array($_SESSION['cart'])){ ?>
		<div class="container">	
			<form name="form1" method="post" id="form-giohang">
				<div id="giohang_tpl">
					<div id="shopping-cart" class="v1 border-cart">
						<div class="cart-label">
							<div class="sc-stt">STT</div>
							<div class="sc-image">Hình Ảnh</div>
							<div class="sc-title">Tên</div>
							<div class="sc-quantity">Số lượng</div>
							<div class="sc-price">Giá</div>
							<div class="sc-total-price">Tổng Giá</div>
						</div>
						<div class="detail w-100">

							
							<?php foreach($_SESSION['cart'] as $stt => $item){
								$_product = fetch_array("select id,tenkhongdau,photo,ten_$lang,giaban from #_product where id='".$item['productid']."' and hienthi=1");	
								?>
								<div class="cart-item">
									<div class="sc-stt"><?=++$stt?></div>
									<div class="sc-image">
										<img src="thumb/1-100-80/upload/product/<?=$_product["photo"]?>" alt="<?=$_product["photo"]?>">
									</div>
									<div class="sc-title"><?=$_product["ten_$lang"]?></div>
									<div class="sc-quantity"> 
										<div class="<?=return_uid($_product["id"])?> soluong_11" data-product="<?=return_uid($_product["id"])?>">
											<a href="javascript:void()" class="minus a_1">-</a>
											<input type="text" value="<?=$item["qty"]?>" min="1" max="999" name="product<?=$_product["id"]?>" class="soluong" id="input_soluong_<?=$_product["id"]?>">
											<a href="javascript:void()" class="add a_1">+</i></a>
										</div>
									</div>
									<div class="sc-price"><?=price($_product["giaban"])?></div>
									
									<div class="sc-total-price"><?=price($_product["giaban"] * $item["qty"])?></div>
								</div>
							<?php } ?>
							

							
						</div>
					</div>
					<div class="cart-summary">
						<div class="cart-summary__item">Tổng giá bán: <span><?=price(get_order_total())?></span></div>
					</div>
					<div class="cart-buttons">
						<input type="button" value="Mua tiếp" onclick="window.location='<?=_link_com('san-pham')?>'" class="btn btn-giohang-submit m-1"><input type="button" value="Xóa tất cả" onclick="clear_cart()" class="btn btn-giohang-submit m-1"><input type="button" value="Cập nhật" onclick="update_cart()" class="btn btn-giohang-submit m-1"><input type="button" value="Thanh toán" onclick="window.location='thanh-toan'" class="btn btn-giohang-thanhtoan m-1">
					</div>	
				</div>
				<input type="hidden" name="pid" class="pid" />
				<input type="hidden" name="_crsf" value="<?=$_crsf?>" class="_crsf"/>
				<input type="hidden" name="command" class="command" />
			</form>
		<?php }else{ echo(_empty_cart);} ?>
		<script language="javascript">
			function del(pid){
				if(confirm('Bạn có muốn xóa sản phẩm?')){
					$('.pid').val(pid);
					$('._crsf').val();
					$('.command').val('delete');
					$("#form-giohang").submit();
				}
			}
			function clear_cart(){
				if(confirm('Bạn có muốn xóa tất cả sản phẩm?')){
					$('._crsf').val();
					$('.command').val('clear');
					$("#form-giohang").submit();
				}
			}
			function update_cart(){
				$('._crsf').val();
				$('.command').val('update');
				$("#form-giohang").submit();
			}
		</script>
	</div>
</div>