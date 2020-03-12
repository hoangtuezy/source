<script type="text/javascript">
	$(document).ready(function() {
		$('.chonngonngu li a').click(function(event) {
			var lang = $(this).attr('href');
			$('.chonngonngu li a').removeClass('active');
			$(this).addClass('active');
			$('.lang_hidden').removeClass('active');
			$('.lang_'+lang).addClass('active');
			return false;
		});
		$('.update_stt').keyup(function(event) {
			var id = $(this).attr('rel');
			var table = 'product_photo';
			var value = $(this).val();
			$.ajax ({
				type: "POST",
				url: "ajax/update_stt.php",
				data: {id:id,table:table,value:value},
				success: function(result) {
				}
			});
		});
		$('.delete_images').click(function(){
			if (confirm('Bạn có muốn xóa hình này ko ? ')) {
				var id = $(this).attr('title');
				var table = 'product_photo';
				var links = "../upload/product/";
				$.ajax ({
					type: "POST",
					url: "ajax/delete_images.php",
					data: {id:id,table:table,links:links},
					success: function(result) {
					}
				});
				$(this).parent().slideUp();
			}
			return false;
		});
		$('.themmoi').click(function(e) {
			$.ajax ({
				type: "POST",
				url: "ajax/khuyenmai.php",
				success: function(result) {
					$('.load_sp').append(result);
				}
			});
		});
		$('.delete').click(function(e) {
			$(this).parent().remove();
		});

	});
	$(function(){
		$("#states").select2();
///
$("#states").change(function(){
	$tags = $(this).val();

	if($tags>0){
		$("#tags_name").append("<p class='delete_tags'>"+$("#states option:selected").text()+"<input name='tags[]' value='"+$tags+"'  type='hidden' /> <span></span> </p>");
	}
	$(".delete_tags span").click(function(){
		$(this).parent().remove();
	});
});
//
$(".delete_tags span").click(function(){
	$(this).parent().remove();
});
});

</script>
<?php

