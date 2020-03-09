<?php
$thanhtoan_arr = array('pay_pos','pay_transfer','pay_momo','pay_paypal','pay_vnpay');
$info_pay = array();
foreach($thanhtoan_arr as $_pay){
	$info_pay[$_pay] = fetch_array("select noidung_$lang from #_company where type='".$_pay."'");
}

?>
<script type="text/javascript" src="assets/js/my_script.js"></script>
<script>
	function is_sender(){
		return $("#reciver_check").is(':checked');
	}
	
</script>
<script>

	var require_fields = ['ten','dienthoai','email','quanhuyen','thanhpho','input_datetime'];
	function check_sender()
		{
			var frm_order 	= document.frm_order;

			if(frm_order.sender_hovaten.value=='')
			{
				alert( "Bạn chưa điền họ tên." );
				frm_order.sender_hovaten.focus();
				return false;
			}
			if(frm_order.sender_dienthoai.value=='')
			{
				alert( "Bạn chưa điền điện thoại." );
				frm_order.sender_dienthoai.focus();
				return false;
			}
			if(frm_order.sender_diachi.value=='')
			{
				alert( "Bạn chưa điền địa chỉ." );
				frm_order.sender_diachi.focus();
				return false;
			}

			if(frm_order.sender_email.value=='')
			{
				alert( "Bạn chưa điền email." );
				frm_order.sender_email.focus();
				return false;
			}
			if(isEmail(frm_order.sender_email)===false){
				alert('Vui lòng nhập đúng địa chỉ email người mua');
				frm_order.sender_email.focus();
				return false;
			}
			return true;
		}
		function check_receiver()
		{
			var frm_order 	= document.frm_order;

			if(frm_order.receiver_hovaten.value=='')
			{
				alert( "Bạn chưa điền họ tên." );
				frm_order.receiver_hovaten.focus();
				return false;
			}
			if(frm_order.receiver_dienthoai.value=='')
			{
				alert( "Bạn chưa điền điện thoại." );
				frm_order.receiver_dienthoai.focus();
				return false;
			}
			if(frm_order.receiver_diachi.value=='')
			{
				alert( "Bạn chưa điền địa chỉ." );
				frm_order.receiver_diachi.focus();
				return false;
			}

			if(frm_order.receiver_email.value=='')
			{
				alert( "Bạn chưa điền email." );
				frm_order.receiver_email.focus();
				return false;
			}
			if(!check_email(frm_order.receiver_email)){
				alert('Vui lòng nhập đúng địa chỉ email');
				frm_order.receiver_email.focus();
				return false;
			}
			return true;
		}
	function thanhtoan_check(){
		var _isSender = is_sender();
		var _check_sender= check_sender();
		if(_isSender===false){
 		var _check_receiver= check_receiver();
		}else{
		var _check_receiver = true;	
		}
		if((_check_sender && _check_receiver) === true){
			frm_order.submit();
			return true;
		}
		return false;
	}
	function phivanchuyen(){
		var _tinh_vc = 0;
		var _quan_vc =0;
		var _isSender = is_sender();
		if(_isSender===true){
			_quan_vc = $("#sender_quanhuyen option:selected").data('phivanchuyen');
			_tinh_vc = $("#sender_thanhpho option:selected").data('phivanchuyen');
		console.log(_tinh_vc);
		console.log(_quan_vc);
		}else{
			_quan_vc = $("#receiver_quanhuyen option:selected").data('phivanchuyen');
			_tinh_vc = $("#receiver_thanhpho option:selected").data('phivanchuyen');

		}
		if(_quan_vc > 0) return _quan_vc;
		return _tinh_vc;
	}
	function load_phivanchuyen(){
		var _pvc = phivanchuyen();
		var _tamtinh = $(".tamtinh").data('value');
		console.log(_tamtinh);
		if(_pvc > 0){
			$("span.phivanchuyen").html(price(_pvc));
			$(".final_total").html(price(parseInt(_tamtinh)+parseInt(_pvc)));
		}
	}
