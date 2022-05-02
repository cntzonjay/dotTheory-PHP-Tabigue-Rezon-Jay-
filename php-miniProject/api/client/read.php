<?php
    

    include_once '../config/Database.php';
    include_once '../objects/Client.php';

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
  

    $db = new Database();
    $db_conn = $db->connect();

    $client = new Client($db_conn);

    $data = $client->read();
    $data->setFetchMode(PDO::FETCH_ASSOC);
    $return_data = [];
    if($data->rowCount() > 0) {
        foreach ($data as $row) {
            array_push($return_data, $row);
        }
        echo json_encode($return_data);
    } else {
        echo "No data availble";
    }
?>