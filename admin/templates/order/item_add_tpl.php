<?php
$sender = json_decode($item['sender'], false, 512, JSON_UNESCAPED_UNICODE);
$receiver = json_decode($item['receiver'], false, 512, JSON_UNESCAPED_UNICODE);
function tinhtrang($i=0)
{
	$sql="select * from table_tinhtrang order by id";
	$stmt=mysql_query($sql);
	$str='
	<select id="id_tinhtrang" name="id_tinhtrang" class="main_font">					
	';
	while ($row=@mysql_fetch_array($stmt)) 
	{
		if($row["id"]==$i)
			$selected="selected";
		else 
			$selected="";
		$str.='<option value='.$row["id"].' '.$selected.'>'.$row["trangthai"].'</option>';			
	}
	$str.='</select>';
	return $str;
}

?>
<script type="text/javascript">
	function TreeFilterChanged2(){		
		$('#validate').submit();		
	}
	function tinhtrang(id){
		if(id>0){	
			var tt=$('#tinhtrang'+id).val();
			if(tt==4){
				$('#tinhtrang'+id).prop("disabled", true);
			}
			jQuery.ajax({
				type: 'POST',
				url: "ajax.php?do=cart&act=tinhtrang",
				data: {'id':id, 'tt':tt},				
				success: function(data) {					
				}
			});			
		}
	}
	function update(id){
		if(id>0){
			var sl=$('#product'+id).val();
			if(sl>0){
				$('#ajaxloader'+id).css('display', 'block');			
				jQuery.ajax({
					type: 'POST',
					url: "ajax.php?do=cart&act=update",
					data: {'id':id, 'sl':sl},				
					success: function(data) {					
						$('#ajaxloader'+id).css('display', 'none');	
						var getData = $.parseJSON(data);
						$('#id_price'+id).html(addCommas(getData.thanhtien)+'&nbsp;VNĐ');
						$('#sum_price').html(addCommas(getData.tongtien)+'&nbsp;VNĐ');
					}
				});			
			}else alert('Số lượng phải lớn hơn 0');
		}
	}

	function del(id){
		if(id>0){				
			jQuery.ajax({
				type: 'POST',
				url: "ajax.php?do=cart&act=delete",
				data: {'id':id},			
				success: function(data) {										
					var getData = $.parseJSON(data);
					$('#productct'+id).css('display', 'none');	
					$('#sum_price').html(addCommas(getData.tongtien)+'&nbsp;VNĐ');
				}
			});
		}
	}
</script>  
<div class="control_frm breadcrumb" style="margin-top:25px;">
	<div class="bc">
		<ul id="breadcrumbs" class="breadcrumbs">
			<li><a href="index.php?com=order&act=mam"><span>Đơn hàng</span></a></li>
			<li class="current"><a href="#" onclick="return false;">Xem và sửa đơn hàng</a></li>
		</ul>
		<div class="clear"></div>
	</div>
</div>

