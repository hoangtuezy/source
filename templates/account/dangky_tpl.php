<div id="dangky_tpl">
	<div class="container">
		<form action="dang-ky" method="POST" enctype="multipart/form-data" class="col-md-5 mx-auto">
			<div class="form-group">
				<label for="exampleInputEmail1">Họ và tên</label>
				<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ten">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" name="password">
			</div>

			<div class="form-group">
				<label for="exampleInputPassword1">Nhập lại Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" name="retypepassword">
			</div>

			<div class="form-group d-flex justify-content-between align-items-center">
				<button type="submit" class="btn btn-primary"><?=_account_dangky?></button>
				<span><?=_account_cotaikhoan?><a href="dang-nhap" class="text-primary"><?=_account_btn_dangnhap?></a></span>
			</div>
		</form>
	</div>
</div>