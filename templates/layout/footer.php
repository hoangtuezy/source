<div id="footer">
	<div class="container">
		
		<div class="row">
			<div class="col-md-5 col-sm-12 col-12 p-5">
				<h2><?=$row_setting["ten_$lang"]?></h2>
				<div class="icon marker">Địa chỉ: <?=$row_setting["diachi_$lang"]?></div>
				<div class="icon hotline">Số điện thoại: <?=$row_setting["hotline"]?></div>
				<div class="icon email">Email: <?=$row_setting["email"]?></div>
				<div class="icon global">Website: <?=$row_setting["website"]?></div>
			</div>
			<div class="col-md-7 col-sm-12 col-12 bando_footer">
				<?=$row_setting["toado"]?>
			</div>
		</div>
		<div class="copyright">
			© Copyright <?=date('Y',time())?> <?=$row_setting["ten_$lang"]?>. ALL RIGHT REVERSED. DESIGN  BY NINA
		</div>
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