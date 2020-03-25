<?php
if(!function_exists('return_uid')){
	function return_uid($id)
	{
		$id = dechex($id + 307843200);
		$id = str_replace(1,'I',$id);
		$id = str_replace(2,'W',$id);
		$id = str_replace(3,'O',$id);
		$id = str_replace(4,'U',$id);
		$id = str_replace(5,'Z',$id);
		return strtoupper($id);
	}
}
if(!function_exists('return_id')){
	function return_id($id)
	{
		$id = str_replace("I",1,$id);
		$id = str_replace("W",2,$id);
		$id = str_replace("O",3,$id);
		$id = str_replace("U",4,$id);
		$id = str_replace("Z",5,$id);
		$id = hexdec($id) - 307843200;

		return strtolower($id);
	}
}
function is_account_login(){
	global $login_name;
	return $_SESSION['account'][$login_name] && !empty($_SESSION['account']['mathanhvien']) && !empty($_SESSION['account']['id']);
}
function price_coin($giaban,$sdt='',$ccy=' đ'){
    if($giaban==''){
        if(empty($sdt)) return "Liên Hệ";
        else return '<a href="tel:'.$sdt.'">'."Liên Hệ".'</a>';
    }
    return number_format($giaban).$ccy;
}
function redirect_login(){

}

function redirect_home(){
	
}