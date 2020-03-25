<?php  if(!defined('_source')) die("Error");


		$title_detail = "Kết Quả Tìm Kiếm";
		$id_list=trim($_GET['danhmuc']);
		$id_dotuoi=trim($_GET['id_dotuoi']);
		$id_gioitinh=trim($_GET['id_gioitinh']);
		if(!isset($_GET['keyword'])){
			
		}else{

			$key=trim($_GET['keyword']);
		}

		$per_page = $row_setting['sanpham']; // Set how many records do you want to display per page.
		$startpoint = ($page * $per_page) - $per_page;
		$limit = ' limit '.$startpoint.','.$per_page;
		$where = " #_product where hienthi=1 and type='san-pham' ";
		$sql = "select * from $where ";
		
		if(isset($_GET['keyword']) && $_GET['keyword'] !=''){
			$tukhoa = trim(strip_tags($_GET['keyword']));    	
			if (get_magic_quotes_gpc()==false) {
				$tukhoa = mysql_real_escape_string($tukhoa);    			
			}

			$sql .= " and ten_$lang like '%$tukhoa%'";
		}else{
			$_search = getCurrentPageURL();
			$_search = explode('keyword=', $_search);
			$key = $_search[count($_search) - 1];
			$sql .= " and ten_$lang like '%$key%'";
		}
		
		if(isset($_GET['id_list']) && $_GET['id_list'] !=''){

			$sql .= " and id_list=".$id_list;
		}
		if(isset($_GET['id_dotuoi']) && $_GET['id_dotuoi'] !=''){

			$sql .= " and id_dotuoi=".$id_dotuoi;
		}
		if(isset($_GET['id_gioitinh']) && $_GET['id_gioitinh'] !=''){

			$sql .= " and id_gioitinh=".$id_gioitinh;
		}

		$sql .=" order by stt,id desc $limit ";
		$d->query($sql);
		$result_product = $d->result_array();	
		$url = getCurrentPageURL();
		$paging = pagination($where,$per_page,$page,$url);
		?>