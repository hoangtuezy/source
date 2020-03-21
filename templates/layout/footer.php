<?php 

$footer_content = fetch_array("select * from #_company where type='footer'  ");

$chinhsach = result_array("select * from #_baiviet where type='chinh-sach' and hienthi=1 and noibat=1 order by stt asc ");

?>

<div id="footer">


	<div class="container py-sm-4 py-2">

		<div class="row d-flex justify-content-between flex-wrap">

			<div class="col-md-4 col-sm-12 col-12">

				<h2><?=$row_setting["ten_$lang"]?></h2>

				<div class="icon marker">Địa chỉ: <?=$row_setting["diachi_$lang"]?></div>

				<div class="icon hotline">Hotline :<?=$row_setting["hotline"]?></div>

				<div class="icon email">Email :<?=$row_setting["email"]?></div>

				<div class="icon global">Website :<?=$row_setting["website"]?></div>

				

			</div>

			<div class="col-md-3 col-sm-12 col-12">

				<h3 style="font-family: roboto-bold;text-transform: uppercase;">Chính sách</h3>

				<div> 

					<?php foreach($chinhsach as $item): ?>

						<a href="<?=$item['tenkhongdau']?>" class="chinhsach_item"><?=$item["ten_$lang"]?></a>



					<?php endforeach; ?>

				</div>

			</div>

			<div class="col-md-4 col-sm-12 col-12">

				<div class="bando_iframe">

					<?=layout_fanpage($row_setting['facebook'],350,200)?>

				</div>

			</div>

		</div>

		

	</div>

</div>

<div class="copyright">

			© Copyright <?=date('Y',time())?> <?=$row_setting["ten_$lang"]?>. ALL RIGHT REVERSED. DESIGN  BY NINA

		</div>











<script>

	$(document).on('click','.baogia_fix',function(){

		$("#newsletter_baogia").toggleClass("d-none");

	});



	$(document).on('click','#newsletter_baogia .close',function(){

		$("#newsletter_baogia").toggleClass("d-none");

	});

</script>

<script>

        grecaptcha.ready(function () {

        grecaptcha.execute('<?=$config['gv3_client']?>', { action: 'nindex' }).then(function (token) {

        var recaptchaResponse = document.getElementsByClassName('recaptchaResponse');

        for(var i = 0; i < recaptchaResponse.length; i++) {

        recaptchaResponse[i].value = token;

        }

        });

        });

        </script>