<?php
$index_doitac = result_array("select * from #_lkweb where hienthi=1 and type='doi-tac' order by stt,id desc");
if(count($index_doitac) > 0){
?>
<div id="doitac">
	<div class="container">
		<div class="header-title">
			<h2 class="h2-title"><span>ĐỐI TÁC KHÁCH HÀNG</span></h2>
			<div class="desc text-secondary">Chúng tôi tự hào hợp tác cùng với những khách hàng lớn, uy tín</div>
		</div>
		<marquee behavior="scroll" direction="" onmouseover="this.stop()" onmouseout="this.start()" LOOP=-1>
		<?php foreach($index_doitac as $item) { ?>
		<div class="doitac_item">
			<a href="<?=$item["link"]?>">
				<img src="thumb/1-180-90/upload/hinhanh/<?=$item["photo_vi"]?>" alt="<?=$item["photo_vi"]?>" onerror='this.src="img/180x90/"'>
			</a>
		</div>
		<?php } ?>
		</marquee>
	</div>
</div>
<?php } ?>