<?php
	ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

	$products = require('App/products.php');
	$layout = 'App/layout/layout.php';
	$template = 'App/view/template.php';

	function classAutoLoad($classname) {
		$filename = "App/Classes/" . $classname . ".php";
		include_once($filename);
	}

	spl_autoload_register('classAutoLoad');

	$obj = new MakeTemplate($template, $products, $layout);

?>