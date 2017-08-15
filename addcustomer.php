<?php
$data = json_decode(file_get_contents("php://input"));
require_once('dbconfig/dbconnect.php');
if(!empty($data)){
    $insert_array = array (
                'first_name' => $data->first_name,
                'last_name' => $data->last_name,
                'gender'    => $data->gender,
                'email_id' => $data->email_id,
                'phone' => $data->phone,
                'address_one' => $data->address_one,
                'address_two' => $data->address_two,
                'city' => $data->city,
                'state' => $data->state,	
                'postal_code' => $data->postal_code,	
                'is_active' => '1',			
                'created_on' => $db->now(),
                );

    $id = $db->insert ('customers', $insert_array);
}	
		
?>