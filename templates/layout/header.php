<?php
$d->reset();
$d->query("select photo_vi,link from #_photo where type='logo' ");
$row_logo = $d->fetch_array();

$d->reset();
$d->query("select photo_vi,link from #_photo where type='banner'");
$row_banner = $d->fetch_array();

$d->reset();
$d->query("select photo_vi,link from #_photo where type='quangcao'");
$row_qc = $d->fetch_array();

$d->reset();
$d->query("select * from #_product_list where type='san-pham' and hienthi=1 and noibat=1 order by stt asc ");
$product_list = $d->result_array();
?>
<div id="topbar">
	<div class="container d-flex justify-content-between flex-wrap">
		<div class="col-md-8 d-flex justify-content-between flex-wrap">
			<span class="icon marker">Địa chỉ: <?=$row_setting["diachi_$lang"]?></span>
			<span class="icon email">Email: <?=$row_setting["email"]?></span>
		</div>
		<div>
			<span class="icon hotline">tel: <?=$row_setting["hotline"]?> - <?=$row_setting["dienthoai"]?></span>
		</div>
	</div>
</div>
<div id="header">
	<div class="container">
		<div id="logo">
			<a href="">
				<img src="upload/hinhanh/<?=$row_logo["photo_vi"]?>" alt="logo" onerror='this.src="img/180x148/"'/>
			</a>
		</div>
		<div id="banner">
			<a href="">
				<img src="upload/hinhanh/<?=$row_banner["photo_vi"]?>" alt="banner" onerror='this.src="img/1000x148/"'/>
			</a>
		</div>
	</div>
</div>
<div id="menu-top">
	<div class="container">
		<?php include _template."components/menu.php";?>
		<?php include _template."layout/timkiem_icon.php";?>
	</div>
</div>
<?php include _template."components/slider.php";?>


