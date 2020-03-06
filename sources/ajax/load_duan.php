<?php
if(!empty($_POST)){
	if(empty($_POST['list'])){
		$_quanhuyen = result_array("select * from #_baiviet where id_list <> 0 and type='du-an' and hienthi=1 and noibat=1 order by stt asc limit 8");
	}else{
		$_quanhuyen = result_array("select * from #_baiviet where id_list='".$_POST['list']."' and type='du-an' and hienthi=1 and noibat=1 order by stt asc limit 8");
	}
	
	?>
		<div class="row">
		<?php foreach($_quanhuyen as $item): ?>
			<div class="col-md-3 col-sm-4 col-6">
				<div class="duan_item">
					<img src="upload/baiviet/<?=$item["photo"]?>" alt="<?=$item["photo"]?>" class="img-fluid w-100" >
				</div>
				</div>
			<?php endforeach; ?>

		</div>

	<?php  } ?>