<?php  if(!defined('_source')) die("Error");
include __DIR__."/lang/lang_$lang.php";
include __DIR__."/functions_account.php";
if(in_array($com, array('tai-khoan'))){
	if(!is_account_login()){
		header("Location: ".$Protocol.$config_url."/dang-nhap");
	}
}
if(in_array($com, array('dang-ky','dang-nhap'))){
	if(is_account_login()){
		header("Location: ".$Protocol.$config_url);
	}
}
switch ($com) {
	case 'dang-nhap':
	include __DIR__."/dangnhap.php";
	break;
	case 'dang-ky':
	include __DIR__."/dangky.php";
	break;
	case 'quen-mat-khau':
	include __DIR__."/quenmatkhau.php";
	break;
	case 'dang-xuat':
	account_logout();
	break;
	default:
		include __DIR__."/account.php";
	break;
}
function account_logout(){
	global $Protocol,$config_url;
	unset($_SESSION['account']);
	transfer("Bạn đã đăng xuất thành công",$Protocol.$config_url);
}