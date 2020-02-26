<?php if($config_noidung =="true"){ ?>
	<?php foreach($config_lang as $key => $value){ ?>
		<div class="formRow lang_hidden lang_<?=$key?> <?=$key=='vi'?'active':''?>">
			<label>Nội dung <?=$key=='vi'?'':'('.$value.')'?></label>
			<div class="ck_editor">
				<textarea rows="4" cols="" id="noidung_<?=$key?>" title="Nhập mô tả . " class="tipS form-control " name="noidung_<?=$key?>"><?=@$item['noidung_'.$key]?></textarea>
			</div>	
			<div class="clear"></div>
		</div>

	<?php } ?>	
<?php } ?>	

