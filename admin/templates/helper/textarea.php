<?php 
if(empty($txt_title)) $txt_title = _tieude;
if(empty($txt_key)) $txt_key = "ten_";
if(empty($textarea_height)) $textarea_height = 6;
?>
<div class="formRow">
	<label><?=$txt_title?></label>
	<div class="formRight">
		<textarea rows="<?=$textarea_height?>" cols="" title="<?=$txt_title?>" class="tipS form-control" name="<?=$txt_key?>"><?=@$item[$txt_key]?></textarea>
	</div>
	<div class="clearfix"></div>
</div>	