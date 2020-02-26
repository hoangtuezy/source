<?php
	if(isset($_SESSION['madonhang'])){
		$d->reset();
	    $row_order = "select hoten,email,madonhang,gioitinh from #_order where madonhang='".$_SESSION['madonhang']."' order by id desc";
	    $d->query($row_order);
	    $row_order = $d->fetch_array();


		include_once "phpMailer/class.phpmailer.php";
		$mail = new PHPMailer();
		$mail->Priority = 1;
	 	$mail->AddCustomHeader("X-MSMail-Priority: High");
		$mail->IsSMTP(); // telling the class to use SMTP
		$mail->Host       = $config_ip; // tên SMTP server
		$mail->SMTPDebug  = 0;
		$mail->SMTPAuth   = true; 
		$mail->Username   = $config_email; // SMTP account username
		$mail->Password   = $config_pass; 
		$mail->SetFrom($config_email,$row_setting['ten_'.$lang]);

		$mail->AddAddress($row_order['email'],$row_order['hoten']);
		$mail->AddAddress($row_setting['email'],$row_setting['ten_'.$lang]);
		$max=count($_SESSION['cart']);
		$d->reset();
	    $row_logo = "select photo_$lang from #_photo where type='logo' order by id desc";
	    $d->query($row_logo);
	    $row_logo = $d->fetch_array();

	    $d->reset();
	    $sql_contact = "select noidung_$lang from #_company where type='footer'";
	    $d->query($sql_contact);
	    $company_contact = $d->fetch_array();

		$body.='<div class="form-gh" style="width: 640px;margin: 0 auto;">
		    <div class="header-gh" style="border-bottom: 10px solid #d29700;padding: 10px 0px;">
		        <img src="http://'.$config_url.'/'._upload_hinhanh_l.$row_logo['photo_'.$lang].'" width="68" height="67" alt="'.$row_logo['photo_'.$lang].'" />
		    </div>
		    <div class="top-gh">
		        <div class="about-gh" style=" background: #eee;padding: 10px;">
		        	<img src="http://'.$config_url.'/images/icon_huy.png" width="112" height="112" alt="icon_huy" style="vertical-align: middle;margin-right: 10px;" />
		            ĐƠN HÀNG ĐÃ HỦY: <b>'.$row_order['madonhang'].'</b>
		        </div>
		        <div class="madh-gh" style="padding: 10px;">
		            <span class="left-ma" style="float:left">Chào '.strtolower($row_order['gioitinh']).' <b>'.$row_order['hoten'].'</b>, thông báo đơn hàng <a href="'.$row_setting['website'].'">'.$row_setting['website'].'</a> đã hủy đến '.strtolower($row_order['gioitinh']).':</span>
		            <span class="right-ma" style="float:right">Đặt lúc: '.date('d/m/Y',time()).'</span>
		            <div style="clear:both"></div>
		        </div>
		    </div>
		     <div class="bot-gh" style="clear: both;">
		        <div class="border-bot" style=" border-top: 10px solid #eee;margin: 10px 0px;"></div>
		        <p><b>Lưu Ý </b> : Đây là thư hỗ trợ tự động , mọi phản hồi về mail này điều không được duyệt .</p>
		    </div>
		    <div class="footer-gh" style="background: #d29700;padding: 10px 10px;color: #fff; ">
		        <div class="noidung">'.$company_contact['noidung_'.$lang].'</div>
		    </div>';
		$mail->Subject    = strtolower($row_order['gioitinh'])." vừa hủy đơn hàng trên ".$row_setting['website'];	
		$mail->CharSet = "utf-8";
		$mail->AltBody = "To view the message, p	lease use an HTML compatible email viewer!";
		$mail->MsgHTML($body);
		if(!$mail->Send()) {
					 echo "Có lỗi xảy ra!";
		} else {
			$d->reset();
			$sql_update="update table_order set trangthai=5 where madonhang='".$_SESSION['madonhang']."'";
			mysql_query($sql_update) or die(mysql_error());
			$d->reset();
			$sql_update="update table_order_detail set trangthai=5 where madonhang='".$_SESSION['madonhang']."'";
			mysql_query($sql_update) or die(mysql_error());
			unset($_SESSION['madonhang']);
			transfer("Hủy đơn hàng thành công!<br/>", "index.html");	
		}
		

	}else{
		redirect('index.html');
	}	
?>