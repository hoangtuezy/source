<?php	if(!defined('_source')) die("Error");
	switch($act){
		case "man":
		get_mans();
		$template = "seopage/man/items";
		break;
		case "add":		
		$template = "seopage/man/item_add";
		break;
		case "edit":		
		get_man();
		$template = "seopage/man/item_add";
		break;
		case "capnhat":		
		get_man();
		$template = "seopage/man/item_add";
		break;
		case "save":
		save_man();
		break;
		
		case "delete":
		delete_man();
		break;	
		#============================================================
		default:
		$template = "index";
	}
	
	#====================================
	
	function get_mans(){
		global $d, $items, $paging,$page;
	
		#----------------------------------------------------------------------------------------
		if($_REQUEST['hienthi']!='')
		{
			$id_up = $_REQUEST['hienthi'];
			$sql_sp = "SELECT id,hienthi FROM table_seopage where id='".$id_up."' ";
			$d->query($sql_sp);
			$cats= $d->result_array();
			$hienthi=$cats[0]['hienthi'];
			if($hienthi==0)
			{
				$sqlUPDATE_ORDER = "UPDATE table_seopage SET hienthi =1 WHERE  id = ".$id_up."";
				$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
			}
			else
			{
				$sqlUPDATE_ORDER = "UPDATE table_seopage SET hienthi =0  WHERE  id = ".$id_up."";
				$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
			}	
		}
		#-------------------------------------------------------------------------------
		
		
		$per_page = 10; // Set how many records do you want to display per page.
		$startpoint = ($page * $per_page) - $per_page;
		$limit = ' limit '.$startpoint.','.$per_page;
		
		$where = " #_seopage ";
		$where .= " where type='".$_GET['type']."' ";
		
	
		if($_REQUEST['keyword']!='')
		{
			$keyword=addslashes($_REQUEST['keyword']);
			$where.=" and ten LIKE '%$keyword%'";
			$link_add .= "&keyword=".$_GET['keyword'];
		}
		$where .=" order by id desc";
		
		$sql = "select ten,id,stt,hienthi,photo from $where $limit";
		$d->query($sql);
		$items = $d->result_array();
		$url = "index.php?com=seopage&act=man&type=".$_GET['type']."".$link_add."&type=".$_GET['type'];
		$paging = pagination($where,$per_page,$page,$url);		
		
	}
	
	function get_man(){
		global $d, $item;
		$type = $_GET['type'];
		
		$sql = "select * from #_seopage where type='".$type."'";
		$d->query($sql);
		$item = $d->fetch_array();	
		
	}
	
	function save_man(){
		global $d;
		$file_name=images_name($_FILES['file']['name']);
		$file_download=images_name($_FILES['file_download']['name']);
		if(empty($_POST)) transfer("Không nhận được dữ liệu", $_SESSION['links_re']);
		$id = isset($_POST['id']) ? themdau($_POST['id']) : "";
		
		if($id){
			
			$id =  themdau($_POST['id']);
			if($photo = upload_image("file", 'jpg|png|gif|JPG|jpeg|JPEG', _upload_hinhanh,$file_name)){
				$data['photo'] = $photo;	
				$data['thumb'] = create_thumb($data['photo'], _width_thumb, _height_thumb, _upload_hinhanh,$file_name,_style_thumb);		
				$d->setTable('seopage');
				$d->setWhere('id', $id);
				$d->select();
				if($d->num_rows()>0){
					$row = $d->fetch_array();
					delete_file(_upload_hinhanh.$row['photo']);	
					delete_file(_upload_hinhanh.$row['thumb']);				
				}
			}
			
			$data['ten'] = $_POST['ten'];
		
			$data['title'] = $_POST['title'];
			$data['keywords'] = $_POST['keywords'];
			$data['description'] = $_POST['description'];
			
			$data['h1'] = $_POST['h1'];
			$data['h2'] = $_POST['h2'];
			$data['h3'] = $_POST['h3'];
			$data['h4'] = $_POST['h4'];
			$data['h5'] = $_POST['h5'];
			$data['h6'] = $_POST['h6'];

			$data['type'] = $_GET['type'];
			
			$data['stt'] = $_POST['stt'];
			
			$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
			
			$data['ngaysua'] = time();
			$d->setTable('seopage');
			$d->setWhere('id', $id);
			if($d->update($data)){
				redirect($_SESSION['links_re']);
			}
			else
			transfer("Cập nhật dữ liệu bị lỗi", $_SESSION['links_re']);
			}else{
			if($photo = upload_image("file", 'jpg|png|gif|JPG|jpeg|JPEG', _upload_hinhanh,$file_name)){
				$data['photo'] = $photo;		
				$data['thumb'] = create_thumb($data['photo'], _width_thumb, _height_thumb, _upload_hinhanh,$file_name,_style_thumb);
			}		
			
			$data['ten'] = $_POST['ten'];
		
			$data['title'] = $_POST['title'];
			$data['keywords'] = $_POST['keywords'];
			$data['description'] = $_POST['description'];
			
			$data['h1'] = $_POST['h1'];
			$data['h2'] = $_POST['h2'];
			$data['h3'] = $_POST['h3'];
			$data['h4'] = $_POST['h4'];
			$data['h5'] = $_POST['h5'];
			$data['h6'] = $_POST['h6'];
			$data['type'] = $_GET['type'];
			$data['stt'] = $_POST['stt'];
			
			$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
			$data['ngaytao'] = time();
			$d->setTable('seopage');
			if($d->insert($data))
			{			
				$id = mysql_insert_id();
				redirect($_SESSION['links_re']);
			}
			else
			transfer("Lưu dữ liệu bị lỗi", $_SESSION['links_re']);
		}
	}
	
	function delete_man(){
		global $d;	
		if(isset($_GET['id'])){
			$id =  themdau($_GET['id']);
			
			$d->reset();
			$sql = "select id,photo,thumb from #_seopage where id='".$id."'";
			$d->query($sql);
			if($d->num_rows()>0){
				
				while($row = $d->fetch_array()){
					delete_file(_upload_hinhanh.$row['photo']);
					delete_file(_upload_hinhanh.$row['thumb']);
				}
				$sql = "delete from #_seopage where id='".$id."'";
				$d->query($sql);
			}
			if($d->query($sql))
			redirect($_SESSION['links_re']);
			else
			transfer("Xóa dữ liệu bị lỗi", $_SESSION['links_re']);
			} elseif (isset($_GET['listid'])==true){
			
			$listid = explode(",",$_GET['listid']); 
			for ($i=0 ; $i<count($listid) ; $i++){
				$idTin=$listid[$i]; 
				$id =  themdau($idTin);	
				
				$d->reset();
				$sql = "select id,photo,thumb from #_seopage where id='".$id."'";
				$d->query($sql);
				if($d->num_rows()>0){
					while($row = $d->fetch_array()){
						delete_file(_upload_hinhanh.$row['photo']);
						delete_file(_upload_hinhanh.$row['thumb']);
					}
					$sql = "delete from #_seopage where id='".$id."'";
					$d->query($sql);
				}
			}
			redirect($_SESSION['links_re']);
			} else {
			transfer("Không nhận được dữ liệu", $_SESSION['links_re']);
		}	
	}
?>