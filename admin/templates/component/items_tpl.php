<?php
$component_name = $_REQUEST['type'];

?>
<div class="wrapper">
	<div class="control_frm breadcrumb" style="margin-top:25px;">
    <div class="bc px-3 py-2">
        Quản lý
    </div>
</div>

	<form name="supplier" id="validate" class="form" action="index.php?com=component&act=save<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>" method="post" enctype="multipart/form-data">
		<div class="widget d-none">
			<div class="formRow">
			<label>Component</label>
			<div class="formRight">
				<input type="text" value="<?=!empty($item['name'])?$item['name']:$component_name?>" name="name" class="form-control tipS" readonly/>
			</div>
			<div class="clear"></div>
		</div>
		</div>
		<div class="widget">
		<div class="title"><img src="./images/icons/dark/record.png" alt="" class="titleIcon" />
			<h6>Nội dung seo</h6>
		</div>
  <div class="formRow">
   <label>Tải hình ảnh:</label>
   <div class="formRight">
     <input type="file" id="file" name="file" />
     <img src="./images/question-button.png" alt="Upload hình" class="icon_question tipS" original-title="Tải hình ảnh (ảnh JPEG, GIF , JPG , PNG)">
     <div class="note"> width : <?php echo _width_thumb*$ratio_;?> px , Height : <?php echo _height_thumb*$ratio_;?> px </div>
   </div>
   <div class="clear"></div>
 </div>
 <?php if(!empty($item['photo'])){?>
  <div class="formRow">
   <label>Hình Hiện Tại :</label>
   <div class="formRight">
     
     <div class="mt10"><img src="<?=_upload_component.$item['photo']?>"  alt="NO PHOTO" width="100" /></div>
   </div>
   <div class="clear"></div>
 </div>
<?php } ?>
		<div class="formRow">
			<label>Title</label>
			<div class="formRight">
				<input type="text" value="<?=!empty($item['title'])?$item['title']:$web['component'][$component_name]["title"]?>" name="title" title="Nội dung thẻ meta Title dùng để SEO" class="form-control tipS"  />
			</div>
			<div class="clear"></div>
		</div>
		
		<div class="formRow">
			<label>Từ khóa</label>
			<div class="formRight">
				<input type="text" value="<?=@$item['keywords']?>" name="keywords" title="Từ khóa chính cho danh mục" class="form-control tipS" />
			</div>
			<div class="clear"></div>
		</div>
		
		<div class="formRow">
			<label>Description:</label>
			<div class="formRight">
				<textarea rows="4" cols="" title="Nội dung thẻ meta Description dùng để SEO" class="form-control tipS" name="description"><?=@$item['description']?></textarea>
                <input readonly="readonly" type="text" style="width:25px; margin-top:10px; text-align:center;" name="des_char" value="<?=@$item['des_char']?>" /> ký tự <b>(Tốt nhất là 68 - 170 ký tự)</b>
			</div>
			<div class="clear"></div>
		</div>
		
		<div class="formRow">
			<div class="formRight">
                <input type="hidden" name="name" id="id_this_type" value="<?=$_REQUEST['type']?>" />
                <input type="hidden" name="id" id="id_this_post" value="<?=@$item['id']?>" />
            	<input type="submit" class="btn btn-primary" onclick="TreeFilterChanged2(); return false;" value="Hoàn tất" />
            	<a href="index.php?com=component&act=man<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>" onClick="if(!confirm('Bạn có muốn thoát không ? ')) return false;" title="" class="btn btn-secondary tipS ml-3" original-title="Thoát">Thoát</a>
			</div>
			<div class="clear"></div>
		</div>

	</div>
	</form>
</div>