</script>
<div class="container">
<form method="POST" name="frm_order" action="" enctype="multipart/form-data" onsubmit="return thanhtoan_check();" >
<div class="row">
	<div class="col-md-7 col-sm-12 col-xs-12 col-12">
		<div class="card border-success mb-4">
			<div class="card-header border-success">
				THÔNG TIN NGƯỜI MUA
				
			</div>
			<div class="card-body border-success ">
				<div class="form-group">
					<label for="hoten" class="col-sm-12 col-md-2 col-xs-12 col-12 col-form-label"><?=_hovaten?></label>
					<div class="col-md-10 col-sm-12 col-xs-12 col-12">
						<input type="text" class="form-control" id="sender_hovaten" value="" name="ten" required>
					</div>
				</div>
				<div class="form-group">
					<label for="email" class="col-sm-12 col-md-2 col-xs-12 col-12 col-form-label"><?=_email?></label>
					<div class="col-md-10 col-sm-12 col-xs-12 col-12">
						<input type="email" class="form-control" id="sender_email" name="sender_email" required>
					</div>
				</div>
				<div class="form-group">
					<label for="diachi" class="col-sm-12 col-md-2 col-xs-12 col-12 col-form-label"><?=_diachi?></label>
					<div class="col-md-10 col-sm-12 col-xs-12 col-12">
						<input type="text" class="form-control" id="sender_diachi" name="sender_diachi" required>
					</div>
				</div>

				<div class="form-group">
					<label for="dienthoai" class="col-sm-12 col-md-2 col-xs-12 col-12 col-form-label"><?=_dienthoai?></label>
					<div class="col-md-10 col-sm-12 col-xs-12 col-12">
						<input type="text" class="form-control" id="sender_dienthoai" name="sender_dienthoai" required>
					</div>
				</div>
				<div class="form-group">
					<label for="tinhthanh" class="col-sm-12 col-md-2 col-xs-12 col-12 col-form-label"><?=_tinhthanh?></label>
					<div class="col-md-4 col-sm-12">
						<select class="custom-select location_thanhpho" id="sender_thanhpho" name="sender_thanhpho" data-target="sender">
							<option>Chọn...</option>
							<?php
							$city_info = result_array("select * from #_city_list where hienthi=1");
							foreach($city_info as $city) { ?>
								<option value="<?=$city["id"]?>" data-phivanchuyen="<?=$city["phivanchuyen"]?>"><?=$city["ten_$lang"]?></option>
							<?php } ?>
						</select>			
					</div>

					<label for="quanhuyen" class="col-sm-12 col-md-2 col-xs-12 col-12 col-form-label"><?=_quanhuyen?></label>
					<div class="col-md-4 col-sm-12" id="load_sender_quanhuyen">
						<select name="sender_quanhuyen" id="sender_quanhuyen" class="form-control location_quanhuyen" name="sender_quanhuyen">
							<option value="">Quận Huyện</option>
						</select>			
					</div>

				</div>

			</div>
		</div>

		<div class="card border-success mb-4 receiver">
			<div class="card-header border-success">
				THÔNG TIN NGƯỜI NHẬN
				<div class="form-group form-check float-right mb-0">
					<input type="checkbox" class="form-check-input" id="reciver_check" name="ascustomer">
					<label class="form-check-label" for="reciver">Tôi là người mua</label>
				</div>
			</div>
			<div class="card-body border-success receiver">
				<div class="form-group">
					<label for="hoten" class="col-sm-12 col-md-2 col-xs-12 col-12 col-form-label"><?=_hovaten?></label>
					<div class="col-md-10 col-sm-12 col-xs-12 col-12">
						<input type="text" class="form-control" id="receiver_hovaten" value="" name="receiver_ten">
					</div>
				</div>
				<div class="form-group">
					<label for="email" class="col-sm-12 col-md-2 col-xs-12 col-12 col-form-label"><?=_email?></label>
					<div class="col-md-10 col-sm-12 col-xs-12 col-12">
						<input type="email" class="form-control" id="email" name="receiver_email">
					</div>
				</div>

				

				<div class="form-group">
					<label for="dienthoai" class="col-sm-12 col-md-2 col-xs-12 col-12 col-form-label"><?=_dienthoai?></label>
					<div class="col-md-10 col-sm-12 col-xs-12 col-12">
						<input type="text" class="form-control" id="dienthoai"  name="receiver_dienthoai">
					</div>
				</div>
				<div class="form-group">
					<label for="diachi" class="col-sm-12 col-md-2 col-xs-12 col-12 col-form-label"><?=_diachi?></label>
					<div class="col-md-10 col-sm-12 col-xs-12 col-12">
						<input type="text" class="form-control" id="diachi" name="receiver_diachi">
					</div>
				</div>
				<div class="form-group">
					<label for="tinhthanh" class="col-sm-12 col-md-2 col-xs-12 col-12 col-form-label"><?=_tinhthanh?></label>
					<div class="col-md-4 col-sm-12">
						<select class="custom-select location_thanhpho" id="receiver_thanhpho" name="receiver_thanhpho" data-target="receiver">
							<option>Chọn...</option>
							<?php
							$city_info = result_array("select * from #_city_list where hienthi=1");
							foreach($city_info as $city) { ?>
								<option value="<?=$city["id"]?>" data-phivanchuyen="<?=$city["phivanchuyen"]?>"><?=$city["ten_$lang"]?></option>
							<?php } ?>
						</select>						
					</div>

					<label for="quanhuyen" class="col-sm-12 col-md-2 col-xs-12 col-12 col-form-label"><?=_quanhuyen?></label>
					<div class="col-md-4 col-sm-12">
						<select name="receiver_quanhuyen" id="receiver_quanhuyen" class="form-control location_quanhuyen" name="receiver_quanhuyen">
							<option value="">Quận Huyện</option>
						</select>			
					</div>
				</div>
				
			</div>
			<div class="card-footer">
				<div class="form-group">
					<label for="diachi" class="col-sm-3 col-form-label"><?=_thoigiannhan?></label>
					<div class="col-sm-9">
						<input type="text" class="input_datetime form-control" name="input_datetime" autocomplete="false">
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="col-md-5 col-sm-12 col-xs-12 col-12">
		<div class="card mb-4 border-success">
			<div class="card-header border-success">
				Đơn hàng
			</div>
			<div class="card-body border-success">
				<?php foreach($_SESSION['cart'] as $stt => $item){
					$_product = fetch_array("select id,tenkhongdau,photo,ten_$lang,giaban from #_product where id='".$item['productid']."' and hienthi=1");	
					?>
					<div class="order_item mb-3 d-flex">
						<img src="thumb/1-100-80/upload/product/<?=$_product["photo"]?>" alt="<?=$_product["photo"]?>">
						<div class="detail">
							<h3><?=$_product["ten_$lang"]?></h3>
							<div><?=$_product["masp"]?></div>
							<div><?=$item["qty"]?> x <?=price($_product["giaban"])?></div>
						</div>
						<div class="order_item_total">
							<?=price($item["qty"]*$_product["giaban"])?>
						</div>
					</div>
				<?php } ?>
				<div class="total_order">
					<div class="d-flex mb-1">
						<div class="col text-left">Tạm tính</div><div class="col text-right tamtinh" data-value="<?=get_order_total()?>"><?=price(get_order_total())?></div>
					</div>
					<!-- <div class="d-flex mb-1">
						<div class="col text-left">Phí vận chuyển</div><div class="col text-right"><span class="phivanchuyen">0đ</span></div>
					</div> -->
					<div class="d-flex">
						<div class="col text-left">Tổng Giá</div><div class="col text-right"><span class="final_total"><?=price(get_order_total())?></span></div>
					</div>
				</div>
			</div>
		</div>

		<div class="card border-success mb-4 payment">
			<div class="card-header border-success">
				Hình Thức Thanh TOán
			</div>
			<div class="card-body border-success">
				<div class="w-100 mb-2">
					<div class="form-group form-check mb-0">
						<input type="radio" name="payment" class="form-check-input" id="pay_pos" value="pay_pos" checked>
						<label class="form-check-label" for="pay_pos">Giao Hàng Nhận Tiền</label>
					</div>
					<div class="active pt_thanhtoan w-100 pay_pos" >
						<?=$info_pay['pay_pos']["noidung_$lang"]?>
					</div>
				</div>
				<div class="w-100 mb-2">
					<div class="form-group form-check mb-0">
						<input type="radio" name="payment" class="form-check-input" id="pay_transfer" value="pay_transfer">
						<label class="form-check-label" for="pay_transfer">Thanh Toán Chuyển Khoản</label>
					</div>
					<div class="pt_thanhtoan w-100 pay_transfer">
						<?=$info_pay['pay_transfer']["noidung_$lang"]?>
					</div>
				</div>
				<div class="w-100 mb-2 d-none">
					<div class="form-group form-check mb-0">
						<input type="radio" name="payment" class="form-check-input" id="pay_momo" value="pay_momo">
						<label class="form-check-label" for="pay_momo">Thanh Toán Qua Momo</label>
					</div>
					<div class="pt_thanhtoan w-100 pay_momo" >
						<?=$info_pay['pay_momo']["noidung_$lang"]?>
					</div>
				</div>
				<div class="w-100 mb-2  d-none">
					<div class="form-group form-check mb-0">
						<input type="radio" name="payment" class="form-check-input" id="pay_paypal" value="pay_paypal">
						<label class="form-check-label" for="pay_paypal">Thanh Toán Qua Paypal/Visa/Master</label>
					</div>
					<div class="pt_thanhtoan w-100 pay_paypal">
						<?=$info_pay['pay_paypal']["noidung_$lang"]?>
					</div>
				</div>
				<div class="w-100 mb-2  d-none">
					<div class="form-group form-check mb-0">
						<input type="radio" name="payment" class="form-check-input" id="pay_vnpay" value="pay_vnpay">
						<label class="form-check-label" for="pay_vnpay">Thanh Toán Qua VNPAY/ATM/VNBAKING</label>
					</div>
					<div class="pt_thanhtoan w-100 pay_vnpay">
						<?=$info_pay['pay_vnpay']["noidung_$lang"]?>
					</div>
				</div>
				<div class="w-100">
					<input type="submit" class="btn btn-danger" value="TIẾN HÀNH THANH TOÁN">
				</div>
			</div>
			
		</div>
	</div>
