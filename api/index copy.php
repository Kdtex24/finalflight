<?php
declare(strict_types=1);
header('Content-type: application/json');

require 'vendor/autoload.php';
require __DIR__. "/app/core/function.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$uri = ucwords($_SERVER['REQUEST_URI']);
$data = json_decode(file_get_contents("php://input"),true);

$url = split_url($uri);

if(file_exists('app/controllers/'.strtolower($url[1]).'.php')){
    require __DIR__ . '/app/controllers/'.strtolower($url[1]).'.php';
    $class = ucwords($url[1]);
    
    $init = new $class;

    if(isset($url[2]) && $url[2] !== ""){
        $func = (string) $url[2];        
        echo ($init->$func($data));
    }else{

         echo $init->call($data);
    }
    
    
}else{
    
    echo "404: PAGE NOT FOUND";
}

// echo '<prev>';
// var_dump($_SERVER);

//split uri 




