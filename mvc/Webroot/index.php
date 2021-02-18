<?php

include '../vendor/autoload.php';
use Aht\Dispatcher;
use Aht\Router;
use Aht\Request;

define('WEBROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_FILENAME"]));

require(ROOT . 'Config/core.php');
$dispatch = new Dispatcher();
$dispatch->dispatch();

?>