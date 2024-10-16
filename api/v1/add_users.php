<?php

header("Access-Control-Allow-Methods: 'POST'");
header("Content-Type: applications/json");

    include "../../config/config.php";


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $config = new Config();

    $name = $_POST['name'];
    $number = $_POST['number'];

    $res = $config->addusers($name,$number);

    if($res){

        $arr['data']  = "User inserted successfully...";

    }else{
        $arr['data']  = "User insertion failed...";

    }
} else{
    $arr['error'] = "Only POST http request method is allowed...";
}

    echo json_encode($arr);


?>