<?php
    class Client {
        public $id;
        public $firstname;
        public $lastname;
        public $middlename;
        public $date_visited;
        public $birthday;
        public $street;
        public $city;
        public $province;
        public $email;
        public $store_id;
        public $store_visited;

        private $db_conn;

        public function __construct($db) {
            $this->db_conn = $db;
        }


        public function create() {
            $query = "INSERT INTO clients 
                    SET
                    firstname=:firstname,
                    lastname=:lastname,
                    middlename=:middlename,
                    date_visited=:date_visited,
                    birthday=:birthday,
                    street=:street,
                    city=:city,
                    province=:province,
                    email=:email,
                    store_id=:store_id";

            $pdo_query = $this->db_conn->prepare($query);
            $this->sanitize_input();
            
            $pdo_query->bindValue(":firstname", $this->firstname);
            $pdo_query->bindValue(":lastname", $this->lastname);
            $pdo_query->bindValue(":middlename", $this->middlename);
            $pdo_query->bindValue(":date_visited", $this->date_visited);
            $pdo_query->bindValue(":birthday", $this->birthday);
            $pdo_query->bindValue(":street", $this->street);
            $pdo_query->bindValue(":city", $this->city);
            $pdo_query->bindValue(":province", $this->province);
            $pdo_query->bindValue(":email", $this->email);
            $pdo_query->bindValue(":store_id", $this->store_id);

            return $pdo_query->execute() ? true : false;

        }

        public function update($id) {
            $query = "UPDATE clients 
                    SET
                        firstname=:firstname,
                        lastname=:lastname,
                        middlename=:middlename,
                        date_visited=:date_visited,
                        birthday=:birthday,
                        street=:street,
                        city=:city,
                        province=:province,
                        email=:email,
                        store_id=:store_id
                    WHERE
                        id=:id";

            $pdo_query = $this->db_conn->prepare($query);
            $this->sanitize_input();
            
            $pdo_query->bindValue(":firstname", $this->firstname);
            $pdo_query->bindValue(":lastname", $this->lastname);
            $pdo_query->bindValue(":middlename", $this->middlename);
            $pdo_query->bindValue(":date_visited", $this->date_visited);
            $pdo_query->bindValue(":birthday", $this->birthday);
            $pdo_query->bindValue(":street", $this->street);
            $pdo_query->bindValue(":city", $this->city);
            $pdo_query->bindValue(":province", $this->province);
            $pdo_query->bindValue(":email", $this->email);
            $pdo_query->bindValue(":store_id", $this->store_id);

            $pdo_query->bindValue(":id", $id);

            return $pdo_query->execute() ? true : false;

        }

        public function read() {
            $query = "SELECT c.*, s.name as store_visited
                      FROM clients c
                      LEFT JOIN stores s
                      ON c.store_id = s.id";
            $data = $this->db_conn->query($query);

            return $data;

        }

        public function read_one($id) {
            $query = "SELECT c.*, s.name as store_visited
                      FROM clients c
                      LEFT JOIN stores s
                      ON c.store_id = s.id
                      WHERE c.id=".$id;
            $data = $this->db_conn->query($query);
            return $data;
        }

        public function delete($id) {
            $query = "DELETE FROM clients WHERE id=".$id;
            $data = $this->db_conn->query($query);
            return $data;
        }

        public function sanitize_input(): void {       
            $this->firstname = strip_tags($this->firstname);
            $this->lastname = strip_tags($this->lastname);
            $this->middlename = strip_tags($this->middlename);
            $this->date_visited = strip_tags($this->date_visited);
            $this->birthday = strip_tags($this->birthday);
            $this->street = strip_tags($this->street);
            $this->city = strip_tags($this->city);
            $this->province = strip_tags($this->province);
            $this->email = filter_var($this->email, FILTER_SANITIZE_EMAIL);
            $this->store_id = strip_tags($this->store_id);
        }
        
    }

?>