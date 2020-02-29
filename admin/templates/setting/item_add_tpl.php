<script type="text/javascript">		
	$(document).ready(function() {
		$('.chonngonngu li a').click(function(event) {
			var lang = $(this).attr('href');
			$('.chonngonngu li a').removeClass('active');
			$(this).addClass('active');
			$('.lang_hidden').removeClass('active');
			$('.lang_'+lang).addClass('active');
			return false;
		});
	});

</script>
<div class="control_frm breadcrumb" style="margin-top:25px;">
	<div class="bc">
		<ul id="breadcrumbs" class="breadcrumbs">
			<li><a href="index.php?com=setting&act=capnhat"><span>Thiết lập hệ thống</span></a></li>
			<li class="current"><a href="#" onclick="return false;">Cấu hình website</a></li>
		</ul>
		<div class="clear"></div>
	</div>
</div>
<script type="text/javascript">		
	function TreeFilterChanged2(){		
		$('#validate').submit();		
	}
</script>
<form name="supplier" id="validate" class="form" action="index.php?com=setting&act=save&curPage=<?=$_REQUEST['curPage']?>" method="post" enctype="multipart/form-data">
	

	<div class="widget">
		<?php include _template."helper/lang.php";?>
		
		<?php 
		$txt_title = _tieude;
		$txt_key = "ten_";
		include _template."helper/input_text_lang.php";
		?>

		<?php 
		$txt_title = _slogan;
		$txt_key = "slogan_";
		include _template."helper/input_text_lang.php";
		?>

		<?php 
		$txt_title = "Địa Chỉ";
		$txt_key = "diachi_";
		include _template."helper/input_text_lang.php";
		?>

		<?php 
		$txt_title = "Email";
		$txt_key = "email";
		include _template."helper/input_text.php";
		?>

		<?php 
		$txt_title = "Website";
		$txt_key = "website";
		include _template."helper/input_text.php";
		?>

		<?php 
		$txt_title = "Iframe bản đồ";
		$txt_key = "toado";
		include _template."helper/textarea.php";
		?>


		<div class="formRow">
			<label>Sản phẩm phân trang</label>
			<div class="formRight">
				<input type="text" name="sanpham" title="Nhập số sản phẩm trang chủ" id="sanpham" class="tipS form-control validate[required]" value="<?=@$item['sanpham']?>" />
			</div>
			<div class="clear"></div>
		</div>
		
		<!-- <div class="formRow">
			<label>Đóng dấu ảnh</label>
			<div class="formRight">
				 <div class="mt10"><img src="../upload/watermark.png"  alt="NO PHOTO" width="100" /></div><br>
				<input type="file" id="dongdau" name="dongdau" />
				<div class="note"> width : 400px - Height : 400px</div>
			</div>
			<div class="clear"></div>
		</div>
 -->



		

	</div>
	<div class="widget mt-4 card">
		<div class="title"><img src="./images/icons/dark/record.png" alt="" class="titleIcon" />
			<h6>Liên Kết</h6>
		</div>
		<?php 
		$setting_mxh = array(
			'hotline' => 'Hotline',
			'dienthoai' => 'Điện thoại',
			'facebook' => 'Facebook',
			'zalo' => 'Zalo',
			'viber' => 'Viber',
			'youtube' => 'Youtube'
		);
		foreach($setting_mxh as $txt_key => $txt_title) {
			include _template."helper/input_text.php";
		}
		?>

	</div>
	
	<div class="widget mt-4 card">
		<div class="title"><img src="./images/icons/dark/record.png" alt="" class="titleIcon" />
			<h6>Nội dung seo</h6>
		</div>			
		
		<div class="formRow">
			<label>Title</label>
			<div class="formRight">
				<input type="text" value="<?=@$item['title']?>" name="title" title="Nội dung thẻ meta Title dùng để SEO" class="tipS form-control" />
			</div>
			<div class="clear"></div>
		</div>
		
		<div class="formRow">
			<label>Từ khóa</label>
			<div class="formRight">
				<input type="text" value="<?=@$item['keywords']?>" name="keywords" title="Từ khóa chính cho website" class="tipS form-control" />
			</div>
			<div class="clear"></div>
		</div>
		
		<div class="formRow">
			<label>Description:</label>
			<div class="formRight">
				<textarea rows="8" cols="" title="Nội dung thẻ meta Description dùng để SEO" class="tipS form-control" name="description"><?=@$item['description']?></textarea>
				<input readonly="readonly form-control" type="text" style="width:25px; margin-top:10px; text-align:center;" name="des_char" value="<?=@$item['des_char']?>" /> ký tự <b>(Tốt nhất là 160 ký tự)</b>
			</div>
			<div class="clear"></div>
		</div>	

		<div class="formRow">
			<label>Head code :</label>
			<div class="formRight">
				<textarea rows="8" cols="" title="Scriptcode" class="tipS form-control" name="scriptcode"><?=@$item['scriptcode']?></textarea>
			</div>
			<div class="clear"></div>
		</div>	
		
		<div class="formRow">
			<label>Body code :</label>
			<div class="formRight">
				<textarea rows="8" cols="" title="Bodycode" class="tipS form-control" name="bodycode"><?=@$item['bodycode']?></textarea>
			</div>
			<div class="clear"></div>
		</div>	

		<div class="formRow">
			<div class="formRight">
				<input type="hidden" name="id" id="id_this_setting" value="<?=@$item['id']?>" />
				<input type="submit" class="btn btn-primary"  value="Hoàn tất" />
			</div>
			<div class="clear"></div>
		</div> 			
	</div>


</form>   