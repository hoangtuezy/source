<?php	if(!defined('_source')) die("Error");
switch($act){
	case "man":
		get_items();
		$template = "component/items";
		break;
	case "save":
		save_items();
		break;	
}
function get_items(){
	global $d,$item;
	$item = fetch_array("select * from #_component where name='".$_REQUEST["type"]."'");
}
function save_items(){
	global $d;
	$file_name=images_name($_FILES['file']['name']);
	if(empty($_POST)) transfer("Không nhận được dữ liệu", $_SESSION['links_re']);


	$name = magic_quote($_REQUEST['type']);
	$_com = result_array("select id from #_component where name='".$name."'");

	$data['title'] = magic_quote($_POST['title']);
	$data['description'] = magic_quote($_POST['description']);
	$data['keywords'] = magic_quote($_POST['keywords']);
	$data['name'] = magic_quote($name);

	if(count($_com) ==0){

		if($photo = upload_image("file", 'jpg|png|gif|JPG|jpeg|JPEG', _upload_component,$file_name)){
			$data['photo'] = $photo;	
			$d->setTable('component');
			$d->setWhere('id', $id);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_component.$row['photo']);	
			}
		}


		$d->reset();
		$d->setTable("component");
		if($d->insert($data))
		{			
			redirect("index.php?com=component&act=man&type=".$name);
		}else{ transfer("Lưu dữ liệu bị lỗi", "index.php?com=component&act=man&type=".$name); }
	}else{
		if($photo = upload_image("file", 'jpg|png|gif|JPG|jpeg|JPEG', _upload_component,$file_name)){
			$data['photo'] = $photo;	
		}
		
		$d->reset();
		$d->setTable("component");
		$d->setWhere('name', $name);
		if($d->update($data))
		{			
			redirect("index.php?com=component&act=man&type=".$name);
		}else{ transfer("Lưu dữ liệu bị lỗi", "index.php?com=component&act=man&type=".$name); }
	}

}