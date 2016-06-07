<?php

$pattern = '/^(\/admin)(\/)*((.)*)*/';

if(preg_match($pattern, $_SERVER['REQUEST_URI'])){
    include_once (getcwd() . '/app/backend/router.php');
} else{
    include_once(getcwd(). '/app/frontend/index.php');
}