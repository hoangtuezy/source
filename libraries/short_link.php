<?php	if(!defined('_lib')) die("Error");

	$find_table = array(
		 'product'=>'id' ,
		 'baiviet'=>'id' ,
		 'product_list'=>'idl',
		 'product_cat'=>'idc',
		 'product_item'=>'idi',
		 'baiviet_list'=>'idl',
		 'baiviet_cat'=>'idc',
		 'baiviet_item'=>'idi'
	);
	$__product = '';
	foreach($find_table as $table => $key){
		$__product = fetch_array("select id,tenkhongdau,type from #_$table where tenkhongdau='$com' and hienthi=1 ");
		if(!empty($__product['tenkhongdau'])){
				${$key} = $__product['tenkhongdau'];
				break;
		}
	}
	if(!empty($__product)){
		$com = $__product['type'];
		$__target = $__product;
	}
?>