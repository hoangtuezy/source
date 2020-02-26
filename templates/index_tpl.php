<?php

$gioithieu_index = fetch_array("select * from #_info where type='gioi-thieu' ");



?>



<div id="gioithieu">

	<div class="container">

		<div class="detail">

			<div class="gioithieu-title">

				<div class="title">Giới thiệu</div>

				<h2><?=$gioithieu_index["ten_$lang"]?></h2>

			</div>

			<div class="gioithieu-mota text-justify">

				<?=$gioithieu_index["mota_$lang"]?>

			</div>

			<div class="xemthem">

				<a href="gioi-thieu" class="btn btn-dark"><img src="assets/images/b_xemthem.png" alt="b_xemthem">Xem thêm</a>

			</div>

		</div>

		<div class="image">

			<img src="<?=_upload_hinhanh_l.$gioithieu_index["photo"]?>" class="img-fluid" alt="<?=$gioithieu_index["photo"]?>">

		</div>

	</div>

</div>

<?php

$product_noibat = result_array("select * from #_product where hienthi=1 and noibat=1 and type='san-pham' order by stt asc limit 6");

$product_moi = result_array("select * from #_product where hienthi=1 and noibat1=1 and type='san-pham' order by stt asc limit 6");

$row_quangcao = fetch_array("select photo_vi,link from #_photo where type='quangcao' ");

$product_list = result_array("select * from #_product_list where type='san-pham' ");

$index_news = result_array("select * from #_baiviet where type='tin-tuc' and hienthi=1 and noibat=1 order by stt asc limit 3");

$product_noibat = array();

?>



<div id="product_noibat">

	<div class="container">

		<div class="header-title">

			<h2 class="h2-title"><span>Sản Phẩm Nổi Bật</span></h2>

		</div>

		<div class="title-tabs text-center">

			<?php 

			$i = 0;

			foreach($product_list as $list){

				$tmp_product = result_array("select * from #_product where id_list='".$list['id']."' and hienthi=1 and noibat=1 limit 6");

				if(count($tmp_product) > 0){



					$product_noibat[] = $tmp_product;

					?>

					<div class="item-tab <?=$i++==0?'active':''?>" data-list="<?=$list['id']?>"><span><?=$list["ten_$lang"]?></span></div>

				<?php } }?>

			</div>

			<div class="content d-flex flex-wrap" id="title-tabs-content">

				<?php foreach($product_noibat[0] as $item){ ?>

					<div class="col-md-4 col-sm-6 col-12">

						<?php include _template."components/product_item.php";?>

					</div>

				<?php } ?>

			</div>

			<div class="xemtatca">

				<a href="san-pham">Xem tất cả</a>

			</div>

		</div>

	</div>

	<script>

		$(document).on('click','.item-tab',function(){

			var id_list = $(this).data('list');

			$(".item-tab").removeClass('active');

			$(this).addClass('active');

			$.ajax({

				method: 'POST',

				url: 'ajax/tags_items',

				data:{'id_list':id_list},

				success: function(data){

					$("#title-tabs-content").html(data);

				}

			});

		});

	</script>

