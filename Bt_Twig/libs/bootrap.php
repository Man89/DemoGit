<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_STRICT ^ E_WARNING ^ E_DEPRECATED);
require_once (__DIR__ . '/config.php');
require_once (__DIR__ .'/global.php');

function __autoload($className){
    include_once (__DIR__ .'/'.$className. '.class.php');
}

$db = new Database();

require_once(__DIR__ . '/Twig/lib/Twig/Autoloader.php');
Twig_Autoloader::register();
