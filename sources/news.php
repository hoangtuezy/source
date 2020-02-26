<?php  if(!defined('_source')) die("Error");

		@$idc =  isset($idc)? $idc : addslashes($_GET['idc']);
		@$idl =  isset($idl)? $idl : addslashes($_GET['idl']);
		@$idi =  isset($idi)? $idi : addslashes($_GET['idi']);
		@$ids =  isset($ids)? $ids : addslashes($_GET['ids']);
		@$id=  isset($id)? $id : addslashes($_GET['id']);
		
		if($id!=''){
			$sql = "select * from #_baiviet where hienthi=1 and tenkhongdau='".$id."'";
			$d->query($sql);
			$row_detail = $d->fetch_array();

			$sql_lanxem = "UPDATE #_baiviet SET luotxem=luotxem+1  WHERE id ='".$row_detail['id']."' and type='".$type_bar."'";
			$d->query($sql_lanxem);

			$share_facebook = '<meta property="og:url" content="'.getCurrentPageURL().'" />';
			$share_facebook .= '<meta property="og:type" content="website" />';
			$share_facebook .= '<meta property="og:title" content="'.$row_detail['ten_'.$lang].'" />';
			$share_facebook .= '<meta property="og:description" content="'.strip_tags($row_detail['mota_'.$lang]).'" />';
			$share_facebook .= '<meta property="og:image" content="http://'.$config_url.'/'._upload_baiviet_l.$row_detail['photo'].'" />';

			$title_bar .= $row_detail['title'];
			$keyword_bar .= $row_detail['keywords'];
			$description_bar .= $row_detail['description'];
			
			#các tin cu hon
			$sql_khac = "select * from #_baiviet where hienthi=1 and id !='".$row_detail['id']."' and type='".$type_bar."' order by stt,ngaytao desc limit 0,10";
			$d->query($sql_khac);
			$tintuc = $d->result_array();
			$sql = "select ten_$lang,ngaytao,id,tenkhongdau from #_baiviet where hienthi=1 and id!='".$row_detail['id']."' and type='".$type_bar."' order by stt,ngaytao desc limit 0,6";
			$d->query($sql);
			$tinmoi = $d->result_array();

			$d->reset();
			$sql = "select * from #_baiviet_photo where hienthi=1 and id_baiviet='".$row_detail['id']."' and type='".$type_bar."' order by stt,id desc";
			$d->query($sql);
			$result_hinhanh = $d->result_array();

		} elseif($idl!=''){

			$row_detail = fetch_array("select id,ten_$lang,tenkhongdau,title,keywords,description from #_baiviet_list where hienthi=1 and type='".$type_bar."' and tenkhongdau='".$idl."'");
			$per_page = 12; // Set how many records do you want to display per page.
			$startpoint = ($page * $per_page) - $per_page;
			$limit = ' limit '.$startpoint.','.$per_page;
			
			$where = " #_baiviet where hienthi=1 and type='".$type_bar."' and id_list='".$row_detail['id']."'  order by stt,ngaytao desc";
			$sql = "select ten_$lang,id,mota_$lang,tenkhongdau,photo,ngaytao,id_list,type from $where $limit";
			$tintuc = result_array($sql);

			$url = getCurrentPageURL();
			$paging = pagination($where,$per_page,$page,$url);

			$title_detail = $row_detail['ten_'.$lang];
			$title_bar .= $row_detail['title'];
			$keyword_bar .= $row_detail['keywords'];
			$description_bar .= $row_detail['description'];

		} else {
			// cac tin tuc
			$per_page = 12; // Set how many records do you want to display per page.
			$startpoint = ($page * $per_page) - $per_page;
			$limit = ' limit '.$startpoint.','.$per_page; 
			$where = " #_baiviet where hienthi=1 and type='".$type_bar."' order by id desc";
			
			$sql = "select ten_$lang,tenkhongdau,id,ngaytao,mota_$lang,id_list,photo,noidung_$lang,type from $where $limit";
			$d->query($sql);
			$tintuc = $d->result_array();

			$url = getCurrentPageURL();
			$paging = pagination($where,$per_page,$page,$url);
		}
	
?>