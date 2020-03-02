<div id="footer">
	<div class="container">
		<div class="header-title reverse">
			<h2 class="h2-title">
				<span>
					LIÊN HỆ CHÚNG TÔI
				</span>
			</h2>
		</div>
		<div class="row">
			<div class="col-md-5 col-sm-12 col-12">
				<h2>NỘI THẤT MINH NHẬT</h2>
				<div class="icon marker">Địa chỉ: <?=$row_setting["diachi_$lang"]?></div>
				<div class="icon hotline">Số điện thoại: <?=$row_setting["hotline"]?></div>
				<div class="icon email">Email: <?=$row_setting["email"]?></div>
				<div class="icon global">Website: <?=$row_setting["website"]?></div>
			</div>
			<div class="col-md-7 col-sm-12 col-12 bando_footer">
				<?=$row_setting["toado"]?>
			</div>
		</div>
		<div class="w-100">
			<h3>ĐĂNG KÝ ĐỂ NHẬN TIN</h3>
			<form method="post" name="frm_newsletter" action="newsletter" enctype="multipart/form-data" class="form-horizontal" role="form">
				<div class="row mb-4">
					<div class="col-md-4 col-sm-12 col-12">
                <input type="text" id="ten" name="ten" class="form-control" placeholder="Name">
            </div>
       
        <div class="col-md-4 col-sm-12 col-12">
                <input type="text" id="dienthoai" name="dienthoai" class="form-control" placeholder="Phone">
        </div>
        <div class="col-md-4 col-sm-12 col-12">
                <input type="text" id="inputEmail3" name="email" class="form-control" placeholder="Email">
        </div>
				</div>
        
      
        <div class="form-row">
            
             <div class="col-md-11">
                <textarea name="noidung" class="form-control" id="noidung" rows="3" placeholder="Content"></textarea>
            </div>
            <div class="col-md-1">
              <button type="button" class="btn-contact-submit" id="button">GỬI</button>
</div>
        </div>
        <input type="hidden" name="recaptcha_response" id="recaptchaResponse" class="recaptchaResponse">
        <input type="hidden" name="type" value="newsletter">
        <input type="hidden" name="guimail">  
    </form>
		</div>
		<div class="w-100 text-center mt-4">
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