<?php if(!empty($row_quangcao["photo_vi"]))	{ ?>

	<div id="quangcao">

		<a href="<?=$row_quangcao["link"]?>">

			<img src="upload/hinhanh/<?=$row_quangcao["photo_vi"]?>" alt="logo" class="w-100"/>

		</a>

	</div>

<?php } ?>

	<?php foreach($product_list as $list){ 

		$products = result_array("select * from #_product where id_list='".$list['id']."' and hienthi=1 order by stt asc limit 6");

		if(!empty($products)){ ?>



			<div id="<?=$list['tenkhongdau']?>" class="product_list">

				<div class="header-title">

					<h2 class="h2-title"><span><?=$list["ten_$lang"]?></span></h2>

				</div>

				<div class="container">

					<div class="product_list_image">

						<a href="<?=$list["tenkhongdau"]?>"><img src="upload/product/<?=$list['photo']?>" alt="<?=$list['photo']?>" class="img-fluid"></a>

					</div>

					<div class="product_list_content d-flex flex-wrap">

						<?php foreach($products as $item){ ?>

							<div class="col-md-4 col-sm-6 col-123">

								<?php include _template."components/product_item.php";?>

							</div>

						<?php } ?>

					</div>

				</div>

				<div class="xemtatca">

					<a href="<?=$list["tenkhongdau"]?>">Xem tất cả</a>

				</div>

			</div>



		<?php } ?>

	<?php } ?>

	<?php

	$taisaochon_noibat = result_array("select * from #_baiviet where noibat=1 and type='vi-sao-chon' and hienthi=1 ");

	$row_taisaochon = fetch_array("select photo_vi,link from #_photo where type='bg_taisaochon' ");

	if(count($taisaochon_noibat) > 0){ 

		?>

		<div id="taisaochon" class="clearfix">

			<div class="header-title">

				<h2 class="h2-title"><span>VÌ SAO CHỌN CHÚNG TÔI</span></h2>

			</div>

			<div class="container">

				<div class="visao_slider owl-carousel">

					<?php foreach($taisaochon_noibat as $stt => $item ) { ?>

						<div class="visao_item <?php if($stt == 0) echo('active');?>" data-id="<?=$item["id"]?>">

							<div class="image">

								<img src="thumb/1-143-143/<?=_upload_baiviet_l.$item["photo"]?>" class="img-fluid" alt="<?=$item["tenkhongdau"]?>">

							</div>

							<h3><a href="<?=$item["tenkhongdau"]?>"><?=$item["ten_$lang"]?></a></h3>

							<div class="mota">

								<?=catchuoi($item["mota_$lang"],100)?>

							</div>

						</div>

					<?php } ?>

				</div>

			</div>



		</div>

	<?php } ?>

	<div id="minibox">

		<div class="container">

			<div class="news">

				<h2>Tin Tức Nổi Bật</h2>

				<div class="d-flex flex-wrap justify-content-between">

					<div class="main_news_item hover itemhover">

						<div class="image hieuung">

							<a href="<?=$index_news[0]['tenkhongdau']?>" class="d-block overflow-hidden">

								<img src="thumb/1-360-250/upload/baiviet/<?=$index_news[0]["photo"]?>" class="img-fluid w-100" alt="<?=$index_news[0]["tenkhongdau"]?>" onerror="this.src='img/360x250/'">

							</a>

						</div>

						<div class="detail ">

							<h3>



								<a href="<?=$index_news[0]['tenkhongdau']?>" class="h3a">

									<?=$index_news[0]["ten_$lang"]?>

								</a>

							</h3>

							<div class="mota">

								<?=catchuoi($index_news[0]["mota_$lang"],180)?>

							</div>

							<div class="xemthem mt-2">

								<a href="tin-tuc" class="btn btn-outline-dark">Xem thêm</a>

							</div>

						</div>

					</div>

					<div class="vertical_items">

						<?php foreach($index_news as $item){ ?>

							<div class="news_item hover itemhover">

								<div class="image hieuung">

									<a href="<?=$item['tenkhongdau']?>" class="d-block overflow-hidden">

										<img src="thumb/1-150-110/upload/baiviet/<?=$item["photo"]?>" class="card-img-top w-100" alt="<?=$item["tenkhongdau"]?>" onerror="this.src='img/150x110/'">

									</a>

								</div>

								<div class="detail ">

									<h3>



										<a href="<?=$item['tenkhongdau']?>" class="h3a">

											<?=$item["ten_$lang"]?>

										</a>

									</h3>

									<div class="mota">

										<?=catchuoi($item["mota_$lang"],120)?>

									</div>

								</div>

							</div>



						<?php } ?>

					</div>

				</div>

			</div>

			<div class="video">

				<h2>Video Clip</h2>

				<?php include _template."components/select_video.php";?>

			</div>

		</div>

	</div>





	<?php

	$doitac =result_array("select ten_vi,photo_vi,link from #_photo where type='doi-tac'  and hienthi=1 order by stt,id desc");

	if(count($doitac) > 0){ 

		?>

		<div id="doitac" class="clearfix py-4">

			<div class="container">

				<div class="slider owl-carousel">

					<?php foreach($doitac as $item){ ?>

						<div class="doitac_item">

							<a href="<?=$item["link"]?>">

								<img src="thumb/1-180-105/<?=_upload_hinhanh_l.$item["photo_vi"]?>" alt="<?=$item["photo_vi"]?>" />

							</a>

						</div>

					<?php } ?>

				</div>

			</div>

		</div>

		<script type="text/javascript">

			$(document).ready(function(){

				$('#doitac .slider').owlCarousel({

					loop:true,

					margin:30,

					responsiveClass:true,

					autoplay:true,

					items:6

				});

			});



		</script>

		<?php } ?>