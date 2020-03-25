<div id="view_account_tpl" class="mb-4">
	<div class="container">
		<div class="card view_account">
			<div class="card-header">
				THÔNG TIN THÀNH VIÊN
			</div>
			<div class="card-body">
				<div class="w-100 bg-light mb-3 p-5">
					<div>Số tiền: <span class="text-danger"><?=price_coin($view_account['bcoin'])?></span></div>
				</div>
				<form action="tai-khoan/save" method="POST" enctype="multipart/form-data" class="col-md-12 mx-auto">
					<input type="hidden" name="mathanhvien" value="<?=@$view_account["mathanhvien"]?>">
					<div class="form-row mb-3">
						<label class="col-md-2 col-sm-3" for="exampleInputEmail1">Email</label>
						<input type="email" class="form-control col-md-10 col-sm-9 disabled" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?=@$view_account["email"]?>" disabled>
					</div>
					<div class="form-row mb-3">
						<label class="col-md-2 col-sm-3" for="exampleInputEmail1">Họ và tên</label>
						<input type="text" class="form-control col-md-10 col-sm-9" id="exampleInputEmail1" aria-describedby="emailHelp" name="ten"  value="<?=@$view_account["ten"]?>">
					</div>
					<div class="form-row mb-3">
						<label class="col-md-2 col-sm-3" for="account_diachi">Địa Chỉ</label>
						<input type="text" class="form-control col-md-10 col-sm-9" id="account_diachi" aria-describedby="emailHelp" name="diachi" value="<?=@$view_account["diachi"]?>">
					</div>
					<div class="form-row mb-3">
						<label class="col-md-2 col-sm-3" for="account_dienthoai">Điện Thoại</label>
						<input type="text" class="form-control col-md-10 col-sm-9" id="account_dienthoai" aria-describedby="emailHelp" name="dienthoai" value="<?=@$view_account["dienthoai"]?>">
					</div>
					<div class="form-row mb-3">
						<label class="col-md-2 col-sm-3" for="account_sex">Giới Tính</label>
						<select name="sex" id="account_sex" class="form-control col-md-4 col-sm-5">
							<option value="1" <?php if($view_account["sex"]==1) echo('selected');?>>Nam</option>
							<option value="0" <?php if($view_account["sex"]==0) echo('selected');?>>Nữ</option>
						</select>
					</div>
					<div class="form-row mb-3">
						<label class="col-md-2 col-sm-3" for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control col-md-10 col-sm-9" id="exampleInputPassword1" name="password">
					</div>

					<div class="form-row mb-3">
						<label class="col-md-2 col-sm-3" for="exampleInputPassword1">Nhập lại Password</label>
						<input type="password" class="form-control col-md-10 col-sm-9" id="exampleInputPassword1" name="retypepassword">
					</div>

					<div class="form-row mb-3">
						<label class="col-md-2 col-sm-3" for="btn-submit"></label>
						<button type="submit" class="btn btn-primary">Thay Đổi</button>
						
					</div>
				</form>
			</div>
		</div>
	</div>
</div>