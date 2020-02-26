
<script language="javascript">
	$(document).ready(function() {
		$('.update_stt').keyup(function(event) {
			var id = $(this).attr('rel');
			var table = 'tinhthanh_cat';
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
			window.location.href="index.php?com=tinhthanh&act=man&type=<?=$_GET['type']?>&keyword="+keyword;
		});
	    $("#xoahet").click(function(){
	      var listid="";
	      $("input[name='chon']").each(function(){
	        if (this.checked) listid = listid+","+this.value;
	        })
	      listid=listid.substr(1);   //alert(listid);
	      if (listid=="") { alert("Bạn chưa chọn mục nào"); return false;}
	      hoi= confirm("Bạn có chắc chắn muốn xóa?");
	      if (hoi==true) document.location = "index.php?com=tinhthanh&act=delete_cat?>&curPage=<?=$_GET['curPage']?>&listid=" + listid;
	    });
	});
	function select_onchange()
	{
		var a=document.getElementById("id_list");
		window.location ="index.php?com=tinhthanh&act=man&id_list="+a.value;
		return true;
	}
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.update_stt').keyup(function(event) {
			var id = $(this).attr('rel');
			var table = 'city_cat';
			var value = $(this).val();
			$.ajax ({
				type: "POST",
				url: "ajax/update_stt.php",
				data: {id:id,table:table,value:value},
				success: function(result) {
				}
			});
		});

    $('.soluong_input').keyup(function(event) {
      var id = $(this).data('id');
      var table = 'city_cat';
      var value = $(this).val();
      $.ajax ({
        type: "POST",
        url: "ajax/update_sl.php",
        data: {id:id,table:table,value:value},
        success: function(result) {
        }
      });
    });


	$('.timkiem button').click(function(event) {
		var keyword = $(this).parent().find('input').val();
		window.location.href="index.php?com=tinhthanh&act=man&type=<?=$_GET['type']?>&keyword="+keyword;
	});
    $("#xoahet").click(function(){
      var listid="";
      $("input[name='chon']").each(function(){
        if (this.checked) listid = listid+","+this.value;
        })
      listid=listid.substr(1);   //alert(listid);
      if (listid=="") { alert("Bạn chưa chọn mục nào"); return false;}
      hoi= confirm("Bạn có chắc chắn muốn xóa?");
      if (hoi==true) document.location = "index.php?com=tinhthanh&act=delete&type=<?=$_GET['type']?>&curPage=<?=$_GET['curPage']?>&listid=" + listid;
    });
	});

  function select_list()
  {
    var a=document.getElementById("id_list");
    window.location ="index.php?com=tinhthanh&act=man&id_list="+a.value;
    return true;
  }

  function select_cat()
  {
    var a=document.getElementById("id_list");
    var b=document.getElementById("id_cat");
    window.location ="index.php?com=tinhthanh&act=man&type=<?=$_GET['type']?>&id_list="+a.value+"&id_cat="+b.value;
    return true;
  }
   function select_item()
  {
    var a=document.getElementById("id_list");
    var b=document.getElementById("id_cat");
    var c=document.getElementById("id_item");
    window.location ="index.php?com=tinhthanh&act=man&type=<?=$_GET['type']?>&id_list="+a.value+"&id_cat="+b.value+"&id_item="+c.value;
    return true;
  }
  function select_sub()
  {
    var a=document.getElementById("id_list");
    var b=document.getElementById("id_cat");
    var c=document.getElementById("id_item");
    var d=document.getElementById("id_sub");
    window.location ="index.php?com=tinhthanh&act=man&type=<?=$_GET['type']?>&id_list="+a.value+"&id_cat="+b.value+"&id_item="+c.value+"&id_sub="+d.value;
    return true;
  }

  function select_soluong()
  {
    var a=document.getElementById("soluong");
    window.location ="index.php?com=tinhthanh&act=man&type=<?=$_GET['type']?>&soluong="+a.value;
    return true;
  }

</script>




