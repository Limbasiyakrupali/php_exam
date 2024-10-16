<?php

header("Access-Control-Allow-Methods: DELETE");
header("Content-Type: applications/json");

    include "../../config/config.php";


if($_SERVER['REQUEST_METHOD'] == 'DELETE'){

    $config = new Config();

    $input = file_get_contents("php://input");

    parse_str($input, $_DELETE);
   
    $route_id = $_DELETE['route_id'];

    $res = $config->deleteroute($route_id);

    if($res == 1){

        $arr['data']  = "User deleted successfully...";

    }else{
        $arr['data']  = "User deletion failed...";

    }
} else{
    $arr['error'] = "Only delete http request method is allowed...";
}

    echo json_encode($arr);


?>