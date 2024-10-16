<?php

header("Access-Control-Allow-Methods: 'POST'");
header("Content-Type: applications/json");

    include "../../config/config.php";


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $config = new Config();

    $station_name = $_POST['station_name'];
    $station_code = $_POST['station_code'];

    $res = $config->addstations($station_name,$station_code);

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