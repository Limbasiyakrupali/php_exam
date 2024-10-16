<?php

header("Access-Control-Allow-Methods: 'POST'");
header("Content-Type: applications/json");

    include "../../config/config.php";


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $config = new Config();

    $seat_number = $_POST['seat_number'];
    $amount = $_POST['amount'];

    $res = $config->addbooking($seat_number,$amount);

    if($res){

        $arr['data']  = "Booking inserted successfully...";

    }else{
        $arr['data']  = "Booking insertion failed...";

    }
} else{
    $arr['error'] = "Only POST http request method is allowed...";
}

    echo json_encode($arr);


?>