<?php	if(!defined('_source')) die("Error");
switch($act){

	case "man":
		get_items();
		$template = "thuoctinh/items";
		break;
	case "add":		
		$template = "thuoctinh/item_add";
		break;
	case "edit":		
		get_item();
		$template = "thuoctinh/item_add";
		break;
	case "save":
		save_item();
		break;
		
	case "delete":
		delete_item();
		break;	

	default:
		$template = "index";
}
	
#====================================

function get_items(){
	global $d, $items, $paging,$page;
	
	
	if($_REQUEST['noibat']!='')
	{
	$id_up = $_REQUEST['noibat'];
	$sql_sp = "SELECT id,noibat FROM table_thuoctinh where id='".$id_up."' ";
	$d->query($sql_sp);
	$cats= $d->result_array();
	$time=time();
	$hienthi=$cats[0]['noibat'];
	if($hienthi==0)
	{
	$sqlUPDATE_ORDER = "UPDATE table_thuoctinh SET noibat =1 WHERE  id = ".$id_up."";
	$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
	}
	else
	{
	$sqlUPDATE_ORDER = "UPDATE table_thuoctinh SET noibat =0  WHERE  id = ".$id_up."";
	$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
	}	
	}
	#-------------------------------------------------------------------------------
	
	#----------------------------------------------------------------------------------------
	if($_REQUEST['hienthi']!='')
	{
	$id_up = $_REQUEST['hienthi'];
	$sql_sp = "SELECT id,hienthi FROM table_thuoctinh where id='".$id_up."' ";
	$d->query($sql_sp);
	$cats= $d->result_array();
	$hienthi=$cats[0]['hienthi'];
	if($hienthi==0)
	{
	$sqlUPDATE_ORDER = "UPDATE table_thuoctinh SET hienthi =1 WHERE  id = ".$id_up."";
	$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
	}
	else
	{
	$sqlUPDATE_ORDER = "UPDATE table_thuoctinh SET hienthi =0  WHERE  id = ".$id_up."";
	$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
	}	
	}
	#-------------------------------------------------------------------------------
	
	
	
	$per_page = 10; // Set how many records do you want to display per page.
	$startpoint = ($page * $per_page) - $per_page;
	$limit = ' limit '.$startpoint.','.$per_page;
	$where = " #_thuoctinh ";
	$where .= " where type='".$_GET['type']."' ";
	if($_GET['type']=='soluong') {
		if($_GET["ngaybd"]!=''){
		 	$Ngay_arr = explode("/",$_GET["ngaybd"]);
			$ngay = $Ngay_arr[0];
			$thang = $Ngay_arr[1];
			$nam = $Ngay_arr[2];
			$ngaybatdau = strtotime($ngay.'-'.$thang.'-'.$nam);		
			$where.=" and ngaytao>=".$ngaybatdau." ";
		}

		if($_GET["ngaykt"]!=''){
			$Ngay_arr = explode("/",$_GET["ngaykt"]);
			$ngay = $Ngay_arr[0];
			$thang = $Ngay_arr[1];
			$nam = $Ngay_arr[2];
			$ngayketthuc = strtotime($ngay.'-'.$thang.'-'.$nam)+(60*60*24);	
			$where.=" and ngaytao<=".$ngayketthuc." ";
			
		}
	}
	if($_REQUEST['id_list']!='')
	{
		$where.=" and id_list = ".$_GET['id_list'];
		$link_add .= "&id_list=".$_GET['id_list'];
	}
	if($_REQUEST['keyword']!='')
	{
		$keyword=addslashes($_REQUEST['keyword']);
		if($_GET['id_list']!='')
		{
			$where.=" and ten_vi LIKE '%$keyword%' and id_list='".$_GET['id_list']."'";
			$link_add .= "&keyword=".$_GET['keyword']."&id_list=".$_GET['id_list'];
		}else{
			$where.=" and ten_vi LIKE '%$keyword%'";
			$link_add .= "&keyword=".$_GET['keyword'];
		}
		
	}
	$where .=" order by id desc";

	$sql = "select * from $where $limit";
	$d->query($sql);
	$items = $d->result_array();

	$url = "index.php?com=thuoctinh&act=man&type=".$_GET['type']."".$link_add;
	$paging = pagination($where,$per_page,$page,$url);		
	
}

