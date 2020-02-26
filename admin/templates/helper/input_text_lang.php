<?php 
if(empty($txt_title)) $txt_title = _tieude;
if(empty($txt_key)) $txt_key = "ten_";
foreach($config_lang as $key => $value) { ?>
		<div class="formRow lang_hidden lang_<?=$key?> <?=$key=='vi'?'active':''?>">
				<label><?=$txt_title?> (<?=$value?>)</label>
				<div class="formRight">
					<input type="text" name="<?=$txt_key.$key?>" title="<?=_nhap?> <?=$txt_title?>" id="<?=$txt_key.$key?>" class="tipS form-control  <?=$key=='vi'?'validate[required]':''?>" value="<?=@$item[$txt_key.$key]?>" />
				</div>
				<div class="clearfix"></div>
			</div>
<?php } ?>