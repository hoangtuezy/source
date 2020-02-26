<?php foreach($config_lang as $key => $value) { ?>
		<div class="formRow lang_hidden lang_<?=$key?> <?=$key=='vi'?'active':''?>">
				<label>Tiêu đề (<?=$value?>)</label>
				<div class="formRight">
					<input type="text" name="ten_<?=$key?>" title="Nhập tên sản phẩm" id="ten_<?=$key?>" class="tipS form-control  <?=$key=='vi'?'validate[required]':''?>" value="<?=@$item['ten_'.$key]?>" />
				</div>
				<div class="clearfix"></div>
			</div>
<?php } ?>