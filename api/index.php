<?php
declare(strict_types=1);
header('Content-type: application/json');

require __DIR__.'/vendor/autoload.php';
include __DIR__. "/app/core/function.php";
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$uri = ucwords($_SERVER['REQUEST_URI']);
$params = json_decode(file_get_contents("php://input"),true);
$url = split_url($uri);

if(!isset($params['request_type']) || $params['request_type'] == ""){
    echo "500: BAD REQUEST";
    exit();
}else{

    $func = $params['request_type'];
}


if(file_exists('app/controllers/'.strtolower($url[1]).'.php')){
    
    require __DIR__ . '/app/controllers/'.strtolower($url[1]).'.php';
    $class = ucwords($url[1]);
    $init = new $class;

    echo $init->$func($params);
    
}else{
    
    echo "404: PAGE NOT FOUND";
}

// echo '<prev>';
// var_dump($_SERVER);
