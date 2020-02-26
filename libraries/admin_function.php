<?php if(!@defined('_lib')) die("Error");
	$input_text = function($name,$label,$item,$lang='') use($d){
	$active = '';
	$required = '';
	if(empty($lang)){
		$_lg = "";
	}else{
		if($lang=='vi'){
		$active = ' active validate[required] ';
		}
		$_lg = "lang_hidden lang_".$lang.$active;
	}
	return <<<HTML
		<div class="formRow {$_lg} mb-2">
				<div class="input-group">
								<div class="input-group-prepend">
											<span class="input-group-text">{$name}</span>
								</div>
						<input type="text" name="{$label}" id="{$label}" class="form-control tipS {$required}" value='{$item["{$label}"]}' />
						</div>
				</div>
HTML;
};