<div class="timkiem_icon">
	<a href="javascript:void(0);" class="search"><img src="assets/images/timkiem_icon.png"></a>
</div>
<script type="text/javascript">
     function textboxChange2(tb, f, sb) {
        if (!f) {
            if (tb.value == "") {
                tb.value = sb;
            }
        } else {
            if (tb.value == sb) {
                tb.value = "";
            }
        }
    }

    function doEnter2(evt) {
        var key;
        if (evt.keyCode == 13 || evt.which == 13) {
            onSearch2(evt);
        }
    }

    function onSearch2(evt) {
        var keyword = document.getElementById("keyword_2").value;
        if (keyword == '' || keyword == '<?=_tukhoa?>') alert('Bạn chưa nhập từ khóa tìm kiếm!');
        else {
            //var encoded = Base64.encode(keyword);
            location.href = "tim-kiem/keyword=" + keyword;
            loadPage(document.location);
        }
    }
</script>


<div class="search-form" style="width: 0px; opacity: 0;">
<div class="form-row-search">
<form action="" method="GET" name="frm_search" id="frm_search" onsubmit="return false;">
<input id="keyword_2" name="keyword" type="text" class="search-field" placeholder="Nhập tên cần tìm kiếm...">
<input id="defaultvalue" type="hidden" class="search-field" value="Tìm nhanh...">
<input type="hidden" id="href_search" value="http://<?=$config_url?>/tim-kiem" />
</form>
</div>
</div>
<script type="text/javascript">
$().ready(function(){
var show = 0;
$('a.search').click(function() {
if (show == 1) {
$('.form-row-search').css({'width': 0});
$('.search-form').css({'width': 0, 'opacity':0});
$('a.search').removeClass('active');
show = 0;
execSearch();
} else {
$('.form-row-search').css({'width': '100%'});
if ($(window).width() <= 1100) {
$('.search-form').css({'width': 250, 'opacity':1});
}else{
$('.search-form').css({'width': 250, 'opacity':1});
}
$('a.search').addClass('active');
document.getElementById("frm_search").reset();
show = 1;
}
});
$('#keyword_2').keydown(function(e) {
if (e.keyCode == 13) {
execSearch();
}
});
})
function execSearch() {
var keyword = $('#keyword_2').val();
var href_search = $('#href_search').val();
var defaultvalue = $('#defaultvalue').val();
if (keyword == defaultvalue)
return false;
if (keyword != '') {
var url = href_search + '/keyword=' + encodeURIComponent(keyword)
window.location = url;
return false;
}
}
</script>

<style type="text/css">

#menu-top .icon-sb {
    width: 0px !important;
    top:5px;
    right:-80px;
}

#menu-top .icon-sb:hover {
    cursor: pointer;
}

.form-row-search {
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
}

.form-row-search input[type="text"] {
    border: none;
    outline: none;
    width: 100%;
    height: 50px;
    padding: 0px 10px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
    color: #000;
    position: absolute;
    display: block;
    opacity: 0.7;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
}

.form-row-search input[type="text"]:focus {
    opacity: 1;
}

#btnSearch {
    cursor: pointer;
    border: none;
    padding: 2px 8px;
}

.search-form {
    background-color: #079301;
    width: 0px;
    height: 52px;
    position: absolute;
    right: 0px;
    top: 100%;
    z-index: 99999999;
    display: block;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    overflow: hidden;
    border: 1px solid gainsboro;
    opacity: 0;
}

a.search {
    color:#fff
    ;
    font-size:10px;
}
</style>
