<div class="container">
	<div class="row">
		<div class="images col-md-5 col-sm-12 col-12">
			<img src="upload/baiviet/<?=$row_detail['photo']?>" alt="<?=$row_detail['photo']?>" class="img-fluid w-100 mb-3">
			<?php foreach($result_hinhanh as $photo){ ?>
		<img src="upload/baiviet/<?=$photo['photo']?>" alt="<?=$photo['photo']?>" class="img-fluid w-100 mb-3">

			<?php } ?>
		</div>
		<div class="scrollbar col-md-7 col-sm-12 col-12 ">
			<h1 class="title_news vcard fn"><?=$row_detail['ten_'.$lang]?> </h1>
			<div class="ngay_luot"><span class="ngaydang"><?=date('d/m/Y ',$row_detail['ngaytao'])?></span><span class="luotxem"><?=_luotxem?>: <?=$row_detail['luotxem']?></span></div>
			<div class="chiase" style="display: flex;justify-content: flex-start;">
				<div class="fb-like" data-href="<?=getCurrentPageURL()?>" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
				&nbsp;<div class="zalo-share-button" data-href="<?=getCurrentPageURL()?>" data-oaid="579745863508352884" data-layout="1" data-color="blue" data-customize=false></div>&nbsp;
				<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				<g:plusone size="medium" ></g:plusone>
				<div class="clear"></div>
			</div>
			<div class="noidung_tintuc"><?=$row_detail['noidung_'.$lang]?></div>
			<div class="fb-comments" data-href="<?=getCurrentPageURL()?>" data-width="100%" data-numposts="10"></div>
		</div>
	</div>
</div>