<?php
    class Database {
        public $pdo;

        public function connect() {
            $username = 'root';
            $password = '';
            $host = 'localhost:/tmp/mysql.sock';
            $database = 'php_training';
            $this->pdo = null;
            
            
            $pdo_host = 'mysql:host=localhost;dbname='.$database;
            try {
                $this->pdo = new PDO($pdo_host, $username, $password);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            return $this->pdo;
        }
    }
?>