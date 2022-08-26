<?php

function split_url($uri){
    $uri = explode('/',$uri);
    
    return $uri;
}

 function msg($success,$status,$message,$extra=[]){
    
    return array_merge([
        'success' => $success,
        'status' => $status,
        'message' => $message
    ], $extra);

 }