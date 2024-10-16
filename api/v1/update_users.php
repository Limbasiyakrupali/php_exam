<?php

header("Access-Control-Allow-Methods: PUT,PATCH");
header("Content-Type: applications/json");

    include "../../config/config.php";


if($_SERVER['REQUEST_METHOD'] == 'PUT' || $_SERVER['REQUEST_METHOD'] == 'PATCH'){

    $config = new Config();

    $input = file_get_contents("php://input");

    parse_str($input, $_UPDATE);



    $route_name = $_UPDATE['route_name'];
    $stop_number = $_UPDATE['stop_number'];
    $route_id = $_UPDATE['route_id'];

    $res = $config->updateUsers($route_name,$stop_number,$route_id);

    if($res == 1){

        $arr['data']  = "Route Upadated successfully...";

    }else{
        $arr['data']  = "Route Upadation failed...";

    }
} else{
    $arr['error'] = "Only Put or Patch http request method is allowed...";
}

    echo json_encode($arr);


?>