<?php 
$footer_content = fetch_array("select * from #_company where type='footer'  ");
$chinhsach = result_array("select * from #_baiviet where type='chinh-sach' and hienthi=1 and noibat=1 order by stt asc ");
?>
<div id="footer">
	<div class="container" style="border-bottom: 1px solid #0298e7">
		<div class="row">
			<div class="col-md-2 col-sm-12 col-12">
				<h3 class="line-bottom">LIÊN KẾT MXH</h3>
				<?=layout_mxh(32,33,'mxh_bottom')?>
			</div>
			<div class="col-md-4 col-sm-12 col-12">
				<h3 class="line-bottom">HỖ TRỢ TRỰC TUYẾN</h3>
				<?=$footer_content["noidung_$lang"]?>
			</div>
			<div class="col-md-6 col-sm-12 col-12">
				<h3 class="line-bottom">ĐĂNG KÝ EMAIL NHẬN TIN</h3>
				<form action="nhan-mail" method="POST" class="relative">
						<input type="hidden" name="nhanmail">
						<div class="form-group">
							<input type="text" name="email" class="form-control mw-100" placeholder="Địa chỉ mail">
						</div>
						<div class="text-right">
							<input type="submit" value="send" class="w-100">
						</div>
					</form>
			</div>
		</div>
	</div>
	<div class="container py-sm-4 py-2">
		<div class="row">
			<div class="col-md-4 col-sm-12 col-12">
				<h2><?=$row_setting["ten_$lang"]?></h2>
				<div class="icon marker">Địa chỉ: <?=$row_setting["diachi_$lang"]?></div>
				<div class="icon hotline">Hotline :<?=$row_setting["hotline"]?></div>
				<div class="icon email">Email :<?=$row_setting["email"]?></div>
				<div class="icon global">Website :<?=$row_setting["website"]?></div>
				
			</div>
			<div class="col-md-3 col-sm-12 col-12">
				<h3 style="font-family: roboto-bold;text-transform: uppercase;">Chính sách</h3>
				<div> 
					<?php foreach($chinhsach as $item): ?>
						<a href="<?=$item['tenkhongdau']?>" class="chinhsach_item"><?=$item["ten_$lang"]?></a>

					<?php endforeach; ?>
				</div>
			</div>
			<div class="col-md-5 col-sm-12 col-12">
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