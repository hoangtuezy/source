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
	include_once _lib."class.database.php";
	include_once _source."lang_$lang.php";
	include_once _lib."functions_giohang.php";
	include_once _lib."file_requick.php";
	include_once _lib."counter.php";

		$get_video = explode('-', $_GET['id']);
	$d->reset();
    $sql = "select ten_$lang,thumb,photo as ten,id,links from #_video where hienthi=1 and type='video' and id='".(int)$get_video[0]."' order by stt,id desc";
    $d->query($sql);
    $video = $d->fetch_array();

	echo '
		<iframe width="100%" height="'.(int)$get_video[1].'"
					src="http://www.youtube.com/embed/'.youtobi($video['links']).'">
		</iframe>
	';

?>
