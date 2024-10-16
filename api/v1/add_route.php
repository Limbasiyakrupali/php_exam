<?php

header("Access-Control-Allow-Methods: 'POST'");
header("Content-Type: applications/json");

    include "../../config/config.php";


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $config = new Config();

    $route_name = $_POST['route_name'];
    $stop_number = $_POST['stop_number'];

    $res = $config->addroute($route_name,$stop_number);

    if($res){

        $arr['data']  = "Route inserted successfully...";

    }else{
        $arr['data']  = "Route insertion failed...";

    }
} else{
    $arr['error'] = "Only POST http request method is allowed...";
}

    echo json_encode($arr);


?>