function get_main_list()
{
	global $item;
	$sql="select * from table_product_list where type='".$_GET['type']."' order by stt asc";
	$stmt=mysql_query($sql);
	$str='
	<select id="id_list" name="id_list" data-level="0" data-type="'.$_GET['type'].'" data-table="table_product_cat" data-child="id_cat" class="main_select select_danhmuc form-control">
	<option value="">Chọn danh mục 1</option>';
	while ($row=@mysql_fetch_array($stmt))
	{
		if($row["id"]==(int)@$item["id_list"])
			$selected="selected";
		else
			$selected="";
		$str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';
	}
	$str.='</select>';
	return $str;
}
function get_main_cat()
{
	global $item;
	$sql="select * from table_product_cat where id_list='".$item['id_list']."' and type='".$_GET['type']."' order by stt asc";
	$stmt=mysql_query($sql);
	$str='
	<select id="id_cat" name="id_cat" data-level="1" data-type="'.$_GET['type'].'" data-table="table_product_item" data-child="id_item" class="main_select select_danhmuc form-control">
	<option value="">Chọn danh mục 2</option>';
	while ($row=@mysql_fetch_array($stmt))
	{
		if($row["id"]==(int)@$item["id_cat"])
			$selected="selected";
		else
			$selected="";
		$str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';
	}
	$str.='</select>';
	return $str;
}
function get_main_item()
{
	global $item;
	$sql="select * from table_product_item where id_cat='".$item['id_cat']."' and type='".$_GET['type']."' order by stt asc";
	$stmt=mysql_query($sql);
	$str='
	<select id="id_item" name="id_item" data-level="2" data-type="'.$_GET['type'].'" data-table="table_product_sub" data-child="id_sub" class="main_select select_danhmuc">
	<option value="">Chọn danh mục 3</option>';
	while ($row=@mysql_fetch_array($stmt))
	{
		if($row["id"]==(int)@$item["id_item"])
			$selected="selected";
		else
			$selected="";
		$str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';
	}
	$str.='</select>';
	return $str;
}
function get_main_sub()
{
	global $item;
	$sql="select * from table_product_sub where id_item='".$item['id_item']."' and type='".$_GET['type']."' order by stt asc";
	$stmt=mysql_query($sql);
	$str='
	<select id="id_sub" name="id_sub" class="main_select">
	<option value="">Chọn danh mục 3</option>';
	while ($row=@mysql_fetch_array($stmt))
	{
		if($row["id"]==(int)@$item["id_sub"])
			$selected="selected";
		else
			$selected="";
		$str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';
	}
	$str.='</select>';
	return $str;
}
function get_dotuoi()
{
	global $item;
	$sql="select * from table_thuoctinh where type='dotuoi' order by stt,id desc";
	$stmt=mysql_query($sql);
	$str='
	<select id="id_dotuoi" name="id_dotuoi" class="main_select">
	<option value="">Chọn độ tuổi</option>';
	while ($row=@mysql_fetch_array($stmt))
	{
		if($row["id"]==(int)@$item["id_dotuoi"])
			$selected="selected";
		else
			$selected="";
		$str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';
	}
	$str.='</select>';
	return $str;
}
function get_gioitinh()
{
	global $item;
	$sql="select * from table_thuoctinh where type='gioitinh' order by stt,id desc";
	$stmt=mysql_query($sql);
	$str='
	<select id="id_gioitinh" name="id_gioitinh" class="main_select">
	<option value="">Chọn giới tính</option>';
	while ($row=@mysql_fetch_array($stmt))
	{
		if($row["id"]==(int)@$item["id_gioitinh"])
			$selected="selected";
		else
			$selected="";
		$str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';
	}
	$str.='</select>';
	return $str;
}
//------------ tags-------------------------
if($item['tags']!=''){
	$tags = explode(",", $item['tags']) ;
	$sql = "select id,ten_vi from #_tags where type='".$_REQUEST["type"]."' and id<>".$tags[0];
	for ($i=1,$count = count($tags); $i < $count ; $i++) {
		$sql .=" and id<> ".$tags[$i];
	}
}else{
	$sql = "select id,ten_vi from #_tags where type='".$_REQUEST["type"]."'";
}
$d->query($sql);
$tags_arr = $d->result_array();
//------------end tags---------------
?>
<div class="wrapper">
	<div class="control_frm breadcrumb" style="margin-top:25px;">
		<div class="bc">
			<ul id="breadcrumbs" class="breadcrumbs">
				<li><a href="index.php?com=product&act=add<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>"><span><?=$title_main?> </span></a></li>
				<li class="current"><a href="#" onclick="return false;">Thêm <?=$title_main?></a></li>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
	<form name="supplier" id="validate" class="form" action="index.php?com=product&act=save<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>" method="post" enctype="multipart/form-data">
		<?php include _template."helper/lang.php";?>
		<div class="widget">
			
			
			
			<?php if($config_list=='true'){ ?>
				<div class="formRow">
					<label>Chọn danh mục 1</label>
					<div class="formRight">
						<?=get_main_list()?>
					</div>
					<div class="clear"></div>
				</div>
			<?php } ?>
			<?php if($config_cat=='true'){ ?>
				<div class="formRow">
					<label>Chọn danh mục 2</label>
					<div class="formRight">
						<?=get_main_cat()?>
					</div>
					<div class="clear"></div>
				</div>
			<?php } ?>
			<?php if($config_item=='true'){ ?>
				<div class="formRow">
					<label>Chọn danh mục 3</label>
					<div class="formRight">
						<?=get_main_item()?>
					</div>
					<div class="clear"></div>
				</div>
			<?php } ?>
			<?php if($config_sub=='true'){ ?>
				<div class="formRow">
					<label>Chọn danh mục 4</label>
					<div class="formRight">
						<?=get_main_sub()?>
					</div>
					<div class="clear"></div>
				</div>
			<?php } ?>
			<div class="formRow">
				<label>Tải hình ảnh:</label>
				<div class="formRight">
					<input type="file" id="file" name="file" />
					<img src="./images/question-button.png" alt="Upload hình" class="icon_question tipS" original-title="Tải hình ảnh (ảnh JPEG, GIF , JPG , PNG)">
					<div class="note"> width : <?php echo _width_thumb*$ratio_;?> px , Height : <?php echo _height_thumb*$ratio_;?> px </div>
				</div>
				<div class="clear"></div>
			</div>
			<?php if($_GET['act']=='edit'){?>
				<div class="formRow">
					<label>Hình Hiện Tại :</label>
					<div class="formRight">

						<div class="mt10"><img src="<?=_upload_product.$item['thumb']?>"  alt="NO PHOTO" width="250" /></div>
					</div>
					<div class="clear"></div>
				</div>
			<?php } ?>
			
			<div class="formRow">
				<label>Hình ảnh kèm theo: </label>
				<div class="formRight">
					<a class="file_input" data-jfiler-name="files" data-jfiler-extensions="jpg, jpeg, png, gif"><img src="images/image_add.png" alt="" width="100"></a>
					
					
					<?php if($act=='edit'){?>
						<?php if(count($ds_photo)!=0){?>
							<?php for($i=0;$i<count($ds_photo);$i++){?>
								<div class="item_trich">
									<img class="img_trich" width="140px" height="110px" src="<?=_upload_product.$ds_photo[$i]['photo']?>" />
									<input type="text" rel="<?=$ds_photo[$i]['id']?>" value="<?=$ds_photo[$i]['stt']?>" class="update_stt tipS form-control " />
									<a class="delete_images" title="<?=$ds_photo[$i]['id']?>"><img src="images/delete.png"></a>
								</div>
							<?php } ?>

						<?php }?>
					<?php }?>
				</div>
				<div class="clear"></div>
			</div>
			
			
			<?php include _template."helper/ten_lang.php";?>

			<?php if($config_quangcao == 'true'){ ?>
				<div class="formRow">
					<label>Ảnh Quảng Cáo:</label>
					<div class="formRight">
						<input type="file" id="file" name="quangcao" />
						<img src="./images/question-button.png" alt="Upload hình" class="icon_question tipS" original-title="Tải hình ảnh (ảnh JPEG, GIF , JPG , PNG)">
						<div class="note"> width : <?php echo _width_thumb*$ratio_;?> px , Height : <?php echo _height_thumb*$ratio_;?> px </div>
					</div>
					<div class="clear"></div>
				</div>
				<?php if($_GET['act']=='edit'){?>
					<div class="formRow">
						<label>Hình Hiện Tại :</label>
						<div class="formRight">

							<div class="mt10"><img src="<?=_upload_product.$item['file']?>"  alt="NO PHOTO" width="250" /></div>
						</div>
						<div class="clear"></div>
					</div>
				<?php } ?>
			<?php } ?>
			<?php if($config_link == 'true'){ ?>
				<div class="formRow">
					<label>Link ảnh QC</label>
					<div class="formRight">
						<input type="text" name="link" title="Link sản phẩm" id="link" class="form-control tipS" value="<?=@$item['link']?>" />
					</div>
					<div class="clear"></div>
				</div>
			<?php } ?>
			<?php if($config_masp){ ?>			
				<div class="formRow">
					<label>Mã SP</label>
					<div class="formRight">
						<input type="text" name="masp" title="Nhập mã sản phẩm" id="masp" class="form-control tipS" value="<?=@$item['masp']?>" />
					</div>
					<div class="clear"></div>
				</div>
			<?php } ?>


			<?php if($config_diachi){ ?>		
				<div class="formRow">
					<label>Địa Chỉ</label>
					<div class="formRight">
						<input type="text" name="diachi" title="Nhập mã địa chỉ" id="diachi" class="form-control tipS" value="<?=@$item['diachi']?>" />
					</div>
					<div class="clear"></div>
				</div>
			<?php } ?>
			<?php if($config_dientich){ ?>			
				<div class="formRow">
					<label>Diện Tích</label>
					<div class="formRight">
						<input type="text" name="dientich" title="Nhập mã diện tích" id="dientich" class="form-control tipS" value="<?=@$item['dientich']?>" />
					</div>
					<div class="clear"></div>
				</div>
			<?php } ?>
			<?php if($config_giaban){ ?>					
				<div class="formRow">
					<label class="price">Giá</label>
					<div class="formRight">
						<input type="text" name="giaban" title="Nhập giá bán" id="giaban" class="conso tipS form-control  " value="<?=@$item['giaban']?>" />
					</div>
					<div class="clear"></div>
				</div>
			<?php } ?>
			<?php if($config_trongluong=="true"){ ?>					
				<div class="formRow">
					<label class="price">Khối Lượng</label>
					<div class="formRight">
						<input type="text" name="trongluong" title="Nhập Khối Lượng" id="trongluong" class=" tipS form-control  " value="<?=@$item['trongluong']?>" />
					</div>
					<div class="clear"></div>
				</div>
			<?php } ?>
			
