<?php 
session_start();
	@define ( '_lib' , '../../libraries/');
	include_once _lib."config.php";
	include_once _lib."class.database.php";
	$d = new database($config['database']);
	if(isset($_POST["id"])){
		$sql = "update ".$_POST["bang"]." SET ".$_POST["type"]."=".$_POST["value"]." WHERE  id = ".$_POST["id"]."";
		$d->query($sql) or die("Not query sql");
	}
?>