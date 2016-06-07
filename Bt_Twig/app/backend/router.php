<?php

$m=$_GET['m']; //module
$a=$_GET['a']; //action

if($m){
    if($a){
        $act = 'app/backend/sites/' .$m. '/' .$a. '.php' ;
        if(file_exists($act)){
            include($act);
        }else{
            header("Location: http://" .HOST. "/?a=404" );
        }

    }
}else{
    if($a){
        $act = 'app/backend/sites/' .$a. 'php';
        if(file_exists($act)){
            include($act);
        }else{
            header("Location: http://" .HOST. "/?a=404");
        }
    } else{
        include('home.php');
    }
}