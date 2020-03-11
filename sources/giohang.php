<?php if(!defined('_source')) die("Error");
if($_POST['command']=='delete' && $_POST['pid']>0){
		remove_product($_POST['pid']);
	}
	else if($_POST['command']=='clear'){
		unset($_SESSION['cart']);
	}
	else if($_POST['command']=='update'){
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=intval($_POST['product'.$pid]);
			if($q>0 && $q<=999){
				$_SESSION['cart'][$i]['qty']=$q;
			}
			else{
				$msg='Some proudcts not updated!, quantity must be a number between 1 and 999';
			}
		}
	}
?>
<?php
	$d->reset();
    $sql = "select noidung_$lang from #_info where type='taikhoan'";
    $d->query($sql);
    $result_taikhoan = $d->fetch_array();

    $raw_colors = result_array("select * from #_thuoctinh where type='mausac' and hienthi=1 ");
    $raw_sizes = result_array("select * from #_thuoctinh where type='mausac' and hienthi=1 ");
?>