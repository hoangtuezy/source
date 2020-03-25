<div id="dangnhap_tpl">
	<div class="container">
		<form action="dang-nhap" method="POST" enctype="multipart/form-data" class="col-md-4 mx-auto">
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" name="password">
			</div>
			<div class="mb-2"><a href="quen-mat-khau" class="text-primary"><?=_account_quenmatkhau?></a></div>
			<div class="form-group d-flex justify-content-between align-items-center">
				<button type="submit" class="btn btn-primary"><?=_account_btn_dangnhap?></button>
				<span><a href="dang-ky" class="text-primary"><?=_account_dangky?></a></span>
			</div>
		</form>
	</div>
</div>