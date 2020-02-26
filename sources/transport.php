<?php  if(!defined('_source')) die("Error");
	$title_detail = _ketquatimkiem;

	$where = " #_transport where hienthi=1 ";
	$sql = "select * from $where ";

	if(isset($_GET['keyword']) && $_GET['keyword'] !=''){
			$tukhoa = trim(strip_tags($_GET['keyword']));    	
			if (get_magic_quotes_gpc()==false) {
				$tukhoa = mysql_real_escape_string($tukhoa);    			
			}
											
			$sql .= " and bill_id like '%$tukhoa%'";
	}

	$sql .=" order by stt,id desc ";
	$d->query($sql);
	$result_product = $d->result_array();	
	if(count($result_product) == 0){
		transfer("Không tìm thấy kết quả phù hợp","http://".$config_url."/index.html");
	}else{

	}
?>	