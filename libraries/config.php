<?php
	if(!defined('_lib')) die("Error");
 	error_reporting(3);
 	define ( 'NN_MSHD' , '185220'); //Mã số HĐ
	define ( 'NN_AUTHOR' , 'vohoangtu.nina@gmail.com'); //Email của lập trình

	$Protocol='http://';	
	$login_name = '33455b15cd5108e1d0b1772a8c128bb2';
	$theme_color = '#000';
	$config['salt']='N0zGTN2ll';
	$config_path = '';
	$config_url=$_SERVER["SERVER_NAME"].$config_path;
	
	$config['debug']=1;

	$config_lang=array(
		"vi" => "Tiếng Việt",
		// "en" => "Tiếng Anh",
		// "cn" => "Tiếng Trung",
		// "kr" => "Tiếng Hàn",
	);
	$config_locale = array(
		'vi' => 'vi_VN',
		'en' => 'en_US'
	);
	$config_email="admin@thoitrangphuonganh2.com";
	$config_pass="";
	$config_ip="210.211.108.146";

	$config['gv3_server'] ='6Le4-MYUAAAAAHQ35yXctJ8Nprb3rMK_MPLdKqA2';
	$config['gv3_client'] ='6Le4-MYUAAAAADrHL8p3LryoRcIaHEbhzatCNPa9';

	$config['database']['servername'] = 'localhost';
	$config['database']['username'] = 'root';
	$config['database']['password'] = '';
	$config['database']['database'] = 'source';
	$config['database']['refix'] = 'table_';

	$config_responsive =true;
	
	$config_short_link =true;

	$config_cart = array(
		// 'color'=> false,
		// 'size'=> false,
		// 'ship'=>false
	);
	$config['_check_crsf'] = true;
	$config['login']['attempt'] = 5; // Số lần cho phép đăng nhập sai
	$config['login']['delay'] = 15; // Thời gian chờ khi cho phép đăng nhập lại