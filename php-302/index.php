<?php
    $username = 'root';
    $password = '';
    $host = 'localhost:/tmp/mysql.sock';
    $database = 'php_training';
    
    $pdo_host = 'mysql:host=localhost;dbname=php_training';
    try {
        $pdo = new PDO($pdo_host, $username, $password);
    
        if ($pdo) {
            $query = "SELECT * FROM ph_heroes";
            $data = $pdo->query($query);
            $data->setFetchMode(PDO::FETCH_ASSOC);
            foreach ($data as $row) {
                echo "<strong>".$row['firstname']. "  ".$row['lastname']. "</strong>  -  ".$row['birthplace'].",   ".$row['description'];
                echo "<br/><br/>";
            }
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
?>