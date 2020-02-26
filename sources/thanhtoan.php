<?php  if(!defined('_source')) die("Error");
	// thanh tieu de
$title_bar .= "Thanh toán - ";
if(!empty($_POST)){
	$sameas = $_POST['ascustomer'];

	$sender_hoten=$_POST['ten'];
	$sender_dienthoai=$_POST['sender_dienthoai'];
	$sender_diachi=$_POST['sender_diachi'];
	$sender_email=$_POST['sender_email'];
	$sender_noidung=$_POST['sender_noidung'];
	$sender_id_thanhpho = $_POST['sender_thanhpho'];
	$sender_id_quanhuyen = $_POST['sender_quanhuyen'];
	if($sameas !='on'){
		$receiver_hoten=$_POST['receiver_ten'];
		$receiver_dienthoai=$_POST['receiver_dienthoai'];
		$receiver_diachi=$_POST['receiver_diachi'];
		$receiver_email=$_POST['receiver_email'];
		$receiver_noidung=$_POST['receiver_noidung'];
		$receiver_id_thanhpho = $_POST['receiver_thanhpho'];
		$receiver_id_quanhuyen = $_POST['receiver_quanhuyen'];
	}else{
		$receiver_hoten=$sender_hoten;
		$receiver_dienthoai=$sender_dienthoai;
		$receiver_diachi=$sender_diachi;
		$receiver_email=$sender_email;
		$receiver_noidung=$sender_noidung;
		$receiver_id_thanhpho = $sender_id_thanhpho;
		$receiver_id_quanhuyen = $sender_id_quanhuyen;
	}
	$data_sender= array(
		'hoten' => $sender_hoten,
		'dienthoai' => $sender_dienthoai,
		'email' => $sender_email,
		'diachi' => $sender_diachi,
		'noidung' => $sender_noidung,
		'thanhpho' => $sender_id_thanhpho,
		'quanhuyen' => $sender_id_quanhuyen
	);
	$data_receiver = array(
		'hoten' => $receiver_hoten,
		'dienthoai' => $receiver_dienthoai,
		'email' => $receiver_email,
		'diachi' => $receiver_diachi,
		'noidung' => $receiver_noidung,
		'thanhpho' => $receiver_id_thanhpho,
		'quanhuyen' => $receiver_id_quanhuyen
	);
	$data_receiver_json = json_encode($data_receiver,JSON_UNESCAPED_UNICODE);
	$data_sender_json = json_encode($data_receiver,JSON_UNESCAPED_UNICODE);
	$payment = $_POST['payment'];

	$send_time = $_POST['input_datetime'];
	$id_color = $_POST['id_color'];
	$id_size = $_POST['id_size'];

		$httt = $_POST['httt']; // Hình thức thanh toán
	//Tính phí vận chuyen
	$phivanchuyen = null;	
	if(!empty($_POST['phivanchuyen'])){
		$phivanchuyen = $_POST['phivanchuyen'];
	}else{
		$sql_tinhthanh = fetch_array("select * from #_city_list where id='".$receiver_id_thanhpho."'");
		$sql_quanhuyen = fetch_array("select * from #_city_cat where id='".$receiver_id_quanhuyen."'");
		if($sql_quanhuyen['phivanchuyen'] > 0) $phivanchuyen = $sql_quanhuyen['phivanchuyen'];
		else $phivanchuyen = $sql_tinhthanh['phivanchuyen'];
	}



		//validate dữ liệu

		$hoten = trim(strip_tags($sender_hoten));
		$dienthoai = trim(strip_tags($sender_dienthoai));
		$diachi = trim(strip_tags($sender_diachi));
		$email = trim(strip_tags($sender_email));
		$noidung = trim(strip_tags($sender_noidung));

		if (get_magic_quotes_gpc()==false) {
			$hoten = mysql_real_escape_string($sender_hoten);
			$dienthoai = mysql_real_escape_string($sender_dienthoai);
			$diachi = mysql_real_escape_string($sender_diachi);
			$email = mysql_real_escape_string($sender_email);
			$noidung = mysql_real_escape_string($sender_noidung);
		}
		$coloi=false;
		if ($hoten == NULL) {
			$coloi=true; $error_hoten = "Bạn chưa nhập họ tên<br>";
		}
		if ($dienthoai == NULL) {
			$coloi=true; $error_dienthoai = "Bạn chưa nhập điện thoại<br>";
		}
		if ($diachi == NULL) {
			$coloi=true; $error_diachi = "Bạn chưa nhập địa chỉ<br>";
		}

		if ($email == NULL) {
			$coloi=true; $error_email = "Bạn chưa nhập email<br>";
		}elseif (filter_var($email,FILTER_VALIDATE_EMAIL)==FALSE) {
			$coloi=true; $error_email="Bạn nhập email không đúng<br>";
		}
		if ($coloi==FALSE) {

			$body.='<table border="0" cellpadding="5px" cellspacing="1px" style="font-family:Verdana, Geneva, sans-serif; font-size:11px; background-color:#E1E1E1; padding:5px;" width="100%">';
			if(is_array($_SESSION['cart']))
			{
				$body.='<tr bgcolor="#b21e8e"><td align="center" style="font-weight:bold;color:#FFF">STT</td><td style="font-weight:bold;color:#FFF">Tên</td><td align="center" style="font-weight:bold;color:#FFF">Giá</td><td align="center" style="font-weight:bold;color:#FFF">Số lượng</td><td align="center" style="font-weight:bold;color:#FFF">Tổng giá</td></tr>';
				$max=count($_SESSION['cart']);
				for($i=0;$i<$max;$i++){
					$pid=$_SESSION['cart'][$i]['productid'];
					$q=$_SESSION['cart'][$i]['qty'];
					$pname=get_product_name($pid);
					if($q==0) continue;
					$body.='<tr bgcolor="#FFFFFF"><td width="10%" align="center">'.($i+1).'</td>';
					$body.='<td width="29%">'.$pname;
					$body.='</td>';
					$body.='<td width="20%">'.number_format(get_price($pid),0, ',', '.').'&nbsp;VNĐ</td>';
					$body.='<td width="14%">'.$q.'</td>';
					$body.='<td>'.number_format(get_price($pid)*$q,0, ',', '.') .'&nbsp;VNĐ</td>
					</tr>
					<br/>';
				}
				$body.='<tr><td colspan="7">
				<table width="100%" cellpadding="0" cellspacing="0" border="0">
				<tr>
				<td style="text-align:left;"> ';
				$body.=' <strong>Tổng giá bán:'. number_format(get_order_total(),0, ',', '.') .' &nbsp;VNĐ</strong></td>
				<td colspan="7" align="right">&nbsp;</td>
				</tr>
				</table>
				</td></tr>';
			}
			else{
				$body.='<tr bgColor="#FFFFFF"><td>There are no items in your shopping cart!</td>';
			}
			$body.='</table>';

			$mahoadon=strtoupper (ChuoiNgauNhien(6));
			$ngaydangky=time();
			$tonggia=get_order_total();

			$sql = "INSERT INTO  table_order (madonhang,hoten,dienthoai,diachi,email,httt,tonggia,noidung,ngaytao,trangthai,id_thanhpho,id_quanhuyen,phivanchuyen,pt_thanhtoan,pt_nhanhang,receiver,sender,payment,send_time)
			VALUES ('$mahoadon','$hoten','$dienthoai','$diachi','$email','$httt','$tonggia','$noidung','$ngaydangky','1','$id_thanhpho','$id_quanhuyen','$phivanchuyen','$pt_thanhtoan','$pt_nhanhang','$data_receiver_json','$data_sender_json','$payment','$send_time')";
			mysql_query($sql) or die(mysql_error());
			$iduser = mysql_insert_id();
			$max=count($_SESSION['cart']);

			for($i=0;$i<$max;$i++){
				$pid = $_SESSION['cart'][$i]['productid'];
				$q = $_SESSION['cart'][$i]['qty'];
				$pname = get_product_name($pid);
				$gia = get_price($pid);

				if($q==0) continue;

				$data1['id_product'] = $pid;
				$data1['id_order'] = $iduser;
				$data1['ten'] = $pname;
				$data1['gia'] = $gia;
				$data1['soluong'] = $q;
				$data1['id_color'] = $id_color;
				$data1['id_size'] = $id_size;



				$d->setTable('order_detail');
				$d->insert($data1);

			}
			include_once "phpMailer/class.phpmailer.php";
					//Khởi tạo đối tượng
			$mail = new PHPMailer();
					//Thiet lap thong tin nguoi gui va email nguoi gui
					$mail->IsSMTP(); // Gọi đến class xử lý SMTP
					$mail->Host       = $config_ip; // tên SMTP server
					$mail->SMTPAuth   = true;                  // Sử dụng đăng nhập vào account
					$mail->Username   = $config_email; // SMTP account username
					$mail->Password   = $config_pass;
					$mail->SetFrom($config_email,$row_setting['ten_'.$lang]);

					$mail->AddAddress($row_setting['email'],$row_setting['ten_'.$lang]);
					$mail->AddAddress($email,$hoten);

					//Thiết lập email nhận email hồi đáp
					//nếu người nhận nhấn nút Reply
					$mail->AddReplyTo($config_email,$row_setting['ten_'.$lang]);


					$thongtinnguoidat='<b>THÔNG TIN NGƯỜI ĐẶT</b><br/>';
					$thongtinnguoidat.='<b>Họ tên: </b>'.$hoten.'<br/>';
					$thongtinnguoidat.='<b>Điện thoại: </b>'.$dienthoai.'<br/>';
					$thongtinnguoidat.='<b>Email: </b>'.$email.'<br/>';
					$thongtinnguoidat.='<b>Địa chỉ: </b>'.$diachi.'<br/>';
					$thongtinnguoidat.='<b>THÔNG TIN ĐƠN HÀNG</b><br/>';
					/*=====================================
					 * THIET LAP NOI DUNG EMAIL
					 *=====================================*/

					//Thiết lập tiêu đề
					$mail->Subject    = "Có đặt hàng mới từ website ".$row_setting['website'];

					//Thiết lập định dạng font chữ
					$mail->CharSet = "utf-8";

					$mail->AltBody = "To view the message, please use an HTML compatible email viewer!";

					//Thiết lập nội dung chính của email
					$mail->MsgHTML($thongtinnguoidat.$body);
					if(!$mail->Send()) {
						echo "Có lỗi xảy ra!";
					} else {
						$_SESSION['damua'] = $_SESSION['cart'];
						unset($_SESSION['cart']);
						transfer("Gửi đơn hàng thành công!<br/>", "index.php");
					}



				}

			}
			?>