function get_item(){
	global $d, $item,$ds_tags;
	$id = isset($_GET['id']) ? themdau($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=thuoctinh&act=man&type=".$_GET['type']);	
	$sql = "select * from #_thuoctinh where id='".$id."'";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=thuoctinh&act=man&type=".$_GET['type']);
	$item = $d->fetch_array();	
}

function save_item(){
	global $d;
	$file_name=images_name($_FILES['file']['name']);

	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=thuoctinh&act=man&type=".$_GET['type']);
	$id = isset($_POST['id']) ? themdau($_POST['id']) : "";
	
	if($id){
		$id =  themdau($_POST['id']);
		if($photo = upload_image("file", 'jpg|png|gif|JPG|jpeg|JPEG', _upload_hinhanh,$file_name)){
			$data['photo'] = $photo;			
			$d->setTable('thuoctinh');
			$d->setWhere('id', $id);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_hinhanh.$row['photo']);				
			}
		}
		$data['id_product'] = (int)$_POST['id_product'];
		$data['soluongnhap'] = $_POST['soluongnhap'];
		$data['id_list'] = (int)$_POST['id_list'];
		if($data['id_product']!=""){
			$d->reset();
		    $sql = "select id,ten_vi from #_product where hienthi=1 and type='product' and id='".$data['id_product']."'";
		    $d->query($sql);
		    $row_product = $d->fetch_array();
			$data['ten_vi'] = $row_product['ten_vi'];
		}else{
			$data['ten_vi'] = $_POST['ten_vi'];
		}
		if($_POST['tenkhongdau']!="" && $_POST['chk']==false)
    $data['tenkhongdau'] = $_POST['tenkhongdau'];
else
    $data['tenkhongdau'] = changeTitle($_POST['ten_vi']);
		$data['ten_en'] = $_POST['ten_en'];
		$data['link'] = $_POST['link'];
		$data['mau'] = $_POST['mau'];
		$data['stt'] = $_POST['stt'];
		$data['giagiam'] = str_replace(',','',$_POST['giagiam']);
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		
		$data['ngaysua'] = time();
		$d->setTable('thuoctinh');
		$d->setWhere('id', $id);
		if($d->update($data))
			redirect("index.php?com=thuoctinh&act=man&id_list=".$_REQUEST['id_list']."&curPage=".$_REQUEST['curPage']."&type=".$_GET['type']);
		else
			transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=thuoctinh&act=man&id_list=".$_REQUEST['id_list']."&type=".$_GET['type']);
	}else{
		if($photo = upload_image("file", 'jpg|png|gif|JPG|jpeg|JPEG', _upload_hinhanh,$file_name)){
			$data['photo'] = $photo;				
		}		
		$data['id_list'] = (int)$_POST['id_list'];
		$data['id_product'] = (int)$_POST['id_product'];
		if($data['id_product']!=""){
			$d->reset();
		    $sql = "select id,ten_vi from #_product where hienthi=1 and type='product' and id='".$data['id_product']."'";
		    $d->query($sql);
		    $row_product = $d->fetch_array();
			$data['ten_vi'] = $row_product['ten_vi'];
		}else{
			$data['ten_vi'] = $_POST['ten_vi'];
		}
		$data['ten_en'] = $_POST['ten_en'];
		if($_POST['tenkhongdau']!="" && $_POST['chk']==false)
    $data['tenkhongdau'] = $_POST['tenkhongdau'];
else
    $data['tenkhongdau'] = changeTitle($_POST['ten_vi']);
		$data['link'] = $_POST['link'];
		$data['soluongnhap'] = $_POST['soluongnhap'];
		if($data['soluongnhap']!=""){
			$sql_lanxem = "UPDATE #_product SET soluong=soluong+".$data['soluongnhap']." WHERE id ='".$data['id_product']."'";
			$d->query($sql_lanxem);
		}
		$data['type'] = $_GET['type'];
		$data['stt'] = $_POST['stt'];
		$data['mau'] = $_POST['mau'];
		$data['giagiam'] = str_replace(',','',$_POST['giagiam']);
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$data['ngaytao'] = time();
		$d->setTable('thuoctinh');
		if($d->insert($data))
		{			
			redirect("index.php?com=thuoctinh&act=man&id_list=".$_REQUEST['id_list']."&type=".$_GET['type']);
		}
		else
			transfer("Lưu dữ liệu bị lỗi", "index.php?com=thuoctinh&act=man&id_list=".$_REQUEST['id_list']."&type=".$_GET['type']);
	}
}

