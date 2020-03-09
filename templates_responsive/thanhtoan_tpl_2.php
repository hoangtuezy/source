<?php
$_SESSION['phivanchuyen'] =0;
$pt_thanhtoan = result_array("select * from #_httt");
?>
<script type="text/javascript">
function validEmail(obj) {
	var s = obj.value;
	for (var i=0; i<s.length; i++)
		if (s.charAt(i)==" "){
			return false;
		}
	var elem, elem1;
	elem=s.split("@");
	if (elem.length!=2)	return false;

	if (elem[0].length==0 || elem[1].length==0)return false;

	if (elem[1].indexOf(".")==-1)	return false;

	elem1=elem[1].split(".");
	for (var i=0; i<elem1.length; i++)
		if (elem1[i].length==0)return false;
	return true;
}//Kiem tra dang email
function IsNumeric(sText)
{
	var ValidChars = "0123456789";
	var IsNumber=true;
	var Char;

	for (i = 0; i < sText.length && IsNumber == true; i++)
	{
		Char = sText.charAt(i);
		if (ValidChars.indexOf(Char) == -1)
		{
			IsNumber = false;
		}
	}
	return IsNumber;
}//Kiem tra dang so
function check()
		{
			var frm_order 	= document.frm_order;

			if(frm_order.ten.value=='')
			{
				alert( "Bạn chưa điền họ tên." );
				frm_order.ten.focus();
				return false;
			}
			if(frm_order.dienthoai.value=='')
			{
				alert( "Bạn chưa điền điện thoại." );
				frm_order.dienthoai.focus();
				return false;
			}
			if(frm_order.diachi.value=='')
			{
				alert( "Bạn chưa điền địa chỉ." );
				frm_order.diachi.focus();
				return false;
			}

			if(frm_order.email.value=='')
			{
				alert( "Bạn chưa điền email." );
				frm_order.email.focus();
				return false;
			}
			if(!validEmail(frm_order.email)){
				alert('Vui lòng nhập đúng địa chỉ email');
				frm_order.email.focus();
				return false;
			}
			frm_order.submit();
		}
</script>
<div id="product-detail" class="relative w-100">
           <table border="0" cellpadding="0px" cellspacing="1px" style="font-family:Verdana, Geneva, sans-serif; font-size:13px;" width="100%" class="table">
    	<?
			if(is_array($_SESSION['cart'])){
            	echo '<tr class="cart_table_head"><td align="center">STT</td><td>Hình Ảnh</td><td>Tên</td><td align="center" class="vs-md">Giá</td><td align="center" class="vs-md">Số lượng</td><td align="center">Tổng giá</td></tr>';
				$max=count($_SESSION['cart']);
				for($i=0;$i<$max;$i++){
					$pid=$_SESSION['cart'][$i]['productid'];
					$q=$_SESSION['cart'][$i]['qty'];
					$color=$_SESSION['cart'][$i]['color_id'];
					$size=$_SESSION['cart'][$i]['size_id'];
					$pname=get_product_name($pid);
					$tags_colors = result_array("select * from #_tags where hienthi=1 and type='mau-sac' ");
					$product_colors = result_array('select * from #_thuoctinh where type="color" and id_product="'.$pid.'"');

					if($q==0) continue;
			?>
            		<tr bgcolor="#FFFFFF" height="40px" class="p-2">
            			<td width="4%" align="center"><?=$i+1?></td>
            		<td width="12%"><img src="thumb/1-120-80/upload/product/<?=get_hinh($pid)?>" onerror="this.src='img/120x80/120x80'"></td>

            		<td width="29%" class="texgyreb fs-14 text-blue">
            			<div style="font-size: 17px;"><?=$pname?></div><br />
            			<div class="v-md">Số lượng: <?=$q?></div><br />
            			<div class="v-md">Đơn giá: <?=price(get_price($pid))?></div><br />
            		</td>
                    <td width="20%" align="center" class="texgyreb fs-14 text-red vs-md"><?=price(get_price($pid))?></td>
                    <td width="14%" align="center" class="vs-md"><?=$q?></td>
                    <td width="14%" align="center" class="texgyreb fs-14 text-red"><?= price(get_price($pid) * $q) ?></td>
            		</tr>
            <?
				}
			?>
			<tr><td colspan="6">
              <table width="100%" cellpadding="0" cellspacing="0" border="0">
              <tr>
              <td style="background:#E6E6E6; height:20px;text-align:right;padding:15px;" >
                <b>Tổng giá bán: <span class="text-red"><?=price(get_order_total())?></span></b></td>
             </tr>
             </table>
                </td></tr>
			<?
            }
			else{
				echo "<tr bgColor='#FFFFFF'><td>There are no items in your shopping cart!</td>";
			}
		?>
        </table>
        <div class="main_title" style="margin-top: 15px;">
					<h3 class="thanhtoan-title" >THÔNG TIN KHÁCH HÀNG</h3>
        	
        </div>
        <div class=" bg-white">

    	<div class="row">
    <div class="col-sm-6 col-12 float-left bg-white">
    <form method="post" name="frm_order" action="" enctype="multipart/form-data" onsubmit="return check();" >
    <div class="form-group">
	    <input type="text" class="form-control" id="ten" name="ten" value="<?=$_POST['ten']?>" placeholder="<?=_hovaten?>">
	 </div>
     <div class="form-group">
	    <input type="text" class="form-control" id="dienthoai" name="dienthoai" value="<?=$_POST['dienthoai']?>" placeholder="<?=_dienthoai?>">
	 </div>
	 <div class="form-group">
	    <input type="text" class="form-control" id="diachi" name="diachi" value="<?=$_POST['diachi']?>" placeholder="<?=_diachi?>">
	 </div>
      <div class="form-group">
	    <input type="text" class="form-control" id="email" name="email" value="<?=$_POST['email']?>" placeholder="Email">
	 </div>
     <div class="form-group">
	    <textarea name="noidung" cols="62" rows="10" class="form-control"  style="width: 100%;padding: 8px 20px;height: 100px;"><?=$_POST['noidung']?></textarea>
	 </div>
	 <h3 class="thanhtoan-title">PHƯƠNG THỨC THANH TOÁN</h3>
	  <div class="form-group">
	  <select class="form-control" name="httt" id="httt">
	  		<?php foreach($pt_thanhtoan as $item){ ?>
<option value="<?=$item["id"]?>"><?=$item["ten"]?></option>

	  		<?php } ?>
	  	</select>
	  </div>
    <div class="form-group">
        <input title='tiếp tục' class="btn btn-giohang-thanhtoan" type="submit" value="Tiếp tục" style="cursor:pointer;"/>
    </div>
    
