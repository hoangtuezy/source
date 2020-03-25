<?php  if(!defined('_source')) die("Error");
if($_POST){
	$data = array();
	$account_error_mess = array();

	$account_post = array('ten','email','password','retypepassword');
	foreach($account_post as $input){
		$data[$input] = $_POST[$input];
	}
	if(empty($data['password']) || empty($data['retypepassword']) ){
		transfer("Xin vui lòng nhập đầy đủ thông tin",$_SESSION['links']);
	}
	if($data['password'] != $data['retypepassword'] ){
		transfer("Mật khẩu nhập lại không đúng",$_SESSION['links']);
	}
	//kiểm tra email
	$_check_email = fetch_array("select id from #_thanhvien where email='".$data['email']."' ");
	if($_check_email['id'] > 0){
		transfer("Tài khoản email đã tồn tại",$_SESSION['links']);
	}
	$d->reset();
	$d->query("select max(id) as mid from #_thanhvien");
	$max_id_user = $d->fetch_array();
	$max_id_user = (int) $max_id_user['mid'];

	$data['password'] = encrypt_password($_POST['password'],$config['salt']);
	$data['mathanhvien'] = 'TV'.return_uid($max_id_user + 1); //tạo mã thành viên
	$data['ngaydangky'] = time();
	unset($data['retypepassword']);
	$d->reset();
	$d->setTable('thanhvien');

	if($d->insert($data))
		{
			transfer("Bạn đã đăng ký thành công<br/>Vui lòng vào email kích hoạt tài khoản", $Protocol.$config_url);
		}
		else{
			echo "<script>alert('Đăng Ký Không Thành Công .Vui lòng đăng ký lại .');</script>";
		}

}