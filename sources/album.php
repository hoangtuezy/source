<?php  if(!defined('_source')) die("Error");

	
	$id =  addslashes($_GET['id']);
	if ($id!='') {
		$sql = "select * from #_baiviet where hienthi=1 and type='".$type_bar."' and tenkhongdau='".$id."'";
	$d->query($sql);
	$row_detail = $d->fetch_array();

	$title_detail = $row_detail['ten_'.$lang];

	$title_bar .= $row_detail['title'];
	$keyword_bar .= $row_detail['keywords'];
	$description_bar .= $row_detail['description'];

	$share_facebook = '<meta property="og:url" content="'.getCurrentPageURL().'" />';
	$share_facebook .= '<meta property="og:type" content="website" />';
	$share_facebook .= '<meta property="og:title" content="'.$row_detail['ten_'.$lang].'" />';
	$share_facebook .= '<meta property="og:description" content="'.$row_detail['mota_'.$lang].'" />';
	$share_facebook .= '<meta property="og:image" content="http://'.$config_url.'/'._upload_baiviet_l.$row_detail['photo'].'" />';

	$sql_khac = "select ten_$lang,ngaytao,id,tenkhongdau,photo from #_baiviet where hienthi=1 and id !='".$row_detail['id']."' and type='".$type_bar."' order by stt,ngaytao desc limit 0,10";
	$d->query($sql_khac);
	$tintuc = $d->result_array();

	#các tin cu hon
	$sql_khac = "select * from #_baiviet_photo where hienthi=1 and id_baiviet='".$row_detail['id']."' order by id desc";
	$d->query($sql_khac);
	$photos = $d->result_array();


	} else {
		$sql_tintuc = "select * from #_baiviet where hienthi=1 and type='".$type_bar."' order by stt,id desc";
		$d->query($sql_tintuc);
		$album = $d->result_array();
		
		
		$title_bar .= $row_meta['title'];
		$keyword_bar .= $row_meta['keywords'];
		$description_bar .= $row_meta['description'];
	}
?>