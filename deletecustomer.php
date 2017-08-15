<?php
$data = json_decode(file_get_contents("php://input"));
require_once('dbconfig/dbconnect.php');

if(!empty($data)){
    $insert_array = array (
                'is_delete' => '1',			
                
                );
    $db->where('id', $data->id);
    $db->update ('customers', $insert_array);
}	
		
?>