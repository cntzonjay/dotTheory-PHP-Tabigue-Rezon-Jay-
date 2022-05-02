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

    if ($client->delete($data->id)) {
        echo json_encode(['response' => 'Client deleted successfully!']);
    } else {
        echo json_encode(['response' => 'Error deleting client!']);
    }
?>