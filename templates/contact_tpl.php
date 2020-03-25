<script type="text/javascript" src="assets/js/my_script.js"></script>
<script type="text/javascript">
function js_submit(){
  if(isEmpty(document.getElementById('ten'), "Xin nhập Họ tên.")){
    document.getElementById('ten').focus();
    return false;
  }
  
  if(isEmpty(document.getElementById('diachi'), "Xin nhập địa chỉ.")){
    document.getElementById('diachi').focus();
    return false;
  }
  
  if(isEmpty(document.getElementById('dienthoai'), "Xin nhập Số điện thoại.")){
    document.getElementById('dienthoai').focus();
    return false;
  }
  
  if(!isNumber(document.getElementById('dienthoai'), "Số điện thoại không hợp lệ.")){
    document.getElementById('dienthoai').focus();
    return false;
  }
  
  if(!check_email(document.frm.email.value)){
    alert("Email không hợp lệ");
    document.frm.email.focus();
    return false;
  }
  
  if(isEmpty(document.getElementById('tieude'), "Xin nhập Chủ đề.")){
    document.getElementById('tieude').focus();
    return false;
  }
  
  if(isEmpty(document.getElementById('noidung'), "Xin nhập Nội dung.")){
    document.getElementById('noidung').focus();
    return false;
  }
  
  document.frm.submit();
}
</script>
<div class="container">
<div class="row">
   
    <div class="col-md-6 col-12">
    <form method="post" name="frm" action="" enctype="multipart/form-data" class="form-horizontal" role="form">
        <div class="form-row">
             <label class="col-md-12 control-label"><?=_hovaten?><font color="red">*</font></label>
             <div class="col-md-12">
                <input type="text" id="ten" name="ten" class="form-control">
            </div>
        </div>
        <div class="form-row">
             <label class="col-md-12 control-label"><?=_diachi?><font color="red">*</font></label>
             <div class="col-md-12">
                <input type="text" id="diachi" name="diachi" class="form-control">
            </div>
        </div>
        <div class="form-row">
             <label class="col-md-12 control-label"><?=_dienthoai?><font color="red">*</font></label>
             <div class="col-md-12">
                <input type="text" id="dienthoai" name="dienthoai" class="form-control">
            </div>
        </div>
        <div class="form-row">
             <label class="col-md-12 control-label">Email<font color="red">*</font></label>
             <div class="col-md-12">
                <input type="text" id="inputEmail3" name="email" class="form-control">
            </div>
        </div>
        <div class="form-row">
             <label class="col-md-12 control-label"><?=_chude?><font color="red">*</font></label>
             <div class="col-md-12">
                <input type="text" id="tieude" name="tieude" class="form-control">
            </div>
        </div>
        <div class="form-row">
             <label class="col-md-12 control-label"><?=_noidung?><font color="red">*</font></label>
             <div class="col-md-12">
                <textarea name="noidung" class="form-control" id="noidung" rows="5" ></textarea>
            </div>
        </div>
        
        <div class="form-row mt-3">
            <div class="col-md-12">
              <button type="button" class="btn btn-dark" id="button" onclick="js_submit();"><?=_gui?></button>
              <button type="button" class="btn btn-secondary" onclick="document.frm.reset();"><?=_nhaplai?></button>
            </div>
        </div>
        <input type="hidden" name="recaptcha_response" id="recaptchaResponse" class="recaptchaResponse">  
    </form>
    </div>
     <div class="col-md-6 col-xs-12 col-12">
      <div class="noidung_contact noidung"><?=$row_detail['noidung_'.$lang];?></div> 
    </div>    
    <div class="col-12 col-xs-12" style="margin: 30px 0">
      <div id="map_canvas" class="w-100"><?=$row_setting['toado']?></div>
    </div>
</div>
<div class="clear" style="height:20px"></div>              
</div>