<?php if($config_cart['color']){ ?>				
			<?php
			$price_bycolor = json_decode($item['price_bycolor'],1);
			$row_mausac =result_array("select * from #_thuoctinh where hienthi=1 and type='mausac' order by id desc");

			?>
			<div class="formRow">
				<label>Màu sắc </label>
				<div class="formRight">
					<select data-placeholder="Chọn màu sắc" multiple class="chosen-select" name="mausac[]" style="width:30%" id="product_mausac">
						<option value="">--Chọn màu sắc--</option>
						<?php

						$arr_mau=explode(',', $item['color']);
						for($i=0;$i<count($row_mausac);$i++) {
							if(in_array($row_mausac[$i]['id'], $arr_mau))
							{
								$selected='selected';
							}else{
								$selected='';
							}
							?>
							<option value="<?=$row_mausac[$i]['id']?>" <?=$selected?>><?=$row_mausac[$i]['ten_vi']?></option>
						<?php } ?>
					</select>
				</div>
				<div class="clear"></div>
			</div>
			<div class="formRow">
				<label>Giá theo màu</label>
				<div class="formRight" id="price_color_container">
					<?php foreach($arr_mau as $stt => $color_id){
$_tmm = fetch_array("select * from #_thuoctinh where id='".(int) $color_id."' ");
if(!empty($_tmm)){ 
					 ?>
		<div class="col-md-3 mb-2 price_bycolor<?=$color_id?>"><div class="form-row"><div  class="w-100 d-flex align-items-center justify-content-between"><?=$_tmm["ten_vi"]?><span class="color_square" style="display:block;width:50px;height:10px;background-color: <?=$_tmm['mau']?>"></span></div><input type="text" name="price_bycolor[]" id="mausac_<?=$color_id?>" placeholder="Giá " class="conso form-control tipS" value="<?=$price_bycolor[$color_id]?>"></div></div>
<?php } ?>
					<?php } ?>
				</div>
			</div>
<?php } ?>			
<?php if($config_cart['size']){ ?>			
			<div class="formRow">
				<label>Size </label>
				<div class="formRight">
					<select data-placeholder="Chọn size" multiple class="chosen-select" name="size[]" style="width:30%">
						<option value="">--Chọn size--</option>
						<?php
						$d->reset();
						$sql = "select id,ten_vi from #_thuoctinh where hienthi=1 and type='size' order by id desc";
						$d->query($sql);
						$row_size = $d->result_array();
						$arr_size=explode(',', $item['size']);
						for($i=0;$i<count($row_size);$i++) {
							if(in_array($row_size[$i]['id'], $arr_size))
							{
								$selected='selected';
							}else{
								$selected='';
							}
							?>
							<option value="<?=$row_size[$i]['id']?>" <?=$selected?>><?=$row_size[$i]['ten_vi']?></option>
						<?php } ?>
					</select>
				</div>
				<div class="clear"></div>
			</div>
<?php } ?>


			<?php if($config_giacu){ ?>			

				<div class="formRow">

					<label class="price">Giá gốc</label>

					<div class="formRight">
						<input type="text" name="giacu" title="Nhập giá gốc" id="giacu" class="conso tipS form-control  " value="<?=@$item['giacu']?>" />
					</div>
					<div class="clear"></div>
				</div>
			<?php } ?>			
			<!-- <div class="formRow">
					<label>Khuyến mãi</label>
					<div class="formRight">
					<div id="load_muakem">
						<?php
								$khuyenmai_vi=explode("|",$item['khuyenmai_vi']);
								if(count($khuyenmai_vi)!=0){
						?>
						<div class="load_sp">
							<?php for($i=0;$i<count($khuyenmai_vi);$i++){ ?>
							<p>
								<input type="text" value="<?=$khuyenmai_vi[$i]?>" name="khuyenmai_vi[]" placeholder="Thông tin khuyến mãi" size="30" >&nbsp;
								<img src="images/disabled.png" class="delete" height="15" />
							</p>
							<?php } ?>
						</div>
						<?php  } ?>
					<div><img src="images/add.jpg" class="themmoi" /></divs>
				</div>
			</div>
			<div class="clear"></div>
		</div> -->
		<?php if($config_tags == 'true'){ ?>
			<div class="formRow lang_hidden lang_vi active">
				<label>Tags </label>
				<div class="formRight">
					<select style="width:300px" id="states">
						<option value="0">
							Thêm Tags
						</option>
						<?php for ($i=0,$countt = count($tags_arr); $i < $countt ; $i++) { ?>
							<option value="<?=$tags_arr[$i]["id"]?>"><?=$tags_arr[$i]["ten_vi"]?></option>
						<?php }?>
					</select>
					<div class="clear"></div>
					<div id="tags_name">
						<?php  for ($i=0,$count = count($tags); $i < $count ; $i++) {
							$d->query("select id,ten_vi from #_tags where id=".$tags[$i]);
							$tags_name = $d->fetch_array();
							?>
							<p value="<?=$tags_name["id"]?>" class="delete_tags"><?=$tags_name["ten_vi"]?> <span ></span>
								<input name="tags[]" value="<?=$tags_name["id"]?>"  type="hidden" />
							</p>

						<?php }?>
					</div>
				</div>
				<div class="clear"></div>
			</div> 
		<?php } ?>
		<?php if($config_stock == 'true'){ ?>
			<div class="formRow">
				<label>Còn hàng : <img src="./images/question-button.png" alt="Chọn loại" class="icon_que tipS" original-title="Bỏ chọn để không hiển thị danh mục này ! "> </label>
				<div class="formRight">
					<input type="checkbox" name="stock" id="check1" value="1" <?=(!isset($item['stock']) || $item['stock']==1)?'checked="checked"':''?> />
				</div>
			</div>
		<?php } ?>	
		<?php include _template."helper/mota_lang.php";?>
		<?php include _template."helper/noidung_lang.php";?>
		<div class="formRow">
			<label>Hiển thị : <img src="./images/question-button.png" alt="Chọn loại" class="icon_que tipS" original-title="Bỏ chọn để không hiển thị danh mục này ! "> </label>
			<div class="formRight">

				<input type="checkbox" name="hienthi" id="check1" value="1" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?> />
				<label>Số thứ tự: </label>
				<input type="text" class="tipS form-control " value="<?=isset($item['stt'])?$item['stt']:1?>" name="stt" style="width:40px; text-align:center;" onkeypress="return OnlyNumber(event)" original-title="Số thứ tự của danh mục, chỉ nhập số">
			</div>
			<div class="clear"></div>
		</div>

	</div>
	<div class="widget">
		<div class="title"><img src="./images/icons/dark/record.png" alt="" class="titleIcon" />
			<h6>Nội dung seo</h6>
		</div>
	<!-- <div class="formRow">
			<label>H1</label>
			<div class="formRight">
			<input type="text" value="<?=@$item['h1']?>" name="h1" title="Nội dung thẻ meta h1 dùng để SEO" class="tipS form-control " />
		</div>
		<div class="clear"></div>
	</div>
	
	
	<div class="formRow">
		<label>H2</label>
		<div class="formRight">
			<input type="text" value="<?=@$item['h2']?>" name="h2" title="Nội dung thẻ meta h2 dùng để SEO" class="tipS form-control " />
		</div>
		<div class="clear"></div>
	</div>
	
	
	
	<div class="formRow">
		<label>H3</label>
		<div class="formRight">
			<input type="text" value="<?=@$item['h3']?>" name="h3" title="Nội dung thẻ meta h3 dùng để SEO" class="tipS form-control " />
		</div>
		<div class="clear"></div>
	</div>
	
	
	<div class="formRow">
		<label>H4</label>
		<div class="formRight">
			<input type="text" value="<?=@$item['h4']?>" name="h4" title="Nội dung thẻ meta h4 dùng để SEO" class="tipS form-control " />
		</div>
		<div class="clear"></div>
	</div>
	
	
	<div class="formRow">
		<label>H5</label>
		<div class="formRight">
			<input type="text" value="<?=@$item['h5']?>" name="h5" title="Nội dung thẻ meta h5 dùng để SEO" class="tipS form-control " />
		</div>
		<div class="clear"></div>
	</div>
	
	
	<div class="formRow">
		<label>H6</label>
		<div class="formRight">
			<input type="text" value="<?=@$item['h6']?>" name="h6" title="Nội dung thẻ meta h6 dùng để SEO" class="tipS form-control " />
		</div>
		<div class="clear"></div>
	</div> -->
	<div class="formRow">
		<label>Title</label>
		<div class="formRight">
			<input type="text" value="<?=@$item['title']?>" name="title" title="Nội dung thẻ meta Title dùng để SEO" class="tipS form-control " />
		</div>
		<div class="clear"></div>
	</div>
	
	<div class="formRow">
		<label>Từ khóa</label>
		<div class="formRight">
			<input type="text" value="<?=@$item['keywords']?>" name="keywords" title="Từ khóa chính cho danh mục" class="tipS form-control " />
		</div>
		<div class="clear"></div>
	</div>
	
	<div class="formRow">
		<label>Description:</label>
		<div class="formRight">
			<textarea rows="4" cols="" title="Nội dung thẻ meta Description dùng để SEO" class="tipS form-control " name="description"><?=@$item['description']?></textarea>
			<input readonly="readonly" type="text" style="width:25px; margin-top:10px; text-align:center;" name="des_char" value="<?=@$item['des_char']?>" /> ký tự <b>(Tốt nhất là 68 - 170 ký tự)</b>
		</div>
		<div class="clear"></div>
	</div>
	
	<div class="formRow">
		<div class="formRight">
			<input type="hidden" name="type" id="id_this_type" value="<?=$_REQUEST['type']?>" />
			<input type="hidden" name="id" id="id_this_post" value="<?=@$item['id']?>" />
			<input type="submit" class="btn btn-primary" onclick="TreeFilterChanged2(); return false;" value="Hoàn tất" />
			<a href="index.php?com=product&act=man<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>" onClick="if(!confirm('Bạn có muốn thoát không ? ')) return false;" title="" class="btn btn-secondary tipS" original-title="Thoát">Thoát</a>
		</div>
		<div class="clear"></div>
	</div>
