<?php
//website,article,book,profile,video,music-> og_type
if(!isset($id)){
	$seo_page = fetch_array("select * from #_component where name='$com' ");
	if(!empty($seo_page['photo'])){
		$seo_image = _upload_component_l.$seo_page['photo'];
	}
}

if(empty($seo_image)){
	$seo_image = _upload_hinhanh_l.$row_logo['photo_'.$lang];
}
$og_type = empty($og_type)?'website':$og_type;
$og_image = $Protocol.$config_url.'/'.$seo_image;
?>
<meta name="theme-color" content="<?=$theme_color?>" />
<link rel="manifest" href="manifest.json">
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="<?=$seo_theme_color?>" />
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<meta name="robots" content="noodp,index,follow" />
<title><?php if($title_bar!='') echo $title_bar; else echo $row_setting['title']; ?></title>
<meta name="description" content="<?php if($description_bar!='') echo $description_bar; else echo $row_setting['description']; ?>">
<meta name="keywords" content="<?php if($keywords_bar!='') echo $keywords_bar; else echo $row_setting['keywords']; ?>">

<meta name="google" content="notranslate" />
<meta name='revisit-after' content='1 days' />
<meta name="geo.placename" content="<?=$row_setting['diachi_'.$lang]?>">
<meta name="author" content="<?=$row_setting['ten_'.$lang]?>">

<meta property="og:url"                content="<?=getCurrentPage()?>" />
<meta property="og:type"               content="<?=$og_type?>" />
<meta property="og:title"              content="<?php if($title_bar!='') echo $title_bar; else echo $row_setting['title']; ?>" />
<meta property="og:description"        content="<?php if($description_bar!='') echo $description_bar; else echo $row_setting['description']; ?>" />
<meta property="og:image"              content="<?=$og_image?>" />
<meta property="og:locale"             content="<?=$config_locale[$lang]?>" />
<meta name="twitter:card" content="<?=$og_type?>">
<meta name="twitter:site" content="<?=getCurrentPage()?>">
<meta name="twitter:title" content="<?php if($title_bar!='') echo $title_bar; else echo $row_setting['title']; ?>">
<meta name="twitter:description" content="<?php if($description_bar!='') echo $description_bar; else echo $row_setting['description']; ?>">
<meta name="twitter:creator" content="<?=$row_setting['twitter']?>">
<meta name="twitter:image" content="<?=$og_image?>">
<meta name="format-detection" content="telephone=no">


