<?php
if(isset($_REQUEST['com'])){
	$com =addslashes($_REQUEST['com']);
	if($com=='index'){
		redirect('404.php');
	}
}
if(strpos(getCurrentPage(),'index.html') > 0){ //index.html
	redirect('404.php');
}
if(empty($_REQUEST) || empty($com)){
	$com = 'index';
}
if(isset($_REQUEST['act'])){
	$act =addslashes($_REQUEST['act']);
}
if(is_null($d)){
	$d = new database($config['database']);
}
$page = (int)(!isset($_GET["page"]) ? 1 : $_GET["page"]);
$row_setting= fetch_array("select * from #_setting limit 0,1");
$favicon = fetch_array("select thumb_$lang from #_photo where type='favicon'");
$row_logo = fetch_array("select photo_vi,link from #_photo where type='logo' ");
$row_banner = fetch_array("select photo_vi,link from #_photo where type='banner' ");
$white_coms = array(
	'index',
	'san-pham',
	'noi-bat',
	'khuyen-mai',
	'combo',
	'thuc-don',
	'tin-tuc',
	'dich-vu',
	'cong-trinh',
	'bao-gia',
	'wuy-trinh',
	'gioi-thieu',
	'video',
	'ajax',
	'gio-hang',
	'thanh-toan',
	'bo-suu-tap',
	'album'
);
if(!in_array($com, $white_coms)){
	include _lib."short_link.php";
}
switch($com){
	case 'ajax':
	include _source."ajax.php";
	die();
	break;
	case 'video':
	$source = "video";
	$template = isset($id) ? "video_detail" : "video";
	break;
	case 'album':
	$source = "album";
	$template = isset($id) ? "album_detail" : "album";
	$type_bar = 'album';
	$title_detail = "Album hình ảnh";
	break;
	case 'gioi-thieu':
	$source = "about";
	$template = "about";
	$type_bar = 'gioi-thieu';
	$title_detail = _gioithieu;
	break;
	case 'thanh-toan-giao-nhan':
	$source = "about";
	$template = "about";
	$type_bar = 'thanh-toan-giao-nhan';
	$title_detail = "Thanh Toán Giao Nhận Hàng";
	break;
	case 'dai-ly':
	$source = "about";
	$template = "about";
	$type_bar = 'dai-ly';
	$title_detail = "Đại Lý";
	break;	
	case 'tra-gop':
	$source = "about";
	$template = "about";
	$type_bar = 'tra-gop';
	$title_detail = "Trả Góp";
	case 'ho-tro':
	$source = "about";
	$template = "about";
	$type_bar = 'ho-tro';
	$title_detail = "Hỗ Trợ";	
	break;	
	case 'dat-tiec':
	$template = "booking";
	$type_bar = 'booking';
	$title_detail = "ĐẶT TIỆC";
	break;
	case 'tags':
	$source = "tags";
	$template = "product";
	$type_bar = 'tags';
	$title_detail = "Tags";
	break;
	case 'du-an':
	$source = "news";
	$template = isset($id) ? "duan_detail" : "duan";
	$type_bar = 'du-an';
	$title_detail = "Dự Án";
	break;
	case 'khoa-hoc':
	$source = "news";
	$template = isset($id) ? "news_detail" : "news";
	$type_bar = 'khoa-hoc';
	$title_detail = "Khóa Học";
	break;
	case 'thoi-khoa-bieu':
	$source = "news";
	$template = isset($id) ? "news_detail" : "news";
	$type_bar = 'thoi-khoa-bieu';
	$title_detail = "Thời Khóa Biểu";
	break;
	case 've-sinh-tham':
	$source = "news";
	$template = isset($id) ? "news_detail" : "news";
	$type_bar = 've-sinh-tham';
	$title_detail = "Vệ Sinh Thảm";
	break;

	case 'tu-van':
	$source = "news";
	$template = isset($id) ? "news_detail" : "news";
	$type_bar = 'tu-van';
	$title_detail = "Tư Vấn";
	break;	

	case 'tin-tuc':
	$source = "news";
	$template = isset($id) ? "news_detail" : "news";
	$type_bar = 'tin-tuc';
	$title_detail = _tintuc;
	break;
	case 'quy-trinh':
	$source = "news";
	$template = isset($id) ? "news_detail" : "news";
	$type_bar = 'quy-trinh';
	$title_detail = "Quy Trình";
	break;

	case 'bao-gia':
	$source = "news";
	$template = isset($id) ? "news_detail" : "news";
	$type_bar = 'bao-gia';
	$title_detail = "Báo Giá";
	break;

	case 'cong-trinh':
	$source = "news";
	$template = isset($id) ? "news_detail" : "news";
	$type_bar = 'cong-trinh';
	$title_detail = "Công Trình";
	break;

	
	
	case 'doi-tac':
	$source = "news";
	$template = isset($id) ? "news_detail" : "news";
	$type_bar = "doi-tac";
	$title_detail = "Đối Tác";
	break;	
	case 'bo-suu-tap':
	$source = "news";
	$template = isset($id) ? "news_detail" : "news";
	$type_bar = "bo-suu-tap";
	$title_detail = "Bộ Sưu Tập";
	break;		
		// case 'kien-thuc':
		// 	$source = "news";
		// 	$template = isset($id) ? "news_detail" : "news";
		// 	$type_bar = 'kien-thuc';
		// 	$title_detail = "Kiến Thức";
		// 	break;
	case 'uu-dai':
	$source = "news";
	$template = isset($id) ? "news_detail" : "news";
	$type_bar = 'uu-dai';
	$title_detail = "Ưu Đãi";
	break;	
	case 'he-thong':
	$source = "news";
	$template = isset($id) ? "news_detail" : "news";
	$type_bar = 'he-thong';
	$title_detail = "Hệ Thống";
	break;		
	case 'huong-dan':
	$source = "news";
	$template = isset($id) ? "news_detail" : "news";
	$type_bar = 'huong-dan';
	$title_detail = "Hướng Dẫn";
	break;	
	case 'dao-tao':
	$source = "news";
	$template = isset($id) ? "news_detail" : "news";
	$type_bar = 'dao-tao';
	$title_detail = "Đào Tạo";
	break;	
	case 'cong-trinh':
	$source = "news";
	$template = isset($id) ? "congtrinh_detail" : "congtrinh";
	$type_bar = 'cong-trinh';
	$title_detail = "Công Trình";
	break;

	case 'tuyen-dung':
	$source = "news";
	$template = isset($id) ? "news_detail" : "news";
	$type_bar = 'tuyen-dung';
	$title_detail = _tuyendung;
	break;	
		// case 'bo-suu-tap':
		// 	$source = "news";
		// 	$template = isset($id) ? "news_detail" : "news";
		// 	$type_bar = 'bo-suu-tap';
		// 	$title_detail = "Bộ Sưu Tập";
		// 	break;
	case 'bang-kich-co':
	$source = "news";
	$template = isset($id) ? "news_detail" : "news";
	$type_bar = 'bang-kich-co';
	$title_detail = "Bảng Kích Cỡ";
	break;	
	case 'dich-vu':
	$source = "news";
	$template = isset($id) ? "news_detail" : "news";
	$type_bar = 'dich-vu';
	$title_detail = "Dịch Vụ";
	break;
	
	case 'san-pham':
	$source = "product";
			// $template =isset($id)?"product_detail" : (!empty($idl)?'sanpham_list':"sanpham");
	$template = isset($id) ? "product_detail" : "product";
	$type_bar = 'san-pham';	
	$title_detail = "Sản phẩm";
	
	break;

	case 'noi-bat':
	case 'combo':
	$source = "product";
			// $template =isset($id)?"product_detail" : (!empty($idl)?'sanpham_list':"sanpham");
	$template = isset($id) ? "product_detail" : "product";
	$type_bar = 'san-pham';	
	$title_detail = "Sản phẩm nổi bật";
	
	break;
	case 'khuyen-mai':
	$source = "product";
			// $template =isset($id)?"product_detail" : (!empty($idl)?'sanpham_list':"sanpham");
	$template = isset($id) ? "product_detail" : "product";
	$type_bar = 'san-pham';	
	$title_detail = "Sản phẩm khuyến mãi";
	
	break;
	case 'kenh-ban-si':
	$source = "product";
			// $template =isset($id)?"product_detail" : (!empty($idl)?'sanpham_list':"sanpham");
	$template = isset($id) ? "product_detail" : "product";
	$title_detail = "Kênh Bán Sỉ";
	$type_bar = 'san-pham';	
	break;
		// case 'khuyen-mai':
		// 	$source = "product";
		// 	// $template =isset($id)?"product_detail" : (!empty($idl)?'sanpham_list':"sanpham");
		// 	$template = isset($id) ? "product_detail" : "product";
		// 	$title_detail = "Khuyến Mãi";
		// 	$type_bar = 'san-pham';	
		// break;
	case 'ban-chay':
	$source = "product";
			// $template =isset($id)?"product_detail" : (!empty($idl)?'sanpham_list':"sanpham");
	$template = isset($id) ? "product_detail" : "product";
	$title_detail = "Bán Chạy";
	$type_bar = 'san-pham';	
	break;
	case 'sale':
	$source = "product";
			// $template =isset($id)?"product_detail" : (!empty($idl)?'sanpham_list':"sanpham");
	$template = isset($id) ? "product_detail" : "product";
	$title_detail = "Giải Phóng Mặt Bằng";
	$type_bar = 'san-pham';	
	break;
		// case 'xay-dung':
		// 	$source = "product";
		// 	$template =isset($id)?"product_detail" : (!empty($idl)?'sanpham_list':"sanpham");
		// 	$title_detail = _xaydung;
		// 	$type_bar = 'xay-dung';	
		// break;
		// case 'quang-cao':
		// 	$source = "product";
		// 	$template =isset($id)?"product_detail" : (!empty($idl)?'sanpham_list':"sanpham");
		// 	$title_detail = _quangcao;
		// 	$type_bar = 'san-pham';	
		// break;
	case 'xay-dung':
	$source = "product";
	$template = isset($id) ? "product_detail" : "product";
	$type_bar = 'xay-dung';
	$title_detail = 'Xây dựng';
	break;
	case 'vi-sao-chon':
	$source = "news";
	$template = isset($id) ? "news_detail" : "news";
	$type_bar = 'vi-sao-chon';
	$title_detail = 'Vì Sao Chọn';
	break;	
			// case 'khuyen-mai':
			// $source = "product";
			// $template =isset($id) ? "product_detail" : "product";
			// $title_detail = _sanpham;
			// $type_bar = 'san-pham';	
			// break;	
	case 'chinh-sach':
	$source = "news";
	$template ="news_detail";
	$type_bar = 'chinh-sach';	
	$title_detail = "Chính Sách";
	break;

	case 'nhan-mail':
	$source = "nhanmail";			
	break;		
	case 'lien-he':
	$source = "contact";
	$template = "contact";
	$title_detail = _lienhe;
	$title_bar = _lienhe;
	break;
	case 'tim-kiem':
	$source = "search";
	$template = "product";
	$type_bar = 'san-pham';	
	break;
	case 'gio-hang':
	$source = "giohang";
	$template = "giohang";
	$title_detail = 'Giỏ Hàng';
	break;	
	case 'thanh-toan':
	$source = "thanhtoan";
	$template = "thanhtoan";
	$title_detail = "Thanh Toán";
	break;	
	
	case 'index':
	$source = "index";
	$template ="index";
	break;	
	case 'ngonngu':
	if(isset($_GET['lang']))
	{
		$_SESSION['lang'] = $_GET['lang'];
	}
	else{
		$_SESSION['lang'] = 'vi';
	}
	echo '<script language="javascript">history.go(-1)</script>';
	break;
	default:
		redirect('404.php');
	break;
}

$og_type=isset($id) ? "article" : "website";

if(!empty($title_detail)){
	$title_com = $title_detail;
}
if($source!="") include _source.$source.".php";

if($com =='logout')
{
	session_unregister($login_name);
	header("Location:index.php");
}		
