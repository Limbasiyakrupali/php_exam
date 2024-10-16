<?php

header("Access-Control-Allow-Methods: PUT,PATCH");
header("Content-Type: applications/json");

    include "../../config/config.php";


if($_SERVER['REQUEST_METHOD'] == 'PUT' || $_SERVER['REQUEST_METHOD'] == 'PATCH'){

    $config = new Config();

    $input = file_get_contents("php://input");

    parse_str($input, $_UPDATE);



    $name = $_UPDATE['name'];
    $number = $_UPDATE['number'];
    $id = $_UPDATE['booking_id'];

    $res = $config->updateUsers($name,$number,$booking_id);

    if($res == 1){

        $arr['data']  = "User Upadated successfully...";

    }else{
        $arr['data']  = "User Upadation failed...";

    }
} else{
    $arr['error'] = "Only Put or Patch http request method is allowed...";
}

    echo json_encode($arr);


?>