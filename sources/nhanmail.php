<?php if(!defined('_source')) die("Error");
		
		$title_bar .= " - Đăng ký";

	
		if(!empty($_POST)&&isset($_POST['guimail'])){

			
		$data1['type'] = empty($_POST['type'])?'default':magic_quote($_POST['type']);
		$data1['email'] = $_POST['email'];
		$data1['ten'] = $_POST['ten'];
		$data1['diachi'] = $_POST['diachi'];
		$data1['dienthoai'] = $_POST['dienthoai'];
		$data1['noidung'] = $_POST['noidung'];
		$data1['ngaytao'] = time();

		$d->setTable('newsletter');
		if($d->insert($data1))
			transfer("Bạn đã đăng ký thành công<br/>Cảm ơn", $Protocol.$config_url);
		else
			transfer("Lưu dữ liệu bị lỗi", $Protocol.$config_url);
		}
		
	
		
	
?>