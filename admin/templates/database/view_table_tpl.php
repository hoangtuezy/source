<div class="control_frm breadcrumb mt-4">
	<div class="bc">
		<ul id="breadcrumbs" class="breadcrumbs">
			<li><a href="index.php?com=database&act=man"><span>Quản lý database</span></a></li>
			<li class="current"><a href="#" onclick="return false;">Tất cả</a></li>
		</ul>
		<div class="clear"></div>
	</div>
</div>

<div class="card">
	<div class="card-header">
		Table <?=$_GET['type']?>
	</div>
	<div class="card-body">
		<div class="fields">
			<div class="field_item_header row">
				<div class="col">Name</div>
				<div class="col">Type</div>
				<div class="col-1">Null</div>
				<div class="col-2">Key</div>
				<div class="col-2">Default</div>
				<div class="col-3">Extra</div>
				<div class="col">Action</div>
			</div>
			<div class="field_item_body ">
				<?php 
				foreach($items as $field){ ?>
					<div class="field_item row">
						<div class="col"><?=$field['Field']?></div>
						<div class="col"><?=$field['Type']?></div>
						<div class="col-1"><?=$field['Null']?></div>
						<div class="col-2"><?=$field['Key']?></div>
						<div class="col-2"><?=$field['Default']?></div>
						<div class="col-3"><?=$field['Extra']?></div>
						<div class="col"></div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>