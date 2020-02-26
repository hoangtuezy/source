<?php
	@$pid = $_POST['productid'];
	@$sl = (int)$_POST['soluong'];
	@$size = $_POST['size'];
	@$mau = $_POST['mau'];
	@$phiship = (int)$_POST['phiship'];
	if($sl < 1) $sl =1;
	$_oid = return_id($pid.$mau.$size);
	$abc = addtocart($_oid,$sl,$size,$mau,$phiship);
	$result_arr = null;
	$result_arr['result'] = $abc;
	header('Content-Type: application/json');	
	echo json_encode($result_arr,JSON_UNESCAPED_UNICODE);