</div>
</form>        </div>
<script type="text/javascript">
	var config = {
		'.chosen-select'           : {},
		'.chosen-select-deselect'  : {allow_single_deselect:true},
		'.chosen-select-no-single' : {disable_search_threshold:10},
		'.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
		'.chosen-select-width'     : {width:"95%"}
	}
	for (var selector in config) {
		$(selector).chosen(config[selector]);
	}
</script>

<script>
	$(document).ready(function() {
		$('.file_input').filer({
			showThumbs: true,
			templates: {
				box: '<ul class="jFiler-item-list"></ul>',
				item: '<li class="jFiler-item">\
				<div class="jFiler-item-container">\
				<div class="jFiler-item-inner">\
				<div class="jFiler-item-thumb">\
				<div class="jFiler-item-status"></div>\
				<div class="jFiler-item-info">\
				<span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
				</div>\
				{{fi-image}}\
				</div>\
				<div class="jFiler-item-assets jFiler-row">\
				<ul class="list-inline pull-left">\
				<li><span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span></li>\
				</ul>\
				<ul class="list-inline pull-right">\
				<li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
				</ul>\
				</div>\<input type="text" name="stthinh[]" class="stthinh" placeholder="Nhập STT" />\
				</div>\
				</div>\
				</li>',
				itemAppend: '<li class="jFiler-item">\
				<div class="jFiler-item-container">\
				<div class="jFiler-item-inner">\
				<div class="jFiler-item-thumb">\
				<div class="jFiler-item-status"></div>\
				<div class="jFiler-item-info">\
				<span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
				</div>\
				{{fi-image}}\
				</div>\
				<div class="jFiler-item-assets jFiler-row">\
				<ul class="list-inline pull-left">\
				<span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span>\
				</ul>\
				<ul class="list-inline pull-right">\
				<li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
				</ul>\
				</div>\<input type="text" name="stthinh[]" class="stthinh" placeholder="Nhập STT" />\
				</div>\
				</div>\
				</li>',
				progressBar: '<div class="bar"></div>',
				itemAppendToEnd: true,
				removeConfirmation: true,
				_selectors: {
					list: '.jFiler-item-list',
					item: '.jFiler-item',
					progressBar: '.bar',
					remove: '.jFiler-item-trash-action',
				}
			},
			addMore: true
		});
	});
