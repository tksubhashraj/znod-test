<?php
require_once('dbconfig/dbconnect.php');
$db->orderBy("id","desc");
$db->where('is_delete', 0);
$customers = $db->get('customers');
echo json_encode($customers);
?>