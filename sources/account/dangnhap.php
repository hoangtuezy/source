<?php  if(!defined('_source')) die("Error");
if($_POST){
			$username = $_POST['email'];
			$password = $_POST['password'];
			$login_failed = false;

			$sql = "select * from #_thanhvien where email='".$username."'";
			$d->query($sql);
			if($d->num_rows() == 1){
				$row = $d->fetch_array();
				if($row['password'] == encrypt_password($password,$config['salt'])){

					$timenow = time();
					$id_user = $row['id'];
					$ip= getRealIPAddress();
					$token = md5(time());
					$user_agent = $_SERVER['HTTP_USER_AGENT'];
					$sessionhash = md5(sha1($row['password'].$row['email']));
					/* Begin ghi log truy cập thành công */
					$d->reset();
					$sql="insert into #_thanhvien_log (id_user,ip,timelog,user_agent) values ('$id_user','$ip','$timenow','$user_agent')";
					$d->query($sql);
					$d->reset();
					$sql = "update #_thanhvien SET login_session= '$sessionhash', lastlogin = '$timenow', user_token = '$token'  WHERE id ='$id_user'";
					$d->query($sql);
					/* Begin tạo log và login session */

					/* Begin khởi tạo Session để kiểm tra số lần đăng nhập */
					$d->reset();
					$sql = "update #_thanhvien SET login_session= '$sessionhash', lastlogin = '$timenow' WHERE id ='$id_user'";
					$d->query($sql);
					/* End khởi tạo Session để kiểm tra số lần đăng nhập */

					/* Begin Reset số lần đăng nhập và thời gian đăng nhập */
					$d->reset();
					$sql = "select id,login_ip,login_attempts,attempt_time,locked_time from #_thanhvien_limit where login_ip = '$ip'  order by  id desc limit 1";
					$d->query($sql);
					if($d->num_rows()==1)
					{
						$row_limitlogin = $d->result_array();
				        $id_login = $row_limitlogin[0]['id'];
				        $d->reset();
				        $sql="update #_thanhvien_limit set login_attempts = 0,locked_time = 0 where id = '$id_login'";
						$d->query($sql);
				   	}
					/* End Reset số lần đăng nhập và thời gian đăng nhập */

					$_SESSION['account'][$login_name] = true;
					$_SESSION['account']['isLoggedIn'] = true;
					$_SESSION['account']['username'] = $username;
					$_SESSION['account']['login_session'] = $sessionhash;
					$_SESSION['account']['login_token'] = $token;
					$_SESSION['account']['mathanhvien'] = $row['mathanhvien'];
					$_SESSION['account']['id'] = $row['id'];
					
					$d->query("Update #_thanhvien set lastlogin='".time()."' where id='$id_login'");
					transfer(_account_login_success,$Protocol.$config_url);
					

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
				$sql = "select id,login_ip,login_attempts,attempt_time,locked_time from #_thanhvien_limit where login_ip =  '$ip'  order by  id desc limit 1";
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
						$sql="update #_thanhvien_limit set login_attempts = '$attempt' where id = '$id_login'";
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
							$sql="update #_thanhvien_limit set login_attempts = '$attempt' ,locked_time = '$timenow' where id = '$id_login'";
							$d->query($sql);
						}
						else
						{
							$attempt = $attempt +1;
							$sql="update #_thanhvien_limit set login_attempts = '$attempt' where id = '$id_login'";
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
					$sql="insert into #_thanhvien_limit (login_ip,login_attempts,attempt_time,locked_time) values('$ip',1,'$timenow',0)";
					$d->query($sql);
					$remain_attempt = $config['login']['attempt'];
					echo '{"mess":"Sai thông tin. Còn '.$remain_attempt.'  lần thử!"}';
					
				}
				//echo '{"page":"index.php"}';	
			}
			//echo '{"mess":"Tên đăng nhập, mật khẩu không chính xác!"}';
		}