</script>
<?php if($config_color){ ?>
	<?php 
	$raw_colors = result_array("select * from #_thuoctinh where type='mausac' and hienthi=1 order by id desc");
	$colors = null;
	foreach($raw_colors as $item){
		$colors[$item['id']] = $item;
	}
	$product_colors = json_decode($item['price_bycolor']);
	$product_colors_keys = array_keys($product_colors);

	?>	
	<script>
		var raw_colors = <?=json_encode($colors,1)?>;
	// console.log(raw_colors[251]);
	
	function color_isChanged(c,nid){
		return c.length === nid.length;
	}
	function new_color(nid){
		current_choosen_colors = nid;
	}
	function generate_input_price(colorid,valuebeta = 0){
		return '<div class="col-md-3 mb-2 price_bycolor'+colorid.id+'"><div class="form-row"><div  class="w-100 d-flex align-items-center justify-content-between">'
		+colorid.ten_vi+
		'<span class="color_square" style="display:block;width:50px;height:10px;background-color: '
		+colorid.mau+
		'"></span></div><input type="text" name="price_bycolor[]" id="mausac_'+colorid.id+'" placeholder="Giá " class="conso form-control tipS" value="'+valuebeta+'"></div></div>';
	}
	$(document).ready(function(){
		var current_choosen_colors = $('#product_mausac').val();
		$('#product_mausac').on('change', function(evt, params) {
			var choosen_colors = $(this).val();
			
			if(choosen_colors === null){
				choosen_colors = [];
			}
			if( choosen_colors.length < current_choosen_colors.length){
				var diff = $(current_choosen_colors).not(choosen_colors).get();
				current_choosen_colors = choosen_colors;
				$("#price_color_container .price_bycolor"+diff[0]).remove();
			}else{ //add new
				var diff = $(choosen_colors).not(current_choosen_colors).get();
				current_choosen_colors.push(diff[0]);
				$("#price_color_container").append(generate_input_price(raw_colors[diff[0]]));
			}


			// end check
			
			
			// choosen_colors.each(function(key){
			// 	if(current_choosen_colors.indexOf(key)!=-1){ // ko ton tai

			// 			$("#price_color_container").append(generate_empty_input_price(raw_colors[key]))
			// 	}else{

			// 	}
			// });
			
		});
	});
</script>
<?php } ?>