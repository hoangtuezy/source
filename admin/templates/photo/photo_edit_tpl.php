<?php
    $d->reset();
    $sql="select id,ten_vi from table_product_list where hienthi =1 order by stt,id desc";
    $d->query($sql);
    $result_list=$d->result_array();
?>
<div class="control_frm breadcrumb" style="margin-top:25px;">
    <div class="bc">
        <ul id="breadcrumbs" class="breadcrumbs">
        	            <li><a href="index.php?com=photo&act=man_photo"><span>Hình ảnh slider</span></a></li>
                                    <li class="current"><a href="#" onclick="return false;">Sửa hình ảnh</a></li>
        </ul>
        <div class="clear"></div>
    </div>
</div>
<script type="text/javascript">		
	function TreeFilterChanged2(){		
				$('#validate').submit();		
	}
</script>
<form name="supplier" id="validate" class="form" action="index.php?com=photo&act=save_photo<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>" method="post" enctype="multipart/form-data">
	<div class="widget">
		<div class="title"><img src="./images/icons/dark/list.png" alt="" class="titleIcon" />
			<h6>Sửa hình ảnh</h6>
		</div>		
        <?php if($config_list=='true'){ ?>
        <div class="formRow">
            <label>Chọn danh mục 1</label>
            <div class="formRight">
                <select id="id_list" name="id_list" class="main_select form-control">
                    <option>Chọn danh mục</option>
                    <?php for ($i=0; $i < count($result_list) ; $i++) { ?>
                    <option value="<?=$result_list[$i]['id']?>" <?php if($result_list[$i]['id']==$item['id_list']) echo 'selected'; ?>><?=$result_list[$i]['ten_vi']?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="clear"></div>
        </div>
        <?php } ?>
		<div class="formRow">
			<label>Tên hình ảnh</label>
			<div class="formRight">
                <input type="text" name="ten_vi" title="Nhập tên hình ảnh" id="name" class="form-control tipS validate[required]" value="<?=@$item['ten_vi']?>" />
			</div>
			<div class="clear"></div>
		</div>
        <div class="formRow">
            <label>Tải hình ảnh:</label>
            <div class="formRight">
                                <input type="file" id="file" name="file" />
                <img src="./images/question-button.png" alt="Upload hình" class="icon_question tipS" original-title="Tải hình ảnh (ảnh JPEG, GIF , JPG , PNG)">
                <span class="note">width : <?php echo _width_thumb*$ratio_;?>px  - Height : <?php echo _height_thumb*$ratio_;?>px</span>
            </div>
            <div class="clear"></div>
                                        

        </div>

        <div class="formRow">
            <label>Hình ảnh hiện tại :</label>
            <div class="formRight">
                  <div class="mt10"><img src="<?=_upload_hinhanh.$item['photo_vi']?>"  alt="NO PHOTO" width="100" /></div>
            </div>
            <div class="clear"></div>
                                        
            
            
        </div>
        <?php if($config_mota=='true'){?>
        <div class="formRow lang_hidden lang_vi active">
            <label>Mô tả</label>
            <div class="ck_editor">
                <textarea rows="4" id="mota_vi" cols="" title="Nhập mô tả . " class="form-control tipS" name="mota_vi"><?=@$item['mota_vi']?></textarea>
            </div>
            <div class="clear"></div>
        </div>

        <div class="formRow lang_hidden lang_en">
            <label>Mô tả (Tiếng anh)</label>
            <div class="ck_editor">
                <textarea rows="4" id="mota_en" cols="" title="Nhập mô tả . " class="form-control tipS" name="mota_en"><?=@$item['mota_en']?></textarea>
            </div>
            <div class="clear"></div>
        </div>
        <?php }?>		
         <?php if($links_=='true'){?>        
        <div class="formRow">
            <label>Link liên kết: </label>
            <div class="formRight">
                <input type="text" id="price" name="link" value="<?=@$item['link']?>"  title="Nhập link liên kết cho hình ảnh" class="form-control tipS" />
            </div>
            <div class="clear"></div>
        </div>   
        <?php } ?>           
		

        <div class="formRow">
          <label>Tùy chọn: <img src="./images/question-button.png" alt="Chọn loại" class="icon_que tipS" original-title="Check vào những tùy chọn "> </label>
          <div class="formRight">           
            <input type="checkbox" name="active" id="check1"  class="custom-checkbox" value="1" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?> />
            <label for="check1">Hiển thị</label>           
          </div>
          <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>Số thứ tự: </label>
            <div class="formRight">
                <input type="text" class="tipS" value="<?=isset($item['stt'])?$item['stt']:1?>" name="stt" style="width:20px; text-align:center;" onkeypress="return OnlyNumber(event)" original-title="Số thứ tự của hình ảnh, chỉ nhập số">
            </div>
            <div class="clear"></div>
        </div>
			
	<div class="formRow">
			<div class="formRight">
            <input type="hidden" name="type" id="id_this_type" value="<?=$_REQUEST['type']?>" />
                <input type="hidden" name="id" id="id_this_photo" value="<?=@$item['id']?>" />
            	<input type="button" class="btn btn-primary" onclick="TreeFilterChanged2(); return false;" value="Hoàn tất" />
			</div>
			<div class="clear"></div>
		</div>     
		
	</div>
   
</form>   