    var msgid = 1;

var msg ='';

$(document).on("click",".add_cart",function(){

    var product_id = $(this).data("product");
    var soluong = $("#input_soluong").val();
    var mausac;
    var size;
    // var mausac = $("#select_mausac").val();
    // mausac = parseInt(mausac);
    // if(isNaN(mausac)){
    //     alert("Vui lòng chọn màu sắc thêm vào giỏ hàng.");
    //     return;
    // }
    // var size = $("#select_size").val();
    //  size = parseInt(size);
    // if(isNaN(size)){
    //     alert("Vui lòng chọn size thêm vào giỏ hàng.");
    //     return;
    // }
    var _crsf = $("#ajax_crsf").data('value');

    $.ajax({

        type: "POST",

        url: "ajax/add_giohang",

        data: {productid:product_id,soluong:soluong,_crsf:_crsf,mausac:mausac,size:size},

        success: function(html){

            if(html.result == -1){

                msg = " Sản phẩm không hợp lệ";

            }

            if(html.result == 0){

                msg = " Sản phẩm đã có trong giỏ hàng";

            }

            if(html.result > 0){

                msg = " Thêm vào giở hàng thành công";

            }

            alert(msg);

        },

        complete: function(str){

            var ob = JSON.parse(JSON.stringify(str));

            var obj = JSON.parse(ob.responseText);

            // var _m = $("#ajax_crsf");

            // console.log(_m.data('value'));
            // _m.html(obj._crsf);
            // update_crsf(obj._crsf);
            $(".count_cart").html(obj.count_cart);

            // setTimeout(function(){$(".al" + msgid).parent().html(""); }, 3000 + msgid);      

        }

    });

});



