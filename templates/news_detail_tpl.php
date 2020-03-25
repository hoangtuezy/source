<div class="container">
	<div class="scrollbar">
		<h1 class="title_news vcard fn"><?=$row_detail['ten_'.$lang]?> </h1>
		<div class="ngay_luot"><span class="icon calendar"><?=date('d/m/Y ',$row_detail['ngaytao'])?></span><span class="luotxem"><?=_luotxem?>: <?=$row_detail['luotxem']?></span></div>
		<div class="chiase" style="display: flex;justify-content: flex-start;">
			<div class="fb-like" data-href="<?=getCurrentPageURL()?>" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
			&nbsp;<div class="zalo-share-button" data-href="<?=getCurrentPageURL()?>" data-oaid="579745863508352884" data-layout="1" data-color="blue" data-customize=false></div>&nbsp;
			<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
			<g:plusone size="medium" ></g:plusone>
			<div class="clear"></div>
		</div>
		<div class="noidung_tintuc"><?=$row_detail['noidung_'.$lang]?></div>
		<div class="fb-comments" data-href="<?=getCurrentPageURL()?>" data-width="100%" data-numposts="10"></div>
		<div class="othernews">
			<div class="header-title">
				<h2 class="h2-title"><span><?=_cacbaivietkhac?></span></h2>
			</div>
			<ul class="mb-3">

				<?php foreach($tintuc as $tinkhac){?>
					<li><a href="<?=$_GET['com']?>/<?=$tinkhac['tenkhongdau']?>.htm" ><?=$tinkhac['ten_'.$lang]?></a> <font>(<?=make_date($tinkhac['ngaytao'])?>)</font></li>
				<?php }?>
			</ul>
		</div>
	</div>
</div>