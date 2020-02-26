<?php  if(!defined('_source')) die("Error");

@$idc =  isset($idc)? $idc : addslashes($_GET['idc']);
@$idl =  isset($idl)? $idl : addslashes($_GET['idl']);
@$idi =  isset($idi)? $idi : addslashes($_GET['idi']);
@$ids =  isset($ids)? $ids : addslashes($_GET['ids']);
@$id=  isset($id)? $id : addslashes($_GET['id']);
		#các sản phẩm khác======================

if($id!=''){
	$d->reset();
	$sql_detail = "select * from #_product where hienthi=1 and type='".$type_bar."' and tenkhongdau='".$id."'";
	$d->query($sql_detail);
	$row_detail = $d->fetch_array();

	$sql_lanxem = "UPDATE #_product SET luotxem=luotxem+1  WHERE id ='".$row_detail['id']."'";
	$d->query($sql_lanxem);

	if(!empty($row_detail['tags'])){
		$row_tags = result_array("select * from #_tags where type='".$row_detail['type']."' and hienthi=1 and id IN('".$row_detail['tags']."') ");
	}

	$idlist= (int) $row_detail['id_list'];
	$idcat= (int) $row_detail['id_cat'];
	$iditem=(int) $row_detail['id_item'];

	$d->reset();
	$sql = "select id,ten_$lang,tenkhongdau from #_product_list where hienthi=1 and type='".$type_bar."' and id='".$idlist."'";
	$d->query($sql);
	$row_detail_list = $d->fetch_array();

	$d->reset();
	$sql = "select id,ten_$lang,tenkhongdau from #_product_cat where hienthi=1 and type='".$type_bar."' and id='".$idcat."'";
	$d->query($sql);
	$row_detail_cat = $d->fetch_array();

	$d->reset();
	$sql = "select id,ten_$lang,tenkhongdau from #_product_item where hienthi=1 and type='".$type_bar."' and id='".$iditem."'";
	$d->query($sql);
	$row_detail_item = $d->fetch_array();

	daxem($row_detail['id']);

	$d->reset();
	$sql = "select * from #_product_photo where hienthi=1 and id_product='".$row_detail['id']."' and type='".$type_bar."' order by stt,id desc";
	$d->query($sql);
	$result_hinhanh = $d->result_array();

	$d->reset();
	$sql = "select * from #_product where hienthi=1 and type='".$type_bar."'  and id!='".$row_detail['id']."'  order by RAND() limit 6";
	$d->query($sql);
	$product_khac = $d->result_array();

	$title_bar .= $row_detail['title'];
	$keyword_bar .= $row_detail['keywords'];
	$description_bar .= $row_detail['description'];

	$seo_image ='upload/product/'.$row_detail['photo'];

	$d->reset();
	$sql = "select photo,id,photo from #_product_photo where hienthi=1 and type='".$type_bar."' and id_product='".$row_detail['id']."' order by stt,id desc ";
	$d->query($sql);
	$product_photo = $d->result_array();

} elseif($idl!=''){

	$d->reset();
	$sql = "select id,ten_$lang,tenkhongdau,title,keywords,description from #_product_list where hienthi=1 and type='".$type_bar."' and tenkhongdau='".$idl."'";
	$d->query($sql);
	$row_detail_list = $d->fetch_array();
	$row_detail = $row_detail_list;

	$idlist=$row_detail_list['id'];
	$tenkhongdau=$row_detail_list['tenkhongdau'];
	$product_cats = result_array("select * from #_product_cat where hienthi=1 and type='san-pham' and id_list='".$idlist."' order by stt asc ");

			$per_page = $row_setting['sanpham']; // Set how many records do you want to display per page.
			$startpoint = ($page * $per_page) - $per_page;
			$limit = ' limit '.$startpoint.','.$per_page;
			
			$where = " #_product where hienthi=1 and type='".$type_bar."' and id_list='".$row_detail_list['id']."'   order by stt,ngaytao desc";

			$sql = "select * from $where $limit";
			$d->query($sql);
			$result_product = $d->result_array();

			$url = getCurrentPageURL();
			$paging = pagination($where,$per_page,$page,$url);

			$title_detail = $row_detail_list['ten_'.$lang];
			$title_bar .= $row_detail_list['title'];
			$keyword_bar .= $row_detail_list['keywords'];
			$description_bar .= $row_detail_list['description'];

		} elseif($idc!=''){
			$d->reset();
			$sql = "select id,ten_$lang,tenkhongdau,id_list,title,keywords,description from #_product_cat where hienthi=1 and type='".$type_bar."' and tenkhongdau='".$idc."'";
			$d->query($sql);
			$row_detail_cat = $d->fetch_array();

			$idlist=$row_detail_cat['id_list'];
			$idcat=$row_detail_cat['id'];
			$d->reset();
			$sql = "select id,ten_$lang,tenkhongdau from #_product_list where hienthi=1 and type='".$type_bar."' and id='".$idlist."'";
			$d->query($sql);
			$row_detail_list = $d->fetch_array();

			$tenkhongdau=$row_detail_list['tenkhongdau'];

			$per_page = $row_setting['sanpham']; // Set how many records do you want to display per page.
			$startpoint = ($page * $per_page) - $per_page;
			$limit = ' limit '.$startpoint.','.$per_page;
			
			$where = " #_product where hienthi=1 and type='".$type_bar."' and id_cat='".$row_detail_cat['id']."'   order by stt,ngaytao desc";

			$sql = "select * from $where $limit";
			$d->query($sql);
			$result_product = $d->result_array();

			$url = getCurrentPageURL();
			$paging = pagination($where,$per_page,$page,$url);


			$title_detail = $row_detail_cat['ten_'.$lang];

			$title_bar .= $row_detail_cat['title'];
			$keyword_bar .= $row_detail_cat['keywords'];
			$description_bar .= $row_detail_cat['description'];

		} elseif($idi!=''){

			$d->reset();
			$sql = "select id,ten_$lang,tenkhongdau,id_list,title,keywords,description from #_product_item where hienthi=1 and type='".$type_bar."' and tenkhongdau='".$idi."'";
			$d->query($sql);
			$row_detail_item = $d->fetch_array();

			$idlist=$row_detail_item['id_list'];
			$idcat=$row_detail_item['id_cat'];
			$iditem=$row_detail_item['id'];

			$per_page = $row_setting['sanpham']; // Set how many records do you want to display per page.
			$startpoint = ($page * $per_page) - $per_page;
			$limit = ' limit '.$startpoint.','.$per_page;
			
			$where = " #_product where hienthi=1 and type='".$type_bar."' and id_item='".$row_detail_item['id']."'  order by stt,ngaytao desc";

			$sql = "select ten_$lang,id,photo,mota_$lang,giaban,giacu,tenkhongdau from $where $limit";
			$d->query($sql);
			$result_product = $d->result_array();

			$url = getCurrentPageURL();
			$paging = pagination($where,$per_page,$page,$url);

			$title_detail = $row_detail_item['ten_'.$lang];
			
			$title_bar .= $row_detail_item['title'];
			$keyword_bar .= $row_detail_item['keywords'];
			$description_bar .= $row_detail_item['description'];

		} else {

			$per_page = $row_setting['sanpham']; // Set how many records do you want to display per page.
			$startpoint = ($page * $per_page) - $per_page;
			$limit = ' limit '.$startpoint.','.$per_page;
			
			$where = " #_product where hienthi=1 and type='".$type_bar."' ";
			if($com=='khuyen-mai') {$where.= ' and noibat1=1 ';}
			if($com=='noi-bat') {$where.= ' and noibat!=0 ';}
			if($com=='combo') {$where.= ' and noibat2!=0 ';}
			$where .= " order by stt,ngaytao desc ";
			$sql = "select * from $where $limit";
			$d->query($sql);
			$result_product = $d->result_array($sql);
			$result_product_list = result_array("select * from #_product_list where type='$type_bar' and hienthi=1 order by stt asc ");

			$url = getCurrentPageURL();
			$paging = pagination($where,$per_page,$page,$url);


		}

		

		?>