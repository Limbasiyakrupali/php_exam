<?php

header("Access-Control-Allow-Methods: 'POST'");
header("Content-Type: applications/json");

    include "../../config/config.php";


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $config = new Config();

    $id = $_POST['booking_id'];

    $res = $config->fetchSingleUsers($booking_id);

    $all_records = [];

    if($res){
        $record = mysqli_fetch_assoc($res);
        array_push($all_records,$record);
        echo json_encode($all_records);
    }else{
        $arr['data'] = "No data found...";
        echo json_encode($arr); 
    }
   

    
} else{
    $arr['error'] = "Only POST http request method is allowed...";
    echo json_encode($arr);
}

    


?>