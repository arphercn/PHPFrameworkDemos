<?php
	header("Content-Type:text/html;charset=UTF-8");
	include "init.inc.php";

//	$smarty -> display('extends:parent.tpl|child.tpl');
	$smarty -> display('child.tpl');
