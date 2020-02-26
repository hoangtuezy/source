<?php	if(!defined('_source')) die("Error");
$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
switch($act){
	case "man":
		get_items();
		$template = "tinhthanh/items";
		break;
	case "add":
		get_list();
		$template = "tinhthanh/item_add";
		break;
	case "edit":
		get_list();
		get_item();
		$template = "tinhthanh/item_add";
		break;
	case "save":
		save_item();
		break;
	case "delete":
		delete_item();
		break;
#--------------------------------------
	case "man_cat":
		get_cats();
		$template = "tinhthanh/cats";
		break;
	case "add_cat":
		$template = "tinhthanh/cat_add";
		break;
	case "edit_cat":
		get_cat();
		$template = "tinhthanh/cat_add";
		break;
	case "save_cat":
		save_cat();
		break;
	case "delete_cat":
		delete_cat();
		break;
#--------------------------------------
	case "man_phuong":
		get_phuongs();
		$template = "tinhthanh/phuong";
		break;
	case "add_phuong":
		$template = "tinhthanh/phuong_add";
		break;
	case "edit_phuong":
		get_phuong();
		$template = "tinhthanh/phuong_add";
		break;
	case "save_phuong":
		save_phuong();
		break;
	case "delete_phuong":
		delete_phuong();
		break;
#--------------------------------------
	case "man_duong":
		get_duongs();
		$template = "tinhthanh/duong";
		break;
	case "add_duong":
		$template = "tinhthanh/duong_add";
		break;
	case "edit_duong":
		get_duong();
		$template = "tinhthanh/duong_add";
		break;
	case "save_duong":
		save_duong();
		break;
	case "delete_duong":
		delete_duong();
		break;
	default:
		$template = "index";
}

#====================================
#====================================
function get_items(){
	global $d, $items, $paging,$page;

	if($_REQUEST['hienthi']!='')
	{
		$id_up = $_REQUEST['hienthi'];
		$sql_sp = "SELECT id,hienthi FROM table_city_cat where id='".$id_up."' ";
		$d->query($sql_sp);
		$cats= $d->result_array();
		$hienthi=$cats[0]['hienthi'];
		if($hienthi==0)
		{
		$sqlUPDATE_ORDER = "UPDATE table_city_cat SET hienthi =1 WHERE  id = ".$id_up."";
		$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
		}
		else
		{
		$sqlUPDATE_ORDER = "UPDATE table_city_cat SET hienthi =0  WHERE  id = ".$id_up."";
		$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
	}
	}

	$per_page = 10; // Set how many records do you want to display per page.
	$startpoint = ($page * $per_page) - $per_page;
	$limit = ' limit '.$startpoint.','.$per_page;

	$where = " #_city_cat ";
	$where .= " where id>0 ";

	if($_REQUEST['id_list']!='')
	{
		$where.=" and id_list = ".$_GET['id_list'];
		$link_add .= "&id_list=".$_GET['id_list'];
	}

	if($_REQUEST['keyword']!='')
	{
		$keyword=addslashes($_REQUEST['keyword']);
		$where.=" and ten_vi LIKE '%$keyword%'";
		$link_add .= "&keyword=".$_GET['keyword'];
	}
	$where .=" order by id desc";

	$sql = "select * from $where $limit";
	$d->query($sql);
	$items = $d->result_array();

	$url = "index.php?com=tinhthanh&act=man";
	$paging = pagination($where,$per_page,$page,$url);
}

