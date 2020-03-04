<?php
define ( '_lib' , './libraries/');
include_once _lib."config.php";
include_once _lib."constant.php";
include_once _lib."functions.php";
include_once _lib."class.database.php";
$d = new database($config['database']);
$lang = 'vi';
$command = empty($_GET['command'])?'echo':$_GET['command'];

$show_table = result_array("Show tables");

$result_table = array();
foreach($show_table as $table_stt => $table_value){
    $show_fiels = result_array("desc ".$table_value["Tables_in_".$config['database']['database']]);
    foreach($show_fiels as $stt => $field){
        $result_table[$table_value["Tables_in_".$config['database']['database']]][$stt] = $field["Field"];
    }
}
$field_checks = array();
foreach($config_lang as $lang => $title){
    $field_checks[$lang] = array("ten_$lang","mota_$lang","noidung_$lang");
}


if($command == 'update'){

    $_folder_desc = "./packages/table_mapping";

    $table_name_mapping = array();
    foreach($result_table as $table_name => $table_field){

    //ghi table_name vao array
        $table_name_mapping[] = $table_name;

        $file_content = json_encode($result_table[$table_name]);
        $file_content = str_replace('[', '(', $file_content);
        $file_content = str_replace(']', ')', $file_content);
        $final_file_content = '<?php return array'.$file_content.';?>';
        if(!is_dir($_folder_desc)){
            mkdir($_folder_desc);
        }
        $_file_desc = $_folder_desc."/".$table_name.".php";

        $file_handle = fopen($_file_desc,"w+");
        fwrite($file_handle, $final_file_content);
        fclose($file_handle);

    }

    $table_name_mapping = json_encode($table_name_mapping);
    $table_name_mapping = str_replace('[', '(', $table_name_mapping);
    $table_name_mapping = str_replace(']', ')', $table_name_mapping);
    $final_table_name_mapping = '<?php return array'.$table_name_mapping.';?>';

    $_f_m_p = fopen($_folder_desc.'/file_mapping.php',"w+");
    fwrite($_f_m_p, $final_table_name_mapping);
    fclose($_f_m_p);

    //check Language

    echo("done");
}

if($command == 'check_language'){
    $missing_lang_field = array();
    $except_table = array('counter','table_counter','table_city_cat','table_city_duong','table_city_item','table_city_list','table_com','table_yahoo');
    $needed_table = array('table_product','table_product_list','table_product_cat','table_product_item','table_product_sub','table_baiviet','table_baiviet_list','table_baiviet_cat','table_baiviet_item','table_baiviet_sub');
    
    foreach($result_table as $table_name => $table_field){
        //kiem tra co ngon ngu
        if(!in_array('ten_vi', $result_table[$table_name])) continue;
        // if(!in_array($table_name, $needed_table)) continue;
        if(in_array($table_name, $except_table)) continue;
        
        foreach($field_checks as $lang => $check_field_name){
            foreach($check_field_name as $_c){
                if(!in_array($_c, $result_table[$table_name])){
                 $missing_lang_field[$table_name][]   = $_c;   
             }
         }
     }

 }
 foreach($missing_lang_field as $table => $field){
    foreach($field as $lang => $f){
        if(strpos("ten_",$f) > 0 ){
            $sql .= "ALTER TABLE `$table` ADD `$f` VARCHAR(255) NOT NULL;".'<br />';
        }else{
            $sql .= "ALTER TABLE `$table` ADD `$f` TEXT NOT NULL;".'<br />';
        }
    }
    
}
echo $sql;
}

if($action== 'add_language'){
    

}