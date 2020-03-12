<?php
	$type = (isset($_REQUEST['type'])) ? addslashes($_REQUEST['type']) : "";	
	$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
	$act = explode('_',$act);
	if(count($act)>1){
		$act = $act[1];
	}else {
		$act = 'default';
	}
		$config_noibat_title = "Nổi Bật";
		$config_noibat1_title = "Khuyến Mãi";
		$config_noibat2_title = "Combo";
		$config_noibat3_title = "Sale";
		$setting_slogan = true;
		
	switch($type){
		//-------------product------------------
			case 'san-pham':
			switch($act){
				case 'list':
					$title_main = "Danh true cấp 1";
					$config_images = "true";
					$config_qc = "true";
					$config_mota= "true";
					$config_noidung= "true";
					$config_noibat= "true";
					$config_noibat1= "false";
					$config_noibat2= "false";
					$config_tenkhongdau = true;
					@define ( _width_thumb , 900 );
					@define ( _height_thumb , 240 );
					@define ( _style_thumb , 2 );
					$ratio_ = 1;
					break;
				case 'cat':
					$title_main = "Danh mục cấp 2";
					$config_images = "false";
					$config_qc = "false";
					$config_mota= "false";
					$config_noibat= "false";
					$config_noibat1= "false";
					$config_noibat2= "false";
					$config_noibat = 'true';
					$config_tenkhongdau = true;
					@define ( _width_thumb , 386 );
					@define ( _height_thumb , 235 );
					@define ( _style_thumb , 2 );
					$ratio_ = 1;
					break;
				default:
					$title_main = "Sản phẩm";
					$config_images = "true";
					$config_mota= "true";
					$config_noidung= "true";
					$config_list = "true";
					$config_cat = "true";
					$config_item = "false";
					$config_sub = "false";
					$config_masp = true;
					$config_giaban = true;
					$config_giacu = true
					;
					$config_diachi = false;
					$config_dientich = false;
					$config_stock = "false";
					$config_quangcao = 'false';
					$config_trongluong = "false";
					$config_noibat = "true";
					$config_noibat1 = "true";
					$config_noibat2 = "false";
					$config_noibat3 = "false";
					$config_tags = "false";
					$config_link = 'false';
					$config_tenkhongdau = true;
					@define ( _width_thumb , 380 );
					@define ( _height_thumb , 280 );
					@define ( _style_thumb , 2 );
					$ratio_ = 1.5;
					break;
				}
				@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			break;
			case 'xay-dung':
			switch($act){
				case 'list':
					$title_main = "Danh mục cấp 1";
					$config_images = "true";
					$config_qc = "false";
					$config_mota= "false";
					$config_noibat= "true";
					$config_noibat1= "false";
					$config_noibat2= "false";
					@define ( _width_thumb , 80 );
					@define ( _height_thumb , 80 );
					@define ( _style_thumb , 2 );
					$ratio_ = 1;
					break;
				case 'cat':
					$title_main = "Danh mục cấp 2";
					$config_images = "false";
					$config_qc = "false";
					$config_mota= "false";
					$config_noibat= "false";
					$config_noibat1= "false";
					$config_noibat2= "false";
					$config_noibat = 'true';
					@define ( _width_thumb , 386 );
					@define ( _height_thumb , 235 );
					@define ( _style_thumb , 2 );
					$ratio_ = 1;
					break;
				default:
					$title_main = "Xây dựng";
					$config_images = "true";
					$config_mota= "true";
					$config_list = "true";
					$config_cat = "true";
					$config_item = "false";
					$config_sub = "false";
					$config_masp = true;
					$config_giaban = false;
					$config_giacu = false;
					$config_diachi = false;
					$config_dientich = false;
					$config_noibat = "true";
					$config_noibat1 = "false";
					$config_noibat2 = "false";
					$config_noibat3 = "false";
					$config_tags = "false";
					@define ( _width_thumb , 278 );
					@define ( _height_thumb , 300 );
					@define ( _style_thumb , 2 );
					$ratio_ = 1;
					break;
				}
				@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			break;
			case 'quang-cao':
			switch($act){
				case 'list':
					$title_main = "Danh mục cấp 1";
					$config_images = "true";
					$config_qc = "false";
					$config_mota= "false";
					$config_noibat= "true";
					$config_noibat1= "false";
					$config_noibat2= "false";
					@define ( _width_thumb , 80 );
					@define ( _height_thumb , 80 );
					@define ( _style_thumb , 2 );
					$ratio_ = 1;
					break;
				case 'cat':
					$title_main = "Danh mục cấp 2";
					$config_images = "false";
					$config_qc = "false";
					$config_mota= "false";
					$config_noibat= "false";
					$config_noibat1= "false";
					$config_noibat2= "false";
					$config_noibat = 'true';
					@define ( _width_thumb , 386 );
					@define ( _height_thumb , 235 );
					@define ( _style_thumb , 2 );
					$ratio_ = 1;
					break;
				default:
					$title_main = "Quảng Cáo";
					$config_images = "true";
					$config_mota= "true";
					$config_list = "true";
					$config_cat = "true";
					$config_item = "false";
					$config_sub = "false";
					$config_masp = true;
					$config_giaban = false;
					$config_giacu = false;
					$config_diachi = false;
					$config_dientich = false;
					$config_noibat = "true";
					$config_noibat1 = "false";
					$config_noibat2 = "false";
					$config_noibat3 = "false";
					$config_tags = "false";
					@define ( _width_thumb , 278 );
					@define ( _height_thumb , 300 );
					@define ( _style_thumb , 2 );
					$ratio_ = 1;
					break;
				}
				@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			break;
		case 'dat-nen':
			switch($act){
				case 'list':
					$title_main = "Danh mục cấp 1";
					$config_images = "false";
					$config_qc = "false";
					$config_mota= "false";
					$config_noibat= "true";
					$config_noibat1= "false";
					$config_noibat2= "false";
					@define ( _width_thumb , 315 );
					@define ( _height_thumb , 207 );
					@define ( _style_thumb , 2 );
					$ratio_ = 1;
					break;
				case 'cat':
					$title_main = "Danh mục cấp 2";
					$config_images = "false";
					$config_qc = "false";
					$config_mota= "false";
					$config_noibat= "false";
					$config_noibat1= "false";
					$config_noibat2= "false";
					@define ( _width_thumb , 386 );
					@define ( _height_thumb , 235 );
					@define ( _style_thumb , 2 );
					$ratio_ = 1;
					break;
				default:
					$title_main = "Đất Nền";
					$config_images = "true";
					$config_mota= "true";
					$config_list = "false";
					$config_cat = "false";
					$config_item = "false";
					$config_sub = "false";
					$config_noibat = "true";
					$config_noibat1 = "false";
					$config_noibat2 = "false";
					@define ( _width_thumb , 272 );
					@define ( _height_thumb , 272 );
					@define ( _style_thumb , 2 );
					$ratio_ = 1;
					break;
				}
				@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			break;
		case 'size':
			$title_main = "Size";
			$config_images = 'false';
			$config_list2 = "false";
			@define ( _width_thumb , 40 );
			@define ( _height_thumb , 40 );
			@define ( _style_thumb , 2 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "false";
			break;
		case 'mausac':
			$title_main = "Màu sắc";
			$config_list = "false";
			$config_images = 'true';
			@define ( _width_thumb , 400 );
			@define ( _height_thumb , 400 );
			@define ( _style_thumb , 2 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "false";
			break;	
		case 'yahoo':
			$title_main = "Hỗ trợ trực tuyến";
			$config_images = "false";
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			@define ( _width_thumb , 86 );
			@define ( _height_thumb , 70 );
			@define ( _style_thumb , 1 );
			$ratio_ = 1;
			break;
		case 'giao-hang':
		case 'hinh-thuc-thanh-toan':
			$title_main = "Giới thiệu";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_ten = "true";
			$config_noibat = "false";
			@define ( _width_thumb , 610 );
			@define ( _height_thumb , 500 );
			@define ( _style_thumb , 2 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'giao-hang':
			$title_main = "Giới thiệu";
			$config_images = "false";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_ten = "true";
			$config_noibat = "false";
			@define ( _width_thumb , 595 );
			@define ( _height_thumb , 425 );
			@define ( _style_thumb , 2 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;	
			case 'slogan':
			case 'info_dichvu':
			case 'info_visaochon':
			case 'info_duan':
			$title_main = "Text";
			$config_images = "false";
			$config_mota= "false";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_ten = "true";
			$config_noibat = "false";
			@define ( _width_thumb , 828 );
			@define ( _height_thumb , 459 );
			@define ( _style_thumb , 2 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'lichkhaigiang':
			$title_main = "Lịch khai giảng";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_ten = "false";
			$config_noibat = "true";
			@define ( _width_thumb , 360 );
			@define ( _height_thumb , 264 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'tuyen-dung':
			$title_main = "Tuyển dụng";
			$config_images = "true";
			$config_mota= "true";
			$config_noidung= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_ten = "false";
			$config_noibat = "true";
			@define ( _width_thumb , 360 );
			@define ( _height_thumb , 264 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			case 'hoi-dap':
			$title_main = "Hỏi Đáp";
			$config_images = "false";
			$config_mota= "true";
			$config_noidung= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_ten = "false";
			$config_noibat = "true";
			@define ( _width_thumb , 360 );
			@define ( _height_thumb , 264 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			case 'co-so-vat-chat':
			$title_main = "Tuyển dụng";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_ten = "false";
			$config_noibat = "true";
			@define ( _width_thumb , 360 );
			@define ( _height_thumb , 264 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			case 'dao-tao':
			$title_main = "Tuyển dụng";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_ten = "false";
			$config_noibat = "true";
			@define ( _width_thumb , 360 );
			@define ( _height_thumb , 264 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;

			case 've-chung-toi':
			$title_main = "Tuyển dụng";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_ten = "false";
			$config_noibat = "true";
			@define ( _width_thumb , 360 );
			@define ( _height_thumb , 264 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;

		case 'slider_video':
			$title_main = "Giới thiệu";
			$config_images = "true";
			$config_video = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_ten = "true";
			$config_noibat = "false";
			@define ( _width_thumb , 360 );
			@define ( _height_thumb , 264 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'blog':
			$title_main = "Blog";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			@define ( _width_thumb , 172 );
			@define ( _height_thumb , 128 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'menu':
			$title_main = "Menu Tiệc";
			$config_images = "true";
			$config_mota= "false";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			@define ( _width_thumb , 172 );
			@define ( _height_thumb , 128 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
				
			case 'thuc-tap-sinh':
			$title_main = "Thực Tập Sinh";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			@define ( _width_thumb , 172 );
			@define ( _height_thumb , 128 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			case 'dich-vu':
			$title_main = "Dịch Vụ";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			$config_noidung = "true";
			switch ($act) {
				case 'list':
					@define ( _width_thumb , 450 );
					@define ( _height_thumb , 270 );
					break;
				default:
					@define ( _width_thumb , 375 );
					@define ( _height_thumb , 270 );
					break;
			}
			
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			case 'cong-trinh':
			$title_main = "Công Trình";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "true";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			$config_noidung = "true";
			switch ($act) {
				case 'list':
					@define ( _width_thumb , 450 );
					@define ( _height_thumb , 270 );
					break;
				default:
					@define ( _width_thumb , 450 );
					@define ( _height_thumb , 270 );
					break;
			}
			
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			case 'bao-hanh':
			$title_main = "Bảo Hành";
			$config_images = "false";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			$config_noidung = "true";
			switch ($act) {
				case 'list':
					@define ( _width_thumb , 690 );
					@define ( _height_thumb , 500 );
					break;
				default:
					@define ( _width_thumb , 100 );
					@define ( _height_thumb , 100 );
					break;
			}
			
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			case 'chuyen-khoa':
			$title_main = "Chuyên Khoa";
			$config_images = "false";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			$config_noidung = "true";
			switch ($act) {
				case 'list':
					@define ( _width_thumb , 690 );
					@define ( _height_thumb , 500 );
					break;
				default:
					@define ( _width_thumb , 100 );
					@define ( _height_thumb , 100 );
					break;
			}
			
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			case 'tin-tuc':
			$title_main = "Tin tức";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			$config_noidung = "true";
			switch ($act) {
				case 'list':
					@define ( _width_thumb , 690 );
					@define ( _height_thumb , 500 );
					break;
				default:
					@define ( _width_thumb , 590 );
					@define ( _height_thumb , 360 );
					break;
			}
			
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;

			case 'bao-gia':
			$title_main = "Báo Giá";
			$config_images = "false";
			$config_mota= "true";
			$config_giaban= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			$config_noidung = "true";
			switch ($act) {
				case 'list':
					@define ( _width_thumb , 690 );
					@define ( _height_thumb , 500 );
					break;
				default:
					@define ( _width_thumb , 590 );
					@define ( _height_thumb , 360 );
					break;
			}
			
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;

			case 'quy-trinh':
			$title_main = "Quy Trình";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			$config_noidung = "true";
			switch ($act) {
				case 'list':
					@define ( _width_thumb , 690 );
					@define ( _height_thumb , 500 );
					break;
				default:
					@define ( _width_thumb , 160 );
					@define ( _height_thumb , 160 );
					break;
			}
			
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			case 'goc-chia-se':
			$title_main = "Góc chia sẻ";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			$config_noidung = "true";
			switch ($act) {
				case 'list':
					@define ( _width_thumb , 690 );
					@define ( _height_thumb , 500 );
					break;
				default:
					@define ( _width_thumb , 350 );
					@define ( _height_thumb , 230 );
					break;
			}
			
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			case 'chu-de':
			$title_main = "Chủ đề";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			$config_noidung = "true";
			switch ($act) {
				case 'list':
					@define ( _width_thumb , 690 );
					@define ( _height_thumb , 500 );
					break;
				default:
					@define ( _width_thumb , 350 );
					@define ( _height_thumb , 230 );
					break;
			}
			
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			case 'tiem-luc':
			$title_main = "Tiềm Lực";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			$config_noidung = "true";
			switch ($act) {
				case 'list':
					@define ( _width_thumb , 690 );
					@define ( _height_thumb , 500 );
					break;
				default:
					@define ( _width_thumb , 80 );
					@define ( _height_thumb , 80 );
					break;
			}
			
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			case 'khoa-hoc':
			
			$title_main = "Khóa Học";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "true";
			$config_cat = "true";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			$config_noidung = "true";
			switch ($act) {
				case 'list':
					@define ( _width_thumb , 690 );
					@define ( _height_thumb , 500 );
					break;
				default:
					@define ( _width_thumb , 280 );
					@define ( _height_thumb , 240 );
					break;
			}
			
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
	case 'giao-vien':
			$title_main = "Giáo Viên";
			$config_images = "true";
			$config_img= "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			$config_noidung = "true";
			switch ($act) {
				case 'list':
					@define ( _width_thumb , 690 );
					@define ( _height_thumb , 500 );
					break;
				default:
					@define ( _width_thumb , 180 );
					@define ( _height_thumb , 180 );
					break;
			}
			
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			case 'hoc-vien':
			$title_main = "Học Viên";
			$config_images = "true";
			$config_img= "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			$config_noidung = "true";
			switch ($act) {
				case 'list':
					@define ( _width_thumb , 690 );
					@define ( _height_thumb , 500 );
					break;
				default:
					@define ( _width_thumb , 180 );
					@define ( _height_thumb , 180 );
					break;
			}
			
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			case 'doi-ngu':
			$title_main = "Đội Ngũ";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			switch ($act) {
				case 'list':
					@define ( _width_thumb , 690 );
					@define ( _height_thumb , 500 );
					break;
				default:
					@define ( _width_thumb , 172 );
					@define ( _height_thumb , 128 );
					break;
			}
			
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			case 'kien-thuc':
			$title_main = "Kiến Thức";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			switch ($act) {
				case 'list':
					@define ( _width_thumb , 690 );
					@define ( _height_thumb , 500 );
					break;
				default:
					@define ( _width_thumb , 172 );
					@define ( _height_thumb , 128 );
					break;
			}
			
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			case 'lich-hoc':
			$title_main = "Lịch Học";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			switch ($act) {
				case 'list':
					@define ( _width_thumb , 690 );
					@define ( _height_thumb , 500 );
					break;
				default:
					@define ( _width_thumb , 172 );
					@define ( _height_thumb , 128 );
					break;
			}
			
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			case 'dao-tao':
			$title_main = "Đào Tạo";
			$config_images = "true";
			$config_img = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			switch ($act) {
				case 'list':
					@define ( _width_thumb , 690 );
					@define ( _height_thumb , 500 );
					break;
				default:
					@define ( _width_thumb , 172 );
					@define ( _height_thumb , 128 );
					break;
			}
			
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			case 'gioi-thieu':
			$title_main = "Giới Thiệu";
			$config_images = "true";
			$config_mota= "true";
			$config_noidung = "true";
			$config_ten= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			switch ($act) {
				case 'list':
					@define ( _width_thumb , 690 );
					@define ( _height_thumb , 500 );
					break;
				default:
					@define ( _width_thumb , 645 );
					@define ( _height_thumb , 440 );
					break;
			}
			
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
case 'thanh-toan-giao-nhan':
			$title_main = "Giới Thiệu";
			$config_images = "false";
			$config_mota= "false";
			$config_noidung = "true";
			$config_ten= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "false";
			switch ($act) {
				case 'list':
					@define ( _width_thumb , 690 );
					@define ( _height_thumb , 500 );
					break;
				default:
					@define ( _width_thumb , 400 );
					@define ( _height_thumb , 440 );
					break;
			}
			
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			case 'chung-nhan':
			$title_main = "Chứng Nhận";
			$config_images = "true";
			$config_mota= "true";
			$config_noidung = "true";
			$config_ten= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			switch ($act) {
				case 'list':
					@define ( _width_thumb , 690 );
					@define ( _height_thumb , 500 );
					break;
				default:
					@define ( _width_thumb , 400 );
					@define ( _height_thumb , 440 );
					break;
			}
			
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			case 'giaohang':
			$title_main = "Giới Thiệu";
			$config_images = "false";
			$config_mota= "true";
			$config_ten= "false";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "false";
			switch ($act) {
				case 'list':
					@define ( _width_thumb , 690 );
					@define ( _height_thumb , 500 );
					break;
				default:
					@define ( _width_thumb , 172 );
					@define ( _height_thumb , 128 );
					break;
			}
			
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			case 'hoantra':
			$title_main = "Giới Thiệu";
			$config_images = "false";
			$config_mota= "true";
			$config_ten= "false";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "false";
			switch ($act) {
				case 'list':
					@define ( _width_thumb , 690 );
					@define ( _height_thumb , 500 );
					break;
				default:
					@define ( _width_thumb , 172 );
					@define ( _height_thumb , 128 );
					break;
			}
			
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			case 'download':
			$title_main = "Download";
			$config_images = "false";
			$config_mota= "false";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			switch ($act) {
				case 'list':
					@define ( _width_thumb , 690 );
					@define ( _height_thumb , 500 );
					break;
				default:
					@define ( _width_thumb , 172 );
					@define ( _height_thumb , 128 );
					break;
			}
			
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			case 'cham-soc-khach-hang':
			$title_main = "Chăm Sóc Khách Hàng";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			switch ($act) {
				case 'list':
					@define ( _width_thumb , 690 );
					@define ( _height_thumb , 500 );
					break;
				default:
					@define ( _width_thumb , 172 );
					@define ( _height_thumb , 128 );
					break;
			}
			
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			case 'bo-suu-tap':
			$title_main = "Bộ Sưu Tập";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "false";
			switch ($act) {
				case 'list':
					@define ( _width_thumb , 690 );
					@define ( _height_thumb , 500 );
					break;
				default:
					@define ( _width_thumb , 172 );
					@define ( _height_thumb , 128 );
					break;
			}
			
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			case 'bang-kich-co':
			$title_main = "Bảng Kích Cỡ";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "false";
			switch ($act) {
				case 'list':
					@define ( _width_thumb , 690 );
					@define ( _height_thumb , 500 );
					break;
				default:
					@define ( _width_thumb , 172 );
					@define ( _height_thumb , 128 );
					break;
			}
			
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			case 'khuyen-mai':
			$title_main = "Khuyến Mãi";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			switch ($act) {
				case 'list':
					@define ( _width_thumb , 690 );
					@define ( _height_thumb , 500 );
					break;
				default:
					@define ( _width_thumb , 172 );
					@define ( _height_thumb , 128 );
					break;
			}
			
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			case 'bang-gia':
			$title_main = "Tin tức";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			switch ($act) {
				case 'list':
					@define ( _width_thumb , 690 );
					@define ( _height_thumb , 500 );
					break;
				default:
					@define ( _width_thumb , 172 );
					@define ( _height_thumb , 128 );
					break;
			}
			
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			case 'tu-van':
			$title_main = "Tư Vấn Xây Dựng";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			@define ( _width_thumb , 172 );
			@define ( _height_thumb , 128 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			case 'transport':
			$title_main = "Transport";
			$config_images = "false";
			$config_mota= "false";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "false";
			$config_noidung = "true";
			@define ( _width_thumb , 172 );
			@define ( _height_thumb , 128 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			case 'chinh-sach':
			$title_main = "Chính Sách";
			$config_images = "false";
			$config_mota= "false";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			$config_noidung = "true";
			@define ( _width_thumb , 172 );
			@define ( _height_thumb , 128 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			case 'chi-nhanh':
			$title_main = "Chi Nhánh";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			$config_noidung = "true";
			@define ( _width_thumb , 172 );
			@define ( _height_thumb , 128 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			case 'thuong-mai':
			$title_main = "Thương Mại";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			@define ( _width_thumb , 172 );
			@define ( _height_thumb , 128 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			case 'quy-trinh':
			$title_main = "Quy Trình GIao Nhận";
			$config_images = "false";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			@define ( _width_thumb , 172 );
			@define ( _height_thumb , 128 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'du-an':
			$title_main = "Dự Án";
			$config_img= "true";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "true";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			@define ( _width_thumb , 340 );
			@define ( _height_thumb , 270 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
			
			case 'vi-sao-chon':
			$title_main = "Vì Sao Chọn";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			$config_noidung = "true";
			@define ( _width_thumb , 173 );
			@define ( _height_thumb , 173 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;		
		case 'album':
			$title_main = "Album hình";
			$config_images = "true";
			$config_img = "false";
			$config_mota= "false";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			$config_link = "true";
			@define ( _width_thumb , 800 );
			@define ( _height_thumb , 600 );
			@define ( _style_thumb , 2 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'doingugiaovien':
			$title_main = "Đội ngũ giáo viên";
			$config_images = "true";
			$config_mota= "false";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "false";
			@define ( _width_thumb , 190 );
			@define ( _height_thumb , 190 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'tieuchi':
			$title_main = "Tiêu chí hoạt động";
			$config_images = "true";
			$config_img= "false";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "false";
			@define ( _width_thumb , 40 );
			@define ( _height_thumb , 34 );
			@define ( _style_thumb , 2 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'khuyen-mai':
			$title_main = "Khuyến mãi";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "false";
			@define ( _width_thumb , 172 );
			@define ( _height_thumb , 128 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		
		
		case 'chinhsach':
			$title_main = "Chính sách hỗ trợ";
			$config_images = "false";
			$config_mota= "false";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "false";
			@define ( _width_thumb , 250 );
			@define ( _height_thumb , 170 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'dieukhoan':
			$title_main = "Điều khoản và cam kết";
			$config_images = "false";
			$config_mota= "false";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "false";
			@define ( _width_thumb , 250 );
			@define ( _height_thumb , 170 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'video':
			$title_main = "Video";
			$config_images = "true";
			$config_mota= "false";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_noidung= "false";
			$config_sub = "false";
			$config_noibat = "false";
			@define ( _width_thumb , 250 );
			@define ( _height_thumb , 170 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'khach-hang':
			$title_main = "Khách Hàng";
			$config_images = "true";
			$config_mota= "true";
			$config_noidung= "false";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			@define ( _width_thumb , 144 );
			@define ( _height_thumb , 144 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
				
		case 'download':
			$title_main = "Giá dự toán";
			$config_images = "false";
			@define ( _width_thumb , 200 );
			@define ( _height_thumb , 250 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		

		case 'album_list':
			$title_main = "danh mục album";
			$config_images = "true";
			$config_list = "false";
			@define ( _width_thumb , 200 );
			@define ( _height_thumb , 160 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		//-------------info------------------
	
		
		case 'tags':
			$title_main = 'tags';
			$config_ten = 'true';
			break;
			
		case 'trangchu':
			$title_main = 'Trang chủ';
			$config_images = 'true';
			$config_ten = 'true';
			@define ( _width_thumb , 590 );
			@define ( _height_thumb , 260 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;

		case 'chamsoc':
			$title_main = 'chăm sóc khách hàng';
			$config_ten = 'true';
			break;
		case 'lienhe':
			$title_main = 'Liên hệ';
			$config_ten = 'true';
			break;
		case 'sanpham':
			$title_main = 'Sự kiện';
			$config_ten = 'true';
			$config_mota = 'true';
			break;	
		case 'giolamviec':
			$title_main = 'Giờ làm việc';
			$config_ten = 'false';
			break;
		case 'bgintro':
			$title_main = 'Background intro';
			@define ( _width_thumb , 1366 );
			@define ( _height_thumb , 657 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF|swf' );
			$ratio_ = 1;
			break;
		case 'bct':
			$title_main = 'Logo bộ công thương';
			@define ( _width_thumb , 121 );
			@define ( _height_thumb , 45 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF|swf' );
			$ratio_ = 1;
			$links_ = "true";
			break;
		case 'banner':
			$title_main = 'Banner';
			@define ( _width_thumb , 330 );
			@define ( _height_thumb , 112 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF|swf' );
			$ratio_ = 1;
			break;
	
		case 'bannerintro':
			$title_main = 'Banner intro';
			@define ( _width_thumb , 1366 );
			@define ( _height_thumb , 160 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF|swf' );
			$ratio_ = 1;
			break;
			case 'qc_top':
			$title_main = 'Quảng Cáo Top';
			@define ( _width_thumb , 1366 );
			@define ( _height_thumb , 80 );
			@define ( _style_thumb , 2 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'logo':
		$title_main = 'Logo';
		@define ( _width_thumb , 180 );
		@define ( _height_thumb , 148 );
		@define ( _style_thumb , 2 );
		@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
		$ratio_ = 1;
			break;
				case 'img_product_detail':
		$title_main = 'Logo';
		@define ( _width_thumb , 554 );
		@define ( _height_thumb , 340 );
		@define ( _style_thumb , 2 );
		@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
		$ratio_ = 1;
			break;
			case 'img_gioithieu_1':
		$title_main = 'Logo';
		@define ( _width_thumb , 400 );
		@define ( _height_thumb , 420 );
		@define ( _style_thumb , 2 );
		@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
		$ratio_ = 1;
			break;
			case 'img_gioithieu_2':
		$title_main = 'Logo';
		@define ( _width_thumb , 400 );
		@define ( _height_thumb , 420 );
		@define ( _style_thumb , 2 );
		@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
		$ratio_ = 1;
			break;
			case 'logo_footer':
			$title_main = 'Logo';
			@define ( _width_thumb , 200);
			@define ( _height_thumb , 60 );
			@define ( _style_thumb , 2 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'bgphuongcham':
			$title_main = 'Background phương châm';
			@define ( _width_thumb , 1366 );
			@define ( _height_thumb , 130 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF|swf' );
			$ratio_ = 1;
			break;
		case 'bgdoitac':
			$title_main = 'Background đối tác';
			@define ( _width_thumb , 1366 );
			@define ( _height_thumb , 180 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF|swf' );
			$ratio_ = 1;
			break;
		case 'popup':
			$title_main = 'Popup';
			$links_ = 'true';
			$config_hienthi = 'true';
			@define ( _width_thumb , 900 );
			@define ( _height_thumb , 500 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;

		case 'bando':
			$title_main = 'Bản đồ';
			@define ( _width_thumb , 320 );
			@define ( _height_thumb , 180 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;

		case 'favicon':
			$title_main = 'Favicon';
			@define ( _width_thumb , 40 );
			@define ( _height_thumb , 40 );
			@define ( _style_thumb , 2 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;

		case 'bgweb':
			$title_main = 'background body';
			@define ( _width_thumb , 1366 );
			@define ( _height_thumb , 768 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		//-------------photo------------------
		case 'slider':
			$title_main = "Hình ảnh slider";
			$config_list = "false";
			$config_mota = "false";
			@define ( _width_thumb , 940 );
			@define ( _height_thumb , 368);
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			break;
		case 'hinhanh':
			$title_main = "Hình ảnh hinhanh";
			$config_list = "false";
			$config_mota = "false";
			@define ( _width_thumb , 410 );
			@define ( _height_thumb , 310);
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			break;	
			case 'slider_gioithieu':
			$title_main = "Hình ảnh slider";
			$config_list = "false";
			$config_mota = "true";
			@define ( _width_thumb , 1200 );
			@define ( _height_thumb , 400 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			break;
		case 'doi-tac':
			$title_main = "Đối Tác";
			$config_images = "true";
			$config_list = "false";
			$config_mota = "false";
			$config_noidung = "false";
			$config_noibat = "true";
			@define ( _width_thumb , 180 );
			@define ( _height_thumb , 100 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$config_link = "true";
			break;
			case 'qc_slider':
			$title_main = "Hình ảnh slider";
			$config_list = "false";
			$config_mota = "false";
			@define ( _width_thumb , 270 );
			@define ( _height_thumb , 190 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			break;
			case 'qc_left':
			$title_main = "Hình ảnh slider";
			$config_list = "false";
			$config_mota = "false";
			@define ( _width_thumb , 280 );
			@define ( _height_thumb , 380 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			break;
		
		case 'quangcao':
		    $title_main = "Quảng cáo";
			@define ( _width_thumb , 250 );
			@define ( _height_thumb , 480 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			break;
			
		case 'bggioithieu':
		    $title_main = "Background giới thiệu";
			@define ( _width_thumb , 1366 );
			@define ( _height_thumb , 644 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "false";
			break;
		case 'bgfooter':
		    $title_main = "Background footer";
			@define ( _width_thumb , 1366 );
			@define ( _height_thumb , 334 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "false";
			break;
		case 'imgtkb':
		    $title_main = "Hình thời khóa biểu";
			@define ( _width_thumb , 774 );
			@define ( _height_thumb , 323 );
			@define ( _style_thumb , 2 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "false";
			break;
		case 'imgthucdon':
		    $title_main = "Thẻ thành viên";
			@define ( _width_thumb , 352 );
			@define ( _height_thumb , 323 );
			@define ( _style_thumb , 2 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "false";
			break;

		case 'adsmenu':
		    $title_main = "Hình ảnh trang chủ";
		    // $config_list = "true";
			@define ( _width_thumb , 1366 );
			@define ( _height_thumb , 320 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			break;
		case 'lkweb':
		    $title_main = "Link liên kết";
			@define ( _width_thumb , 590 );
			@define ( _height_thumb , 337 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			$config_mota = "true";
			break;
		case 'mxh_top':
		    $title_main = "Mạng xã hội";
			@define ( _width_thumb , 40 );
			@define ( _height_thumb , 40 );
			@define ( _style_thumb , 2 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			break;
		case 'mxh_bottom':
		    $title_main = "Mạng xã hội 2";
			@define ( _width_thumb , 32 );
			@define ( _height_thumb , 33 );
			@define ( _style_thumb , 2 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			break;
		case 'mp3':
		    $title_main = "Nhạc";
			@define ( _width_thumb , 40 );
			@define ( _height_thumb , 40 );
			@define ( _style_thumb , 2 );
			@define ( _img_type , 'mp3|MP3' );
			$ratio_ = 1;
			$links_ = "true";
			break;	
		case 'chinhanh':
		
		    $title_main = "Chi nhánh";
			@define ( _width_thumb , 40 );
			@define ( _height_thumb , 40 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			break;
		//--------------defaut---------------
		default: 
			$source = "";
			$template = "index";
			break;
	}

?>