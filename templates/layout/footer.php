<div id="footer">
	<div class="container">
				<h2 class="text-center"><?=$row_setting["ten_$lang"]?></h2>
		<div class="row">
			<div class="col-md-3 col-sm-12 col-12">
				<div class="icon marker">Địa chỉ<br /> <?=$row_setting["diachi_$lang"]?></div>
				<div class="icon hotline">Hotline <br /><?=$row_setting["hotline"]?></div>
				<div class="icon email">Email <br /><?=$row_setting["email"]?></div>
			</div>
			<div class="col-md-9 col-sm-12 col-12 ">
				<div class="newsletter">
					<h3>FORM LIÊN HỆ</h3>
					<form action="nhan-mail" method="POST">
						<input type="hidden" name="nhanmail">
						<div class="form-group">
							<label for="ten" class="col-md-3 text-right">Họ và tên</label>
							<input type="text" name="ten" placeholder="">
						</div>
						<div class="form-group">
							<label for="email" class="col-md-3 text-right">Địa chỉ mail</label>
							<input type="text" name="email" placeholder="">
						</div>
						<div class="form-group">
							<label for="dienthoai" class="col-md-3 text-right">Số điện thoại</label>
							<input type="text" name="dienthoai" placeholder="">
						</div>
						<div class="form-group d-flex">
							<label for="noidung" class="col-md-3 text-right">Nội dung</label>
							<textarea name="noidung" id="" cols="30" rows="4" class="col-md-9"></textarea>
						</div>
					</form>
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