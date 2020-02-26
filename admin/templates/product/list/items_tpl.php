<script type="text/javascript">
	$(document).ready(function() {
		$('.update_stt').keyup(function(event) {
			var id = $(this).attr('rel');
			var table = 'product_list';
			var value = $(this).val();
			$.ajax ({
				type: "POST",
				url: "ajax/update_stt.php",
				data: {id:id,table:table,value:value},
				success: function(result) {
				}
			});
		});
		$('.timkiem button').click(function(event) {
			var keyword = $(this).parent().find('input').val();
			window.location.href="index.php?com=product&act=man_list&type=<?=$_GET['type']?>&keyword="+keyword;
		});
    $("#xoahet").click(function(){
      var listid="";
      $("input[name='chon']").each(function(){
        if (this.checked) listid = listid+","+this.value;
        })
      listid=listid.substr(1);   //alert(listid);
      if (listid=="") { alert("Bạn chưa chọn mục nào"); return false;}
      hoi= confirm("Bạn có chắc chắn muốn xóa?");
      if (hoi==true) document.location = "index.php?com=product&act=delete_list&type=<?=$_GET['type']?>&curPage=<?=$_GET['curPage']?>&listid=" + listid;
    });
	});
</script> 

<div class="control_frm breadcrumb" style="margin-top:25px;">
    <div class="bc">
        <ul id="breadcrumbs" class="breadcrumbs">
        	<li><a href="index.php?com=product&act=man_list<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>"><span>Danh mục cấp 1</span></a></li>
        	<?php if($_GET['keyword']!=''){ ?>
				<li class="current"><a href="#" onclick="return false;">Kết quả tìm kiếm " <?=$_GET['keyword']?> " </a></li>
			<?php }  else { ?>
            	<li class="current"><a href="#" onclick="return false;">Tất cả</a></li>
            <?php } ?>
        </ul>
        <div class="clear"></div>
    </div>
</div>


<form name="f" id="f" method="post">
<div class="control_frm" style="margin-top:0;">
  	  
</div>

