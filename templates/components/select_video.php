<?php
$d->reset();
$result_baiviet="select mota_$lang from #_info where type='about'";
$d->query($result_baiviet);
$result_baiviet=$d->fetch_array();
$d->reset();
$sql_video = "select ten_$lang,links,id from #_video where type='video' order by id desc";
$d->query($sql_video);
$row_video = $d->result_array();

$result_video= "select id,ten_$lang,links from #_video where hienthi=1 and type='video' order by stt,id desc";
$d->query($result_video);
$result_video = $d->result_array();
?>
<script type="text/javascript">
	$(document).ready(function(){
		$(window).on("load",function() {
		$("#listVideo").change(function(){
			var id=$(this).val();
			$("#ajax_video_123").load("load_video.php", "id="+ id);
			return false;
		});
	});
	})
	
</script>

<div id="ajax_video_123">
	<iframe  width="100%" height="300" src="//www.youtube.com/embed/<?=youtobi($result_video[0]['links'])?>" frameborder="0" allowfullscreen></iframe>
</div>
<div class=" d-none">
	<select style="width: 100%;margin-top: 5px;" name="listVideo" id="listVideo" class="form-control">
		<?php for($i=0; $i<count($result_video); $i++){?>
			<option value="<?=$result_video[$i]['id']?>"><?=$result_video[$i]['ten_vi']?></option>
		<?php } ?>
	</select>
</div>
<div id="slider_video_select" class="mt-2">
<div class="swiper-container">
	<div class="swiper-wrapper">
		<?php foreach($result_video as $stt => $item){

			?>
			<div class="swiper-slide">
				<a class="d-block select_video_item" href="<?=$item['links']?>" data-fancybox="gallery" data-id="<?=$item['id']?>" style="height: 75px;overflow-y: hidden;background: url(https://img.youtube.com/vi/<?=youtobi($item['links'])?>/maxresdefault.jpg);background-size: cover;">
				</a>
			</div>
		<?php } ?>
	</div>
</div>
</div>
