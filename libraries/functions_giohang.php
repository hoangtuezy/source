<?php
function get_product_name($pid){
		global $d, $row,$lang;
		
		$sql = "select ten_vi from #_product where id='".$pid."'";
		$d->query($sql);
		$row = $d->fetch_array();
		return $row['ten_vi'];
	}
	function get_hinh($pid){
		global $d, $row;
		$sql = "select thumb from table_product where id=$pid";
		$d->query($sql);
		$row = $d->fetch_array();
		return $row['thumb'];
	}

	
		function update_soluong($pid,$q){
		$pid=intval($pid);
		$max=count($_SESSION['cart']);
		$flag=0;
		for($i=0;$i<$max;$i++){
			if($pid==$_SESSION['cart'][$i]['productid']){
				$_SESSION['cart'][$i]['qty'] = $q;
				$flag=1;
				break;
			}
		}
		return $flag;
	}
	function get_color($color){
		global $d, $row,$lang;
		$lang = $_SESSION['lang'];
		$sql = "select ten_$lang from #_tags where id='".$color."'";
		$d->query($sql);
		$row = $d->fetch_array();
		return $row['ten_'.$lang];
	}
	function get_hex($color){
		global $d, $row,$lang;
		$sql = "select hex from #_tags where id='".$color."'";
		$d->query($sql);
		$row = $d->fetch_array();
		return $row['hex'];
	}
	function update_color($pid,$color){

		$pid=intval($pid);
		$max=count($_SESSION['cart']);
		$flag=0;
		for($i=0;$i<$max;$i++){
			if($pid==$_SESSION['cart'][$i]['productid']){
				$_SESSION['cart'][$i]['color_id'] = $color;
				$flag=1;
				break;
			}
		}


		return $flag;
	}
function get_size($size){
		global $d, $row,$lang;
		$lang = $_SESSION['lang'];
		$sql = "select ten_$lang from #_tags where id='".$size."'";
		$d->query($sql);
		$row = $d->fetch_array();
		return $row['ten_'.$lang];
	}
	function update_size($pid,$size){

		$pid=intval($pid);
		$max=count($_SESSION['cart']);
		$flag=0;
		for($i=0;$i<$max;$i++){
			if($pid==$_SESSION['cart'][$i]['productid']){
				$_SESSION['cart'][$i]['size_id'] = $size;
				$flag=1;
				break;
			}
		}


		return $flag;
	}
	function get_thumb($pid){
		global $d, $row;
		$sql = "select thumb from table_product where id='".$pid."' ";
		$d->query($sql);
		$row = $d->fetch_array();
		return $row['thumb'];
	}
	function remove_product($pid,$thongtin){
		$pid=intval($pid);
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			if($pid==$_SESSION['cart'][$i]['productid']){
				unset($_SESSION['cart'][$i]);
				break;
			}
		}
		$_SESSION['cart']=array_values($_SESSION['cart']);
	}
	function remove_pro_thanh($pid){
		$pid=intval($pid);
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			if($pid==$_SESSION['cart'][$i]['productid']){
				unset($_SESSION['cart'][$i]);
				break;
			}
		}
		$_SESSION['cart']=array_values($_SESSION['cart']);
		redirect('thanh-toan.html');
	}
	function get_no_color_price($pid){
		global $d, $row;
		$sql = "select giaban from table_product where id='".$pid."'";
		$d->reset();
		$d->query($sql);
		$row = $d->fetch_array();
		return $row['giaban'];
	}
	function get_color_price($cid){
		// global $d, $row;
		// $sql = "select giaban from table_thuoctinh where id='".$cid."'";
		// $d->query($sql);
		// $row = $d->fetch_array();
		// return $row['giaban'];
		return get_no_color_price($cid);
	}

	function get_price($pid){
		global $d, $row;
		$sql = "select giaban from table_product where id='".$pid."'";
		$d->reset();
		$d->query($sql);
		$row = $d->fetch_array();
		return $row['giaban'];
	}

	function get_order_total(){
		$max=count($_SESSION['cart']);
		$sum=0;
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=$_SESSION['cart'][$i]['qty'];
			$color = $_SESSION['cart'][$i]['color_id'];
			$price = get_price($pid);
			$sum+=$price*$q;
		}
		// return ($sum + $_SESSION["phivanchuyen"]);
		return $sum;
	}
	function addtocart($pid,$q,$color = 0,$size = 0){
		if($pid<1 || $q<1) return -1;
		if(is_array($_SESSION['cart'])){
			if(product_exists($pid,$q,$color,$size)) return count($_SESSION['cart']);
			$max=count($_SESSION['cart']);
			$_SESSION['cart'][$max]['productid']=$pid;
			$_SESSION['cart'][$max]['qty']=$q;
			$_SESSION['cart'][$max]['color_id']=$color;
			$_SESSION['cart'][$max]['size_id']=$size;
			return count($_SESSION['cart']);
		}
		else{
			$_SESSION['cart']=array();
			$_SESSION['cart'][0]['productid']=$pid;
			$_SESSION['cart'][0]['qty']=$q;
			$_SESSION['cart'][0]['color_id']=$color;
			$_SESSION['cart'][0]['size_id']=$size;
			return count($_SESSION['cart']);
		}
	}
	function product_exists($pid,$q,$color=0,$size=0){
		$pid=intval($pid);
		$max=count($_SESSION['cart']);
		$flag=0;
		for($i=0;$i<$max;$i++){
			if($pid==$_SESSION['cart'][$i]['productid']){
				$_SESSION['cart'][$i]['qty'] = $_SESSION['cart'][$i]['qty'] + $q;
				$_SESSION['cart'][$i]['color_id'] = $color;
				$_SESSION['cart'][$i]['size_id'] = $size;
				$flag=1;
				break;
			}
		}
		return $flag;
	}

?>