<?php
	function get_main_list()
	  {
	    $sql="select * from table_city_list order by stt asc";
	    $stmt=mysql_query($sql);
	    $str='
	      <select id="id_list" name="id_list" onchange="select_list()" class="main_select">
	      <option value="">Tỉnh thành</option>';
	    while ($row=@mysql_fetch_array($stmt))
	    {
	      if($row["id"]==(int)@$_REQUEST["id_list"])
	        $selected="selected";
	      else
	        $selected="";
	      $str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';
	    }
	    $str.='</select>';
	    return $str;
	  }
?>

<div class="control_frm" style="margin-top:25px;">
    <div class="bc">
        <ul id="breadcrumbs" class="breadcrumbs">
        	<li><a href="index.php?com=tinhthanh&act=man"><span>Quận huyện</span></a></li>
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
  	<div style="float:left;">
    	<input type="button" class="btn btn-primary" value="Thêm" onclick="location.href='index.php?com=tinhthanh&act=add'" />
        <input type="button" class="btn btn-primary" value="Xoá Chọn" id="xoahet" />

    </div>
</div>

<div class="widget">
  <div class="title"><span class="titleIcon">
    <input type="checkbox" id="titleCheck" name="titleCheck" />
    </span>
    <h6>Chọn tất cả</h6>
    <div class="timkiem">
	    <input type="text" value="" placeholder="Nhập từ khóa tìm kiếm ">
	    <button type="button" class="btn btn-primary"  value="">Tìm kiếm</button>
    </div>
  </div>
	<table cellpadding="0" cellspacing="0" width="100%" class="sTable withCheck mTable" id="checkAll">
		<thead>
			<tr>
				<td></td>
				<td class="tb_data_small"><a href="#" class="tipS" style="margin: 5px;">Thứ tự</a></td>
		        <td class="tb_data_small"><?=get_main_list()?></td>
				<td class="tb_data_small" >Quận Huyện</td>
				<td class="tb_data_small" >Phí vận chuyển</td>
				<td class="tb_data_small" >Hiển thị</td>
				<td class="tb_data_small" >Thao tác</td>
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
	        <td align="center" style="width:20%;">
			<?php
				$d->reset();
				$sql ="select ten_vi from table_city_list where id='".$items[$i]['id_list']."' ";
				$d->query($sql);
				$item_danhmuc1 = $d->fetch_array();
			 	echo $item_danhmuc1['ten_vi'];
			?>
	        </td>
	    	<td class="title_name_data" align="center">
				<a href="index.php?com=tinhthanh&act=edit&id_list=<?=$items[$i]['id_list']?>&id=<?=$items[$i]['id']?>" class="tipS SC_bold"><?=$items[$i]['ten_vi']?></a>
			</td>
<td class="title_name_data">
							<?=price($items[$i]['phivanchuyen'])?>
					</td>
			<td align="center">
	          <a data-val2="table_city_cat" rel="<?=$items[$i]['hienthi']?>" data-val3="hienthi" title class="status smallButton tipS" original-title="<?php if($items[$i]['hienthi']==0) echo 'Click để hiện'; else echo "Click để ẩn"; ?>" data-val0="<?=$items[$i]['id']?>" >
	            <?php if($items[$i]['hienthi']==1) { ?>
	            <img src="./images/icons/color/tick.png" alt="">
	            <?php }else{ ?>
	            <img src="./images/icons/color/hide.png" alt="">
	            <?php } ?>
	          </a>
	        </td>
					
	        <td class="actBtns">
	            <a href="index.php?com=tinhthanh&act=edit&id_list=<?=$items[$i]['id_list']?>&id=<?=$items[$i]['id']?>" title="" class="smallButton tipS" original-title="Sửa sản phẩm"><img src="./images/icons/dark/pencil.png" alt=""></a>

	            <a href="index.php?com=tinhthanh&act=delete&id=<?=$items[$i]['id']?>" onClick="if(!confirm('Xác nhận xóa')) return false;" title="" class="smallButton tipS" original-title="Xóa sản phẩm"><img src="./images/icons/dark/close.png" alt=""></a>
	        </td>

		</tr>
		<?php	}?>
		</tbody>
	</table>
</div>

<div class="paging"><?=$paging?></div>