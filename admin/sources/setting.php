<?php	if(!defined('_source')) die("Error");

$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";

switch($act){
	case "capnhat":
	get_gioithieu();
	$template = "setting/item_add";
	break;
	case "save":
	save_gioithieu();
	break;

	default:
	$template = "index";
}

function get_gioithieu(){
	global $d, $item;

	$sql = "select * from #_setting limit 0,1";
	$d->query($sql);
	//if($d->num_rows()==0) transfer("Dữ liệu chưa khởi tạo.", "index.php");
	$item = $d->fetch_array();
}

function save_gioithieu(){
	global $d,$config_lang;
	$file_name=images_name($_FILES['file']['name']);
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=setting&act=capnhat");

	if($photo = upload_image("file", 'jpg|png|gif|JPG|jpeg|JPEG', _upload_hinhanh,$file_name)){
		$data['photo'] = $photo;	
	}
	
	foreach($config_lang as $key => $value){
		$data['ten_'.$key] = $_POST['ten_'.$key];
		$data['slogan_'.$key] = $_POST['slogan_'.$key];
		$data['diachi_'.$key] = $_POST['diachi_'.$key];
	}

		$file_dw=images_name($_FILES['dongdau']['name']);
	if(!empty($file_dw)){
		upload_image("dongdau", 'png', '../upload/','watermark');
		$files_cache = glob('../water@#cache/*'); // get all file names
		foreach($files_cache as $file){ // iterate files
			if(is_file($file))
		    unlink($file); // delete file
	}
	}
	
	$data['email'] = magic_quote($_POST['email']);
	$data['website'] = magic_quote($_POST['website']);
	$data['sanpham'] = (int)$_POST['sanpham'];
	$data['toado'] = magic_quote($_POST['toado']);

	$data['hotline'] = magic_quote($_POST['hotline']);
	$data['dienthoai'] = magic_quote($_POST['dienthoai']);

	$data['facebook'] = magic_quote($_POST['facebook']);
	$data['zalo'] = magic_quote($_POST['zalo']);
	$data['viber'] = magic_quote($_POST['viber']);
	$data['youtube'] = magic_quote($_POST['youtube']);
	$data['whatapp'] = magic_quote($_POST['whatapp']);



	$data['scriptcode'] = magic_quote($_POST['scriptcode']);
	$data['bodycode'] = magic_quote($_POST['bodycode']);
	$data['title'] = $_POST['title'];
	$data['keywords'] = $_POST['keywords'];
	$data['description'] = $_POST['description'];							

	$d->reset();
	$d->setTable('setting');
	if($d->update($data))
		header("Location:index.php?com=setting&act=capnhat");
	else
		transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=setting&act=capnhat");
}

?>