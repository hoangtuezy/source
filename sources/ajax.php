<?php if(!defined('_lib')) die("Error");
if(!isAjaxRequest()) die();
include _source.'ajax/'.$act.".php";