function delete_item(){
	global $d;
	
	if(isset($_GET['id'])){
		$id =  themdau($_GET['id']);
		$d->reset();
		$sql = "select id,photo,soluongnhap,id_product from #_thuoctinh where id='".$id."'";
		$d->query($sql);
		if($d->num_rows()>0){
			while($row = $d->fetch_array()){
				delete_file(_upload_hinhanh.$row['photo']);
				if($_GET['type']=="soluong"){
					$d->reset();
				    $sql = "select soluong from #_product where hienthi=1 and type='product' and id='".$row['id_product']."'";
				    $d->query($sql);
				    $row_product = $d->fetch_array();
				    if($row_product['soluong']>=$row['soluongnhap'])
						$sql_lanxem = "UPDATE #_product SET soluong=soluong-".$row['soluongnhap']." WHERE id ='".$row['id_product']."'";
					else
						$sql_lanxem = "UPDATE #_product SET soluong=0 WHERE id ='".$row['id_product']."'";
					$d->query($sql_lanxem);
				}
			}
			$d->reset();
			$sql_list = "select id_timkiem,id from #_product_list where type='product' and find_in_set(".$id.",id_timkiem)";
			$d->query($sql_list);
			$result_list=$d->result_array();
			foreach($result_list as $value){
				$arr1=explode(',',$value['id_timkiem']);
				$arr2=explode(',',$id);
				$id_timkiem=array_diff($arr1,$arr2);
				$id_timkiem=implode(',', $id_timkiem);
				$d->reset();
				$sql="update table_product_list set id_timkiem='".$id_timkiem."' where id='".$value['id']."'";
				$d->query($sql);
			}
			$sql = "delete from #_thuoctinh where id='".$id."'";
			$d->query($sql);
			$sql = "delete from #_thuoctinh where id_list='".$id."'";
			$d->query($sql);
		}
		if($d->query($sql))
			redirect("index.php?com=thuoctinh&act=man&id_list=".$_REQUEST['id_list']."&curPage=".$_REQUEST['curPage']."&type=".$_GET['type']);
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=thuoctinh&act=man&id_list=".$_REQUEST['id_list']."&curPage=".$_REQUEST['curPage']."&type=".$_GET['type']);
	} elseif (isset($_GET['listid'])==true){
		$listid = explode(",",$_GET['listid']); 
		for ($i=0 ; $i<count($listid) ; $i++){
			$idTin=$listid[$i]; 
			$id =  themdau($idTin);		
			$d->reset();
			$sql = "select id,photo from #_thuoctinh where id='".$id."'";
			$d->query($sql);
			if($d->num_rows()>0){
				while($row = $d->fetch_array()){
					delete_file(_upload_hinhanh.$row['photo']);
				}
				$d->reset();
				$sql_list = "select id_timkiem,id from #_product_list where type='product' and find_in_set(".$id.",id_timkiem)";
				$d->query($sql_list);
				$result_list=$d->result_array();
				foreach($result_list as $value){
					$arr1=explode(',',$value['id_timkiem']);
					$arr2=explode(',',$id);
					$id_timkiem=array_diff($arr1,$arr2);
					$id_timkiem=implode(',', $id_timkiem);
					$d->reset();
					$sql="update table_product_list set id_timkiem='".$id_timkiem."' where id='".$value['id']."'";
					$d->query($sql);
				}
				$sql = "delete from #_thuoctinh where id='".$id."'";
				$d->query($sql);
				$sql = "delete from #_thuoctinh where id_list='".$id."'";
				$d->query($sql);
			}
		}
		redirect("index.php?com=thuoctinh&act=man&id_list=".$_REQUEST['id_list']."&curPage=".$_REQUEST['curPage']."&type=".$_GET['type']);
	} else {
		transfer("Không nhận được dữ liệu", "index.php?com=thuoctinh&act=man&id_list=".$_REQUEST['id_list']."&curPage=".$_REQUEST['curPage']."&type=".$_GET['type']);
	}


}


?>