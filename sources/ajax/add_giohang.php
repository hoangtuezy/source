<?php

	@$pid = $_POST['productid'];

	@$sl = (int)$_POST['soluong'];

	@$size = $_POST['size'];

	@$mau = $_POST['mausac'];

	@$phiship = (int)$_POST['phiship'];

	if($sl < 1) $sl =1;

	$_oid = return_id($pid);

	$abc = addtocart($_oid,$sl,$mau,$size,$phiship);

	$result_arr = null;

	$result_arr['result'] = $abc;
	$result_arr['count_cart'] = count($_SESSION['cart']);
	$result_arr['_crsf'] = $_crsf;

	header('Content-Type: application/json');	

	echo json_encode($result_arr,JSON_UNESCAPED_UNICODE);