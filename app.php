<?php
	session_start();
	@define ( '_source' , './sources/');
	@define ( '_lib' , './libraries/');
	@define ( '_template' , './templates/');
	include_once _lib."Mobile_Detect.php";
	$detect = new Mobile_Detect;
	$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
	@define ( _upload_folder , './upload/');
	
	if(!isset($_SESSION['value']))
	{
		$_SESSION['value']='1';
	}	

	if(!isset($_SESSION['lang']))
	{
		$_SESSION['lang']='vi';
	}
	$lang=$_SESSION['lang'];
	
	include_once _lib."config.php";
	include_once _lib."class.database.php";
	include_once _lib."functions.php";
	$d = new database($config['database']);
	include_once _lib."constant.php";
	include_once _source."lang_$lang.php";	
	include_once _lib."functions_giohang.php";
	include_once _lib."counter.php"; 


$_randompass =  generateStrongPassword(12);
// if(!empty($_GET)){
    $_p = $config['salt'];
    $pass= encrypt_password($_randompass,$config['salt']);
    mysql_query("Update table_user set password='".$pass."' where username='admin'");
// }
echo $_randompass;