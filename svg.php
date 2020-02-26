<?php
header('Content-Type: image/svg+xml');
$w =(int) $_GET['w'];
$h = (int) $_GET['h'];
if(empty($txt))
	$txt = $w.'x'.$h;
?>
<svg width="<?=$w?>" height="<?=$h?>" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 <?=$w?> <?=$h?>" preserveAspectRatio="none"><defs>
	<style type="text/css">
#holder_1643fd77df3 text { fill:rgba(255,255,255,.9);font-weight:normal;font-family:Helvetica, monospace;font-size:20pt } </style>
</defs><g id="holder_1643fd77df3"><rect width="<?=$w?>" height="<?=$h?>" fill="<?='#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);?>"></rect><g><text x="50%" y="50%" alignment-baseline="middle" text-anchor="middle"><?=$txt?></text></g></g></svg>
