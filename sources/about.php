<?php  if(!defined('_source')) die("Error");



	$d->reset();
	$sql = "select noidung_$lang,title,keywords,description from #_info where type='".$type_bar."' ";
	$d->query($sql);
	$row_detail = $d->fetch_array();
	
	$title_bar .= $row_detail['title'];
	$keyword_bar .= $row_detail['keywords'];
	$description_bar .= $row_detail['description'];
	if(!empty($_POST)){
			$url = 'https://www.google.com/recaptcha/api/siteverify';
		    $data = array(
		        'secret' => '6Ld3A5YUAAAAAKy2azQKVHnkoWMvC0sRSwdPYLtL',
		        'response' => $_POST["g-recaptcha-response"]
		    );
		    $options = array(
		        'http' => array (
		            'method' => 'POST',
		            'content' => http_build_query($data)
		        )
		    );
		    $context  = stream_context_create($options);
		    $verify = file_get_contents($url, false, $context);
		    $captcha_success=json_decode($verify);
		    if ($captcha_success->success==false) {
		        redirect("nhuong-quyen.html");
		    } else if ($captcha_success->success==true) {
		        $file_name = images_name($_FILES['file']['name']);
				if($file_att = upload_image("file", 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|xlsx|jpg|png|gif|JPG|PNG|GIF', _upload_hinhanh_l,$file_name)){
					$data1['photo'] = $file_att;
					
				}

				include_once "phpMailer/class.phpmailer.php";	
				$mail = new PHPMailer();
				$mail->Priority = 1;
		     	$mail->AddCustomHeader("X-MSMail-Priority: High");
				$mail->IsSMTP(); // Gọi đến class xử lý SMTP
				$mail->Host       = $config_ip; // tên SMTP server
				$mail->SMTPDebug  = 0;
				$mail->SMTPAuth   = true; 
				$mail->Username   = $config_email; // SMTP account username
				$mail->Password   = $config_pass;  

				//Thiet lap thong tin nguoi gui va email nguoi gui
				$mail->SetFrom($config_email,$row_setting['ten_'.$lang]);
				
				$mail->AddAddress($row_setting['email'],$row_setting['ten_'.$lang]);
				
				/*=====================================
				 * THIET LAP NOI DUNG EMAIL
		 		*=====================================*/

				//Thiết lập tiêu đề
				$mail->Subject    = '['.$_POST['ten'].']';
				$mail->IsHTML(true);
				//Thiết lập định dạng font chữ
				$mail->CharSet = "utf-8";	
					$body = '<table>';
					$body .= '
						<tr> 
							<th colspan="2">&nbsp;</th>
						</tr>

						<tr>
							<th colspan="2">Thư liên hệ từ website <a href="http://'.$config_url.'">www.'.$config_url.'</a></th>
						</tr>

						<tr>
							<th colspan="2">&nbsp;</th>
						</tr>

						<tr>
							<th>Họ tên :</th><td>'.$_POST['ten'].'</td>
						</tr>

						<tr>
							<th>Điện thoại :</th><td>'.$_POST['dienthoai'].'</td>
						</tr>

						<tr>
							<th>Email :</th><td>'.$_POST['email'].'</td>
						</tr>
						
					
						<tr>
							<th>Nội dung :</th><td>'.$_POST['noidung'].'</td>
						</tr>';
					$body .= '</table>';

					$data1['ten'] = $_POST['ten'];
					$data1['diachi'] = $_POST['diachi'];
					$data1['dienthoai'] = $_POST['dienthoai'];
					$data1['email'] = $_POST['email'];
					$data1['tieude'] = $_POST['tieude'];
					$data1['noidung'] = $_POST['noidung'];
					$data1['stt'] = $_POST['stt'];
					$data1['type'] = 'nhuongquyen';
					$data1['ngaytao'] = time();
					$d->setTable('contact');
					$d->insert($data1);

						
					$mail->Body = $body;

					if($data1['photo']){
						$mail->AddAttachment(_upload_hinhanh_l.$data1['photo']);
					}
				
					
					if($mail->Send())
					{	
						transfer("Thông tin liên hệ được gửi . Cảm ơn.", "index.html");
					} else {
						transfer("Xin lỗi quý khách.<br>Hệ thống bị lỗi, xin quý khách thử lại.", "nhuong-quyen.html",false);
					}
		    }
		
		}
?>