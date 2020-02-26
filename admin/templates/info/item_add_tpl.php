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
$('.update_stt').keyup(function(event) {
	var id = $(this).attr('rel');
	var table = 'baiviet_photo';
	var value = $(this).val();
	$.ajax ({
		type: "POST",
		url: "ajax/update_stt.php",
		data: {id:id,table:table,value:value},
		success: function(result) {
		}
	});
});
$('.delete_images').click(function(){
if (confirm('Bạn có muốn xóa hình này ko ? ')) {
var id = $(this).attr('title');
	var table = 'info_photo';
var links = "<?=_upload_hinhanh;?>";
$.ajax ({
type: "POST",
url: "ajax/delete_images.php",
data: {id:id,table:table,links:links},
success: function(result) {
}
});
$(this).parent().slideUp();
}
return false;
});
$('.themmoi').click(function(e) {
$.ajax ({
type: "POST",
url: "ajax/khuyenmai.php",
success: function(result) {
$('.load_sp').append(result);
}
});
});
$('.delete').click(function(e) {
$(this).parent().remove();
});

});

</script>
<div class="control_frm breadcrumb" style="margin-top:25px;">
		<div class="bc">
			<ul id="breadcrumbs" class="breadcrumbs">
				<li><a href="index.php?com=info&act=capnhat<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>"><span>Cập nhật <?=$title_main?></span></a></li>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
<form name="supplier" id="validate" class="form" action="index.php?com=info&act=save<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>" method="post" enctype="multipart/form-data">
	
	<div class="widget">
			<?php include _template."helper/lang.php";?>
		<?php if($config_images=='true'){ ?>
		<div class="formRow">
			<label>Tải hình ảnh:</label>
			<div class="formRight">
				<input type="file" id="file" name="file" />
				<img src="./images/question-button.png" alt="Upload hình" class="icon_question tipS" original-title="Tải hình ảnh (ảnh JPEG, GIF , JPG , PNG)">
				<div class="note"> width : <?php echo _width_thumb*$ratio_;?> px , Height : <?php echo _height_thumb*$ratio_;?> px </div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="formRow">
			<label>Hình Hiện Tại :</label>
			<div class="formRight">
				
				<div class="mt10"><img src="<?=_upload_hinhanh.$item['thumb']?>"  alt="NO PHOTO" width="100" /></div>
			</div>
			<div class="clear"></div>
		</div>
		<?php } ?>
		<?php if($config_video=='true'){ ?>
		<div class="formRow">
			<label>Tải video:</label>
			<div class="formRight">
				<input type="file" id="video" name="video" />
				<img src="./images/question-button.png" alt="Upload hình" class="icon_question tipS" original-title="Tải hình ảnh (ảnh JPEG, GIF , JPG , PNG)">
				<div class="note">upload video mp4,mpeg,avi </div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="formRow">
			<label>Video Hiện Tại :</label>
			<div class="formRight">
				
				<div class="mt10"><?=_upload_hinhanh.$item['video']?></div>
			</div>
			<div class="clear"></div>
		</div>
		<?php } ?>

		<?php if($config_img=='true'){ ?>
		<div class="formRow">
			<label>Hình ảnh kèm theo: </label>
			<div class="formRight">
				<a class="file_input" data-jfiler-name="files" data-jfiler-extensions="jpg, jpeg, png, gif"><img src="images/image_add.png" alt="" width="100"></a>
				
				
				<?php if($act=='capnhat'){?>
				<?php if(count($ds_photo)!=0){?>
				<?php for($i=0;$i<count($ds_photo);$i++){?>
				<div class="item_trich">
					<img class="img_trich" width="140px" height="110px" src="<?=_upload_hinhanh.$ds_photo[$i]['photo']?>" />
					<input type="text" rel="<?=$ds_photo[$i]['id']?>" value="<?=$ds_photo[$i]['stt']?>" class="update_stt tipS" />
					<a class="delete_images" title="<?=$ds_photo[$i]['id']?>"><img src="images/delete.png"></a>
				</div>
				<?php } ?>
				
				<?php }?>
				<?php }?>
			</div>
			<div class="clear"></div>
		</div>
		<?php } ?>
			<?php include _template."helper/ten_lang.php";?>
			<?php include _template."helper/mota_lang.php";?>
			<?php include _template."helper/noidung_lang.php";?>
		</div>
		<div class="widget">
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
					<input type="text" value="<?=@$item['keywords']?>" name="keywords" title="Từ khóa chính cho sản phẩm" class="tipS form-control" />
				</div>
				<div class="clear"></div>
			</div>
			
			<div class="formRow">
				<label>Description:</label>
				<div class="formRight">
					<textarea rows="8" cols="" title="Nội dung thẻ meta Description dùng để SEO" class="tipS form-control" name="description"><?=@$item['description']?></textarea>
					<input readonly="readonly" type="text" style="width:25px; margin-top:10px; text-align:center;" name="des_char" value="<?=@$item['des_char']?>" /> ký tự <b>(Tốt nhất là 160 ký tự)</b>
				</div>
				<div class="clear"></div>
			</div>
			<div class="formRow">
				<div class="formRight">
					<input type="hidden" name="id_cat" id="id_this_product" value="<?=@$item['id_cat']?>" />
					<input type="submit" class="btn btn-primary" onclick="TreeFilterChanged2(); return false;" value="Hoàn tất" />
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</form>
	<script>
	$(document).ready(function() {
	$('.file_input').filer({
	showThumbs: true,
	templates: {
box: '<ul class="jFiler-item-list"></ul>',
item: '<li class="jFiler-item">\
	<div class="jFiler-item-container">\
		<div class="jFiler-item-inner">\
			<div class="jFiler-item-thumb">\
				<div class="jFiler-item-status"></div>\
				<div class="jFiler-item-info">\
					<span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
				</div>\
				{{fi-image}}\
			</div>\
			<div class="jFiler-item-assets jFiler-row">\
				<ul class="list-inline pull-left">\
					<li><span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span></li>\
				</ul>\
				<ul class="list-inline pull-right">\
					<li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
				</ul>\
				</div>\<input type="text" name="stthinh[]" class="stthinh" placeholder="Nhập STT" />\
			</div>\
		</div>\
	</li>',
	itemAppend: '<li class="jFiler-item">\
		<div class="jFiler-item-container">\
			<div class="jFiler-item-inner">\
				<div class="jFiler-item-thumb">\
					<div class="jFiler-item-status"></div>\
					<div class="jFiler-item-info">\
						<span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
					</div>\
					{{fi-image}}\
				</div>\
				<div class="jFiler-item-assets jFiler-row">\
					<ul class="list-inline pull-left">\
						<span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span>\
					</ul>\
					<ul class="list-inline pull-right">\
						<li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
					</ul>\
					</div>\<input type="text" name="stthinh[]" class="stthinh" placeholder="Nhập STT" />\
				</div>\
			</div>\
		</li>',
		progressBar: '<div class="bar"></div>',
		itemAppendToEnd: true,
		removeConfirmation: true,
		_selectors: {
		list: '.jFiler-item-list',
		item: '.jFiler-item',
		progressBar: '.bar',
		remove: '.jFiler-item-trash-action',
		}
		},
		addMore: true
		});
		});
		</script>