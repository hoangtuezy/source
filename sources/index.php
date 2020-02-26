<?php  if(!defined('_source')) die("Error");
	$per_page = 9; // Set how many records do you want to display per page.
	$startpoint = ($page * $per_page) - $per_page;
	$limit = ' limit '.$startpoint.','.$per_page;
	$url = 'all';

	$index_news = result_array("select * from #_baiviet where type='tin-tuc' and hienthi=1 and noibat=1 order by stt asc,id desc limit 15 ");
?>