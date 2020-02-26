<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
define ( '_source' , './sources/');
define ( '_lib' , './libraries/');
include_once _lib."config.php";
include_once _lib."Mobile_Detect.php";
include_once _lib."class.database.php";

$d = new database($config['database']);
	define ( '_template' , './templates/');

include_once _lib."functions.php";
include_once _lib."AntiSQLInjection.php";
include_once _lib."constant.php";
include_once _lib."functions_giohang.php";

if(!isset($_SESSION['value']))
{
	$_SESSION['value']='1';
}
if(empty($_SESSION['lang']))
{
	$_SESSION['lang']='vi';
}

if(!empty($_GET['lang'])){
	$_SESSION['lang']=$_GET['lang'];
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}
$lang=$_SESSION['lang'];
if($_POST['command']=='add' && $_POST['productid']>0){
	$pid=$_POST['productid'];
	$size=$_POST['idsize'];
	$mau=$_POST['idmau'];
	$q=(int)$_POST['quality'] ? $_POST['quality'] : "1";
	addtocart($pid,$q,$mau,$size);
	redirect("gio-hang");}
	include_once _source."lang_$lang.php";
	include_once _lib."file_requick.php";
	include_once _lib."counter.php";
	include_once _source."template.php";
	$_SESSION['links']=getCurrentPageURL();
		include 'desktop.php';

	?>