function get_item(){
	global $d, $item;
	$id = isset($_GET['id']) ? themdau($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=tinhthanh&act=man");

	$sql = "select * from #_city_cat where id='".$id."'";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=tinhthanh&act=man");
	$item = $d->fetch_array();
	get_list($item['id_list']);
}

function save_item(){
	global $d;
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=tinhthanh&act=man");
	$id = isset($_POST['id']) ? themdau($_POST['id']) : "";
	if($id){

		$data['id_list'] = $_POST['id_list'];
		$data['ten_vi'] = $_POST['ten_vi'];
		// $data['vanchuyen'] = $_POST['vanchuyen'];
		$data['phivanchuyen'] = str_replace(',','',$_POST['phivanchuyen']);
		$data['stt'] = $_POST['stt'];
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$d->setTable('city_cat');
		$d->setWhere('id', $id);
		if($d->update($data))
			redirect("index.php?com=tinhthanh&act=man");
		else
			transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=tinhthanh&act=man");
	}else{

		$data['id_list'] = $_POST['id_list'];
		$data['ten_vi'] = $_POST['ten_vi'];
	$data['phivanchuyen'] = str_replace(',','',$_POST['phivanchuyen']);
		$data['stt'] = $_POST['stt'];
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;

		$d->setTable('city_cat');
		if($d->insert($data))
			redirect("index.php?com=tinhthanh&act=man");
		else
			transfer("Lưu dữ liệu bị lỗi", "index.php?com=tinhthanh&act=man");
	}
}

function delete_item(){
	global $d;

	if(isset($_GET['id'])){
		$id =  themdau($_GET['id']);
		$d->reset();
		$sql = "select * from #_city_cat where id='".$id."'";
		$d->query($sql);
		if($d->num_rows()>0){

			$sql = "delete from #_city_cat where id='".$id."'";
			$d->query($sql);
		}
		if($d->query($sql))
			redirect("index.php?com=tinhthanh&act=man");
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=tinhthanh&act=man");
	}else transfer("Không nhận được dữ liệu", "index.php?com=tinhthanh&act=man");
}

#----------------------------------------
function get_cats(){
	global $d, $items, $paging,$page;

	if($_REQUEST['hienthi']!='')
	{
		$id_up = $_REQUEST['hienthi'];
		$sql_sp = "SELECT id,hienthi FROM table_city_list where id='".$id_up."' ";
		$d->query($sql_sp);
		$cats= $d->result_array();
		$hienthi=$cats[0]['hienthi'];
		if($hienthi==0)
		{
		$sqlUPDATE_ORDER = "UPDATE table_city_list SET hienthi =1 WHERE  id = ".$id_up."";
		$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
		}
		else
		{
		$sqlUPDATE_ORDER = "UPDATE table_city_list SET hienthi =0  WHERE  id = ".$id_up."";
		$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
	}
	}

	$per_page = 10; // Set how many records do you want to display per page.
	$startpoint = ($page * $per_page) - $per_page;
	$limit = ' limit '.$startpoint.','.$per_page;

	$where = " #_city_list ";
	$where .= " where id>0 ";


	if($_REQUEST['keyword']!='')
	{
		$keyword=addslashes($_REQUEST['keyword']);
		$where.=" and ten_vi LIKE '%$keyword%'";
		$link_add .= "&keyword=".$_GET['keyword'];
	}
	$where .=" order by ten_vi asc";

	$sql = "select * from $where $limit";
	$d->query($sql);
	$items = $d->result_array();

	$url = "index.php?com=tinhthanh&act=man_cat";
	$paging = pagination($where,$per_page,$page,$url);

}

function get_cat(){
	global $d, $item;
	$id = isset($_GET['id']) ? themdau($_GET['id']) : "";
	if(!$id)
	transfer("Không nhận được dữ liệu", "index.php?com=product&act=man_cat");
	$sql = "select id,ten_vi,stt,hienthi from #_city_list where id='".$id."'";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=tinhthanh&act=man_cat");
	$item = $d->fetch_array();
}

function save_cat(){
	global $d;
	$file_name_item=fns_Rand_digit(0,9,5);
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=tinhthanh&act=man_cat");
	$id = isset($_POST['id']) ? themdau($_POST['id']) : "";
	if($id){
		$data['ten_vi'] = $_POST['ten'];
		$data['phivanchuyen'] = str_replace(',','',$_POST['phivanchuyen']);
		$data['stt'] = $_POST['stt'];
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;

		$d->setTable('city_list');
		$d->setWhere('id', $id);
		if($d->update($data))
			redirect("index.php?com=tinhthanh&act=man_cat&curPage=".$_REQUEST['curPage']."");
		else
			transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=tinhthanh&act=man_cat");
	}else{
		$data['ten_vi'] = $_POST['ten'];
		$data['phivanchuyen'] = str_replace(',','',$_POST['phivanchuyen']);
		$data['stt'] = $_POST['stt'];
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$d->setTable('city_list');
		if($d->insert($data))
			redirect("index.php?com=tinhthanh&act=man_cat");
		else
			transfer("Lưu dữ liệu bị lỗi", "index.php?com=tinhthanh&act=man_cat");
	}
}
function delete_cat(){
	global $d;
	if(isset($_GET['id'])){
		$id =  themdau($_GET['id']);
		$d->reset();
		$sql = "select id,ten_vi from #_city_list where id_list='".$id."'";
		$d->query($sql);
		if($d->num_rows()>0){
			while($row = $d->fetch_array()){
				$sql = "delete from #_city_list where id_list='".$id."'";
			}
			$d->query($sql);
		}
		$sql = "delete from #_city_list where id='".$id."'";
		if($d->query($sql))
			redirect("index.php?com=tinhthanh&act=man_cat");
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=tinhthanh&act=man_cat");
	}else transfer("Không nhận được dữ liệu", "index.php?com=tinhthanh&act=man_cat");
}
#----------------------------------------
function get_phuongs(){
	global $d, $items, $paging,$page;

	if($_REQUEST['hienthi']!='')
	{
		$id_up = $_REQUEST['hienthi'];
		$sql_sp = "SELECT id,hienthi FROM table_city_item where id='".$id_up."' ";
		$d->query($sql_sp);
		$cats= $d->result_array();
		$hienthi=$cats[0]['hienthi'];
		if($hienthi==0)
		{
		$sqlUPDATE_ORDER = "UPDATE table_city_item SET hienthi =1 WHERE  id = ".$id_up."";
		$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
		}
		else
		{
		$sqlUPDATE_ORDER = "UPDATE table_city_item SET hienthi =0  WHERE  id = ".$id_up."";
		$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
	}
	}

	$per_page = 10; // Set how many records do you want to display per page.
	$startpoint = ($page * $per_page) - $per_page;
	$limit = ' limit '.$startpoint.','.$per_page;

	$where = " #_city_item ";
	$where .= " where id>0 ";

	if($_REQUEST['id_list']!='')
	{
	$where.=" and id_list=".$_REQUEST['id_list']."";
	}
	if($_REQUEST['id_cat']!='')
	{
	$where.=" and  id_cat=".$_REQUEST['id_cat']."";
	}
	if($_REQUEST['keyword']!='')
	{
		$keyword=addslashes($_REQUEST['keyword']);
		$where.=" and ten_vi LIKE '%$keyword%'";
		$link_add .= "&keyword=".$_GET['keyword'];
	}
	$where.=" order by stt asc";

	$sql = "select * from $where $limit";

	$d->query($sql);
	$items = $d->result_array();

	$url="index.php?com=tinhthanh&act=man_phuong&id_list=".$_GET['id_list']."&id_cat=".$_GET['id_cat'];

	$paging = pagination($where,$per_page,$page,$url);
}

function get_phuong(){
	global $d, $item;
	$id = isset($_GET['id']) ? themdau($_GET['id']) : "";
	if(!$id)
	transfer("Không nhận được dữ liệu", "index.php?com=tinhthanh&act=man_phuong");
	$sql = "select * from #_city_item where id='".$id."'";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=tinhthanh&act=man_phuong");
	$item = $d->fetch_array();
}

function save_phuong(){
	global $d;
	$file_name_item=fns_Rand_digit(0,9,5);
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=tinhthanh&act=man_phuong");
	$id = isset($_POST['id']) ? themdau($_POST['id']) : "";
	if($id){
		$data['ten_vi'] = $_POST['ten_vi'];
		$data['id_list'] = $_POST['id_list'];
		$data['id_cat'] = $_POST['id_cat'];
		$data['stt'] = $_POST['stt'];
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;

		$d->setTable('city_item');
		$d->setWhere('id', $id);
		if($d->update($data))
			redirect("index.php?com=tinhthanh&act=man_phuong&curPage=".$_REQUEST['curPage']."");
		else
			transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=tinhthanh&act=man_phuong");
	}else{
		$data['ten_vi'] = $_POST['ten_vi'];
		$data['stt'] = $_POST['stt'];
		$data['id_list'] = $_POST['id_list'];
		$data['id_cat'] = $_POST['id_cat'];
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$d->setTable('city_item');
		if($d->insert($data))
			redirect("index.php?com=tinhthanh&act=man_phuong");
		else
			transfer("Lưu dữ liệu bị lỗi", "index.php?com=tinhthanh&act=man_phuong");
	}
}
function delete_phuong(){
	global $d;
	if(isset($_GET['id'])){
		$id =  themdau($_GET['id']);
		$d->reset();
		$sql = "select id,ten_vi from #_city_item where id_list='".$id."'";
		$d->query($sql);
		if($d->num_rows()>0){
			while($row = $d->fetch_array()){
				$sql = "delete from #_city_item where id_list='".$id."'";
			}
			$d->query($sql);
		}
		$sql = "delete from #_city_item where id='".$id."'";
		if($d->query($sql))
			redirect("index.php?com=tinhthanh&act=man_phuong");
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=tinhthanh&act=man_phuong");
	}else transfer("Không nhận được dữ liệu", "index.php?com=tinhthanh&act=man_phuong");
}
#----------------------------------------
#----------------------------------------
function get_duongs(){
	global $d, $items, $paging,$page;
	if($_REQUEST['hienthi']!='')
	{
		$id_up = $_REQUEST['hienthi'];
		$sql_sp = "SELECT id,hienthi FROM table_city_duong where id='".$id_up."' ";
		$d->query($sql_sp);
		$cats= $d->result_array();
		$hienthi=$cats[0]['hienthi'];
		if($hienthi==0)
		{
		$sqlUPDATE_ORDER = "UPDATE table_city_duong SET hienthi =1 WHERE  id = ".$id_up."";
		$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
		}
		else
		{
		$sqlUPDATE_ORDER = "UPDATE table_city_duong SET hienthi =0  WHERE  id = ".$id_up."";
		$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
	}
	}

	$per_page = 10; // Set how many records do you want to display per page.
	$startpoint = ($page * $per_page) - $per_page;
	$limit = ' limit '.$startpoint.','.$per_page;

	$where = " #_city_duong ";
	$where .= " where id>0 ";

	if($_REQUEST['id_list']!='')
	{
	$where.=" and id_list=".$_REQUEST['id_list']."";
	}
	if($_REQUEST['id_cat']!='')
	{
	$where.=" and  id_cat=".$_REQUEST['id_cat']."";
	}
	if($_REQUEST['keyword']!='')
	{
		$keyword=addslashes($_REQUEST['keyword']);
		$where.=" and ten_vi LIKE '%$keyword%'";
		$link_add .= "&keyword=".$_GET['keyword'];
	}
	$where.=" order by stt asc";

	$sql = "select * from $where $limit";

	$d->query($sql);
	$items = $d->result_array();

	$url="index.php?com=tinhthanh&act=man_duong&id_list=".$_GET['id_list']."&id_cat=".$_GET['id_cat'];

	$paging = pagination($where,$per_page,$page,$url);
}

function get_duong(){
	global $d, $item;
	$id = isset($_GET['id']) ? themdau($_GET['id']) : "";
	if(!$id)
	transfer("Không nhận được dữ liệu", "index.php?com=tinhthanh&act=man_duong");
	$sql = "select * from #_city_duong where id='".$id."'";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=tinhthanh&act=man_duong");
	$item = $d->fetch_array();
}

function save_duong(){
	global $d;
	$file_name_item=fns_Rand_digit(0,9,5);
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=tinhthanh&act=man_duong");
	$id = isset($_POST['id']) ? themdau($_POST['id']) : "";
	if($id){
		$data['ten_vi'] = $_POST['ten_vi'];
		$data['id_list'] = $_POST['id_list'];
		$data['id_cat'] = $_POST['id_cat'];
		$data['stt'] = $_POST['stt'];
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;

		$d->setTable('city_duong');
		$d->setWhere('id', $id);
		if($d->update($data))
			redirect("index.php?com=tinhthanh&act=man_duong&curPage=".$_REQUEST['curPage']."");
		else
			transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=tinhthanh&act=man_duong");
	}else{
		$data['ten_vi'] = $_POST['ten_vi'];
		$data['stt'] = $_POST['stt'];
		$data['id_list'] = $_POST['id_list'];
		$data['id_cat'] = $_POST['id_cat'];
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$d->setTable('city_duong');
		if($d->insert($data))
			redirect("index.php?com=tinhthanh&act=man_duong");
		else
			transfer("Lưu dữ liệu bị lỗi", "index.php?com=tinhthanh&act=man_duong");
	}
}
function delete_duong(){
	global $d;
	if(isset($_GET['id'])){
		$id =  themdau($_GET['id']);
		$d->reset();
		$sql = "select id,ten_vi from #_city_duong where id_list='".$id."'";
		$d->query($sql);
		if($d->num_rows()>0){
			while($row = $d->fetch_array()){
				$sql = "delete from #_city_duong where id_list='".$id."'";
			}
			$d->query($sql);
		}
		$sql = "delete from #_city_duong where id='".$id."'";
		if($d->query($sql))
			redirect("index.php?com=tinhthanh&act=man_duong");
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=tinhthanh&act=man_duong");
	}else transfer("Không nhận được dữ liệu", "index.php?com=tinhthanh&act=man_duong");
}
#=======================================================
function get_list($id=0){
	global $d, $list;
	$sql = "select * from #_city_cat order by id desc";
	$d->query($sql);
	$cats = $d->result_array();

	$list = '<select name="id_cat" class="input">

	<option >Chọn danh mục</option>
	';
	for($i=0, $count=count($cats); $i<$count; $i++)
		$list .= '<option value="'.$cats[$i]['id'].'" '.(($cats[$i]['id']==$id)?'selected="selected"':'').'>'.$cats[$i]['ten'].'</option>';
	$list .= '</select>';
}
#=======================================================
function get_list_quan($id=0){
	global $d, $list;
	$sql = "select * from #_city_cat where id_list='".$_GET['id_list']."' order by id desc";
	$d->query($sql);
	$cats = $d->result_array();

	$list = '<select name="id_cat" class="input">

	<option >Chọn danh mục</option>
	';
	for($i=0, $count=count($cats); $i<$count; $i++)
		$list .= '<option value="'.$cats[$i]['id'].'" '.(($cats[$i]['id']==$id)?'selected="selected"':'').'>'.$cats[$i]['ten'].'</option>';
	$list .= '</select>';
}
#=======================================================
function get_list_phuong($id=0){
	global $d, $list;
	$sql = "select * from #_city_item where id_cat='".$_GET['id_cat']."' order by id desc";
	$d->query($sql);
	$cats = $d->result_array();

	$list = '<select name="id_item" class="input">

	<option >Chọn danh mục</option>
	';
	for($i=0, $count=count($cats); $i<$count; $i++)
		$list .= '<option value="'.$cats[$i]['id'].'" '.(($cats[$i]['id']==$id)?'selected="selected"':'').'>'.$cats[$i]['ten'].'</option>';
	$list .= '</select>';
}

?>
