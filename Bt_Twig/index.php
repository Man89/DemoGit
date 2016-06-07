<?php

require_once (__DIR__. '/libs/bootrap.php');

//echo 'HTTP_POST:'. $_SERVER['HTTP_HOST'];
//echo "</br>";
//echo  'REQUEST_URI:' . $_SERVER['REQUEST_URI'];

$admin_pattern = '/^(\/admin)(\/)*((.)*)*/';

if(preg_match($admin_pattern, $_SERVER['REQUEST_URI'])){
    include_once (getcwd() . '/app/backend/index.php');
} else{
    $templateDir = getcwd() . '/app/frontend/views';
    $cacheDir = getcwd() . '/caches';
//Cau hinh Twig de load view cho phan frontend, tao thu muc cache view
    $loader = new Twig_Loader_Filesystem($templateDir);
    $twig = new Twig_Environment($loader, array("cache" => $cacheDir, "auto_reload" => true, "debug" => true));
    include_once('router.php');
}

