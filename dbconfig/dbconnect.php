<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
require_once ('MysqliDb.php');
$db = new MysqliDb ('localhost', 'root', '', 'znod_app');
global $db;
function base_url(){
	$url = $_SERVER['REQUEST_URI']; //returns the current URL
	$parts = explode('/',$url);
	$base_dir = $_SERVER['SERVER_NAME'];
	for ($i = 0; $i < count($parts) - 1; $i++) {
	  $base_dir .= $parts[$i] . "/";
	}
    return "http://".$base_dir;
}
 


?>