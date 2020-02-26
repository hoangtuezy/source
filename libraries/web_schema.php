<?php
if(empty($seo_title)) $seo_title = $row_setting["ten_$lang"];
?>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "WebSite",
  "name": "<?=$seo_title?>",
  "url": "http://<?=$config_url?>/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "http://<?=$config_url?>/tim-kiem.html/keyword={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>

<?php if($com=='tim-kiem' && !empty($_REQUEST['keyword'])){ ?>
<script type="application/ld+json">
  // John searched for hotels.
{
  "@context": "http://schema.org",
  "@type": "SearchAction",
<?php if(!empty($_SESSION["account"])){ ?>  
  "agent": {
    "@type": "Person",
    "name": "John"
  },
<?php } ?>  
  "query": "<?=$_REQUEST['keyword']?>"
}
</script>
<?php } ?>

<?php if($template =='product_detail' && !empty($id)){  ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "<?=$row_detail["ten_$lang"]?>",
  "image": "http://<?=$config_url?>/upload/product/<?=$row_detail["photo"]?>",
  "description": "<?=$row_detail["mota_$lang"]?>",
<?php if(!empty($row_detail['brand'])){ ?>
  "brand": {
    "@type": "Thing",
    "name": "<?=$row_detail['brand']?>"
  },
<?php } ?>
<?php if(!empty($row_detail['ratting'])){ ?>  
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.4",
    "reviewCount": "89"
  },
<?php } ?>  
  "offers": {
    "@type": "Offer",
    "priceCurrency": "VND",
    "price": "<?=$row_detail["giaban"]?>",
    "itemCondition": "http://schema.org/UsedCondition",
    "availability": "http://schema.org/InStock",
    "seller": {
      "@type": "Organization",
      "name": "<?=$row_setting["ten_$lang"]?>"
    }
  }
}
</script>
<?php } ?>