<?php
//headers
header('Access-Control-Allow-Origin: *'); 
header('Content-Type: application/json');

//initializing our api
include_once('../core/initialize.php');

//instantiate post

$post = new User($db);



//blog post query
$result = $post->read();

//get the row count
$num = $result->rowCount();

if($num > 0){
    $post_arr = array();
    $post_arr['data'] = array();while($row = $result->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $post_item = array(
            'ID' => $ID,
            'First_name' =>$First_name,
            'Last_name' => $Last_name,
            'Date_made' => $Date_made,
            'Username' => $Username,
            'email_address' => $email_address,
            'Role' => $Role,
            'University' => $University
        );
        array_push($post_arr['data'], $post_item);
    }

    //convert to JSON and output
    echo json_encode($post_arr);

} else {

    echo json_encode(array('message' => 'No users found.'));

}

?>