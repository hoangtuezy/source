<?php
$d->reset();
$d->query("select * from #_info where type='gioi-thieu' ");
$index_gioithieu = $d->fetch_array();

?>
<div id="gioithieu">
	<div class="container flex jb w">
		<div class="detail">
			<div class="gioithieu-header">
				<div class="label">Welcome to</div>
				<div class="title"><?php echo e($index_gioithieu["ten_vi"]); ?></div>
			</div>
			<div class="gioithieu-content">
				<?php echo e($index_gioithieu["mota_$lang"]); ?>

			</div>
			<div class="more">
				<a href="gioi-thieu" class="xemthem">Xem thêm</a>
			</div>
		</div>
		<div class="image">
			<img src="upload/hinhanh/<?=$index_gioithieu["photo"]?>" alt="Giới thiệu " class="img-fluid">
		</div>
	</div>
</div>