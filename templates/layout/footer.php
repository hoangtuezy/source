<div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-4">
				<h3>THÔNG TIN LIÊN HỆ</h3>
				<div class="icon marker">Địa chỉ: <?=$row_setting["diachi_$lang"]?></div>
				<div class="icon hotline">Hotline :<?=$row_setting["hotline"]?></div>
				<div class="icon email">Email :<?=$row_setting["email"]?></div>
				<div class="icon global">Website :<?=$row_setting["website"]?></div>
				<div>
					<div>Liên hệ:</div>
					<?=layout_mxh(40,40,'mxh_top')?>
				</div>
			</div>
			<div class="col-4 px-5">
				<div class="newsletter">
					<h3>FORM LIÊN HỆ</h3>
					<form action="nhan-mail" method="POST">
						<input type="hidden" name="nhanmail">
						<div class="form-group">
							<input type="text" name="ten" class="form-control mw-100" placeholder="Họ và tên">
						</div>
						<div class="form-group">
							<input type="text" name="email" class="form-control mw-100" placeholder="Địa chỉ mail">
						</div>
						<div class="form-group">
							<input type="text" name="dienthoai" class="form-control mw-100" placeholder="Số điện thoại">
						</div>
						<div class="form-group d-flex">
							<input type="text" name="noidung" class="form-control mw-100" placeholder="Nội dung">
						</div>
						<div class="text-right">
							<input type="submit" value="send" class="w-100">
						</div>
					</form>
				</div>
			</div>
			<div class="col-4 ">
				<h3>BẢN ĐỒ</h3>
				<div class="bando_iframe">
					<?=$row_setting['toado']?>
				</div>
			</div>
		</div>
		
	</div>
</div>
<div class="copyright">
			© Copyright <?=date('Y',time())?> <?=$row_setting["ten_$lang"]?>. ALL RIGHT REVERSED. DESIGN  BY NINA
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