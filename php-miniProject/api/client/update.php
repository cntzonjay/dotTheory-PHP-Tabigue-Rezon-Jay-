<?php
    include_once '../config/Database.php';
    include_once '../objects/Client.php';

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    $db = new Database();
    $db_conn = $db->connect();

    $client = new Client($db_conn);
    $data = json_decode(file_get_contents("php://input"));

    $client->firstname = $data->firstname;
    $client->lastname = $data->lastname;
    $client->middlename = $data->middlename;
    $client->date_visited = $data->date_visited;
    $client->birthday = $data->birthday;
    $client->street = $data->street;
    $client->city = $data->city;
    $client->province = $data->province;
    $client->email = $data->email;
    $client->store_id = $data->store_id;

    if ($client->update($data->id)) {
        echo json_encode(['response' => 'Client updated successfully!']);
    } else {
        echo json_encode(['response' => 'Error updating client!']);
    }
?>