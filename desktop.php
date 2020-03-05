<!doctype html>
<html class="no-js" lang="<?=$lang?>">
<head>
	<meta charset="UTF-8">
	<base href="<?=$Protocol.$config_url?>/">
	<link id="favicon" rel="shortcut icon" href="<?=_upload_hinhanh_l.$favicon['thumb_'.$lang]?>" type="image/x-icon" />
	<link rel="canonical" href="<?=getCurrentPageURL();?>" />
	<?php include _template."layout/seo.php";?>
  
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/base.css">
	<link rel="stylesheet" href="assets/css/news.css">
	<link rel="stylesheet" href="assets/js/swiper/swiper.min.css">
	<link rel="stylesheet" href="assets/js/owl/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/jquery.mmenu.css">
    <link rel="stylesheet" href="assets/js/fancybox/jquery.fancybox.min.css">
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/jquery.mmenu.all.js"></script>
  <script src="assets/js/fancybox/jquery.fancybox.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=<?=$config['gv3_client']?>"></script>
	<?=$row_setting['scriptcode']?>
</head>
<body class="<?=$source?>">
	<span class="action-button d-none"></span>
	<?php if(empty($id)){ ?><h1 class="nina"><?php if($title_bar!='') echo $title_bar; else echo $row_setting['title']; ?></h1><?php } ?>
	<div id="nav">
		<?php include _template."layout/header.php";?>
	</div>
	<div id="wrapper">
			<?php if($com!='index'){ ?>
				<?php include _template."layout/breadcrum.php";?>
			<?php } ?>
      <?php if($com=='index'){ ?>
		<?php include _template.$template."_tpl.php";?>
      <?php include _template."components/circle.php";?>
      <?php include _template."layout/product_list.php";?>
      <?php }else{ ?>	
  <?php include _template.$template."_tpl.php";?>
        <?php } ?>
			<?php include _template."layout/footer.php";?>
	</div>
	<?php include _template."layout/js.php";?>
	<?php include _lib."web_schema.php";?>
	<script type="text/javascript">
		if ('serviceWorker' in navigator) {
			window.addEventListener('load', function() {
				navigator.serviceWorker.register('services-worker.js')
				.then(function(registration) { console.log('Service worker ready'); registration.update(); })
				.catch(function(error) { console.log('Registration failed with ' + error); });
			});
		}
	</script>
</div>
<div class="clearfix"></div>
<?=$row_setting['bodycode']?>

<?php include _template."layout/support-online.php";?>
<?php include _template."layout/javascript.php";?>
</body>
</html>