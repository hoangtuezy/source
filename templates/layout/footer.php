<?php
$row_logo_footer = fetch_array("select photo_vi,link from #_photo where type='logo_footer' ");
$footer_contact = fetch_array("select * from #_company where type='footer' ");
$chinhsach = result_array("select * from #_baiviet where type='chinh-sach' and hienthi=1 and noibat=1 ");
?>

<div id="footer" style="margin-top: 1rem">
	<div class="container">
		
		<div class="w-100 d-flex justify-content-between flex-wrap">
			
			<div class="thongtin">
				
				<div>
					<?=$footer_contact["noidung_$lang"]?>
				</div>
			</div>
			<div class="mxh_bottom">
				<h3>Chính Sách</h3>
				<div class="chinhsach">
					<?php foreach($chinhsach as $item){ ?>
						<a href="<?=$item["tenkhongdau"]?>"><?=$item["ten_$lang"]?></a>
					<?php } ?>
				</div>
			</div>
			<div class="support">
				<?=layout_fanpage($row_setting['facebook'],445,250)?>
			</div>
		</div>
	</div>
</div>
<div id="copyright">
	<div class="nina container text-center" style="display: flex;justify-content: space-between;">
		<span style="">
			© Copyright <?=date('Y',time())?> <?=$row_setting["ten_$lang"]?>. ALL RIGHT REVERSED. DESIGN  BY NINA
		</span>
		<span>
			<span>Đang xem: <?php $count = count_online(); echo $count;?></span>
			<span>hôm nay: <?=$today_visitors?></span>
			<span>tháng này: <?=$month_visitors?></span>
			<span>Tổng truy cập: <?=$all_visitors?></span>
		</span>
	</div>

</div>

<div class="newsletter d-none" id="newsletter_baogia">
	<div class="col-md-6 col-sm-8 col-10 mx-auto">
		<span class="close"><img src="assets/images/close.png" alt=""></span>
		<form action="newsletter" method="POST" >
			<h3 class="w-100 text-center">
				Đăng ký nhận báo giá
			</h3>
			<input type="hidden" name="recaptcha_response" id="recaptchaResponse" class="recaptchaResponse">
			<input type="hidden" name="type" value="baogia">
			<div class="form-group">
				<label for="ten">Họ và tên</label>
				<input type="text" name="ten" class="form-control">
			</div>
			<div class="form-group">
				<label for="diachi">Địa Chỉ</label>
				<input type="text" name="diachi" class="form-control">
			</div>
			<div class="form-group">
				<label for="dienthoai">Số điện thoại</label>
				<input type="text" name="dienthoai" class="form-control">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label for="noidung">Nội Dung</label>
				<textarea name="noidung" id="" cols="30" rows="4" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-danger" value="Đăng Ký">
			</div>
		</form>
	</div>
</div>

<script>
	$(document).on('click','.baogia_fix',function(){
		$("#newsletter_baogia").toggleClass("d-none");
	});

	$(document).on('click','#newsletter_baogia .close',function(){
		$("#newsletter_baogia").toggleClass("d-none");
	});
</script>
<script>
        grecaptcha.ready(function () {
        grecaptcha.execute('<?=$config['gv3_client']?>', { action: 'nindex' }).then(function (token) {
        var recaptchaResponse = document.getElementsByClassName('recaptchaResponse');
        for(var i = 0; i < recaptchaResponse.length; i++) {
        recaptchaResponse[i].value = token;
        }
        });
        });
        </script>