    var msgid = 1;

var msg ='';

$(document).on("click",".add_cart",function(){

    var product_id = $(this).data("product");

    var soluong = $("#input_soluong").val();

    var _crsf = $("#ajax_crsf").data('value');

    $.ajax({

        type: "POST",

        url: "ajax/add_giohang",

        data: {productid:product_id,soluong:soluong,_crsf:_crsf},

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

            var _m = $("#ajax_crsf");

            console.log(_m.data('value'));

            _m.html(obj._crsf);

            update_crsf(obj._crsf);

            // setTimeout(function(){$(".al" + msgid).parent().html(""); }, 3000 + msgid);      

        }

    });

});


