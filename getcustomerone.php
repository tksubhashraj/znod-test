<?php
$data = json_decode(file_get_contents("php://input"));
require_once('dbconfig/dbconnect.php');
$db->where ("id", $data->id );
$customers = $db->getOne("customers");
echo json_encode($customers);
?>