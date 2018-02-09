<?php
//https://www.github.com/mdhama/blindAlert

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: origin, x-requested-with, content-type');
header('Access-Control-Allow-Methods: GET, POST');
header('Content-Type: application/javascript');
$js = str_replace(
    ['{{host}}', '{{port}}'], 
    [
    htmlspecialchars($_SERVER['SERVER_NAME']), 
    htmlspecialchars( $_SERVER['SERVER_PORT'])
    ], 
    file_get_contents('payload.js')
);
echo $js;
