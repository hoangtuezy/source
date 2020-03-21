<div id="newsletter">
	<div class="container">
		<div class="col-sm-12 col-md-6 col-12">
			<div class="d-flex justify-content-between flex-wrap newsletter_info">
				<div class="image">
					<img src="assets/images/newsletter.png" alt="newsletter">
				</div>
				<div class="detail">
					<h3>ĐĂNG KÝ NHẬN TIN</h3>
					<p>Chúng tôi luôn muốn được lắng nghe những nhận xét cũng như góp ý của khách hàng vui lòng điền đầy đủ thông tin</p>
					<p>Hotline: <span class="number_hotline"><?=$row_setting['hotline']?></span></p>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-6 col-12">
			<p class="title">Bạn hãy điền đầy đủ thông tin</p>
			<form method="post" name="frm_newsletter" action="nhan-mail">
		<input type="hidden" name="guimail">
		<input type="hidden" name="type" value="newsletter">
							<div class="row">
								<div class="col-sm-6 col-12">
									<input name="ten" type="text" required class="form-control" id="tenlienhe" placeholder="Tên" size="40" />
									<input name="email" id="email" required type="text" class="form-control" placeholder="Email" size="40"  />
									<input name="dienthoai" required type="text" class="form-control" id="dienthoai" placeholder="Số điện thoại" size="40"/>
								</div>
								<div class="col-sm-6 col-12">

									<textarea name="noidung" required type="text" row="10" class="form-control" id="noidung" placeholder="nội dung" size="40"/></textarea>

								</div>

								<div class="col-12 inputx text-right">

									<input type="hidden" name="recaptcha_response" class="recaptcha_response" id="recaptchaResponse_ct">

									<!-- <input class="button" type="button" value="Xóa" onclick="document.frm_newsletter.reset();" /> -->

									<input class="button" type="submit" value="ĐĂNG KÝ" />

								</div> 

								<div class="clearfix"></div>                     

							</div>                             

						</form>
		</div>
	</div>
</div>