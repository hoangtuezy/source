<?php
	session_start();
	@define ( '_source' , './sources/');
	@define ( '_lib' , './libraries/');
	if(!isset($_SESSION['lang']))
	{
		$_SESSION['lang']='vi';
	}
	$lang=$_SESSION['lang'];
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."functions_share.php";
	include_once _lib."class.database.php";
	include_once _source."lang_$lang.php";
	include_once _lib."functions_giohang.php";
	include_once _lib."file_requick.php";
	include_once _lib."counter.php";


	$d->reset();
    $sql = "select ten_$lang,thumb,photo as ten,id,links from #_video where hienthi=1 and type='video' and id='".(int)$_GET['id']."' order by stt,id desc";
    $d->query($sql);
    $video = $d->fetch_array();

	echo '
		<iframe width="100%" height="300"
					src="http://www.youtube.com/embed/'.youtobi($video['links']).'">
		</iframe>
	';

?>
