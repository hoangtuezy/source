<?php if(count($config_lang) > 1){ ?>
				<div class="title chonngonngu">
					<ul>
						<?php foreach($config_lang as $key => $title){ ?>
						<li><a href="<?=$key?>" class="<?=$key=='vi'?'active':''?> tipS form-control  validate[required]" title="Chọn tiếng việt "><img src="./images/icon-<?=$key?>.png" alt="" class="<?=changeTitle($title)?>" /><?=$title?></a></li>
					<?php  } ?>
					</ul>
				</div>
<?php } ?>