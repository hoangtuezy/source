
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
			var table = 'seopage_photo';
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
				var table = 'seopage_photo';
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

<div class="wrapper">

	<div class="control_frm breadcrumb" style="margin-top:25px;">
		<div class="bc">
			<ul id="breadcrumbs" class="breadcrumbs">
				<li><a href="index.php?com=seopage&act=add_list<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>"><span>Thêm <?=$title_main?></span></a></li>
				<li class="current"><a href="#" onclick="return false;">Thêm</a></li>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
	<form name="supplier" id="validate" class="form" action="index.php?com=seopage&act=save<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>" method="post" enctype="multipart/form-data">
		<div class="widget">
				<div class="formRow">
					<label>Tải hình ảnh:</label>
					<div class="formRight">
						<input type="file" id="file" name="file" />
						<img src="./images/question-button.png" alt="Upload hình" class="icon_question tipS" original-title="Tải hình ảnh (ảnh JPEG, GIF , JPG , PNG)">
						<div class="note"> width : <?php echo _width_thumb*$ratio_;?> px , Height : <?php echo _height_thumb*$ratio_;?> px </div>
					</div>
					<div class="clear"></div>
				</div>
				<?php if($_GET['act']=='capnhat'){?>
					<div class="formRow">
						<label>Hình Hiện Tại :</label>
						<div class="formRight">
							<div class="mt10"><img src="<?=_upload_hinhanh.$item['thumb']?>"  alt="NO PHOTO" width="100" /></div>
						</div>
						<div class="clear"></div>
					</div>
				<?php }  ?>

				<div class="formRow ">
					<label>Tiêu đề</label>
					<div class="formRight">
						<input type="text" name="ten" title="Nhập tên danh mục" id="ten" class="form-control tipS validate[required]" value="<?=@$item['ten']?>" />
					</div>
					<div class="clear"></div>
				</div>

				<!-- <div class="formRow ">
					<label>Thẻ h1</label>
					<div class="formRight">
						<input type="text" name="h1" title="Nhập tên danh mục" id="h1" class="tipS validate[required]" value="<?=@$item['h1']?>" />
					</div>
					<div class="clear"></div>
				</div>
				
				<div class="formRow ">
					<label>Thẻ h2</label>
					<div class="formRight">
						<input type="text" name="h2" title="Nhập tên danh mục" id="h2" class="tipS validate[required]" value="<?=@$item['h2']?>" />
					</div>
					<div class="clear"></div>
				</div>
				
				<div class="formRow ">
					<label>Thẻ h3</label>
					<div class="formRight">
						<input type="text" name="h3" title="Nhập tên danh mục" id="h3" class="tipS validate[required]" value="<?=@$item['h3']?>" />
					</div>
					<div class="clear"></div>
				</div>
				
				<div class="formRow ">
					<label>Thẻ h4</label>
					<div class="formRight">
						<input type="text" name="h4" title="Nhập tên danh mục" id="h4" class="tipS validate[required]" value="<?=@$item['h4']?>" />
					</div>
					<div class="clear"></div>
				</div>
				
				<div class="formRow ">
					<label>Thẻ h5</label>
					<div class="formRight">
						<input type="text" name="h5" title="Nhập tên danh mục" id="h5" class="tipS validate[required]" value="<?=@$item['h5']?>" />
					</div>
					<div class="clear"></div>
				</div>
				
				<div class="formRow ">
					<label>Thẻ h6</label>
					<div class="formRight">
						<input type="text" name="h6" title="Nhập tên danh mục" id="h6" class="tipS validate[required]" value="<?=@$item['h6']?>" />
					</div>
					<div class="clear"></div>
				</div>
				
				 -->
				<div class="formRow">
					<label>Title</label>
					<div class="formRight">
						<input type="text" value="<?=@$item['title']?>" name="title" title="Nội dung thẻ meta Title dùng để SEO" class="form-control  tipS" />
					</div>
					<div class="clear"></div>
				</div>

				<div class="formRow">
					<label>Từ khóa</label>
					<div class="formRight">
						<input type="text" value="<?=@$item['keywords']?>" name="keywords" title="Từ khóa chính cho danh mục" class="form-control  tipS" />
					</div>
					<div class="clear"></div>
				</div>

				<div class="formRow">
					<label>Description:</label>
					<div class="formRight">
						<textarea rows="4" cols="" title="Nội dung thẻ meta Description dùng để SEO" class="form-control  tipS" name="description"><?=@$item['description']?></textarea>
						<input readonly="readonly" type="text" style="width:25px; margin-top:10px; text-align:center;" name="des_char" value="<?=@$item['des_char']?>" /> ký tự <b>(Tốt nhất là 68 - 170 ký tự)</b>
					</div>
					<div class="clear"></div>
				</div>
				
				<div class="formRow">
					<label>Hiển thị : <img src="./images/question-button.png" alt="Chọn loại" class="icon_que tipS" original-title="Bỏ chọn để không hiển thị danh mục này ! "> </label>
					<div class="formRight">

						<input type="checkbox" name="hienthi" id="check1" value="1" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?> />
						<label>Số thứ tự: </label>
						<input type="text" class="tipS" value="<?=isset($item['stt'])?$item['stt']:1?>" name="stt" style="width:20px; text-align:center;" onkeypress="return OnlyNumber(event)" original-title="Số thứ tự của danh mục, chỉ nhập số">
					</div>
					<div class="clear"></div>
				</div>

			</div>  
			<div class="widget">
				<div class="formRow">
					<div class="formRight">
						<input type="hidden" name="type" id="id_this_type" value="<?=$_REQUEST['type']?>" />
						<input type="hidden" name="id" id="id_this_post" value="<?=@$item['id']?>" />
						<input type="submit" class="btn btn-primary" onclick="TreeFilterChanged2(); return false;" value="Hoàn tất" />
						<a href="index.php?com=seopage&act=man<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>" onClick="if(!confirm('Bạn có muốn thoát không ? ')) return false;" title="" class="btn btn-secondary tipS" original-title="Thoát">Thoát</a>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</form>        
	</div>
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
