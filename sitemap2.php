<?php
    session_start();
    @define ( '_template' , './templates/');
    @define ( '_source' , './sources/');
    @define ( '_lib' , './libraries/');

    include_once _lib."config.php";

    include_once _lib."class.database.php";
    $d = new database($config['database']);
    include_once _lib."functions.php";
    function CreateXML($tbl='',$com='',$type=''){
        global $domtree,$xmlRoot,$config_url,$Protocol;
        if($tbl == '') return false;
        $url ='';
        $result = result_array("select id,tenkhongdau,ngaytao from table_$tbl where hienthi=1 and type='".$type."' order by stt,id desc");
        foreach($result as $row){
                $url = $domtree->createElement("url");
                $url = $xmlRoot->appendChild($url);
                $_url = $Protocol.$config_url.'/'.$row['tenkhongdau'];
                $url->appendChild($domtree->createElement('loc',$_url));
                $url->appendChild($domtree->createElement('lastmod',date('c',$row['ngaytao'])));
                $url->appendChild($domtree->createElement('priority',1));
        }
        return $url;
    }
    function CreateXML_single($com='',$type=''){
        global $domtree,$xmlRoot,$config_url,$Protocol;
        $url ='';
        $url = $domtree->createElement("url");
        $url = $xmlRoot->appendChild($url);
        $_url = $Protocol.$config_url.'/'.$com;
        $url->appendChild($domtree->createElement('loc',$_url));
        $url->appendChild($domtree->createElement('lastmod',date('c',time())));
        $url->appendChild($domtree->createElement('priority',1));
        return $url;
    }
    /* create a dom document with encoding utf8 */
    $domtree = new DOMDocument('1.0', 'UTF-8');
    /* create the root element of the xml tree */
    $xmlRoot = $domtree->createElement("xml");
    /* append it to the document created */
    $xmlRoot = $domtree->appendChild($xmlRoot);
    CreateXML('baiviet','tuyen-dung','tuyen-dung');
    CreateXML('baiviet','tin-tuc','tin-tuc');
    CreateXML('baiviet','dich-vu','dich-vu');
CreateXML('baiviet','chinh-sach','chinh-sach');
    CreateXML('product','san-pham','san-pham');
    CreateXML('product_list','san-pham','san-pham');
    CreateXML_single('lien-he');
    CreateXML_single('gioi-thieu');
    $final = str_replace('<xml>', '<urlset
    xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
    http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">', $domtree->saveXML());
    $final = str_replace('</xml>', '</urlset>', $final);
    header( "content-type: application/xml; charset=UTF-8" );
    echo $final;
?>
