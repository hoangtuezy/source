<?php
@define ( '_lib' , './libraries/');
include_once _lib."config.php";
include_once _lib."class.database.php";
$d = new database($config['database']);
include_once _lib."functions.php";
include_once _lib."web_config.php";

function generate_url($link,$time,$priority='0.80'){
  global $config_url;
  echo '<url><loc>'.$link.'</loc><lastmod>'.date('c',$time).'</lastmod><priority>'.$priority.'</priority></url>';
}
header( "content-type: application/xml; charset=UTF-8" );
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset
xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<?php
foreach($web['component'] as $com =>$key){
if($key['disable'] || ($key['sitemap']==0 && isset($key['sitemap'])))  continue;
  generate_url(_link_com($com),time());
if($key['only_com']) continue;

$target = result_array("select id,tenkhongdau,ngaytao from #_".$key['table']." where type='".$key["type"]."' and hienthi=1 order by stt asc,id desc ");
      foreach($target as $item){
          generate_url(_link_media($com,$item["tenkhongdau"]),$item['ngaytao'],1);
      }
      if($key['level'] >= 1){
          $target_list = result_array("select id,tenkhongdau,ngaytao from #_".$key['table']."_list where type='".$key["type"]."' and hienthi=1 order by stt asc,id desc ");
          foreach($target_list as $item){
          generate_url(_link_list($com,$item["tenkhongdau"]),$item['ngaytao'],1);
          }
      }

      if($key['level'] >= 2){
          $target_cat = result_array("select id,tenkhongdau,ngaytao,id_list from #_".$key['table']."_cat where type='".$key["type"]."' and hienthi=1 order by stt asc,id desc ");
          foreach($target_cat as $cat){
            $_tkd_list = fetch_array("select tenkhongdau from #_".$key['table']."_list where id=".$cat['id_list']);
            generate_url(_link_cat($com,$_tkd_list["tenkhongdau"],$cat["tenkhongdau"]),$item['ngaytao'],1);
          }
      }

      if($key['level'] >= 3){
          $target_item = result_array("select id,tenkhongdau,ngaytao,id_list,id_cat from #_".$key['table']."_item where type='".$key["type"]."' and hienthi=1 order by stt asc,id desc ");
          foreach($target_item as $titem){
              $_tkd_list = fetch_array("select tenkhongdau from #_".$key['table']."_list where id=".$titem['id_list']);
              $_tkd_cat = fetch_array("select tenkhongdau from #_".$key['table']."_cat where id=".$titem['id_cat']);
              if(!empty($_tkd_list['tenkhondau']) && !empty($_tkd_cat['tenkhondau']) == true)  {
              generate_url(_link_item($com,$_tkd_list["tenkhongdau"],$_tkd_cat["tenkhongdau"],$titem["tenkhongdau"]),$titem['ngaytao'],1);
              }
          }
      }
}

?>
</urlset>