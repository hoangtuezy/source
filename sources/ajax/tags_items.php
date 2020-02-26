<?php
if(!empty($_POST)){
	$id_list = $_POST['id_list'];
	$_product = result_array("select * from #_product where id_list='".$id_list."' and hienthi=1 and noibat=1 order by stt asc limit 6");
	foreach($_product as $item){ ?>
		<div class="col-md-4 col-sm-6 col-12">
			<?php include _template."components/product_item.php";?>
		</div>
	<?php  } ?>
	<?php  } ?>