<?php	if(!defined('_source')) die("Error");
switch($act){

	
	case "man":
		get_mans();
		$template = "tags/items";
		break;
	case "add":		
		$template = "tags/item_add";
		break;
	case "edit":		
		get_man();
		$template = "tags/item_add";
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
	
	$per_page = 15; // Set how many records do you want to display per page.
	$startpoint = ($page * $per_page) - $per_page;
	$limit = ' limit '.$startpoint.','.$per_page;
	
	$where = " #_tags ";
	$where .= " where id<>0 ";

	
	if($_REQUEST['keyword']!='')
	{
		$keyword=addslashes($_REQUEST['keyword']);
		$where.=" and ten_vi LIKE '%$keyword%'";
		$link_add .= "&keyword=".$_GET['keyword'];
	}
	$where .=" and type='".$_GET["type"]."' order by hienthi desc, stt asc ,id desc";

	$sql = "select * from $where $limit";
	$d->query($sql);
	$items = $d->result_array();

	$url = "index.php?com=tags&act=man&type=".$_GET['type']."".$link_add."&type=".$_GET['type'];
	$paging = pagination($where,$per_page,$page,$url);		
}

function get_man(){
	global $d, $item,$ds_tags,$ds_photo;
	$id = isset($_GET['id']) ? themdau($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=tags&act=man&type=".$_GET['type']);	
	$sql = "select * from #_tags where id='".$id."'";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=tags&act=man&type=".$_GET['type']);
	$item = $d->fetch_array();	

}

function save_man(){
	global $d;
$file_name=images_name($_FILES['file']['name']);
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=tags&act=man&type=".$_GET['type']);
	$id = isset($_POST['id']) ? themdau($_POST['id']) : "";
	if($id){

		$id =  themdau($_POST['id']);
		if($photo = upload_image("file", 'jpg|png|gif|JPG|jpeg|JPEG', _upload_hinhanh,$file_name)){
			$data['photo'] = $photo;
			//dongdauanh_bottom_right($photo,_upload_hinhanh);
			$data['thumb'] = create_thumb($data['photo'], _width_thumb, _height_thumb, _upload_hinhanh,$file_name,_style_thumb);
			$d->setTable('tags');
			$d->setWhere('id', $id);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_hinhanh.$row['photo']);
			}
		}

		$data['ten_vi'] = $_POST['ten_vi'];
		$data['ten_en'] = $_POST['ten_en'];
		
		$data['tenkhongdau'] = changeTitle($_POST['ten_vi']);
	
		$data['title'] = $_POST['title'];
		
		
		
		$data['keywords'] = $_POST['keywords'];
		$data['description'] = $_POST['description'];
		
		$data['stt'] = $_POST['stt'];

		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$data['type'] = $_GET['type'];
		$data['ngaysua'] = time();

		$d->setTable('tags');
		$d->setWhere('id', $id);
		if($d->update($data)){
			redirect($_SESSION['links_re']);
		}
		else{
			transfer("Cập nhật dữ liệu bị lỗi", $_SESSION['links_re']);
		}
		
	}else{
			
		if($photo = upload_image("file", 'jpg|png|gif|JPG|jpeg|JPEG', _upload_hinhanh,$file_name)){
			$data['photo'] = $photo;
			//dongdauanh_bottom_right($data['photo'],_upload_hinhanh);
		}

		$data['ten_vi'] = $_POST['ten_vi'];
			$data['ten_en'] = $_POST['ten_en'];
			
		$data['tenkhongdau'] = changeTitle($_POST['ten_vi']);
	
		$data['title'] = $_POST['title'];
		$data['keywords'] = $_POST['keywords'];
		$data['description'] = $_POST['description'];
		
		
		$data['stt'] = $_POST['stt'];
		$data['type'] = $_GET['type'];
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$data['ngaytao'] = time();
		$d->setTable('tags');

		if($d->insert($data))
		{			
			redirect("index.php?com=tags&act=man&type=".$_GET['type']);
		}
		else
			transfer("Lưu dữ liệu bị lỗi", "index.php?com=tags&act=man&type=".$_GET['type']);
	}
}

function delete_man(){
	global $d;

	if(isset($_GET['id'])){
	$id =  themdau($_GET['id']);
	$d->reset();
	$sql = "select id from #_tags where id='".$id."'";
	$d->query($sql);
	if($d->num_rows()>0){
	while($row = $d->fetch_array()){
	delete_file(_upload_tags.$row['photo']);
	delete_file(_upload_tags.$row['thumb']);
	}
	$sql = "delete from #_tags where id='".$id."'";
	$d->query($sql);
	}
	if($d->query($sql))
	redirect("index.php?com=tags&act=man&curPage=".$_REQUEST['curPage']."&type=".$_GET['type']);
	else
	transfer("Xóa dữ liệu bị lỗi", "index.php?com=tags&act=man&curPage=".$_REQUEST['curPage']."&type=".$_GET['type']);
	} elseif (isset($_GET['listid'])==true){
	$listid = explode(",",$_GET['listid']); 
	for ($i=0 ; $i<count($listid) ; $i++){
	$idTin=$listid[$i]; 
	$id =  themdau($idTin);	
	$d->reset();
	$sql = "select id from #_tags where id='".$id."'";
	$d->query($sql);
	if($d->num_rows()>0){
	while($row = $d->fetch_array()){
	delete_file(_upload_tags.$row['photo']);
	delete_file(_upload_tags.$row['thumb']);
	}
	$sql = "delete from #_tags where id='".$id."'";
	$d->query($sql);
	}
	}
	redirect("index.php?com=tags&act=man&curPage=".$_REQUEST['curPage']."&type=".$_GET['type']);
	} else {
	transfer("Không nhận được dữ liệu", "index.php?com=tags&act=man&curPage=".$_REQUEST['curPage']."&type=".$_GET['type']);
	}


}



?>