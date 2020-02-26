<?php
if(!empty($_POST)){
	$id_tp = $_POST['id_tinh'];
	$_quanhuyen = result_array("select * from #_city_cat where id_list='".$id_tp."'");
	foreach($_quanhuyen as $item){ ?>
		<option value="<?=$item["id"]?>" data-phivanchuyen="<?=$item["phivanchuyen"]?>"><?=$item["ten_$lang"]?></option>

	<?php  } ?>
	<?php  } ?>