<!-- <input type="hidden" name="recaptcha_response" id="recaptchaResponse" class="recaptchaResponse"> -->
            </div>

            <?php
            $giohang_contact = fetch_array("select noidung_$lang from #_company where type='taikhoan'");

            ?>
            <div class="col-sm-6 col-12">
					<?=$giohang_contact["noidung_$lang"]?>		

            </div>
						<div class="clearfix"></div>
         </div>

				 <script>
				 function number_format( number, decimals, dec_point, thousands_sep ) {
var n = number, c = isNaN(decimals = Math.abs(decimals)) ? 2 : decimals;
var d = dec_point == undefined ? "," : dec_point;
var t = thousands_sep == undefined ? "." : thousands_sep, s = n < 0 ? "-" : "";
var i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;
return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
}
				 	$(document).ready(function(){
						$("select#thanhpho").on('change',function(){
							var optionSelected = $("option:selected", this);
	    				var valueSelected = this.value;
							var _phi_tp = optionSelected.data("phivanchuyen");
							$.ajax({
								method: 'POST',
								url: 'ajax/quanhuyen.php',
								data: {'id_thanhpho':valueSelected},
								success: function(data){
									$("select#quanhuyen").html(data);
								}
							});
						});

							$("select#quanhuyen").on('change',function(){
								var optionSelected = $("option:selected", this);
								var _phi_thanhpho = $("select#thanhpho option:selected");
								var _phi_quanhuyen = optionSelected.data("phivanchuyen");
								var phivanchuyen = _phi_quanhuyen;
								if(_phi_quanhuyen == 0){
									phivanchuyen = _phi_thanhpho.data("phivanchuyen");
								}
								$("span.phivanchuyen").html(number_format(phivanchuyen,0) + ' VNĐ');
								$.ajax({
									method: 'POST',
									url: 'ajax/update_phivanchuyen.php',
									data: {'phivanchuyen':phivanchuyen},
									success: function(data){
										$("span.tongthanhtien").html(number_format(data,0)+' VNĐ');
									},
									complete: function(){
										$("input.phivanchuyen_fn").val(phivanchuyen);
									}
								});
							});
					});
				 </script>
				 <input type="hidden" name="id_color" value="<?=$color?>" class="phivanchuyen_fn"/>
				 <input type="hidden" name="id_size" value="<?=$size?>" class="phivanchuyen_fn"/>
				 <input type="hidden" name="phivanchuyen" value="" class="phivanchuyen_fn"/>
 			 </form>
 			 </div>
 			 <div class="clearfix"></div>
</div>