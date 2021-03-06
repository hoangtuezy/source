<?php
session_start();
@define ( '_template' , './templates/');
@define ( '_source' , './sources/');
@define ( '_lib' , '../libraries/');

$page = (int)(!isset($_GET["page"]) ? 1 : $_GET["page"]);
if ($page <= 0) $page = 1;
if(!isset($_SESSION['lang']))
{
	$_SESSION['lang']='vi';
}
$lang = 'vi';

include_once _lib."config.php";
include_once _lib."class.database.php";
include_once _lib."constant.php";
include_once _lib."type.php";
include_once _source."lang_$lang.php";
$d = new database($config['database']);

include_once _lib."functions.php";

include_once _lib."functions_giohang.php";

	// include_once _lib."admin_function.php";	

	// include_once _lib."pclzip.php";
$com = (!empty($_REQUEST['com'])) ? addslashes($_REQUEST['com']) : "";
$act = (!empty($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
	
$login_name = 'NINACO';	

	// $archive = new PclZip($file);
switch($com){
	case 'page':
	$source = "page";
	break;
	case 'seopage':
	$source = "seopage";
	break;
	case 'component':
	$source = "component";
	break;
	case 'transport':
	$source = "transport";
	break;
	case 'order':
	$source = "order";
	break;
	case 'background':
	$source = "background";
	break;
	case 'album':
	$source = "album";
	break;
	case 'tags':
	$source = "tags";
	break;
	case 'video':
	$source = "video";
	break;
	case 'thanhvien':
	$source = "thanhvien";
	break;
	case 'contact':
	$source = "contact";
	break;

	case 'gia':
	$source = "gia";
	break;
	case 'download':
	$source = "download";
	break;
	case 'tinhthanh':
	$source = "tinhthanh";
	break;
	case 'post':
	$source = "post";
	break;
	case 'newsletter':
	$source = "newsletter";
	break;
	case 'toado':
	$source = "toado";
	break;
	case 'phanquyen':
	$source = "phanquyen";
	break;
	case 'com':
	$source = "com";
	break;
	case 'company':
	$source = "company";
	break;
	case 'baiviet':
	$source = "baiviet";
	break;
	case 'database':
	$source = "database";
	break;
	case 'backup':
	$source = "backup";
	break;		
	case 'info':
	$source = "info";
	break;
	case 'product':
	$source = "product";
	break;
	case 'user':
	$source = "user";
	break;		
	case 'lkweb':
	$source = "lkweb";
	break;	
	case 'thuoctinh':
	$source = "thuoctinh";
	break;	
	case 'photo':
	$source = "photo";
	break;														
	case 'setting':
	$source = "setting";
	break;										
	case 'yahoo':
	$source = "yahoo";
	break;
	case 'excel':
	$source = "excel";
	break;										
	case 'bannerqc':
	$source = "bannerqc";
	break;
	default: 
	$source = "index";
	$template = "index";
	break;
}

if(check_login()==false  && $act!="login"){		 
	redirect("index.php?com=user&act=login");
}
if((!isset($_SESSION[$login_name]) || $_SESSION[$login_name]==false) && $act!="login"){
	redirect("index.php?com=user&act=login");
}

if($act=='man' || $act=='man_cat' || $act=='man_list' || $act=='capnhat' || $act=='man_photo' || $act=='man_sub' || $act=='man_item'){
	$_SESSION['links_re'] = getCurrentPage();
}

if(!empty($_SESSION['login']['role']) && $_SESSION['login']['role']==1 && $_GET['com']!='' && $act!='logout' && $act!='login'){
	if(phanquyen_tv($_GET['com'],$_SESSION['login']['quyen'],$act,$_GET['type'])==0){
		$_SESSION['edit']['quyen'] = 'false';
		transfer("Bạn Không có quyền vào đây !","index.php");
	} else {
		$_SESSION['edit']['quyen'] = 'true';
	}
}
include _source.$source.".php";


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1" />
	<title>Administrator - Hệ thống quản trị nội dung</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="css/main.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/external.js"></script>
	<script src="js/jquery.price_format.2.0.js" type="text/javascript"></script>
	<script src="ckeditor/ckeditor.js"></script>
	<link href="js/plugins/multiupload/css/jquery.filer.css" type="text/css" rel="stylesheet" />
	<link href="js/plugins/multiupload/css/themes/jquery.filer-dragdropbox-theme.css" type="text/css" rel="stylesheet" />
	<!-- MultiUpload -->
	<script type="text/javascript" src="js/plugins/multiupload/jquery.filer.min.js"></script>
	<script src="js/jquery.minicolors.js"></script>
	<link rel="stylesheet" href="css/jquery.minicolors.css">
	<!--tags product-->
	<link href="js/select-box-searching-jquery/select2.css" rel="stylesheet"/>
	<script src="js/select-box-searching-jquery/select2.js"></script>

</head>
<?php if(isset($_SESSION[$login_name]) && ($_SESSION[$login_name] == true)){?>  
	<body class="<?=$config_responsive?'responsive':''?>">
		<!-- Left side content -->    
		<script type="text/javascript">
			$(function(){
				var num = $('#menu').children(this).length;
				for (var index=0; index<=num; index++)
				{
					var id = $('#menu').children().eq(index).attr('id');
					$('#'+id+' strong').html($('#'+id+' .sub').children(this).length);
					$('#'+id+' .sub li:last-child').addClass('last');
				}
				$('#menu .activemenu .sub').css('display', 'block');
				$('#menu .activemenu a').removeClass('inactive');
				$('.conso').priceFormat({
					limit: 13,
					prefix: '',
					centsLimit: 0
				});
				
				$('.color').each( function() {
					$(this).minicolors({
						control: $(this).attr('data-control') || 'hue',
						defaultValue: $(this).attr('data-defaultValue') || '',
						format: $(this).attr('data-format') || 'hex',
						keywords: $(this).attr('data-keywords') || '',
						inline: $(this).attr('data-inline') === 'true',
						letterCase: $(this).attr('data-letterCase') || 'lowercase',
						opacity: $(this).attr('data-opacity'),
						position: $(this).attr('data-position') || 'bottom left',
						change: function(value, opacity) {
							if( !value ) return;
							if( opacity ) value += ', ' + opacity;
							if( typeof console === 'object' ) {
								console.log(value);
							}
						},
						theme: 'bootstrap'
					});

				});
				$('.chonngonngu li a').click(function(event) {
					var lang = $(this).attr('href');
					$('.chonngonngu li a').removeClass('active');
					$(this).addClass('active');
					$('.lang_hidden').removeClass('active');
					$('.lang_'+lang).addClass('active');
					return false;
				});
			});
		</script>
		<style type="text/css">
			<?php if(count($config_lang)==1){?>
				.chonngonngu{
					display:none!important;
				}
			<?php } ?>
		</style>
		<div class="main-wrap d-flex justify-content-between">
			<div id="leftSide" class="transition">
				<?php include _template."left_tpl.php";?>
			</div>
			<!-- Right side -->
			<div id="rightSide">
				<!-- Top fixed navigation -->
				<div class="topNav">
					<?php include _template."header_tpl.php";?>
				</div>

				<div class="wrapper">
					<?php include _template.$template."_tpl.php";?>
				</div></div>
				<div class="clear"></div>
			</div>
		</body>
	<?php }else{?>
		<body class="nobg loginPage <?=$config_responsive?'responsive':''?>">   
			<?php include _template.$template."_tpl.php";?>
			<!-- Footer line -->
			<div id="footer">
				<div class="wrapper">Powered by <a href="http://www.nina.vn" title="Thiết kế web NINA">Thiết kế web NINA</a></div>
			</div></body>
		<?php }?>

		<script>
			$(document).ready(function($) {
				$('.ck_editor').each(function(index, el) {
					var id = $(this).find('textarea').attr('id');
					CKEDITOR.env.isCompatible = true;
					CKEDITOR.replace( id, {
						height : 500,
						entities: false,
						uiColor : '#EAEAEA',
						basicEntities: false,
						entities_greek: false,
						entities_latin: false,
						filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
						filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
						filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
						filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
						filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
						filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
						allowedContent:
						'h1 h2 h3 p blockquote strong em;' +
						'a[!href];' +
						'img(left,right)[!src,alt,width,height];' +
						'table tr th td caption;' +
						'span{!font-family};' +
						'span{!color};' +
						'span(!marker);' +
						'del ins'
					});
				});	
			});
			

		</script>

		<script type="text/javascript">
			$(document).ready(function() {
				$('.somenu').click(function(){
					if($(this).hasClass('isso')){
						$('#leftSide').css({'left':'-220px'});
						$(this).removeClass('isso');
					}else{
						$('#leftSide').css({'left':'0px'});
						$(this).addClass('isso');
					}
				});
				$("a.diamondToggle").click(function(){
					if($(this).attr("rel")==0){
						$.ajax({
							type: "POST",
							url: "ajax/ajax_hienthi.php",
							data:{
								id: $(this).attr("data-val0"),
								bang: $(this).attr("data-val2"),
								type: $(this).attr("data-val3"),
								value:1
							}
						});
						$(this).addClass("diamondToggleOff");
						$(this).attr("rel",1);
						
					}else{
						
						$.ajax({
							type: "POST",
							url: "ajax/ajax_hienthi.php",
							data:{
								id: $(this).attr("data-val0"),
								bang: $(this).attr("data-val2"),
								type: $(this).attr("data-val3"),
								value:0
							}
						});
						$(this).removeClass("diamondToggleOff");
						$(this).attr("rel",0);
					}

				});
				/* ajax hienthi*/
				$("a.status").click(function(){
					on = '<img src="./images/icons/color/tick.png" alt="">';
					off = '<img src="./images/icons/color/hide.png" alt="">';
					if($(this).attr("rel")==0){
						$.ajax({
							type: "POST",
							url: "ajax/ajax_hienthi.php",
							data:{
								id: $(this).attr("data-val0"),
								bang: $(this).attr("data-val2"),
								type: $(this).attr("data-val3"),
								value:1
							}
						});
						$(this).html(on);
						$(this).attr("rel",1);
						
					}else{
						
						$.ajax({
							type: "POST",
							url: "ajax/ajax_hienthi.php",
							data:{
								id: $(this).attr("data-val0"),
								bang: $(this).attr("data-val2"),
								type: $(this).attr("data-val3"),
								value:0
							}
						});
						$(this).html(off);
						$(this).attr("rel",0);
					}

				});
				/*end  ajax hienthi*/
				/*select danhmuc*/
				$(".select_danhmuc").change(function() {
					var child = $(this).data("child");
					var levell = $(this).data('level');
					var table = $(this).data('table');
					var type = $(this).data('type');
					$.ajax({
						url: 'ajax/ajax_danhmuc.php',
						type: 'POST',
						data: {level: levell,id:$(this).val(),table:table,type:type},
						success:function(data){
							var op = "<option>Chọn Danh Mục</option>";

							if(levell=='0'){
								$("#id_cat").html(op);
								$("#id_item").html(op);
								$("#id_sub").html(op);
							}else if(levell=='1'){
								$("#id_sub").html(op);
								$("#id_item").html(op);
							}else if(levell=='2'){
								$("#id_sub").html(op);
							}
							$("#"+child).html(data);
						}
					});
				});
			});
		</script>
		<script type="text/javascript">

			<?php if($_GET['com']==''){ ?>
				localStorage.clear();
			<?php } ?>

			$('#menu ul li').click(function(){
				localStorage.setItem("this_index",$(this).index());
				localStorage.setItem("parent_index",$(this).parents('li').index());
			});

			if(localStorage.getItem("parent_index")&&localStorage.getItem("this_index")){
				var this_index=localStorage.getItem("this_index");
				var parent_index=localStorage.getItem("parent_index");
				$('.categories_li').each(function(){
					if($(this).index()==parent_index){
						$(this).addClass('activemenu');
						$(this).find('ul li').each(function(){
							if($(this).index()==this_index){
								$(this).addClass('this');
							}
						});
					}
				});
			}
		</script>
<script type="text/javascript">
    function changeTitle(chuoi) {
        var str = chuoi;
        str = str.toLowerCase();
        str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a"); 
        str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e"); 
        str = str.replace(/ì|í|ị|ỉ|ĩ/g,"i"); 
        str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o"); 
        str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u"); 
        str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y"); 
        str = str.replace(/đ/g,"d");
        str = str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'|\"|\&|\#|\[|\]|~|\$|_|`|-|{|}|\||\\/g,"");
        str = str.replace(/ + /g," ");
        str = str.replace(/\s+/g, '-');
        str = str.trim(); 
        return str;
    }
    $(document).ready(function() {
        $('#chk').click(function(){
            var text=$('input[name=ten_vi]').val();
            if($(this).prop("checked")){
                $('#tenkhongdau').attr('disabled', true);
            }else{
                $('#tenkhongdau').attr('disabled', false);
            }
        });
        $('input[name=ten_vi]').keyup(function(){
            var text=$(this).val();
            if($('#chk').prop('checked')){
                $('#tenkhongdau').val(changeTitle(text));
                $('#tenkhongdau').attr('disabled', true);
            }else{
                $('#tenkhongdau').attr('disabled', false);
            }
        });
    });
</script>

		</html>
