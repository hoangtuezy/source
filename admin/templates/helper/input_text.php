<?php 
if(empty($txt_title)) $txt_title = _tieude;
if(empty($txt_key)) $txt_key = "ten_";
?>
<div class="formRow">
			<label><?=$txt_title?></label>
			<div class="formRight">
				<input type="text" value="<?=@$item[$txt_key]?>" name="<?=$txt_key?>" title="<?=_nhap?> <?=$txt_title?>" class="tipS form-control" />
			</div>
			<div class="clearfix"></div>
		</div>