</div>
<input type="hidden" name="_crsf" value="<?=$_crsf?>" class="_crsf"/>
</form>

<script>
	$(document).on("click","input.form-check-input",function(){
		$(".pt_thanhtoan").removeClass('active');
		var _id = $(this).attr("id");
		$('.'+_id).addClass('active');
	});
</script>
<script>
	function number_format( number, decimals, dec_point, thousands_sep ) {
		var n = number, c = isNaN(decimals = Math.abs(decimals)) ? 2 : decimals;
		var d = dec_point == undefined ? "," : dec_point;
		var t = thousands_sep == undefined ? "." : thousands_sep, s = n < 0 ? "-" : "";
		var i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;
		return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
	}
	function price(p){
		return number_format(p,"","",".")+"đ";
	}
	$(document).ready(function(){
		$(".location_thanhpho").on('change',function(){
			var _target = $(this).data('target');
			var optionSelected = $("option:selected", this);
			var valueSelected = this.value;
			$.ajax({
				method: 'POST',
				url: 'ajax/quanhuyen',
				data: {'id_tinh':valueSelected},
				success: function(data){
					$("select#"+_target+"_quanhuyen").html(data);
				}
			});
		});

		$(".location_quanhuyen").on('change',function(){
			load_phivanchuyen();
		});
	});
</script>
<script>
	$(document).on("click","#reciver_check",function(){
		var _chk = is_sender();
		$(".card-body.receiver").toggleClass("d-none");
		load_phivanchuyen();
	});
</script>
<link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
<script src="assets/js/jquery.datetimepicker.full.min.js"></script>
<script>
	$().ready(function(){
		$(".input_datetime").datetimepicker({
			format: 'd-m-Y H:i',
				// timepicker:false,
				// minTime:0,
				// formatTime: 'H:i',
				minDate:0,
				// datepicker:false,
			});
		$.datetimepicker.setLocale('vi');
	})
</script>
</div>