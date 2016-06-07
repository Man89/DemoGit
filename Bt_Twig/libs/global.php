<?php

function clean_input($input){
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

function getFileExtension($fileName){
    return pathinfo($fileName)['extension'];
}
/**
 * @param $file // $_FILES["img"]
 * @param $path // './upload'
 * @param $allowType // array("jpg", "png")
 * @param $maxSize  // 3MB --> 3000000
 */
function uploadFile($file, $path, $allowType, $maxsize){
    $fileName =$file['name'];
    $ext = getFileExtension($fileName);
    $fileSize = $file['size'];
    $tmpFile =$file['tmp_name'];

    $result = [
        "error" => [],
        "path" => ""
    ];

    if($fileSize > $maxsize){
        $result['error'][] =[
            "msg" => "Exceeded file size limit (" .($maxsize / 1000000)."MB)"
        ];
    }

    if(!in_array($ext,$allowType)){
        $result['error'][]=[
            "msg" => "File type not allowed"
        ];
    }

    if(count($result['error'])==0){
        $fileName = time() .'/' .$fileName;
        $path = $path .'/'. $fileName;
        if(move_uploaded_file($tmpFile,$path)){
            $result["path"]= $path;
        }
    }
    return $result;
}