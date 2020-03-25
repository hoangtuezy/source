<?php  if(!defined('_source')) die("Error");
$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";



switch ($act) {
	case 'save':
	save_account();
	break;
	default:
	view_account();
	$template = "account/view_account";
	break;
}
function view_account(){
	global $d,$view_account;
	$target = $_REQUEST['act'];
	$target = explode('-',$target);
	if(empty($target[1])){
		if(is_account_login()) $target[1] = $_SESSION['account']['mathanhvien'];
		else transfer("Bạn chưa đăng nhập",$Protocol.$config_url.'/dang-nhap');
	}
	$d->query("select * from #_thanhvien where mathanhvien='".$target[1]."' ");
	$view_account = $d->fetch_array();
}
function save_account(){
	global $d,$config;
	$account_post = array('ten','diachi','dienthoai','sex');
	foreach($account_post as $input){
		$data[$input] = $_POST[$input];
	}
	if(!empty($_POST['password']) && !empty($_POST['retypepassword'])){
		if($_POST['password'] == $_POST['retypepassword']){
			$data['password'] = encrypt_password($_POST['retypepassword'],$config['salt']);
		}
	}

	if($_POST['mathanhvien'] != $_SESSION['account']['mathanhvien']){
		die("copy ninja!");
	}
	$d->reset();
	$d->setWhere('mathanhvien',$_SESSION['account']['mathanhvien']);
	$d->setTable("thanhvien");
	if($d->update($data)){
		transfer(_account_save_success,'tai-khoan');
	}else{
		transfer(_account_save_fail,'tai-khoan');
	}
}