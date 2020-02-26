<?php if($config_mota=="true"){ ?>
	<?php foreach($config_lang as $key => $value){ ?>
		<div class="formRow lang_hidden lang_<?=$key?> <?=$key=='vi'?'active':''?>">
			<label>Mô tả <?=$key=='vi'?'':'('.$value.')'?></label>
			<!-- <div class="ck_editor"> -->
				<textarea rows="4" cols="" id="mota_<?=$key?>" title="Nhập mô tả . " class="tipS form-control " name="mota_<?=$key?>"><?=@$item['mota_'.$key]?></textarea>
				<!-- </div>	 -->
				<div class="clear"></div>
			</div>

	<?php } ?>	
<?php } ?>	