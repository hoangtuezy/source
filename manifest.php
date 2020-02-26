<?php
@define ( '_lib' , './libraries/');
include_once _lib."config.php";
include_once _lib."class.database.php";
$d = new database($config['database']);
include_once _lib."functions.php";
include_once _lib."web_config.php";
$row_setting= fetch_array("select * from #_setting limit 0,1");
$row_logo = fetch_array("select photo_vi,link from #_photo where type='logo' ");
$manifest = array(
   "name" => $row_setting["ten_vi"],
   "short_name" => $row_setting["ten_vi"],
   "description" =>  $row_setting["description"],
   "icons" => array(
      array(
         "src" => $Protocol.$config_url."/".$row_logo["photo_vi"],
         "sizes" => "192x192",
         "type" => "image/png"
      ),
   ),
   "background_color" => "#fff",
   "theme_color" => $theme_color,
   "display" => "standalone",
   "orientation" => "any",
   "start_url" => ".",
   "scope" => "/"
);
header( "content-type: application/json; charset=UTF-8" );
echo json_encode($manifest,JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
?>