<div class="widget card">
  <div class="title d-block">
    <div style="float:left;">
      <input type="button" class="btn btn-primary" value="Thêm" onclick="location.href='index.php?com=product&type=<?=$_GET['type']?>&act=add_list<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>'" />
        <input type="button" class="btn btn-primary" value="Xoá Chọn" id="xoahet" />

    </div>
    <div class="timkiem float-right">
      <input type="text" value="" class="form-control" placeholder="Nhập từ khóa tìm kiếm ">
      <button type="button" class="btn btn-primary btn-sm ml-2"  value="">Tìm kiếm</button>
    </div>
    <div class="clearfix"></div>
  </div>
  <table cellpadding="0" cellspacing="0" width="100%" class=" table" id="checkAll">
    <thead>
      <tr>
        <td class="col-xs"><span class="titleIcon">
    <input type="checkbox" id="titleCheck" name="titleCheck" />
    </span></td>
        <td class="col-s"><a href="#" class="tipS" style="margin: 5px;">Thứ tự</a></td>       
        <td class="sortCol"><div>Tên danh mục<span></span></div></td>
        <?php if($config_noibat=='true'){ ?> 
        <td class="col-s">Nổi bật</td>
        <?php }?>
        <?php if($config_noibat1=='true'){ ?> 
        <td class="col-s">Nổi bật 1</td>
        <?php }?>
        <?php if($config_noibat2=='true'){ ?> 
        <td class="col-s">Nổi bật 2</td>
        <?php }?>
        <td class="col-s">Ẩn/Hiện</td>
        <td class="col-m">Thao tác</td>
      </tr>
    </thead>

    <tbody>
         <?php for($i=0, $count=count($items); $i<$count; $i++){?>
          <tr>
       <td>
            <input type="checkbox" name="chon" value="<?=$items[$i]['id']?>" id="check<?=$i?>" />
        </td>
        <td align="center">
            <input type="text" value="<?=$items[$i]['stt']?>" name="ordering[]" onkeypress="return OnlyNumber(event)" class="tipS smallText update_stt" original-title="Nhập số thứ tự sản phẩm" rel="<?=$items[$i]['id']?>" />

            <div id="ajaxloader"><img class="numloader" id="ajaxloader<?=$items[$i]['id']?>" src="images/loader.gif" alt="loader" /></div>
        </td> 

      
        <td class="title_name_data">
            <a href="index.php?com=product&act=edit_list&id=<?=$items[$i]['id']?><?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>" class="tipS SC_bold"><?=$items[$i]['ten_vi']?></a>
        </td>
        <?php if($config_noibat=='true'){ ?> 
        <td align="center">
          <a data-val2="table_<?=$_GET['com']?>_list" rel="<?=$items[$i]['noibat']?>" data-val3="noibat" title class="status smallButton tipS" original-title="<?php if($items[$i]['noibat']==0) echo 'Click để hiện'; else echo "Click để ẩn"; ?>" data-val0="<?=$items[$i]['id']?>" >
            <?php if($items[$i]['noibat']==1) { ?>
            <img src="./images/icons/color/tick.png" alt="">
            <?php }else{ ?>
            <img src="./images/icons/color/hide.png" alt="">
            <?php } ?>
          </a>
        </td>
        <?php }?>

        <?php if($config_noibat1=='true'){ ?> 
        <td align="center">
          <a data-val2="table_<?=$_GET['com']?>_list" rel="<?=$items[$i]['noibat1']?>" data-val3="noibat1" title class="status smallButton tipS" original-title="<?php if($items[$i]['noibat1']==0) echo 'Click để hiện'; else echo "Click để ẩn"; ?>" data-val0="<?=$items[$i]['id']?>" >
            <?php if($items[$i]['noibat1']==1) { ?>
            <img src="./images/icons/color/tick.png" alt="">
            <?php }else{ ?>
            <img src="./images/icons/color/hide.png" alt="">
            <?php } ?>
          </a>
        </td>
        <?php }?>

        <?php if($config_noibat2=='true'){ ?> 
        <td align="center">
          <a data-val2="table_<?=$_GET['com']?>_list" rel="<?=$items[$i]['noibat2']?>" data-val3="noibat2" title class="status smallButton tipS" original-title="<?php if($items[$i]['noibat2']==0) echo 'Click để hiện'; else echo "Click để ẩn"; ?>" data-val0="<?=$items[$i]['id']?>" >
            <?php if($items[$i]['noibat2']==1) { ?>
            <img src="./images/icons/color/tick.png" alt="">
            <?php }else{ ?>
            <img src="./images/icons/color/hide.png" alt="">
            <?php } ?>
          </a>
        </td>
        <?php }?>

         <td align="center">
          <a data-val2="table_<?=$_GET['com']?>_list" rel="<?=$items[$i]['hienthi']?>" data-val3="hienthi" title class="status smallButton tipS" original-title="<?php if($items[$i]['hienthi']==0) echo 'Click để hiện'; else echo "Click để ẩn"; ?>" data-val0="<?=$items[$i]['id']?>" >
            <?php if($items[$i]['hienthi']==1) { ?>
            <img src="./images/icons/color/tick.png" alt="">
            <?php }else{ ?>
            <img src="./images/icons/color/hide.png" alt="">
            <?php } ?>
          </a>
        </td>
       
        <td class="actBtns">
            <a href="index.php?com=product&act=edit_list&id=<?=$items[$i]['id']?><?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>" title="" class="smallButton tipS" original-title="Sửa sản phẩm"><img src="./images/icons/dark/pencil.png" alt=""></a>

            <a href="index.php?com=product&act=delete_list&id=<?=$items[$i]['id']?><?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>" onClick="if(!confirm('Xác nhận xóa')) return false;" title="" class="smallButton tipS" original-title="Xóa sản phẩm"><img src="./images/icons/dark/close.png" alt=""></a>
        </td>
      </tr>
         <?php } ?>
                </tbody>
  </table>
</div>
</form>  

<div class="paging"><?=$paging?></div>