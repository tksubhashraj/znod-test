<?php
require_once('dbconfig/dbconnect.php');
$db->orderBy("id","desc");
$states = $db->get('states');
echo json_encode($states);
?>