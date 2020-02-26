<?php
	session_start();
	@define ( '_template' , './templates/');
	@define ( '_source' , './sources/');
	@define ( '_lib' , '../libraries/');

	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."functions_giohang.php";
	include_once _lib."class.database.php";		
	$login_name = 'NINACO';	
	
	//if((!isset($_SESSION[$login_name]) || $_SESSION[$login_name]==false) && $act!="login"){
		//redirect("index.php?com=user&act=login");
	//}
	
	$d = new database($config['database']);
	
	$do = (isset($_REQUEST['do'])) ? addslashes($_REQUEST['do']) : "";
	$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
	
	//Kiem tra dang nhap admin
	if($do=='admin'){
		if($act=='login'){
			$username = $_POST['email'];
			$password = $_POST['pass'];
			$login_failed = false;

			$sql = "select * from #_user where username='".$username."'";
			$d->query($sql);
			if($d->num_rows() == 1){
				$row = $d->fetch_array();
				if($row['password'] == encrypt_password($password,$config['salt'])){

					$timenow = time();
					$id_user = $row['id'];
					$ip= getRealIPAddress();
					$token = md5(time());
					$user_agent = $_SERVER['HTTP_USER_AGENT'];
					$sessionhash = md5(sha1($row['password'].$row['username']));
					/* Begin ghi log truy cập thành công */
					$d->reset();
					$sql="insert into #_user_log (id_user,ip,timelog,user_agent) values ('$id_user','$ip','$timenow','$user_agent')";
					$d->query($sql);
					$d->reset();
					$sql = "update #_user SET login_session= '$sessionhash', lastlogin = '$timenow', user_token = '$token'  WHERE id ='$id_user'";
					$d->query($sql);
					/* Begin tạo log và login session */

					/* Begin khởi tạo Session để kiểm tra số lần đăng nhập */
					$d->reset();
					$sql = "update #_user SET login_session= '$sessionhash', lastlogin = '$timenow' WHERE id ='$id_user'";
					$d->query($sql);
					/* End khởi tạo Session để kiểm tra số lần đăng nhập */

					/* Begin Reset số lần đăng nhập và thời gian đăng nhập */
					$d->reset();
					$sql = "select id,login_ip,login_attempts,attempt_time,locked_time from #_user_limit where login_ip = '$ip'  order by  id desc limit 1";
					$d->query($sql);
					if($d->num_rows()==1)
					{
						$row_limitlogin = $d->result_array();
				        $id_login = $row_limitlogin[0]['id'];
				        $d->reset();
				        $sql="update #_user_limit set login_attempts = 0,locked_time = 0 where id = '$id_login'";
						$d->query($sql);
				   	}
					/* End Reset số lần đăng nhập và thời gian đăng nhập */

					$_SESSION[$login_name] = true;
					$_SESSION['login']['role'] = $row['role'];
					$_SESSION['login']['quyen'] = $row['quyen'];
					$_SESSION['isLoggedIn'] = true;
					$_SESSION['login']['username'] = $username;
					$_SESSION['login_session'] = $sessionhash;
					$_SESSION['login_token'] = $token;
					$_SESSION['login']['idUser'] = $row['id'];
					$_SESSION['login']['id'] = $row['id'];
					
					echo '{"page":"index.php"}';
					

				}else{
					//echo '{"mess":"Mật khẩu không chính xác!"}';
					$login_failed = true;
				} 
			}else{
				//echo '{"mess":"Tên đăng nhập không tồn tại!"}';
				$login_failed = true;
			}
			if($login_failed)
			{
				$ip = getRealIPAddress();
				$d->reset();
				$sql = "select id,login_ip,login_attempts,attempt_time,locked_time from #_user_limit where login_ip =  '$ip'  order by  id desc limit 1";
				$d->query($sql);

				if($d->num_rows()==1)
				{
					$row = $d->result_array();
					$id_login = $row[0]['id'];
					$attempt =$row[0]['login_attempts'];
					$noofattmpt = $config['login']['attempt'];
					if($attempt<$noofattmpt)
					{
						$attempt = $attempt +1;
						$sql="update #_user_limit set login_attempts = '$attempt' where id = '$id_login'";
						$d->query($sql);					
						$no_ofattmpt =  $noofattmpt+1;
						$remain_attempt = $no_ofattmpt - $attempt;
						

						echo '{"mess":"Sai thông tin. Còn '.$remain_attempt.' lần thử!"}';
					}
					else
					{
						if($row[0]['locked_time']==0)
						{
							$attempt = $attempt +1;
							$timenow = time();
							$sql="update #_user_limit set login_attempts = '$attempt' ,locked_time = '$timenow' where id = '$id_login'";
							$d->query($sql);
						}
						else
						{
							$attempt = $attempt +1;
							$sql="update #_user_limit set login_attempts = '$attempt' where id = '$id_login'";
							$d->query($sql);
						}
						$delay_time = $config['login']['delay'];
						
						echo '{"mess":"Bạn đã hết lần thử. Vui lòng thử lại sau '.$delay_time.' phút!"}';
					}
				}
				else
				{
					$timenow = time();
					$d->reset();
					$sql="insert into #_user_limit (login_ip,login_attempts,attempt_time,locked_time) values('$ip',1,'$timenow',0)";
					$d->query($sql);
					$remain_attempt = $config['login']['attempt'];
					echo '{"mess":"Sai thông tin. Còn '.$remain_attempt.'  lần thử!"}';
					
				}
				//echo '{"page":"index.php"}';	
			}
			//echo '{"mess":"Tên đăng nhập, mật khẩu không chính xác!"}';
		
			
		}
		
	}
		
	//Cap nhat so thu tu
	if($do=='number'){
		if($_SESSION['login']['token']==NULL){die();}
		if($act=='update'){
			$table=addslashes($_POST['table']);
			$id=addslashes($_POST['id']);;
			$num=(int)$_POST['num'];
			$sql="update #_$table set stt='$num' where id='$id' ";
			$d->query($sql);
		}
	}
	if($do=='cart'){
		if($_SESSION['login']['token']==NULL){die();}
		if($act=='tinhtrang'){						
			$id=(int)$_POST['id'];
			$tt=(int)$_POST['tt'];
			$d->reset();						
			$d->query("update #_order_detail set trangthai='".$tt."' where id='".$id."'");
			$d->reset();
			$sql="select id_product,soluong from #_order_detail where id='".$id."' and trangthai=4";
			$d->query($sql);
			$result_orderd=$d->fetch_array();
			$d->reset();
		    $sql = "select soluong from #_product where hienthi=1 and type='product' and id='".$result_orderd['id_product']."'";
		    $d->query($sql);
		    $row_product = $d->fetch_array();
		    if($row_product['soluong']>=$result_orderd['soluong']){
		    	$d->reset();						
				$d->query("update #_product set soluong=soluong-".$result_orderd['soluong']." where id='".$result_orderd['id_product']."'");
		    }else{
		    	$d->reset();						
				$d->query("update #_product set soluong=0 where id='".$result_orderd['id_product']."'");
		    }
			
		}
	}
	//Cap nhat trang thai
	if($do=='status'){
		if($_SESSION['login']['token']==NULL){die();}
		if($act=='update'){						
			$table=addslashes($_POST['table']);
			$id=addslashes($_POST['id']);
			$field=addslashes($_POST['field']);
			$d->reset();						
			$sql="update #_$table set $field =  where id='$id' ";
						
			$cart=array('thanhtien'=>$thanhtien,'tongtien'=>get_tong_tien($id_cart));
			echo json_encode($cart);
		}
	}
	
	//Cap nhat gio hang
	if($do=='cart'){
		if($_SESSION['login']['token']==NULL){die();}
		if($act=='update'){						
			$id=(int)$_POST['id'];
			$sl=(int)$_POST['sl'];			
			
			$d->reset();						
			$d->query("update #_order_detail set soluong='".$sl."' where id='".$id."'");
			
			$d->reset();
			$sql="select * from #_order_detail where id='".$id."'";
			$d->query($sql);
			$result=$d->fetch_array();
			$id_cart=$result['id_order'];	
			$d->reset();
			$sql="select giagiam from #_order where id='".$id_cart."'";
			$d->query($sql);
			$giagiam=$d->fetch_array();		
			$thanhtien=$result['gia']*$result['soluong'];
			$cart=array('thanhtien'=>$thanhtien,'tongtien'=>get_tong_tien($id_cart)-$giagiam['giagiam']);
			echo json_encode($cart);
		}
	}
	
	//Xoa gio hang
	if($do=='cart'){
		if($_SESSION['login']['token']==NULL){die();}
		if($act=='delete'){						
			$id=(int)$_POST['id'];			
			
			$d->reset();
			$sql="select * from #_order_detail where id='".$id."'";
			$d->query($sql);
			$result=$d->fetch_array();	

			$id_cart=$result['id_order'];	
			$d->reset();
			$sql="select giagiam from #_order where id='".$id_cart."'";
			$d->query($sql);
			$giagiam=$d->fetch_array();

			$d->reset();			
			$d->query("delete from #_order_detail where id='".$id."'");

			$cart=array('tongtien'=>get_tong_tien($id_cart)-$giagiam['giagiam']);
			echo json_encode($cart);
			
		}
	}
	
?>