<form name="supplier" id="validate" class="form" action="index.php?com=order&act=save" method="post" enctype="multipart/form-data">

	<div class="row mb-4">
		<div class="col-6">
			<div class="card">
				<div class="card-header">Thông tin người mua</div>
				<div class="card-body">
					<div class="form-row">
						<label forLabel="madonhang" class="col-3">Mã đơn hàng</label>
						<div class="col-9">
							<?=@$item['madonhang']?>
						</div>
					</div>
					<div class="form-row">
						<label forLabel="hoten" class="col-3">Tên người gửi</label>
						<div class="col-9">
							<?=$sender->hoten?>
						</div>
					</div>
					<div class="form-row">
						<label forLabel="hoten" class="col-3">Điện thoại</label>
						<div class="col-9">
							<?=$sender->dienthoai?>
						</div>
					</div>
					<div class="form-row">
						<label forLabel="hoten" class="col-3">Email</label>
						<div class="col-9">
							<?=$sender->email?>
						</div>
					</div>
					<div class="form-row">
						<label forLabel="hoten" class="col-3">Địa Chỉ</label>
						<div class="col-9">
							<?=$sender->diachi?>
						</div>
					</div>
					<div class="form-row">
						<label forLabel="hoten" class="col-3">Tỉnh Thành</label>
						<div class="col-9">
							<?=get_tinhthanh_name($sender->thanhpho)?>
						</div>
					</div>		
					<div class="form-row">
						<label forLabel="hoten" class="col-3">Quận Huyện</label>
						<div class="col-9">
							<?=get_quanhuyen_name($sender->quanhuyen)?>
						</div>
					</div>						
				</div>
			</div>
		</div>
		<div class="col-6">
			<div class="card">
				<div class="card-header bg-light text-danger text-uppercase">Thông tin người nhận</div>
				<div class="card-body">
					<div class="form-row">
						<label forLabel="madonhang" class="col-3">Mã đơn hàng</label>
						<div class="col-9">
							<?=@$item['madonhang']?>
						</div>
					</div>
					<div class="form-row">
						<label forLabel="hoten" class="col-3">Tên người nhận</label>
						<div class="col-9 text-danger text-uppercase">
							<?=$receiver->hoten?>
						</div>
					</div>
					<div class="form-row">
						<label forLabel="hoten" class="col-3">Điện thoại</label>
						<div class="col-9">
							<?=$receiver->dienthoai?>
						</div>
					</div>
					<div class="form-row">
						<label forLabel="hoten" class="col-3">Email</label>
						<div class="col-9">
							<?=$receiver->email?>
						</div>
					</div>
					<div class="form-row">
						<label forLabel="hoten" class="col-3">Địa Chỉ</label>
						<div class="col-9">
							<?=$receiver->diachi?>
						</div>
					</div>
					<div class="form-row">
						<label forLabel="hoten" class="col-3">Tỉnh Thành</label>
						<div class="col-9">
							<?=get_tinhthanh_name($receiver->thanhpho)?>
						</div>
					</div>		
					<div class="form-row">
						<label forLabel="hoten" class="col-3">Quận Huyện</label>
						<div class="col-9">
							<?=get_quanhuyen_name($receiver->quanhuyen)?>
						</div>
					</div>
					<div class="form-row">
						<label forLabel="hoten" class="col-3">Thời gian giao hàng</label>
						<div class="col-9">
							<?=$item['send_time']?>
						</div>
					</div>								
				</div>
			</div>
		</div>
	</div>
	<!-- End New -->
	<div class="widget d-none">
		<div class="title"><img src="./images/icons/dark/list.png" alt="" class="titleIcon" />
			<h6>Thông tin người mua</h6>
		</div>
		
		

		<div class="formRow">
			<label>Họ tên</label>
			<div class="formRight">
				<?=@$item['hoten']?>
			</div>
			<div class="clear"></div>
		</div>	
		<div class="formRow">
			<label>Giới tính</label>
			<div class="formRight">
				<?=@$item['gioitinh']?>
			</div>
			<div class="clear"></div>
		</div>	
		<div class="formRow">
			<label>Điện thoại</label>
			<div class="formRight">
				<?=@$item['dienthoai']?>
			</div>
			<div class="clear"></div>
		</div>		        

		<div class="formRow">
			<label>Email</label>
			<div class="formRight">
				<?=@$item['email']?>
			</div>
			<div class="clear"></div>
		</div>	

		<div class="formRow">
			<label>Địa chỉ</label>
			<div class="formRight">
				<?=@$item['diachi']?>
			</div>
			<div class="clear"></div>
		</div>	
		<?php if($item['goitruoc']==1) { ?>
			<div class="formRow">
				<label>Gọi trước khi giao</label>
				<div class="formRight">
					<input type="checkbox" checked disabled />
				</div>
				<div class="clear"></div>
			</div>
		<?php } ?>
		<?php if($item['xuathd']==1) { ?>
			<div class="formRow">
				<label>Xuất hóa đơn công ty</label>
				<div class="formRight">
					<input type="checkbox" checked disabled />
				</div>
				<div class="clear"></div>
			</div>
			<div class="formRow">
				<label>Tên công ty</label>
				<div class="formRight">
					<?=@$item['tencty']?>
				</div>
				<div class="clear"></div>
			</div>
			<div class="formRow">
				<label>Địa chỉ công ty</label>
				<div class="formRight">
					<?=@$item['diachicty']?>
				</div>
				<div class="clear"></div>
			</div>
			<div class="formRow">
				<label>Mã số thuế</label>
				<div class="formRight">
					<?=@$item['mast']?>
				</div>
				<div class="clear"></div>
			</div>
		<?php } ?>
		<div class="formRow">
			<label>Yêu cầu thêm</label>
			<div class="formRight">
				<?=@$item['noidung']?>
			</div>
			<div class="clear"></div>
		</div>		        

	</div>
	<div class="widget">
		<div class="title"><img src="./images/icons/dark/list.png" alt="" class="titleIcon" />
			<h6>Chi tiết đơn hàng</h6>
		</div>

		<table cellpadding="0" cellspacing="0" width="100%" class="sTable withCheck mTable" id="checkAll">
			<thead>
				<tr>

					<td class="tb_data_small"><a href="#" class="tipS" style="margin: 5px;">STT</a></td>      
					<td class="sortCol"><div>Tên sản phẩm<span></span></div></td>
					<td width="">Đơn giá</td>
					<td width="">Số lượng</td>
					<td width="">Thành tiền</td>
					<td width="">Tình trạng</td>
					<!-- <td width="">Gian hàng</td> -->
					<td width="">Thao tác</td>
				</tr>
			</thead> 
			<tfoot>
				<tr>
					<td colspan="6" class="p-2">
						<!-- <div class="pagination">Đơn hàng</div> -->
						<!-- <div class="pagination">phí ship</div> -->
						<div class="pagination">Tổng tiền</div>
					</td>
					<td>
						<!-- <div class="pagination" id="sum_price"> <?php if(get_tong_tien2($item['id'])!=""){ ?> <?=number_format(get_tong_tien2($item['id'])-$item['giagiam'],0, ',', '.')?>&nbsp;VNĐ<?php } ?></div> -->
						<!-- <div class="pagination"><?=number_format($item['phivanchuyen'],0, ',', '.')?>&nbsp;VNĐ</div> -->
						<div class="pagination text-danger" id="sum_price"> <?php if(get_tong_tien($item['id'])!=""){ ?> <?=number_format(get_tong_tien($item['id'])-$item['giagiam'],0, ',', '.')?>&nbsp;VNĐ<?php } ?></div>
					</td>
				</tr>
			</tfoot>   
			<tbody>
				<?php      
				$tongtien=0;          
				for($i=0,$count_donhang=count($result_ctdonhang);$i<$count_donhang;$i++){	
					$pid=$result_ctdonhang[$i]['id_product'];
					$_product = fetch_array("select * from #_product where id='".$pid."' ");
					$pname= $_product["ten_$lang"];
					$pphoto= $_product["photo"];
					
					$tongtien+=	$result_ctdonhang[$i]['gia']*$result_ctdonhang[$i]['soluong'];				
					?>
					<tr id="productct<?=$result_ctdonhang[$i]['id']?>">
						<td><?=$i+1?></td>
						<td><?=$pname?></td>
						<td align="center"><?=number_format($result_ctdonhang[$i]['gia'],0, ',', '.')?>&nbsp;VNĐ</td>
						<td align="center"><input type="text" class="tipS" style="width:50px; text-align:center" original-title="Nhập số lượng sản phẩm" maxlength="3" value="<?=$result_ctdonhang[$i]['soluong']?>" onchange="update(<?=$result_ctdonhang[$i]['id']?>)" id="product<?=$result_ctdonhang[$i]['id']?>">
							<div id="ajaxloader"><img class="numloader" id="ajaxloader<?=$result_ctdonhang[$i]['id']?>" src="images/loader.gif" alt="loader" /></div>
						&nbsp;</td>
						<td align="center" id="id_price<?=$result_ctdonhang[$i]['id']?>"><?=number_format($result_ctdonhang[$i]['gia']*$result_ctdonhang[$i]['soluong'],0, ',', '.')?>&nbsp;VNĐ</td>
						<td>
							<?php 
							$d->reset();
							$sql = "select id,trangthai from table_tinhtrang";
							$d->query($sql);
							$tinhtrang=$d->result_array();
							$disable="";
							if($result_ctdonhang[$i]['trangthai']==4)
								$disable='disabled';
							?>
							<select class="form-control" onchange="tinhtrang(<?=$result_ctdonhang[$i]['id']?>)" <?=$disable?> id="tinhtrang<?=$result_ctdonhang[$i]['id']?>">
								<?php for($j=0;$j<count($tinhtrang);$j++) { 
									$select="";      				 
									if($tinhtrang[$j]['id']==$result_ctdonhang[$i]['trangthai'])
										$select='selected';

									?>
									<option value="<?=$tinhtrang[$j]['id']?>" <?=$select?>><?=$tinhtrang[$j]['trangthai']?></option>
								<?php } ?>
							</select>
						</td>
         <!--  <td>
          		<?php 
          			$d->reset();
		            $sql = "select username from table_thanhvien where id='".$result_ctdonhang[$i]['id_thanhvien']."'";
		            $result=mysql_query($sql);
		            $thanhvien =mysql_fetch_array($result);
		            echo @$thanhvien['username'];
          		?>
          	</td> -->
          	<td class="actBtns"><a class="smallButton tipS" original-title="Xóa sản phẩm" href="javascript:del(<?=$result_ctdonhang[$i]['id']?>)"><img src="./images/icons/dark/close.png" alt=""></a></td>
          </tr>
      <?php } ?>
  </tbody>
</table>


</div>

<div class="widget">
	<div class="title"><img src="./images/icons/dark/list.png" alt="" class="titleIcon" />
		<h6>Thông tin thêm</h6>
	</div>

	<div class="formRow">
		<label>Nội Dung :</label>
		<div class="formRight">
			<textarea rows="8" cols="" title="Viết ghi chú cho đơn hàng" class="form-control tipS" name="ghichu" id="ghichu"><?=@$item['ghichu']?></textarea>
		</div>
		<div class="clear"></div>
	</div>	



	<div class="formRow">
		<div class="formRight">	     
			<input type="hidden" name="id" id="id_this_post" value="<?=@$item['id']?>" />
			<input type="button" class="btn btn-primary" onclick="TreeFilterChanged2(); return false;" value="Cập nhật" />
		</div>
		<div class="clear"></div>
	</div>

</div>


</form>  