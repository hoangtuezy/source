<?php
$breadcrumb_stt = 1;
?>
<nav aria-label="breadcrumb" class="w-100">
  <ul class="breadcrumb mb-3" itemscope itemtype="http://schema.org/BreadcrumbList">
    <div class="container d-flex flex-wrap">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope
        itemtype="http://schema.org/ListItem">
        <a href="//<?=$config_url?>/" itemprop="item">
            <span itemprop="name"><?=_trangchu?></span>
        </a>
        <meta itemprop="position" content="<?=++$breadcrumb_stt?>" />
    </li>
    <?php if($source!='index' && (!empty($idlist) || !empty($idcat) || !empty($iditem) || !empty($id) )) { ?> 
        <li class="breadcrumb-item" aria-current="page" itemprop="itemListElement" itemscope
        itemtype="http://schema.org/ListItem">
        <a href="<?=$com?>" itemprop="item">
            <span itemprop="name"><?=$title_com?></span>
        </a>
        <meta itemprop="position" content="<?=++$breadcrumb_stt?>" /></li>
    <?php } ?>
    <?php if(!empty($idlist) && $idl != $row_detail_list['tenkhongdau']) { ?> 
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope
        itemtype="http://schema.org/ListItem">
        <a href="<?=$row_detail_list['tenkhongdau']?>" itemprop="item">
            <span itemprop="name"><?=$row_detail_list['ten_'.$lang]?></span>
        </a>
        <meta itemprop="position" content="<?=++$breadcrumb_stt?>" />
    </li>
<?php } ?>
<?php if(!empty($idcat) && $idc != $row_detail_cat['tenkhongdau']) { ?>
    <li class="breadcrumb-item" itemprop="itemListElement" itemscope
    itemtype="http://schema.org/ListItem">
    <a href="<?=$row_detail_cat['tenkhongdau']?>" itemprop="item">
      <span itemprop="name"><?=$row_detail_cat['ten_'.$lang]?></span>

  </a>
  <meta itemprop="position" content="<?=++$breadcrumb_stt?>" />
</li>
<?php } ?>
<?php if(!empty($iditem) && $idi != $row_detail_item['tenkhongdau']) { ?>
 <li class="breadcrumb-item" itemprop="itemListElement" itemscope
 itemtype="http://schema.org/ListItem">
 <a href="<?=$iditem["tenkhongdau"]?>" itemprop="item">
    <span itemprop="name">
        <?=$row_detail_item['ten_'.$lang]?>
    </span>
</a>
<meta itemprop="position" content="<?=++$breadcrumb_stt?>" /></li>
<?php } ?>
<?php if(!empty($id)){
    $title_detail = $row_detail["ten_$lang"];
}
?>
<li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope
itemtype="http://schema.org/ListItem">
<?php if(!empty($id)){
?>
<a href="<?=$row_detail["tenkhongdau"]?>" itemprop="item">
    <span itemprop="name"><?=$title_detail?></span>
</a>
<?php }else{ ?>
    <a href="<?=getCurrentPageURL()?>" itemprop="item">
    <span itemprop="name"><?=$title_detail?></span>
</a>
<?php } ?>
<meta itemprop="position" content="<?=++$breadcrumb_stt?>" />
</li>
</div>
</ul>
</nav>