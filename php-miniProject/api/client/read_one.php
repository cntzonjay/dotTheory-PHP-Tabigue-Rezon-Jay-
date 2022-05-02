<?php
    include_once '../config/database.php';
    include_once '../objects/Client.php';

    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: access");
    header("Access-Control-Allow-Methods: GET");
    header('Content-Type: application/json');


    $db = new Database();
    $db_conn = $db->connect();

    $client = new Client($db_conn);
    
    $id = isset($_GET['id']) ? $_GET['id'] : die();
    
    $data = $client->read_one($id);
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