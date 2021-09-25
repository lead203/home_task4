<?php
	$products = require('./products.php');
	$layout = 'layout.php';
	$template = 'template.php';

	function classAutoLoad($classname) {
		$filename = $classname . ".php";
		include_once($filename);
	}

	spl_autoload_register('classAutoLoad');

	$obj = new MakeTemplate($template, $products, $layout);

?>