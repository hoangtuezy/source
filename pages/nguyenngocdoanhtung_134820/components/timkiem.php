<div id="timkiem">
	<form action="tim-kiem" method="get" name="frm_timkiem">
	<div class="relative">

	<input type="text" name="keyword" id="keyword" value="<?= _tukhoa ?>" onblur="textboxChange(this,false,'<?= _tukhoa ?>')" onfocus="textboxChange(this,true,'<?= _tukhoa ?>')" onkeypress="doEnter(event,'keyword');" class="timkiem"/>  
	<input type="button" onclick="onSearch(event,'keyword');" class="bt-timkiem" value="Search"/> 
</form>
	</div>
</div>
