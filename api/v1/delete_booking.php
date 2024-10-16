<?php

header("Access-Control-Allow-Methods: DELETE");
header("Content-Type: applications/json");

    include "../../config/config.php";


if($_SERVER['REQUEST_METHOD'] == 'DELETE'){

    $config = new Config();

    $input = file_get_contents("php://input");

    parse_str($input, $_DELETE);
   
    $id = $_DELETE['booking_id'];

    $res = $config->deletebooking($booking_id);

    if($res == 1){

        $arr['data']  = "Booking deleted successfully...";

    }else{
        $arr['data']  = "Booking deletion failed...";

    }
} else{
    $arr['error'] = "Only delete http request method is allowed...";
}

    echo json_encode($arr);


?>