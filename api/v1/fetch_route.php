<?php

header("Access-Control-Allow-Methods: 'POST'");
header("Content-Type: applications/json");

    include "../../config/config.php";


if($_SERVER['REQUEST_METHOD'] == 'GET'){

    $config = new Config();

    $res = $config->fetchAllroute();

    $all_records = [];

    while($record = mysqli_fetch_assoc($res)){
        array_push($all_records,$record);
    }
    echo json_encode($all_records);

    
} else{
    $arr['error'] = "Only GET http request method is allowed...";
}

    echo json_encode($arr);


?>